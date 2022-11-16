<?php

interface IAuth
{
    public function check_user(string $userName, string $password) : int;
    public function get_user_name(int $userId) : string;
    public function logout() : void;
}

?>