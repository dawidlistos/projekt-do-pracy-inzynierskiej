<?php
class UserModel {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function validateUser($username, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        return $user && password_verify($password, $user['password']);
    }

    public function getUserByUsername($username) {
        $stmt = $this->conn->prepare("SELECT id, username, email, created_at, updated_at, last_login, is_active FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        return $user;
    }

    public function getUserById($userId) {
        $stmt = $this->conn->prepare("SELECT id, username, email, created_at, updated_at, last_login, is_active FROM users WHERE id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function updateUser($userId, $email, $password) {
        $this->conn->begin_transaction();
        try {
            if ($password) {
                $stmt = $this->conn->prepare("UPDATE users SET email = ?, password = ? WHERE id = ?");
                $stmt->bind_param("ssi", $email, $password, $userId);
            } else {
                $stmt = $this->conn->prepare("UPDATE users SET email = ? WHERE id = ?");
                $stmt->bind_param("si", $email, $userId);
            }
            if (!$stmt->execute()) {
                throw new Exception("Update failed: " . $stmt->error);
            }
            $this->conn->commit();
            return true;
        } catch (Exception $e) {
            $this->conn->rollback();
            return false;
        }
    }


    public function updateUserLoginTime($userId) {
        $this->conn->begin_transaction();
        try {
            $stmt = $this->conn->prepare("UPDATE users SET last_login = NOW() WHERE id = ?");
            $stmt->bind_param("i", $userId);

            if (!$stmt->execute()) {
                throw new Exception("Update failed: " . $stmt->error);
            }
            $this->conn->commit();
            return true;
        } catch (Exception $e) {
            $this->conn->rollback();
            return false;
        }
    }
}
