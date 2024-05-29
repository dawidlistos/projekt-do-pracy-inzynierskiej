<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- Ustawienia -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Nazwa strony -->
    <title>Spoczi Bank :|: Logowanie</title>

    <!-- Czcionka (Google Fonts) -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap">

    <!-- Ikony (Font Awesome) -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-light.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-regular.css">

    <!-- Własny CSS -->
    <link rel="stylesheet" href="/styles/reset.css">
    <link rel="stylesheet" href="/styles/auth.css">

    <!-- Zewnętrzne style CSS -->

    <!-- Ulepszenia JavaScript -->
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.111.0&features=default"></script>
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <!-- Przykład Alertu -->
            <?php
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if (isset($_SESSION['error'])) {
                $alert = <<<html
                    <div class="alert" id="alert">
                        <span id="alert-text"><i class="fa-solid fa-xmark"></i> Hej! {$_SESSION['error']}</span>
                    </div>
                html;
                echo $alert;
                unset($_SESSION['error']);
            }

            ?>

            <h1>Witaj! <span id="wave-emoji">👋</span></h1>
            <h3>Zaloguj się do bankowości elektronicznej</h3>
            <form action="/auth/login" method="POST">
                <div class="form-group">
                    <label for="login">Nazwa użytkownika (lub alias)</label>
                    <input type="text" id="username" name="username" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="password">Hasło do konta</label>
                    <input type="password" id="password" name="password" autocomplete="off" required>
                </div>
                <div class="form-buttons-group">
                    <button type="submit">Zaloguj się</button>
                    <a href="/auth/account_recovery" class="forgot-password">Odzyskaj dostęp</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var waveEmoji = document.getElementById("wave-emoji");
            waveEmoji.style.animationPlayState = "running";
        });
    </script>
</body>

</html>