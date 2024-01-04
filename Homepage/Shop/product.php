
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <link rel="stylesheet" href="addtocart.css">-->
<!--    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>-->
<!--</head>-->
<!--<body>-->
<!--<div class="header">-->
<!--    <p class="logo">NERDYGADGETS</p>-->
<!--    <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>-->
<!--</div>-->
<!--<div class="container">-->
<!--    <div id="root"></div>-->
<!--    <div class="sidebar">-->
<!--        <div class="head"><p>My Cart</p></div>-->
<!--        <div id="cartItem">Winkelmand is leeg</div>-->
<!--        --><?php
//        if (isset($_COOKIE['cart'])) {
//
//        }
//        ?>
<!--        <div class="foot">-->
<!--            <h3>Total</h3>-->
<!--            <h2 id="total">&euro; 0.00</h2>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<script src="addtocart.js"></script>-->
<!--</body>-->
<!--</html>-->
<!--?>-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Voeg andere metatags en stylesheets toe indien nodig -->
    <meta charset="UTF-8">
    <title>Product Details</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Stylesheet footer icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body>
<header>
    <div class="header">
        <nav>
            <div class="navbar">
                <img src="../src/logo.png" class="logo">
                <ul>
                    <li><a href="../Home/index.php">Home</a></li>
                    <li><a href="../Shop/index.php">Shop</a></li>
                    <li><a href="../OverOnsBryce/overonstest.php">Over ons</a></li>
                    <li><a href="../Contact/contact.php">Contact</a></li>
                </ul>
                <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
            </div>
        </nav>
    </div>
</header>

<main>
    <!-- Voeg de productinformatie toe aan de pagina -->
    <img src="../img/<?php echo $productImage; ?>.jpg" alt="<?php echo $productName; ?>">
    <h1><?php echo $productName; ?><br><br><br><br><br> Prijs: <?php echo $productPrice; ?>,-</h1>
    <h5><?php echo $productdescription; ?></h5>

    <button onclick="addToCart(<?php echo $productId; ?>, '<?php echo $productName; ?>', <?php echo $productPrice; ?>)">
        <i class="fa fa-shopping-cart"></i> Voeg toe aan winkelwagen
    </button>
</main>

<div class="container">
    <div id="root"></div>
    <div class="sidebar">
        <div class="head"><p>My Cart</p></div>
        <div id="cartItem">Winkelmand is leeg</div>
        <?php
        if (isset($_COOKIE['cart'])) {

        }
        ?>
        <div class="foot">
            <h3>Total</h3>
            <h2 id="total">&euro; 0.00</h2>
        </div>
    </div>
</div>

<script src="addtocart.js"></script>

</body>

</html>
