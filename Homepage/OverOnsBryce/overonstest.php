<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">

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
                    <li><a href="../Shop/index.php">Shop</a></li>
                    <li><a href="../OverOnsBryce/overonstest.php">Over ons</a>
                    <li><a href="../Contact/contact.php">Contact</a></li>
                </ul>
                <a href="../LoginAnwish/Login.php"> <img src="b64f8fcf0e0aed9537c800eb5e9ca1ed.png" class="pfp"></a>
            </div>
        </nav>
    </div>

</header>

<div class="content">

    <div>
    <h2>Over Ons</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non velit sit amet ex ultrices commodo id vel elit. Nam eleifend gravida bibendum. Donec a rutrum lorem. Duis tempor tellus felis, eu elementum ante ornare non. Donec ultricies dui a mauris rutrum pellentesque. Vestibulum pellentesque elit massa, sit amet facilisis libero ornare placerat. Quisque pellentesque eros diam, vitae commodo felis imperdiet in. Quisque pulvinar eleifend elementum.</p>
    </div>

    </div>

<div>
<img src="team.jpg" class="teamfoto">
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