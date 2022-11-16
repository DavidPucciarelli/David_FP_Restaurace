<?php

require dirname(__FILE__) . "/helpers/check_cookie.php";
require_once dirname(__FILE__) . "/database/auth.php";
require dirname(__FILE__) . "/database/db.php";

include_once "./components/header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/profile.css">
    <title>Giuseppe's - Profile</title>
</head>
<body>

</body>
</html>
<body>
    <div class="profile_info">
        <br><br><br><br><br><br>
        <?php
            if(isset($_SESSION["userId"])) {

                
                $auth = new Auth($connection);
                echo "<p>Welcome, " . $auth->get_user_name($_SESSION["userId"]) . "</p>";
                echo "<p>Email: " . $_SESSION["email"] . "</p>";
            }
        ?>
        <form action="./helpers/logout.php" method="post">
            <input type="submit" value="Logout" name="logout">
        </form>

        <form action="./helpers/delete_account.php" method="post">
            <input type="submit" value="Delete account" name="delete_account">
        </form>
    </div>
</body>
</html>

<?php
    include_once "./components/footer.php";
?>
