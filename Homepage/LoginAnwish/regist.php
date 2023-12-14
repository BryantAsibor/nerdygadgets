<?php



    include("../includes/connection.php");
    include("../includes/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //somthing was posted
    $email = $_POST["email"];
    $password = $_POST["password"];
    $first_name = $_POST["first_name"];


    $query = "insert into nerdy_gadgets_start.user (email, password, first_name) values ('$email','$password','$first_name')";

    mysqli_query($con, $query);

    if (mysqli_query($con, $query)) {
        echo "Record succesvol toegevoegd.";
    } else {
        echo "Fout bij toevoegen van het record: " . mysqli_error($con);
    }

    header("Location: Login.php");
    die;

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href="stylee.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie - Webshop</title>

</head>

<body>


<div class="">
    <img class="logo" src="/Homepage/src/logo.png">
</div>
<div class="login">
    <p>Register</p>
</div>

<div class="loginbox">



    <form action="" method="post">

        <div class="gegevens">

            <div class="inputveld">
                <label for="fullname">First Name:</label>
                <input type="text" id="first_name" name="First Name" placeholder="First Name" required>
            </div>    <div class="inputveld">
                <label for="email">E-mailadres:</label>
                <input type="email" id="email" name="email" placeholder="E-mail" required>
            </div>    <div class="inputveld">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>        <div class="inputveld">
                <label for="confirm-password">Confirm-password:</label>
                <input type="password" id="confirm-password" name="Confirm-password" placeholder="Confirm-password" required>
            </div>
            <button type="submit" name="submit">Submit</button>
        </div>
        <p>Heb je al een account? <a href="Login.php">Log in</a></p>
    </form>


</div>

</body>
</html>
































<script>
    // JavaScript-functie om wachtwoord te valideren
    function validatePassword() {
        var password = document.getElementById("password").value;

        // Minimaal 8 karakters, minimaal 1 hoofdletter, minimaal 1 speciaal teken
        var passwordPattern = /^(?=.*[A-Z])(?=.*[^A-Za-z0-9]).{8,}$/;

        if (!passwordPattern.test(password)) {
            alert("Wachtwoord voldoet niet aan de vereisten:\n- Minimaal 8 karakters\n- Minimaal 1 hoofdletter\n- Minimaal 1 speciaal teken");
            return false;
        }

        return true;
    }
</script>
