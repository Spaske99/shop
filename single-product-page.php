<?php
session_start();
$shop='shop';

// REQUIRE CLASSES
require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "/models/shop-model.php";

// USING MODELS
use Models\Product\Product;

// GET PRODUCT ID
$productId = null;

if(!empty($_GET['page'])) {
    $productId = $_GET['page'];
}

// GET ONE PRODUCT AND RELATED

$product = Product::getOneProductById($productId);
$relatedProducts = $product->getRelatedProducs();


// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-single-product.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";