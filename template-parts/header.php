<?php
require_once __DIR__ . '/../includes/Utils.php';
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Giorgina Cali</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= Utils::asset('assets/css/style.css') ?>">
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/76da539177.js" crossorigin="anonymous"></script>
    <!-- JS -->
    <script src="<?= Utils::asset('assets/js/script.js') ?>" defer></script>
    <script src="<?= Utils::asset('assets/js/slide.js') ?>" defer></script>
</head>

<body>
    <!-- Navigatiebar algemeen-->
    <div class="navbar">
        <div class="container">
            <div class="navbar-inside">
                <!-- logo links naam -->
                <div class="logo">
                    <p>Giorgina Cali</p>
                </div>

                <!-- hamburger menu -->
                <div class="menu-toggle" id="menuToggle">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>

                <!-- nav bar midden -->
                <div class="midden">
                    <ul class="menu" id="menu">
                        <li><a href="<?= Utils::baseUrl() ?>">Home</a></li>
                        <li><a href="<?= Utils::baseUrl('#skills') ?>">Skills</a></li>
                        <li><a href="<?= Utils::baseUrl('#projecten') ?>">Projecten</a></li>
                        <li><a href="<?= Utils::baseUrl('#blog') ?>">Blog</a></li>
                        <li><a href="<?= Utils::baseUrl('#cv') ?>">CV</a></li>
                    </ul>
                </div>

                <!-- nav bar rechts -->
                <div class="right">
                    <ul class="menu">
                        <li class="menu-right"><a href="<?= Utils::baseUrl('#over-mij') ?>">Over mij</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>