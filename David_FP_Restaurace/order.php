<?php
require dirname(__FILE__) . "/helpers/check_cookie.php";
require dirname(__FILE__) . "/database/auth.php";
require dirname(__FILE__) . "/database/db.php";

include_once "./components/header.php";
?>

<head>
    <title>Giuseppe's - Order</title>
    <link rel="stylesheet" href="./css/user.css">
</head>
<body>
    <div class="order_div">
        <h1>Order</h1>
    </div>  
    <?php
    $auth = new Auth($connection);
    if(!isset($_SESSION["email"]))
    {
        echo "";
        echo '<a href="./login.php">To order, you have to <b>login</b> first!</a>';
    }
    ?>
</body>

<?php
    include_once "./components/footer.php";
?>