<?php

include("../includes/connection.php");

function check_login($con)
{
    if (isset($_SESSION["email"])) {
        $id = $_SESSION["email"];
        $query = "SELECT * FROM nerdy_gadgets_start.user WHERE email = '$id' LIMIT 1";

        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;

        }
    }
    return false; // Return false als de gebruiker niet is ingelogd
}


