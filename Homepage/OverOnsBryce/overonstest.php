<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Stylesheet footer icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


    <title>Over Ons</title>



</head>
<body>

<header>
    <div class="header">
        <nav>
            <div class="navbar">
                <img src="logo.png" class="logo" id="clickCounter">
                <ul>
                    <li><a href="../Home/index.php">Home</a></li>
                    <li><a href="../Shop/index.php">Winkel</a></li>
                    <li><a href="../OverOnsBryce/overonstest.php">Over ons</a>
                    <li><a href="../Contact/contact.php">Contact</a></li>
                </ul>
                <a href="../LoginAnwish/Login.php"> <img src="b64f8fcf0e0aed9537c800eb5e9ca1ed.png" class="pfp"></a>
                <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
            </div>
        </nav>
    </div>

</header>

<div class="content">

    <div>
    <h2>Over Ons</h2>
        <p> Wij zijn Nerdy Gadgets.</p>
    </div>

    </div>

<div>
<img src="team.jpg" class="teamfoto">
</div>

<footer>
    <div class="footer-content">
        <h3>NerdyGadgets</h3>
        <p>NerdyGadgets</p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2023 . Gemaakt door NerdyGadgets <span>nethunt</span></p>
    </div>

</footer>


</body>
</html>

<script>
    // JavaScript om de klik te verwerken
    var clickCount = 0;

    document.getElementById('clickCounter').addEventListener('click', function() {
        // Verhoog het aantal klikken
        clickCount++;

        // Controleer of het vereiste aantal klikken is bereikt (in dit geval 4)
        if (clickCount >= 4) {
            // Stuur door naar test.php als het vereiste aantal klikken is bereikt
            window.location.href = '../easteregg anwish/easteregganwish.php';
        }
    });
</script>