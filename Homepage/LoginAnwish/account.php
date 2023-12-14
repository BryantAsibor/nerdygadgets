<?php

include("../includes/connection.php");
include("../includes/functions.php");

$user_data = check_login($con);

if (!$user_data) {
    // Als de gebruiker niet is ingelogd, stuur ze naar het inlogscherm
    header("Location: Login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Info</title>
</head>
<body>
<h1>Account info:</h1>
<?php
// Hier kun je de gegevens van de ingelogde gebruiker weergeven
if ($user_data) {
    echo "Welcome, " . $user_data['username'] . "!"; // Pas dit aan op basis van je databasekolommen
} else {
    echo "Error: Unable to retrieve account information.";
}
?>

<!-- Voeg hier de rest van je HTML-inhoud toe -->
</body>
</html>

?>

<h1> Account info:</h1>



