<?php
require_once '../app/models/UserModel.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function default() {
        $this->handleRequest();
    }

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['update'])) {
                $this->updateProfile();
            } else {
                echo "Taka strona nie istnieje";
            }
        } else {
            echo "Taka strona nie istnieje";
        }
    }

    private function updateProfile() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $user = $this->model->getUserByUsername($_SESSION['username']);
        $userId = $user['id'];
        $email = $_POST['email'];
        $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_BCRYPT) : null;

        // Sprawdzenie czy email pasuje do wzorca
        $pattern = "/^[^@]+@[^@]{2,}\.[^@]{2,}$/";
        if (!preg_match($pattern, $email)) {
            $_SESSION['error'] = 'Invalid email format. Please enter a valid email address.';
            header('Location: /dashboard/profile');
            exit();
        }

        if ($this->model->updateUser($userId, $email, $password)) {
            $_SESSION['success'] = 'Profile updated successfully.';
        } else {
            $_SESSION['error'] = 'Update failed. Please try again.';
        }
        header('Location: /dashboard/profile');
        exit();
    }
}
