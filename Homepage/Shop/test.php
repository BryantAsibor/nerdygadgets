<?php
$host = "127.0.0.1";
$user_id = "root";
$password = "password";
$database = "nerdy_gadgets_start";
$connection = mysqli_connect($host, $user_id, NULL, $database, "3306");
$sql = "select name , price from nerdy_gadgets_start.product order by price desc";
$sql2 = "select name , price from nerdy_gadgets_start.product order by price";
$result = mysqli_query($connection,$sql);
$result2 = mysqli_query($connection,$sql2);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
$rows2 = mysqli_fetch_all($result2,MYSQLI_ASSOC);
$i = 0;
foreach($rows as $lol){
    foreach($lol as $yuh) {
        print($yuh . "\n");
    }
}
mysqli_close($connection);

