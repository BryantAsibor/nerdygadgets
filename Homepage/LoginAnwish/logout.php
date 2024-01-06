<?php

session_start();

// Uitlogactie: vernietig de sessie
session_destroy();
$Ingelogd = "Niet waar";
// Doorverwijzen naar de inlogpagina of een andere pagina na uitloggen
header("Location: login.php"); // Vervang "login.php" door de daadwerkelijke inlogpagina
exit();

