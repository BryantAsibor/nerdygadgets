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

    <div class="navigation">
        <nav>
            <div class="navbar">
                <img src="logo.png" class="logo">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="../Shop/index.php">Shop</a></li>
                    <li><a href="../OverOnsBryce/overonstest.php">Over ons</a></li>
                    <li><input type="button" value="Contact" onclick="Random();" class="balls" /></li>
                </ul>
            </div>
        </nav>
    </div>
</body>
<script>
    function Random() {
        var rnd = Math.floor(Math.random() * 4);
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






</ul>
</div>
</nav>

</div>

<div class="content">
    <h1>NERDYGADGETS</h1>
    <p>Where Ideas Become Reality</p>
    <div>
        <a href="../LoginAnwish/index.php"> <button type="button"><span></span>LOG IN</button> </a>
        <button type="button"><span></span>REGISTER</button>
    </div>
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


