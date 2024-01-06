<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="TicTacToe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> <!-- Stylesheet footer icons -->
    <title>Voorpagina</title>
    <style>
        /* Add any additional styles for the Tic Tac Toe game here */
        .board {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 5px;
            margin-top: 20px;
        }

        .cell {
            width: 100px;
            height: 100px;
            border: 1px solid #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<header>
    <div class="header">
        <nav>
            <div class="navbar">
                <img src="../img/logo.png" class="logo">
                <ul>
                    <li><a href="../Home/index.php">Home</a></li>
                    <li><a href="../Shop/index.php">Shop</a></li>
                    <li> <a href="../OverOnsBryce/overonstest.php">Over ons</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="container">
    <div class="content">
        <h1>TIC-TAC-TOE</h1>
        <p>Speel een potje TIC-TAC-TOE</p>

        <div class="board" id="board">
            <!-- The game board will be dynamically generated here -->
        </div>
    </div>
</div>

<footer>
    <div class="footer-content">
        <h3>NerdyGadgets</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo iste corrupti doloribus odio sed!</p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2023 . designed by NerdyGadgets <span>nethunt</span></p>
    </div>
</footer>

<script>
    const board = document.getElementById('board');
    let currentPlayer = 'X';

    // speelveld
    for (let i = 0; i < 9; i++) {
        const cell = document.createElement('div');
        cell.classList.add('cell');
        cell.dataset.index = i;
        cell.addEventListener('click', handleCellClick);
        board.appendChild(cell);
    }

    function handleCellClick(event) {
        const clickedCell = event.target;

        // Kijkt of het veld leeg is voordat het iets kan toevoegen
        if (!clickedCell.textContent.trim()) {
            clickedCell.textContent = currentPlayer;
            // Checkt bij elke zet of er iemand wint
            if (checkForWinner()) {
                alert(`${currentPlayer} heeft gewonnen!`);
                if (currentPlayer === 'X') {
                    // Redirect to contact.php when 'X' wins
                    window.location.href = 'contact.php';
                } else {
                    resetGame();
                }
            } else {
                currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
            }
        }
    }

    function checkForWinner() {
        const cells = document.querySelectorAll('.cell');

        // De win combinaties
        const winCombinations = [
            [0, 1, 2], [3, 4, 5], [6, 7, 8], // Rows
            [0, 3, 6], [1, 4, 7], [2, 5, 8], // Columns
            [0, 4, 8], [2, 4, 6]             // Diagonals
        ];

        // Check voor de win
        for (const combo of winCombinations) {
            const [a, b, c] = combo;
            if (cells[a].textContent && cells[a].textContent === cells[b].textContent && cells[a].textContent === cells[c].textContent) {
                return true; // We have a winner
            }
        }

        // Gelijkspel of niet
        if ([...cells].every(cell => cell.textContent.trim() !== '')) {
            alert('Het is een gelijkspel!');
            resetGame();
        }

        return false; // Geen winnaar
    }

    function resetGame() {
        // Maakt het veld weer leeg
        const cells = document.querySelectorAll('.cell');
        cells.forEach(cell => (cell.textContent = ''));

        // Zet de Speler weer tot X
        currentPlayer = 'X';
    }
</script>

</body>
</html>
