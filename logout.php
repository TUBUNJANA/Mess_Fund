<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["pass"]);
session_destroy();
header('location:index.html');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESS FUND</title>
    <script src="https://kit.fontawesome.com/82125ab8ed.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="icons8-fund-microdots-premium-96.png" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
   
</head>
<body style="background-color:tomato;"></body>
</html>