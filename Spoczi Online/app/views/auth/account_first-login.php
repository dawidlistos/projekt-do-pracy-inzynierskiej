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
    <div class="alert" id="alert">
        <span id="alert-text">Przykładowy tekst alertu</span>
    </div>
    <div class="login-container">
        <div class="login-box">
            <h1>Zmiana hasła <span id="wave-emoji">🔑</span></h1>
            <h3>Przy pierwszym logowaniu musisz zmienić hasło tymczasowe na nowe</h3>
            <form id="change-password-form" action="#" method="POST">
                <div class="form-group">
                    <label for="current-password">Obecne hasło</label>
                    <input type="password" id="current-password" name="current-password" required>
                </div>
                <div class="form-group">
                    <label for="new-password">Nowe hasło</label>
                    <input type="password" id="new-password" name="new-password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-new-password">Potwierdź nowe hasło</label>
                    <input type="password" id="confirm-new-password" name="confirm-new-password" required>
                </div>
                <button type="button" id="submit-change-password">Zmień hasło</button>
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