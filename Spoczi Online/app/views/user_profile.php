<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Profil użytkownika</title>
</head>

<body>
    <h1>Profil użytkownika</h1>

    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['error'])) {
        echo '<p style="color:red;">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
    }

    if (isset($_SESSION['success'])) {
        echo '<p style="color:green;">' . $_SESSION['success'] . '</p>';
        unset($_SESSION['success']);
    }
    ?>

    <form action="/user" method="POST">
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" disabled>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required>
        <label for="password">Nowe hasło (opcjonalnie):</label>
        <input type="password" id="password" name="password">
        <button type="submit" name="update">Aktualizuj profil</button>
    </form>
    <form action="/auth/logout" method="POST">
        <button type="submit" name="logout">Wyloguj się</button>
    </form>
</body>

</html>