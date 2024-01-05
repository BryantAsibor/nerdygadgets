<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "nerdy_gadgets_start";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("failed to connect!");
}
?>