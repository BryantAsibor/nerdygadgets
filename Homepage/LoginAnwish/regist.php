<?php
// Inclusie van bestanden
include("../includes/connection.php");
include("../includes/functions.php");

// Controleer of het een POST-verzoek is
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Ontvang gegevens van het formulier
    $email = $_POST["email"];
    $password = $_POST["password"];


    // Valideer het wachtwoord
    if (!validatePassword($password)) {
        echo "<p style='color: white;'>Wachtwoord voldoet niet aan de vereisten:<br>- Minimaal 8 karakters<br>- Minimaal 1 hoofdletter<br>- Minimaal 1 speciaal teken</p>";
        // Voer hier andere acties uit, bijv. stop de registratie of geef een foutmelding aan de gebruiker
    } else
        // Rest van je code hier

    {
        // Query om gebruiker toe te voegen aan de database
        $query = "INSERT INTO nerdy_gadgets_start.user (email, password, first_name) VALUES ('$email','$password','$first_name')";

        // Voer de query uit
        if (!mysqli_query($con, $query)) {
            echo "<p style='color: white;'>Fout bij toevoegen van het record: </p> " . mysqli_error($con);
            die;
        } else {
            echo "<p style='color: white;'> Record succesvol toegevoegd.</p>";
        }

        // Stuur de gebruiker door naar de inlogpagina
        header("Location: Login.php");
        die;
    }
}

// Functie om wachtwoord te valideren
function validatePassword($password) {
    // Minimaal 8 karakters, minimaal 1 hoofdletter, minimaal 1 speciaal teken
    $passwordPattern = '/^(?=.*[A-Z])(?=.*[^A-Za-z0-9]).{8,}$/';

    return preg_match($passwordPattern, $password);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href="stylee.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie - Webshop</title>

</head>

<body>


<div class="">
    <img class="logo" src="/Homepage/src/logo.png">
</div>
<div class="login">
    <p>Registreer</p>
</div>

<div class="loginbox">



    <form action="" method="post">

        <div class="gegevens">

            <div class="inputveld">
                <label for="fullname">Voornaam:</label>
                <input type="text" id="first_name" name="First Name" placeholder="Voornaam" required>
            </div>    <div class="inputveld">
                <label for="email">E-mailadres:</label>
                <input type="email" id="email" name="email" placeholder="E-mail" required>
            </div>    <div class="inputveld">
                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" placeholder="Wachtwoord" required>
            </div>        <div class="inputveld">
                <label for="confirm-password">Bevestig wachtwoord:</label>
                <input type="password" id="confirm-password" name="Confirm-password" placeholder="Bevestig wachtwoord" required>
            </div>
            <button type="submit" name="submit">Registreer</button>
        </div>
        <p>Heb je al een account? <a href="Login.php">Inloggen</a></p>
    </form>


</div>

</body>
</html>































