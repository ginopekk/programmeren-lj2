
<?php

require_once "Music.php";
require_once "Film.php";
require_once "Game.php";
require_once "ProductList.php";

$music1 = new Music(
    "Test1",
    5.00,
    21,
    "Muziek dvd",
    "Artiest 1",
    ["nummer 1", "nummer 2"]
);

$music2 = new Music(
    "Test2",
    10.00,
    21,
    "Muziek dvd",
    "Artiest 2",
    ["nummer 3", "nummer 4"]
);

$film1 = new Film(
    "Starwars 1",
    10.00,
    21,
    "Een film",
    "DVD"
);

$film2 = new Film(
    "Starwars 2",
    15.00,
    21,
    "Een film",
    "Blu-ray"
);

$game1 = new Game(
    "Call of Duty 1",
    5.00,
    21,
    "Een game",
    "FPS",
    ["8GB geheugen", "970 GTX"]
);

$game2 = new Game(
    "Call of Duty 2",
    10.00,
    21,
    "Een game",
    "FPS",
    ["16GB geheugen", "2070 RTX"]
);

$productList = new ProductList();

$productList->voegProductToe($music1);
$productList->voegProductToe($music2);
$productList->voegProductToe($film1);
$productList->voegProductToe($film2);
$productList->voegProductToe($game1);
$productList->voegProductToe($game2);

echo $productList->toonTabel();