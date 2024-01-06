<?php

include("../includes/connection.php");
include("../includes/functions.php");


session_start(); // Zorg ervoor dat je sessie start aan het begin van je script

// Controleer of de gebruiker al is ingelogd
if (isset($_SESSION["email"])) {
    // Als de gebruiker al is ingelogd, stuur hem dan door naar de homepage
    header("Location: http://localhost:63342/Shop.html/Homepage/Home/index.php?_ijt=6ptdig7gouiens1gu32njoh3f5&_ij_reload=RELOAD_ON_SAVE");
    die;
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

<!-- Voeg hier de rest van je HTML-inhoud toe -->
</body>
</html>
<div class="logout-form">
    <form action="logout.php" method="post">
        <button type="submit" class="logout-button">Logout</button>
    </form>
</div>





