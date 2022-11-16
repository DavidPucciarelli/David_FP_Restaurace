<?php
    include_once "./components/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/user.css">
    <title>Giuseppe's - Log in</title>
</head>
<body>
    <form action="./helpers/update_password.php" method="post">
        <h1>Renew Password</h1>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="username" placeholder="Email..." class="authentication-form" required><br>

            <label for="new_password">Password:</label>
            <input type="password" name="new_password" placeholder="Password..." required>

            <label for="confirm_new_password">Confirm New Password:</label>
            <input type="password" name="confirm_new_password" placeholder="Password..." required>

            <input type="submit" value="Update Password" name="update_password" class="button">
        </div>
        <div class="links">
            <a href="./login.php">Back to login</a>
        </div>
    </form>
</body>
</html>