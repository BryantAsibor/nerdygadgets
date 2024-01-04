<?php
$host = "127.0.0.1";
$user_id = "root";
$password = "password";
$database = "nerdy_gadgets_start";
$connection = mysqli_connect($host, $user_id, NULL, $database, "3306");

// default quantity sort order op false zetten.
$quantitySort = false;

// Controleer of er een gesorteerd is, anders default desc optie
if (isset($_GET['sort'])) {
    $sortOrder = $_GET['sort'];
    if ($sortOrder == 'quantity_desc') {
        $quantitySort = true;
        $quantitySortOrder = 'desc';
    } elseif ($sortOrder == 'quantity_asc') {
        $quantitySort = true;
        $quantitySortOrder = 'asc';
    }
} else {
    $sortOrder = 'desc';
}

// Default sorteeroptie is 'desc' (hoog naar laag)
//$sortOrder = isset($_GET['sort']) ? $_GET['sort'] : 'desc';

if ($quantitySort) {
    $sql = "SELECT product.id, product.name, product.price, product.image, COUNT(order_item.product_id) as popularity
           FROM nerdy_gadgets_start.product
            LEFT JOIN nerdy_gadgets_start.order_item ON product.id = order_item.product_id
            GROUP BY product.id, product.name, product.price, product.image
            ORDER BY popularity $quantitySortOrder";
} else {
    $sql = "SELECT id, name, price, image FROM nerdy_gadgets_start.product ORDER BY price $sortOrder";
}

$result = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<head lang="en">

<head>
    <meta charset="UTF-8">
    <title>Online Shop</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Stylesheet footer icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <!--    bootstrap-->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
    />
</head>

<!--    stylesheet for addtocart-->
<!--<head-->
<!--<link rel="stylesheet" href="addtocart.css">-->
<!--<script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>-->
<!--</head>-->

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
    <head
    <link rel="stylesheet" href="addtocart.css">
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    </head>
</header>

<!--<div class="container"> --><!--style="margin-right: 53%"-->
<!-- Sorteer knoppen -->
<div class="row">
    <div class="sort-buttons">
        <a href="?sort=desc" class="sort-button <?php if ($sortOrder == 'desc') {
            echo 'active';
        } else {
            echo '';
        } ?>">
            Prijs hoog naar laag <i class="fas fa-sort-amount-down"></i>
        </a>
        <a href="?sort=asc" class="sort-button <?php if ($sortOrder == 'asc') {
            echo 'active';
        } else {
            echo '';
        } ?>">
            Prijs laag naar hoog <i class="fas fa-sort-amount-up"></i>
        </a>
        <a href="?sort=quantity_desc" class="sort-button <?php if ($sortOrder == 'quantity_desc') {
            echo 'active';
        } else {
            echo '';
        } ?>">
            Meest populair <i class="fas fa-sort-amount-down"></i>
        </a>
        <a href="?sort=quantity_asc" class="sort-button <?php if ($sortOrder == 'quantity_asc') {
            echo 'active';
        } else {
            echo '';
        } ?>">
            Minst populair <i class="fas fa-sort-amount-up"></i>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-7">
        <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-2 product">
                    <div class="row">
                        <img src="../img/<?php print($row["image"]) ?>.jpg" alt="Product 1"
                             style="width: auto; height: 120px; margin: auto">
                    </div>
                    <div class="row" style="margin-top: 50px">
                        <p><?php print($row["name"]) ?></p>
                    </div>
                    <div class="row pricecontainer">
                        <h4><?php print($row["price"]) ?>,-</h4>
                        <!--Verstuurd gekozen productID voor winkelwagen naar $_POST['submit']-->
                        <form action="" method="post">
                            <button type="submit" name="submit" value="<?php echo $row['id'] ?>">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <?php
            }
            mysqli_close($connection);
            ?>
        </div>
    </div>

    <!--    winkelwagen gedeelte-->
    <div class="col-5">
        <!--hierin zet je je winkelwagen code-->
        <!DOCTYPE html>
        <html>
        <head>
            <link rel="stylesheet" href="addtocart.css">
            <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
        </head>
        <body>
        <div class="header">
            <p class="logo">NERDYGADGETS</p>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i>
                <p id="count">0</p></div>
        </div>
        <div class="container">
            <div id="root"></div>
            <div class="sidebar">
                <div class="head"><p>Winkelwagen</p></div>
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

    </div>
</div>

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