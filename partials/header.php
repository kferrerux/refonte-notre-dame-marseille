<?php
session_start();
include dirname(__DIR__) . "/database/db-connect.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!------------------------ LES STYLES ------------------------>
    <link rel="stylesheet" href="/notredamerefonte/assets/styles/style.css">
    <link rel=" stylesheet" href="/notredamerefonte/assets/styles/medias.css">

    <!------------------------ SCRIPTS & CDN'S ------------------------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="/notredamerefonte/scripts/navbar.js"></script>
    <script defer src="/notredamerefonte/scripts/animations.js"></script>
    <script defer src="https://kit.fontawesome.com/a95fff360e.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Notre-Dame de La Garde</title>
</head>

<!------------------------ MENU DE NAVIGATION PRINCIPALE ------------------------>
<header id="header" class="d-flex align-center row-cols-1 row-cols-sm-1 row-cols-md-10 row-cols-lg-1">
    <nav class="navbar navbar-expand-lg d-flex align-items-center justify-content-around">
        <div id="logodiv">
            <a href="/notredamerefonte/index.php"><img class="ms-0 ms-sm-0 ms-md-0 ms-lg-5" id="logo" src="/notredamerefonte/assets/imgs/logo_lg.png" alt="Logo Basilique Notre-Dame de la Garde"></a>
        </div>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse align-items-center justify-content-around " id="navbarScroll">
            <ul class="navbar-nav navbar-nav-scroll">
                <li class="nav-item">
                    <a class="fs-6 nav-link" href="/notredamerefonte/index.php#serendre">VISITER</a>
                </li>
                <li class="nav-item">
                    <a class="fs-6 nav-link" href="/notredamerefonte/pages/shop.php">BOUTIQUE</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="fs-6 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        LES ACTIVITES
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="fs-6 dropdown-item" href="/notredamerefonte/pages/restaurant.php">Le Restaurant</a></li>
                        <li><a class="fs-6 dropdown-item" href="/notredamerefonte/pages/musee.php">Le Musée</a></li>
                        <li><a class="fs-6 dropdown-item" href="/notredamerefonte/pages/404.php">Les Evènements</a></li>
                    </ul>
                </li>
                <li class="mx-2 nav-item">
                    <a id="don" class="my-lg-0 my-xl-0 my-xxl-0 my-sm-2 my-md-2 fs-6 nav-link" href="/notredamerefonte/pages/404.php">FAIRE UN DON</a>
                </li>
            </ul>

            <div class="d-flex align-items-center justify-content-center">
                <div class="mx-5 fs-4 d-flex align-items-center justify-content-between">
                    🇫🇷
                    🇬🇧
                    🇮🇹
                </div>
                <?php
                if (isset($_SESSION['admin'])) {
                ?>
                    <a href="pages/admin-pannel.php"><i class="mx-3 fs-3 admin fa-solid fa-gear"></i></a>
                    <a href="/notredamerefonte/database/session-logout.php"><i style="color: red" class="fs-3 admin fa-solid fa-right-from-bracket"></i></a>
                    <img src="https://api.dicebear.com/8.x/avataaars/svg?seed=administrateur@gmail.com" alt="avatar" class="border border-1 border-grey mx-2" style="width: 37px; height: 37px; border-radius: 50%;">

                <?php
                } else {
                ?>
                    <a href="/notredamerefonte/pages/admin-login.php"><i class="fs-3 admin fa-solid fa-lock"></i></a>
                <?php
                }
                ?>
            </div>

        </div>
    </nav>
</header>