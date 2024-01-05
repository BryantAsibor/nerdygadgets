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
        print("<div class=\"content\">
        <h1>TIC-TAC-TOE</h1>
        <p>Speel een potje TIC-TAC-TOE</p>");

        print("<form method=\"post\" action=\"\">
        <input type=\"hidden\" name=\"game\" value=\"tic_tac_toe\">
        <table>");

        for ($row = 0; $row < 3; $row++) {
            print("<tr>");
            for ($col = 0; $col < 3; $col++) {
                $cellIndex = $row * 3 + $col + 1;
                print("<td><input type=\"text\" name=\"cell$cellIndex\" size=\"1\" maxlength=\"1\"></td>");
            }
            print("</tr>");
        }
        print("</table>
        <p><input type=\"submit\" name=\"submit\" value=\"Speel\"></p>
    </form>");
        function checkWinner($post)
        {

            $winningCombinations = array(
                array(1, 2, 3), array(4, 5, 6), array(7, 8, 9),
                array(1, 4, 7), array(2, 5, 8), array(3, 6, 9),
                array(1, 5, 9), array(3, 5, 7)
            );
            foreach ($winningCombinations as $combination) {
                $cell1 = $post['cell' . $combination[0]];
                $cell2 = $post['cell' . $combination[1]];
                $cell3 = $post['cell' . $combination[2]];

                if ($cell1 && $cell1 == $cell2 && $cell1 == $cell3) {
                    return $cell1; //
                }
            }

            return false;
        }
        if (isset($_POST['game']) && $_POST['game'] == 'tic_tac_toe' && isset($_POST['submit'])) {

            $winner = checkWinner($_POST);

            if ($winner) {
                print("<p>De winnaar is: $winner</p>");
            } elseif(!$winner){
                print("<p> Er is geen winnaar</p>");
            }
        }

        print("</div>");
    ?>
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
