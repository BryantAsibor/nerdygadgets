<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "nerdy_gadgets_start";



if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("failed to connect!");
}
