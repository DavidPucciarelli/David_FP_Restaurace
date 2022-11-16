<?php
require dirname(__FILE__) . "/helpers/check_cookie.php";
require dirname(__FILE__) . "/database/auth.php";
require dirname(__FILE__) . "/database/db.php";

include_once "./components/header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/menu.css">
    <title>Giuseppe's - Log in</title>
</head>
<body>
<div class="menu">
    <h1>Menu</h1>
    <?php
        $sql = "SELECT id, price FROM foods";
        $result = $connection -> query($sql);
        $i = 1;

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='pizza' id='pizza$i'><p><a href='./order.php'>" . $row["id"]. " - Price: " . $row["price"] . " €</a></p></div>";
                $i++;
            }
        } else {
            echo "0 results";
        }

        // $margherita = mysqli_query($connection, "SELECT * FROM foods WHERE id=1");
        // echo $margherita;
    //     if ($result = mysqli_query($connection, "SELECT * FROM foods")) {
    //         echo "Returned rows are: " . mysqli_num_rows($result);

    //     mysqli_free_result($result);
    // }

    ?>
</div>

</body>
<script src="./js/menu.js"></script>
<script src="../js/script.js"></script>
</html>

<?php
    include_once "./components/footer.php";
?>