<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css";> <!-- Main CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> <!-- Stylesheet footer icons -->

    <title>Voorpagina</title>
</head>
<body>

<header>
    <div class="header">
        <nav>
            <div class="navbar">
                <img src="../img/logo.png" class="logo">
                <ul>
                    <li><a href="../Home/index.php">Home</a></li>
                    <li><a href="../Shop/index.php">Shop</a></li>
                    <li> <a href="../OverOnsBryce/overonstest.php">Over ons</a>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>

</header>

<div class="container">

    <?php
    $d=2;

    if ($d==2){
      print("<div class=\"content\">
        <h1>CON<a href=\"TicTacToe.php\">TAC</a>T ONS</h1>
        <p>Vragen stellen mag altijd.</p>
        <div>
            <button type=\"button\"><span></span>E-MAIL</button>
            <button type=\"button\"><span></span>PHONE</button>
        </div>
    </div>");}
    elseif($d==1){
        print("<div class=\"content\">
        <h1>CONTACT ONS</h1>
        <p>Vragen stellen mag altijd..</p>
        <div>
            <button type=\"button\"><span></span>E-MAIL</button>
            <button type=\"button\"><span></span>PHONE</button>
        </div>
    </div>");
    }
    ?>
    <script>
        var one
        function click1(){
            one = one + 1;
        }
        if (one == 3){
            document.write("TicTacToe.php")
        }
    </script>
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
