<?php
//connect to database
//get item data

if (isset($_POST['submit'])){
    $cookie_name = "cart";
    $cookie_value = $_POST['submit'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}

header('Location:' . $_SERVER['HTTP_REFERER']);
exit();
