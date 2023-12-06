<?php
session_start();


include("../includes/connection.php");
include("../includes/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    //somthing was posted
    $email = $_POST["email"];
    $password = $_POST["password"];
    $first_name = $_POST["first_name"];

// read from db
    $query = "select * from nerdy_gadgets_start.user where email = '$email' limit 1";

    $result = mysqli_query($con, $query);

    if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);


            if ($user_data['password'] === $password) {


                $_SESSION["email"] = $user_data['user_id'];
                header("Location: regist.php");
                die;
            }
        }

    } else {
        echo "Enter valid information!";

    }

}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">

    <link rel='stylesheet' href="style.css">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli'><link rel="stylesheet" href="./style.css">

</head>



<div class="afb1">
    <img src="/Homepage/src/logo.png" class="afb1">

</div>

<div class="login">
    <p>Log in</p>
</div>


<body>
<div class="loginbox">
    <form action="" method="post">

        <div class="input-field">
            <input type="email" id="email" name="email" placeholder="E-mail" required>
            <label>Enter your email:</label>
        </div>
        <div class="input-field">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <label>Enter your password:</label>
        </div>

        <div class="forget">

            <div class="remeber">



                <input class="vinkje" type="checkbox" id="remember">
                <p>Remember me</p>
            </div>
            <div class="forgotpassw">
                <a href="#">Forgot password?</a>
            </div>

        </div>


        <button type="submit">Log In</button>
        <div class="register">
            <p>Don't have an account? <a href="regis.html">Register</a></p>
        </div>
    </form>

</div>




















<div class="homepagelink">

    <a href="../Home/index.php" > Back to Homepage </a>
</div>

<!-- partial -->

</body>
</html>
