<?php
//connect to database
//get item data

if (isset($_POST['submit'])){
    $cookie_name = "cart";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}
?>