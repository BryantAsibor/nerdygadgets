<?php


?>
<link rel="stylesheet" href="style.css"> <!-- Main CSS -->
<link rel="stylesheet" href="../src/styles.css"> <!-- Main CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Stylesheet footer icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


<?php include("../src/header.php"); ?>


    <!DOCTYPE html>
    <!-- Coding By CodingNepal - youtube.com/codingnepal -->
    <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Snake Game JavaScript | CodingNepal</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <script src="script.js" defer></script>
    </head>
    <body>
    <div class="wrapper">
        <div class="game-details">
            <span class="score">Score: 0</span>
            <span class="high-score">High Score: 0</span>
        </div>
        <div class="play-board"></div>
        <div class="controls">
            <i data-key="ArrowLeft" class="fa-solid fa-arrow-left-long"></i>
            <i data-key="ArrowUp" class="fa-solid fa-arrow-up-long"></i>
            <i data-key="ArrowRight" class="fa-solid fa-arrow-right-long"></i>
            <i data-key="ArrowDown" class="fa-solid fa-arrow-down-long"></i>
        </div>
    </div>
    </body>
    </html>


<?php include("../src/footer.php"); ?>
