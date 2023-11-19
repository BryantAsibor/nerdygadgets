<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Online Shop</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Stylesheet footer icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>

<!-- Header start -->
<header>
    <div class="header">
        <nav>
            <div class="navbar">
                <img src="../../logo.png" class="logo">
                <ul>
                    <li><a href="../Home/index.html">Home</a></li>
                    <li><a href="../Shop/index.html">Shop</a></li>
                    <li><a href="../OverOnsBryce/overonstest.html">Over ons</a>
                    <li><a href="../Contact/contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>

</header>


<main>

<?php
$host = "127.0.0.1";
$user_id = "root";
$password = "password";
$database = "nerdy_gadgets_start";
$connection = mysqli_connect($host, $user_id, NULL, $database, "3306");
$sql = "select name, price, image from nerdy_gadgets_start.product order by price desc";
$sql2 = "select name, price, image from nerdy_gadgets_start.product order by price asc";
$result = mysqli_query($connection,$sql);
$result2 = mysqli_query($connection,$sql2);

if (isset($_GET["Prijs"])){
    While ($row = mysqli_fetch_assoc($result)){
        print("<section class=\"product\"> 
               <img src=\"../img/".$row["image"].".jpg\" alt=\"Product 1\">
               <h2>" . $row["name"]. "</h2>
               <div class=\"pricecontainer\">
                   <h3>".$row["price"].",-</h3>
               <button><i class=\"fa fa-shopping-cart\"></i></button>
               </div>
           </section>");
    }
}
else{ While ($row = mysqli_fetch_assoc($result2)){
    print("<section class=\"product\"> 
               <img src=\"../img/".$row["image"].".jpg\" alt=\"Product 1\">
               <h2>" . $row["name"]. "</h2>
               <div class=\"pricecontainer\">
                   <h3>".$row["price"].",-</h3>
               <button><i class=\"fa fa-shopping-cart\"></i></button>
               </div>
           </section>");
}

}



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