<?php

require_once "Vierkant.php";
require_once "Rechthoek.php";
require_once "Cirkel.php";
require_once "Driehoek.php";

$vierkant = new Vierkant(20, 20, "aqua", 80);

$rechthoek = new Rechthoek(120, 20, "mediumslateblue", 100, 80);

$cirkel = new Cirkel(280, 60, "limegreen", 40);

$driehoek = new Driehoek(400, 20, "aqua", 80);

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Drie op een rij</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Drie op een rij</h1>

<svg width="600" height="300">

    <!-- Vierkant -->
    <rect
        x="<?= $vierkant->getX() ?>"
        y="<?= $vierkant->getY() ?>"
        width="<?= $vierkant->getGrootte() ?>"
        height="<?= $vierkant->getGrootte() ?>"
        fill="<?= $vierkant->getKleur() ?>"
    />

    <!-- Rechthoek -->
    <rect
        x="<?= $rechthoek->getX() ?>"
        y="<?= $rechthoek->getY() ?>"
        width="<?= $rechthoek->getBreedte() ?>"
        height="<?= $rechthoek->getHoogte() ?>"
        fill="<?= $rechthoek->getKleur() ?>"
    />

    <!-- Cirkel -->
    <circle
        cx="<?= $cirkel->getX() ?>"
        cy="<?= $cirkel->getY() ?>"
        r="<?= $cirkel->getStraal() ?>"
        fill="<?= $cirkel->getKleur() ?>"
    />

    <!-- Driehoek -->
    <polygon
        points="400,100 440,20 480,100"
        fill="<?= $driehoek->getKleur() ?>"
    />

</svg>

</body>
</html>