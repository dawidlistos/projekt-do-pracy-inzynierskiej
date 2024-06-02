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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <!-- TODO: Dodać obługę alertów -->
            <div class="alert recovery" id="alert">
                <span id="alert-text">Przykładowy tekst alertu</span>
            </div>

            <h1>Odzyskanie dostępu <span id="wave-emoji">🔒</span></h1>
            <h3>Wypełnij ten formularz, aby odzyskać dostęp do bankowości elektronicznej</h3>
            <form id="recovery-form" action="#" method="POST">
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" id="login" name="login" required>
                </div>
                <div class="form-group">
                    <label for="pesel">PESEL</label>
                    <input type="text" id="pesel" name="pesel" required>
                </div>
                <div class="form-group">
                    <label for="mother-maiden-name">Nazwisko panieńskie matki</label>
                    <input type="text" id="mother-maiden-name" name="mother-maiden-name" required>
                </div>
                <div class="form-group">
                    <label for="phone-number">Numer telefonu</label>
                    <input type="text" id="phone-number" name="phone-number" required>
                </div>
                <div class="form-buttons-group">
                    <button type="button" id="submit-recovery">Przejdź dalej</button>
                    <a href="/auth" class="forgot-password">Zaloguj się</a>
                </div>
            </form>
            <form id="auth-code-form" action="#" method="POST" style="display: none;">
                <div class="form-group">
                    <label for="auth-code">Kod autoryzacyjny</label>
                    <input type="text" id="auth-code" name="auth-code" required>
                </div>
                <button type="submit" id="submit-code">Zweryfikuj</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var waveEmoji = document.getElementById("wave-emoji");
            waveEmoji.style.animationPlayState = "running";

            var recoveryForm = document.getElementById("recovery-form");
            var authCodeForm = document.getElementById("auth-code-form");
            var submitRecoveryButton = document.getElementById("submit-recovery");
            var submitCodeButton = document.getElementById("submit-code");

            submitRecoveryButton.addEventListener("click", function() {
                var formData = new FormData(recoveryForm);

                axios.post('/auth/recovery', formData)
                    .then(function(response) {
                        console.log('Response received:', response);
                        if (response.data.status === "success") {
                            recoveryForm.style.display = "none";
                            authCodeForm.style.display = "block";
                        } else {
                            console.error('Verification failed:', response.data.message);
                            alert("Weryfikacja nieudana. Spróbuj ponownie.");
                        }
                    })
                    .catch(function(error) {
                        console.error('Error occurred:', error);
                        alert("Wystąpił błąd. Spróbuj ponownie.");
                    });
            });
        });
    </script>
</body>

</html>