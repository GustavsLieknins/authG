<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Whisper&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title><?= $page_title ?></title>
    <style>
    header 
    {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
    }
    nav
    {
        display: flex;
        /* flex-direction: row; */
        justify-content: space-between;
        align-items: center;
        background-color: red;
        padding-left: 50px;
        padding-right: 50px;
        height: 35px;
    }
    a
    {
        all: unset;
        font-family: "Whisper", cursive;
        font-size: 40px;
        color: white;
    }
    body
    {
        margin-top: 50px;
        background-color: white;
        box-sizing: border-box;
        position: relative;
    }
    li 
    {
        font-family: "Whisper", cursive;
    }
    .div-for-input-divs
    {
        display: flex;
        box-sizing: border-box;
        flex-wrap: wrap;
        flex-direction: column;
        width: 20%;
        border-right: 1px solid black;
        /* justify-content: space-between; */
    }
    .numbered-input-div
    {
        display: flex;
        box-sizing: border-box;
        flex-direction: column;
        text-align: center;
    }
    .dropdown-input-div
    {
        display: flex;
        box-sizing: border-box;
        flex-direction: column;
        text-align: center;
    }
    .numbered-input
    {
        width: 120px;
        height: 20px;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    .dropdown-input
    {

    }
    .submit-numbered-index
    {
        width: 120px;
        height: 25px;
        color: white;
        background-color: #808080;
        border: 0;
        margin-top: 5px;
        /* border-radius: 6px; */
    }
    .numbered-input:focus 
    {
        outline: none;
        border:1px solid blue;
        box-shadow: 0 0 5px #719ECE;
    }
    .output-index
    {
        width: 60%;
        text-align: center;
        align-items: center;
        position: absolute;
        margin-left: 20%;
        left: 0;
        top: 0;
        /* border-style: dotted; */

    }
    .funny-font
    {
        font-family: "Whisper", cursive;
    }
    h1
    {
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }
    p
    {
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }
    .delete-button
    {
        all: unset;
        margin-top: 5px;
        width: 200px;
        background-color: red;
        color: white;
        border: 1px solid black;
        cursor: pointer;
        text-align: center;
    }
    label
    {
        possition: relative;
        display: inline-block;
    }
    .invalid-data
    {
        possition: absolute;
        top: 100%;
        left: 0;
        color: red;
        font-size: 0.8em;
    }
    .delete_form
    {
        display: inline-block;
    }
    li
    {
        
        list-style-type: none;
    }
    textarea {
        /* width: 100%; */
        height: 30px;
        /* padding: 12px 20px; */
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;

        /* display: block;
        margin-left: auto;
        margin-right: auto; */
    }
    .form-create
    {
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        width: max-content;
    }
    a
    {
        cursor: pointer;
    }
</style>
</head>
<body>