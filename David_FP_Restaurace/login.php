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
    <form action="./helpers/check_login.php" method="post">
        <h1>Log in</h1>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="username" placeholder="Email..." class="authentication-form" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Password..." required>

            <input type="checkbox" name="remember" value="1"> Remember me<br><br>
            <input type="submit" value="Log in" name="submit" class="button">
        </div>
        <div class="links">
            <a href="./signup.php">Register</a>
            <a href="./forgot.php">Did you forget password?</a>
        </div>
    </form>

</body>

<?php
    include_once "./components/footer.php";
?>
</html>

