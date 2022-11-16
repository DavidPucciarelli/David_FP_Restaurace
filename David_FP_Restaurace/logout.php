<?php

require "db.php";
require "auth.php";

if(isset($_POST["logout"]))
{
    $auth = new Auth($connection);
    $auth -> logout();
}

?>