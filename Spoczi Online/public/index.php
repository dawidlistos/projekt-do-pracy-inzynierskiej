<?php
require_once '../config/database.php';
require_once '../app/core/Router.php';

session_start();  // Dodanie sesji na początku

$router = new Router();
$router->route($_SERVER['REQUEST_URI']);
