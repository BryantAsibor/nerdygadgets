<?php
session_start();

include("../includes/connection.php");
include("../includes/functions.php");

$user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css"> <!-- Main CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Stylesheet footer icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


    <title>Voorpagina</title>

</head>
<body>

<<<<<<< HEAD

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
<script>
    function Random() {
        var rnd = Math.floor(Math.random() * 3);
        if (rnd == 1) {
            window.location.href = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';
        } else if ( rnd == 2) {
            window.location.href = 'http://localhost:63342/index.php/Homepage/Contact/contact.php?_ijt=9c86vbo6jui3ffbprdbbvsb0p2&_ij_reload=RELOAD_ON_SAVE';
        } else if ( rnd == 3) {
            window.location.href = 'https://cat-bounce.com/'

        } else {
            window.location.href = 'https://pointerpointer.com/';
        }
    }
</script>
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





</ul>
</div>
</nav>

</div>

<div class="content">
    <h1>NERDYGADGETS</h1>
    <p>Where Ideas Become Reality</p>
    <div>
        <a href="../LoginAnwish/Login.php"> <button type="button"><span></span>LOG IN</button> </a>
        <a href="../LoginAnwish/regist.php"> <button type="button"><span></span>REGISTER</button> </a>    </div>
</div>

</header>

<main>

    <div class="allproducts">

    </div>
    <section class="product">
        <img src="../img/iphone14black.png" alt="Product 1">
        <h2>Apple Iphone 14 Pro 128GB Black</h2>
        <div class="pricecontainer">
            <h3>€1109,-</h3>
            <button><i class="fa fa-shopping-cart"></i></button>
        </div>
    </section>

    <section class="product">
        <img src="../img/iphone14red.png" alt="Product 2">
        <h2><a href="http://localhost:63342/Shop.html/Homepage/Product%20template/Iphone14Red/index.html?_ijt=p3a6nrnh1cln37lk6o27tfliqc&_ij_reload=RELOAD_ON_SAVE">Apple Iphone 14 Pro 128GB Red</a></h2>
        <div class="pricecontainer">
            <h3>€1109,-</h3>
            <button><i class="fa fa-shopping-cart"></i></button>
        </div>
    </section>

    <section class="product">
        <img src="../img/iphone14blue.png" alt="Product 3">
        <h2>Apple Iphone 14 Pro 128GB Blue</h2>
        <div class="pricecontainer">
            <h3>€1109,-</h3>
            <button><i class="fa fa-shopping-cart"></i></button>
        </div>
    </section>
    </div>
    </div>
</main>

<?php
include_once '../src/footer.php'
?>

</body>
</html>


