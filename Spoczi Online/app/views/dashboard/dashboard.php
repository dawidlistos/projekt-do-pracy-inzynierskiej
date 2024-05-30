<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- Ustawienia -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Nazwa strony -->
    <title>Spoczi Bank :|: Bankowość</title>

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
    <link rel="stylesheet" href="/styles/dashboard.css">

    <!-- Zewnętrzne style CSS -->

    <!-- Ulepszenia JavaScript -->
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.111.0&features=default"></script>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-brand">Spoczi Online</div>
        <div class="navbar-toggle" id="navbar-toggle">
            <span class="navbar-toggle-icon"></span>
            <span class="navbar-toggle-icon"></span>
            <span class="navbar-toggle-icon"></span>
        </div>
        <ul class="navbar-menu" id="navbar-menu">
            <li><a href="#">Strona główna</a></li>
            <li><a href="#">Transakcje</a></li>
            <li><a href="#">Ustawienia</a></li>
            <li><a href="#">Wyloguj się</a></li>
        </ul>
    </nav>

    <!-- Elementy dashboard -->
    <div class="dashboard">
        <div class="dashboard-item col-4 row-3">Panel 1</div>
        <div class="dashboard-item col-4 row-3">Panel 2</div>
        <div class="dashboard-item col-4 row-9">Panel 3</div>
        <div class="dashboard-item col-8">Panel 4</div>
        <div class="dashboard-item col-8">Panel 5</div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbarToggle = document.getElementById("navbar-toggle");
            const navbarMenu = document.getElementById("navbar-menu");

            navbarToggle.addEventListener("click", function() {
                navbarMenu.classList.toggle("show");
            });
        });
    </script>
</body>

</html>