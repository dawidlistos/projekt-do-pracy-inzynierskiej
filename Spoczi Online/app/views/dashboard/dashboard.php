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
    <div class="container">
        <div class="brand">
            <div class="name-slogan">
                <h2>Spoczi Bank</h2>
                <h4>Twój spokój finansowy</h4>
            </div>
            <button class="mobile-button" id="mobile-button"><i class="fa-solid fa-bars"></i></button>
        </div>
        <div class="side-nav" id="side-nav">
            <div class="nav-items">
                <ul>
                    <li><a href=""><span class="circle"><i class="fa-solid fa-house"></i></span> Pulpit</a></li>
                    <li><a href=""><span class="circle"><i class="fa-solid fa-wallet"></i></span> Rachunki i karty</a></li>
                    <li><a href=""><span class="circle"><i class="fa-solid fa-list"></i></span> Historia transakcji</a></li>
                    <li><a href=""><span class="circle"><i class="fa-solid fa-file-invoice-dollar"></i></span> Raporty finansowe</a></li>
                    <li><a href=""><span class="circle"><i class="fa-solid fa-file"></i></span> Moje dokumenty</a></li>
                </ul>
            </div>
            <div class="my-account">
                <div class="box">
                    <div class="avatar"><i class="fa-solid fa-user"></i></div>
                    <p class="data">Dawid Listos<br><span class="settings"><i class="fa-solid fa-gear"></i> Ustawienia</span></p>
                </div>
            </div>
        </div>
        <div class="main-dashboard">
            <h1>Nagłównek 1 stopnia</h1>
            <h2>Nagłównek 2 stopnia</h2>
            <h3>Nagłównek 3 stopnia</h3>
            <h4>Nagłównek 4 stopnia</h4>
            <h5>Nagłównek 5 stopnia</h5>
            <h6>Nagłównek 6 stopnia</h6>
        </div>
    </div>

    <script>
        const mobileButton = document.getElementById('mobile-button');
        const sideNav = document.getElementById('side-nav');

        mobileButton.addEventListener('click', () => {
            sideNav.classList.toggle('open');
        });
    </script>
</body>

</html>
