<?php

require "Database.php";
require "Validator.php";
$config = require "config.php";
$db = new DataBase($config);

$errors = [];

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $db = new DataBase($config);

    $_POST["email"];
    $_POST["password"];

    if(!Validator::email($_POST["email"]))
    {
        $errors["email"] = "Nepareiz epasta formats";  
    }

    if(!Validator::password($_POST["password"]))
    {
        $errors["password"] = "Pass invalid";
    }

    $query = "SELECT * FROM users WHERE email = :email";
    $params = [":email" => $_POST["email"]];
    if($db->execute($query, $params)->fetch())
    {
        $errors["email"] = "Konts jau pastav";
    }

    if(empty($errors))
    {
        $query = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $params = [":email" => $_POST["email"], ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT)];
        $db->execute($query, $params);
        header("Location: /login");
    }

}

$page_title = "";
require "views/auth/register.view.php";