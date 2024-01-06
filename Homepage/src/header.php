<link rel="stylesheet" href="styles.css" > <!-- Main CSS -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Stylesheet footer icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<div class="header">
    <nav>
        <div class="navbar">
            <img src="logo.png" class="logo" id="clickCounter">
            <ul>
                <li><a href="../Home/index.php">Home</a></li>
                <li><a href="../Shop/index.php">Shop</a></li>
                <li><a href="../OverOnsBryce/overonstest.php">Over ons</a>
                <li><a href="../Contact/contact.php">Contact</a></li>
            </ul>
            <a href="../LoginAnwish/Login.php"> <img src="b64f8fcf0e0aed9537c800eb5e9ca1ed.png" class="pfp"></a>
        </div>
    </nav>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click Counter</title>
</head>
<body>


<script>
    // JavaScript om de klik te verwerken
    var clickCount = 0;

    document.getElementById('clickCounter').addEventListener('click', function() {
        // Verhoog het aantal klikken
        clickCount++;

        // Controleer of het vereiste aantal klikken is bereikt (in dit geval 4)
        if (clickCount >= 4) {
            // Stuur door naar test.php als het vereiste aantal klikken is bereikt
            window.location.href = '../easteregg anwish/easteregganwish.php';
        }
    });
</script>

</body>
</html>
