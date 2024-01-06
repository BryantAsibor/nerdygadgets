<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css";> <!-- Main CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> <!-- Stylesheet footer icons -->

    <title>Voorpagina</title>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialiseer de klik teller
            let clickCount = 0;

            // Initialiseer de timer variabele
            let resetTimer;

            // Voeg een click event listener toe aan de body van de pagina
            document.body.addEventListener('click', function (event) {
                clickCount++;
                checkClickCount(clickCount, 'TicTacToe.php');
            });

            function checkClickCount(currentClickCount, targetPage) {
                if (currentClickCount === 4) {
                    // Als de klik teller 4 is, ga naar de opgegeven link
                    window.location.href = targetPage;

                    // Reset de klik teller naar 0
                    clickCount = 0;

                    // Reset de timer
                    clearTimeout(resetTimer);
                    resetTimer = null;
                } else {
                    // Start de timer om de klik teller te resetten na 1 seconde
                    clearTimeout(resetTimer);
                    resetTimer = setTimeout(function () {
                        clickCount = 0;
                    }, 1000);
                }
            }
        });
    </script>
</head>
<body>

<header>
    <div class="header">
        <nav>
            <div class="navbar">
                <img src="../img/logo.png" class="logo">
                <ul>
                    <li><a href="../Home/index.php">Home</a></li>
                    <li><a href="../Shop/index.php">Shop</a></li>
                    <li> <a href="../OverOnsBryce/overonstest.php">Over ons</a>
                    <li><a href="../Contact/contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>

</header>

<div class="container">
    <div class="content">
        <h1>CONTACT ONS</h1>
        <p>Vragen stellen mag altijd.</p>
        <div>
            <button type="button"><span></span>E-MAIL</button>
            <button type="button"><span></span>PHONE</button>
        </div>
    </div>
</div>
<footer>
    <div class="footer-content">
        <h3>NerdyGadgets</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo iste corrupti doloribus odio sed!</p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2023 . designed by NerdyGadgets <span>nethunt</span></p>
    </div>

</footer>

</body>
</html>
