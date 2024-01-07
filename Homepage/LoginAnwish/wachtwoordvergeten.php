<?php

session_start(); // Zorg ervoor dat je sessie start aan het begin van je script


include("../includes/connection.php");
include("../includes/functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli'>
    <link rel="stylesheet" href="./style.csss.css">
</head>

<body>
<div class="afb1">
    <img src="/Homepage/src/logo.png" class="afb1">
</div>

<div class="login">
    <p>Wachtwoord vergeten</p>
</div>

<div class="loginbox">
    <form action="" method="post">
        <!-- Formulier voor het invoeren van e-mail en wachtwoord -->

        <div class="input-field">
            <input type="email" id="email" name="email" placeholder="E-mail" required>
            <label>Voer je email in dan sturen wij een link om het wachtwoord te veranderen:</label>
        </div>


        <button type="submit">Klaar</button>

    </form>
</div>

<div class="homepagelink">
    <a href="../LoginAnwish/Login.php"> Terug naar Login </a>
</div>

</body>
</html>


</body>
</html>
