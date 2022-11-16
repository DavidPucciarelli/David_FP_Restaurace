<?php
require dirname(__FILE__) . "/helpers/check_cookie.php";
require dirname(__FILE__) . "/database/auth.php";
require dirname(__FILE__) . "/database/db.php";

include_once "./components/header.php";
?>

<head>
    <link rel="stylesheet" href="./css/index.css">
    <title>Giuseppe's - Home</title>
</head>
<body>
    <div class="image_container">
        <img src="./images/pizza-cover.jpg" alt="Pizza Cover" class="pizza_cover">
        <div>
            <h2 class="text_centered">Experience only the best moments, with us</h2>
        </div>
    </div>
        <div class="image_container">
            <img src="./images/pizza-black.jpg" alt="Pizza Black" class="pizza_cover" id="pizza_black">
            <h2 class="text_top_right"><a href="./menu.php">Have a look on our menu</a></h2>
        </div>
    <div class="image_container">
        <img src="./images/dough.jpg" alt="Pizza Black" class="pizza_cover" id="dough">
        <h2 class="text_top"><a href="./order.php">Order now</a></h2>
    </div>
    <div class="image_container">
        <img src="./images/pizza-fire.jpg" alt="Pizza Fire" class="pizza_cover" id="pizza_fire">
        <h2 class="text_top"><a href="./contacts.php">Where you can find us</a></h2>
    </div>
</body>
</html>

<?php
    include_once "./components/footer.php";
?>