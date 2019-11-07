<?php
require('connect.php');
session_start();

if($_SESSION['loggedin'] !== TRUE){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result Checker</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
            <a class="navbar-brand" href="#">
                <img class="img-responsive logo" src="../images/EP.png" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <?php
                if ($_SESSION["loggedin"] == true) {
                    $username = $_SESSION['username'];
                    echo "<ul class='navbar-nav ml-auto'><li class='nav-item text-white'>Welcome, $username || <a href='logout.php' class='text-white text-decoration-none'>Logout</a></li></ul>";
                }
                ?>

            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">