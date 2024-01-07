<?php
session_start(); // Zorg ervoor dat je sessie start aan het begin van je script



include("../includes/connection.php");
include("../includes/functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Er is iets ingediend via POST
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query om de gebruiker op te halen op basis van het ingevoerde e-mailadres
    $query = "SELECT * FROM nerdy_gadgets_start.user WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Gebruiker gevonden
        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['password'] === $password) {
            // Wachtwoord komt overeen - inloggen geslaagd
            $_SESSION["email"] = $user_data['user_id'];
            header("Location: http://localhost:63342/index.php/Homepage/Home/index.php?_ijt=i9jk797t5jm7o57oek807mm7pm&_ij_reload=RELOAD_ON_SAVE");
            $Ingelogd = "Waar";
            die;
        } else {
            // Ongeldig wachtwoord
            echo "Invalid password!";
        }
    } else {
        // Gebruiker niet gevonden
        echo "User not found!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli'><link rel="stylesheet" href="./style.css">
</head>

<body>
<div class="afb1">
    <img src="/Homepage/src/logo.png" class="afb1">
</div>

<div class="login">
    <p>Inloggen</p>
</div>

<div class="loginbox">
    <form action="" method="post">
        <!-- Formulier voor het invoeren van e-mail en wachtwoord -->

        <div class="input-field">
            <input type="email" id="email" name="email" placeholder="E-mail" required>
            <label>Voer je email in:</label>
        </div>

        <div class="input-field">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <label>Enter your password:</label>
        </div>

        <div class="forget">
            <div class="remeber">
                <input class="vinkje" type="checkbox" id="remember">
                <p>Onthoud mij</p>
            </div>

            <div class="forgotpassw">
                <a href="wachtwoordvergeten.php">Wachtwoord vergeten?</a>
            </div>
        </div>

        <button type="submit">Inloggen</button>

        <div class="register">
            <p>Geen account? <a href="regist.php">Registreer</a></p>
        </div>
    </form>
</div>

<div class="homepagelink">
    <a href="../Home/index.php"> Terug naar Homepagina </a>
</div>

</body>
</html>






















</body>
</html>
