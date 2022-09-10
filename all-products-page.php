<?php
session_start();
$shop='shop';

// REQUIRE CLASSES
require_once __DIR__ . "/models/Model.php";
require_once __DIR__ . "/models/shop-model.php";
require_once __DIR__ . "/lib/ShoppingCart.php";
require_once __DIR__ . "/lib/ShoppingCartItem.php";

// USING MODELS
use Models\Product\Product;
use Lib\ShoppingCart\ShoppingCart;

// GET PRODUCTS
$products = Product::getAvailableProducts();
$filter = "";
$sort = "";

// SORT
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

// SHOPPING CART (SESSION)
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
$shoppingCart = new ShoppingCart($_SESSION['cart']);
if (isset($_POST['product_id']) && !empty($_POST['product_id'])) {
    $shoppingCart->addToCart(Product::getOneProductById($_POST['product_id']));
    $shoppingCart->updateSession();
}

// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-shop.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";