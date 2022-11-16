<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/globals.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar">
        <div class="wrapper">
            <a href="index.php"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="contacts.php">Contacts</a></li>
                <?php
                    if (isset($_SESSION["email"])) {
                        echo "<li><a href='profile.php'>Profile</a></li>";
                        // echo "<li><a href='./helpers/logout.php'>Logout</a></li>";
                    }
                    else {
                        echo "<li><a href='signup.php'>Signup</a></li>";
                        echo "<li><a href='login.php'>Login</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>
    <!-- Menu Overlay -->
    <div class="overlay overlay-slide-right overlay-slide-left" id="overlay">
        <nav class="overlay-menu">
            <ul class="overlay-ul">
                <li class="overlay-li" id="nav-1"><a href="./index.php">Home</a></li>
                <li class="overlay-li" id="nav-2"><a href="./booking.php">Booking</a></li>
                <li class="overlay-li" id="nav-3"><a href="./menu.php">Menu</a></li>
                <li class="overlay-li" id="nav-4"><a href="./order.php">Order</a></li>
                <li class="overlay-li" id="nav-5"><a href="./contacts.php">Contacts</a></li>
                <li class="overlay-li" id="nav-6"><a href="./login.php">Login</a></li>
            </ul>
        </nav>
    </div>
    <!-- Burger Menu -->
    <div class="menu-bars" id="menu-bars">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <div>


