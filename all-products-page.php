<?php
session_start();
$shop='shop';

// REQUIRE CLASSES
require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "/models/shop-model.php";

// USING MODELS
use Models\Product\Product;

// GET PRODUCTS
$products = Product::getAvailableProducts();
$filter = "";
$sort = "";

if (!empty($_GET['filter'])) {
    $filter = $_GET['filter'];
}
if (!empty($_GET['sort'])) {
    $sort = $_GET['sort'];
}
if ($filter != "") {
    $products = Product::filteredProducts($filter, $products);
}
if ($sort != "") {
    $products = Product::sortProductBy($sort, $products);
}

// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-shop.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";