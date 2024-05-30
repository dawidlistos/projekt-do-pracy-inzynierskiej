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
    <link rel="stylesheet" href="/styles/error_404.css">

    <!-- Zewnętrzne style CSS -->

    <!-- Ulepszenia JavaScript -->
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.111.0&features=default"></script>
</head>

<body>
    <div class="error-container">
        <div class="error-box">
            <h1>Błąd 404 <span id="wave-emoji">😢</span></h1>
            <h3>Nie znaleziono strony</h3>
            <p>Przepraszamy, ale strona, której szukasz, nie istnieje. Sprawdź adres URL i spróbuj ponownie.</p>
            <button onclick="window.location.href='/auth'">Zabierz mnie w bezpieczne miejsce</button>
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