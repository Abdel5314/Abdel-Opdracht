<?php

// Include the classes
require_once 'Product.php';
require_once 'Music.php';
require_once 'Movie.php';
require_once 'Game.php';
require_once 'ProductList.php';

// Create products
$musicProduct = new Music('Test Music', 10, 2.1, 'Music description', 'Artist Name');
$musicProduct->addTrack('Track 1');
$musicProduct->addTrack('Track 2');

$movieProduct = new Movie('Test Movie', 15, 2.1, 'Movie description', 'DVD');

$gameProduct = new Game('Test Game', 20, 2.1, 'Game description', 'Action', 'Intel Core i5, 8GB RAM');

// Add products to the product list
$productList = new ProductList();
$productList->addProduct($musicProduct);
$productList->addProduct($movieProduct);
$productList->addProduct($gameProduct);

// Laat de producten zien
echo $productList->displayProducts();