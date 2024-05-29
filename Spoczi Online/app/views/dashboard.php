<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Panel użytkownika</title>
</head>

<body>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
        header('Location: /login');
        exit();
    }
    ?>
    <h1>Witamy w panelu użytkownika</h1>
    <p>Zalogowany jako: <?php echo $_SESSION['username']; ?></p>
    <a href="/dashboard/profile">Mój profil</a>
    <form action="/auth/logout" method="POST">
        <button type="submit" name="logout">Wyloguj się</button>
    </form>
</body>

</html>