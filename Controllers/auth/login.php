<?php


guest();

require "Database.php";
require "Validator.php";
$config = require "config.php";

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
    $query = "SELECT * FROM users WHERE email = :email";
    $params = [":email" => $_POST["email"]];
    $user = $db->execute($query, $params)->fetch();
    // password_verify($_POST["password"], $user["password"]);
    if(!$user || !password_verify($_POST["password"], $user["password"]))
    {
        $errors["email"] = "Parole vai e-pasts nav pareiz";
    }   
    if(empty($errors))
    {
        $_SESSION["user"] = true;
        $_SESSION["email"] = $_POST["email"];
        echo "User with the email " . $_SESSION["email"] . " has logged in.";

        header("Location: /");
        die();
    }

}

$page_title = "";
require "views/auth/login.view.php";

unset($_SESSION["flash"]);