<?php

function dd($datas)
{
    echo "<pre>";
    var_dump($datas);
    echo "</pre>";
    die();
};

function auth()
{
    if(!isset($_SESSION["user"]))
    {
        header("Location: /login");
        die();
    }
}

function guest()
{
    if(isset($_SESSION["user"]))
    {
        header("Location: /");
        die();
    }
}