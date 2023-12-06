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
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Voeg andere metatags en stylesheets toe indien nodig -->
    <meta charset="UTF-8">
    <title>Online Shop</title>
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
            </div>
        </nav>
    </div>
</header>
<main>
<!-- Voeg de productinformatie toe aan de pagina -->
    <img src="../img/<?php echo $productImage; ?>.jpg" alt="<?php echo $productName; ?>">
    <h1><?php echo $productName; ?><br><br><br><br><br> Prijs: <?php echo $productPrice; ?>,-</h1>
    <h5><?php echo $productdescription; ?></h5>


<button><i class="fa fa-shopping-cart"></i> Voeg toe aan winkelwagen</button>
</main>
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
