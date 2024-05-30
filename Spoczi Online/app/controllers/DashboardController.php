<?php
require_once '../app/models/UserModel.php';

class DashboardController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function default() {
        $this->dashboard();
    }

    public function dashboard() {
        // if (session_status() == PHP_SESSION_NONE) {
        //     session_start();
        // }
        // if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
        //     header('Location: /auth');
        //     exit();
        // }
        include '../app/views/dashboard/dashboard.php';
    }

    public function profile() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
            header('Location: /auth');
            exit();
        }
        $user = $this->model->getUserByUsername($_SESSION['username']);
        include '../app/views/user_profile.php';
    }
}
