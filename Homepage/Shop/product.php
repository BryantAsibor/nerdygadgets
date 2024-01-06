<?php
$host = "127.0.0.1";
$user_id = "root";
$password = "password";
$database = "nerdy_gadgets_start";
$connection = mysqli_connect($host, $user_id, NULL, $database, "3306");

// Ontvang het product-ID van de URL-parameter
$productId = $_GET['id'];

$sql = "SELECT name,price,image,description FROM nerdy_gadgets_start.product WHERE id = $productId";
$result = mysqli_query($connection, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $product = mysqli_fetch_assoc($result);
    $productName = $product['name'];
    $productPrice = $product['price'];
    $productImage = $product['image'];
    $productdescription = $product['description'];

    // Voeg andere productinformatie toe indien nodig
} else {
    // Product niet gevonden
    echo 'Product niet gevonden.';
}

// Sluit de databaseverbinding
mysqli_close($connection);
?>
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
    <link rel="stylesheet" type="text/css" href="product.css">

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
                <div class="seachbar">
                <input type="sumbit" placeholder="Search..">
                </div>
                <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
            </div>
        </nav>
    </div>
</header>

<main>
    <div class="product">
        <div class="img-container">
    <img src="../img/<?php echo $productImage; ?>.jpg" alt="<?php echo $productName; ?>">
            <h1><?php echo $productName; ?></h1>
    </div>
    </div>
<div class="product-details">
     Prijs: <?php echo $productPrice; ?>,-</h1>
    <h5><?php echo $productdescription; ?></h5>
</div>


<div class="pricecontainer">
    <button onclick="addToCart(<?php echo $productId; ?>, '<?php echo $productName; ?>', '<?php echo $productPrice; ?>')">
        <i class="fa fa-shopping-cart"></i> Voeg toe aan winkelwagen
    </button>
</div>
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
        <p>copyright &copy;2023 . designed by NerdyGadgets <span>nethunt</span></p>
    </div>
</footer>
</html>
