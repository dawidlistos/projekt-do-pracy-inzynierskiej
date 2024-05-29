<?php
require_once '../app/models/UserModel.php';

class AuthController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function default() {
        $this->showLoginForm();
    }

    public function account_recovery() {
        $this->showAccountRecoveryForm();
    }

    public function account_first_login() {
        $this->showFirstTimePasswordChangeForm();
    }

    public function recovery() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $pesel = $_POST['pesel'];
            $mother_maiden_name = $_POST['mother-maiden-name'];
            $phone_number = $_POST['phone-number'];

            // Tu możesz dodać logikę do weryfikacji danych, np. sprawdzenie w bazie danych
            $verification_success = true; // Zmienna dla przykładu, ustaw prawdziwą logikę weryfikacji

            if ($verification_success) {
                // Na przykład, wysyłanie kodu autoryzacyjnego na numer telefonu użytkownika
                // ...

                // Zwróć odpowiedź sukcesu
                echo json_encode(["status" => "success"]);
            } else {
                // Zwróć odpowiedź błędu
                echo json_encode(["status" => "error", "message" => "Verification failed"]);
            }
        } else {
            echo json_encode(["status" => "error", "message" => "Invalid request"]);
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = htmlspecialchars(trim($_POST['username']));
            $password = trim($_POST['password']);

            if ($this->model->validateUser($username, $password)) {
                session_start();
                session_regenerate_id(true); // Regeneracja ID sesji
                $_SESSION['username'] = $username;
                $_SESSION['loggedin'] = true;
                header('Location: /dashboard');
            } else {
                session_start();
                $_SESSION['error'] = 'Podałeś nieprawidłowe dane do logowania.';
                header('Location: /auth');
            }
        }
    }

    public function logout() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_unset();
        session_destroy();
        header('Location: /auth');
        exit();
    }

    private function showLoginForm() {
        include '../app/views/auth/account_authorization.php';
    }

    private function showAccountRecoveryForm() {
        include '../app/views/auth/account_recovery.php';
    }

    private function showFirstTimePasswordChangeForm() {
        include '../app/views/auth/account_first-login.php';
    }
}
