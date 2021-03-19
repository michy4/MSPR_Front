<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="EN">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
    <link rel="stylesheet" href="../../../css/index.css">
</head>
<?php
include("../Action/API_Call.php");
?>
<body>

<div id="demo">

    <h1>Promotions</h1>
    <a href="../Pages/login.php">
        <button class="deconnexion waves-effect waves-light btn">Déconnexion</button>
    </a>
    <!-- Menu de navigation du site -->
    <nav>
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="left">
                <li class="generales_active"><a href="../Pages/index.php">Générales</a></li>
                <li class="perso"><a href="../Pages/perso.php">Personnelles</a></li>
                <li class="supprimees"><a href="../Pages/delete.php">Expirées</a></li>
            </ul>
        </div>
    </nav>
    <canvas hidden="" id="qr-canvas"></canvas>
    <div id="qr-result" hidden="">
        <b>Data:</b> <span id="outputData"></span>
    </div>