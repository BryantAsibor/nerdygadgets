<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Online Shop</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Stylesheet footer icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <style>
        /* Voeg stijl toe aan de sorteer knoppen */
        .sort-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }

        .sort-button {
            background: #3498db; /* Aangepaste kleur - blauw */
            color: white;
            border: none;
            padding: 4px 12px; /* Behoud de breedte, verklein alleen de hoogte (5 keer kleiner) */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px; /* Behoud de tekstgrootte */
            margin: 180px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        .sort-button:hover {
            background-color: #2980b9; /* Donkere kleur bij hover */
        }

        .sort-button.active {
            background-color: #e74c3c; /* Aangepaste kleur - rood voor de actieve knop */
        }
    </style>
</head>

<body>

<!-- Header start -->
<header>
    <div class="header">
        <nav>
            <div class="navbar">
                <img src="../../logo.png" class="logo">
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
    <!-- Sorteer knoppen -->
    <div class="sort-buttons">
        <a href="?sort=desc" class="sort-button <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'desc') ? 'active' : ''; ?>">
            Prijs hoog naar laag <i class="fas fa-sort-amount-down"></i>
        </a>
        <a href="?sort=asc" class="sort-button <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'asc') ? 'active' : ''; ?>">
            Prijs laag naar hoog <i class="fas fa-sort-amount-up"></i>
        </a>
        <a href="?sort=quantity_desc" class="sort-button <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'quantity_desc') ? 'active' : ''; ?>">
            Meest populair  <i class="fas fa-sort-amount-down"></i>
        </a>
        <a href="?sort=quantity_asc" class="sort-button <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'quantity_asc') ? 'active' : ''; ?>">
            Minst populair <i class="fas fa-sort-amount-up"></i>
        </a>
    </div>

    <?php
    $host = "127.0.0.1";
    $user_id = "root";
    $password = "password";
    $database = "nerdy_gadgets_start";
    $connection = mysqli_connect($host, $user_id, NULL, $database, "3306");

    // Default sorteeroptie is 'desc' (hoog naar laag)
    $sortOrder = isset($_GET['sort']) ? $_GET['sort'] : 'desc';

    // Aangepaste query voor de "Meest populair" sorteeroptie
    if (isset($_GET['sort']) && ($_GET['sort'] == 'quantity_desc' || $_GET['sort'] == 'quantity_asc')) {
        $quantitySortOrder = ($_GET['sort'] == 'quantity_desc') ? 'desc' : 'asc';
        $sql = "SELECT product.id, product.name, product.price, product.image, COUNT(order_item.product_id) as popularity
            FROM nerdy_gadgets_start.product
            LEFT JOIN nerdy_gadgets_start.order_item ON product.id = order_item.product_id
            GROUP BY product.id, product.name, product.price, product.image
            ORDER BY popularity $quantitySortOrder";
    } else {
        // Standaard query voor andere sorteeropties
        $sql = "SELECT id, name, price, image FROM nerdy_gadgets_start.product ORDER BY price $sortOrder";
    }

    $result = mysqli_query($connection, $sql);
    echo '<div class="product-group">';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<section class="product"> 
           <img src="../img/' . $row["image"] . '.jpg" alt="Product 1">
           <h2>' . $row["name"] . '</h2>
           <div class="pricecontainer">
               <h3>' . $row["price"] . ',-</h3>
               <a href="product.php?id='.$row["id"].'"><button><i class="fa fa-shopping-cart"></i></button></a>
           </div>
       </section>';

        // Open een nieuwe productgroep na elke 4 producten
        if (mysqli_num_rows($result) % 4 == 0) {
            echo '</div><div class="product-group">';
        }
    }

    echo '</div>';

    mysqli_close($connection);
    ?>

    <!-- Add more product listings as needed -->
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