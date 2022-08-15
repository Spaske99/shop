<?php
session_start();
$index='index';

// REQUIRE CLASSES
require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "/models/shop-model.php";

// USING MODELS
use Models\Product\Product;

// GET POPULAR PRODUCTS
$popular = Product::getPopularProducts();

// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-index.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";