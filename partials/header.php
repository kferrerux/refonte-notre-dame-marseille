<?php

session_start();

include "../database/db-connect.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!------------------------ LES STYLES ------------------------>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/medias.css">

    <!------------------------ SCRIPTS & CDN'S ------------------------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="../scripts/navbar.js"></script>
    <script defer src="../scripts/animations.js"></script>
    <script defer src="https://kit.fontawesome.com/a95fff360e.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Notre-Dame de La Garde</title>
</head>

<!------------------------ MENU DE NAVIGATION PRINCIPALE ------------------------>
<header id="header" class="d-flex align-center row-cols-1 row-cols-sm-1 row-cols-md-10 row-cols-lg-1">
    <nav class="navbar navbar-expand-lg d-flex align-items-center justify-content-around">
        <div id="logodiv">
            <a href="../pages/index.php"><img class="ms-0 ms-sm-0 ms-md-0 ms-lg-5" id="logo" src="../assets/imgs/logo.png" alt="Logo Basilique Notre-Dame de la Garde"></a>
        </div>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse align-items-center justify-content-around " id="navbarScroll">
            <ul class="navbar-nav navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link" href="index.php#serendre">VISITER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/shop.php">BOUTIQUE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#informations">ACTIVITES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/404.php">FAIRE UN DON</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        LANGUES
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">FRANCAIS 🇫🇷</a></li>
                        <li><a class="text-decoration-line-through dropdown-item" href="#">ENGLISH 🇬🇧</a></li>
                        <li><a class="text-decoration-line-through dropdown-item" href="#">ITALIANO 🇮🇹</a></li>
                    </ul>
                </li> -->
            </ul>

            <!-- <form id="form-responsive" class="d-flex w-25" role="search">
                <input id="search" class="form-control me-2" type="search" placeholder="Recherchez dans la boutique" aria-label="Recherchez">
                <button class="btn btn-success" type="submit">OK</button>
            </form> -->

            <div class="d-flex align-items-center justify-content-center">

                <div class="mx-5 fs-4 d-flex align-items-center justify-content-between">
                    🇫🇷
                    🇬🇧
                    🇮🇹
                </div>

                <?php
                if (isset($_SESSION['admin'])) {
                ?>
                    <a href="../pages/admin-pannel.php"><i class="mx-3 fs-3 admin fa-solid fa-gear"></i></a>
                    <a href="../database/session-logout.php"><i class="fs-3 admin fa-solid fa-right-from-bracket"></i></a>

                <?php
                } else {
                ?>
                    <a href="admin-login.php"><i class="fs-3 admin fa-solid fa-user"></i></a>
                <?php
                }
                ?>

            </div>

        </div>
    </nav>
</header>