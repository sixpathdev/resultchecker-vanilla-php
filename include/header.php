<?php
require('connect.php');
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
                <ul class="navbar-nav mr-auto">
                    <?php
                    if ($_SERVER['REQUEST_URI'] == "/") {
                        echo "<li class='nav-item active'>
                        <a class='nav-link' href='/'>Home <span class='sr-only'>(current)</span></a>
                    </li>";
                    } else {
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='/'>Home <span class='sr-only'>(current)</span></a>
                    </li>";
                    }

                    if ($_SERVER["REQUEST_URI"] == "/about.php") {
                        echo "<li class='nav-item'>
                        <a class='nav-link active' href='../about.php'>About</a>
                    </li>";
                    } else {
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='../about.php'>About</a>
                    </li>";
                    }

                    ?>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="/administrator/index.php">Admin</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <div class="container-fluid">
        <div class="row">