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
    <title>Giuseppe's - Sign up</title>
</head>
<body>
        <form action="./helpers/check_signup.php" method="post">
            <div class="signup_container">
                <h1>Sign Up</h1>
                <label for="FirstName">Name:</label>                
                <input type="text" name="FirstName" placeholder="First name..." required>

                <label for="LastName">Surname: </label>
                <input type="text" name="LastName" placeholder="Surname..." required>

                <label for="UserName">Email:</label>
                <input type="text" name="UserName" placeholder="Email..." required>

                <label for="Password">Password:</label>
                <input type="password" name="Password" placeholder="Password..." required>

                <label for="ConfirmPassword">Confirm password:</label>
                <input type="password" name="ConfirmPassword" placeholder="Repeat password..." required>
            </div>

            <input type="submit" value="Sign up" name="Submit" class="button">
            <div class="links">
                <a href="./login.php">To login</a>
            </div>

        </form>
    
</body>
</html>

<?php
    include_once "./components/footer.php";
?>