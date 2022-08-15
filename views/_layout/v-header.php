<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/theme/css/slide navbar style.css">
    <link rel="stylesheet" href="public/theme/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/theme/css/slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <title>Game Shop</title>
<head>
<body>
    <div class="p-1 bg-dark text-white"><img src="public/theme/img/sony-logo.png" alt="" height="22px";></div>
    <div class="sticky-top">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="public/theme/img/store-logo.png" alt="" width="250"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class=" 
                                nav-link
                                <?php
                                    if($index == 'index') {
                                        echo htmlspecialchars('active');
                                    } 
                                ?>
                                " href="./">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="
                                nav-link
                                <?php
                                    if($shop == 'shop') {
                                        echo htmlspecialchars('active');
                                    } 
                                ?>
                                " href="./all-products-page.php">Shop
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="
                                nav-link
                                <?php 
                                    if($news == 'news') {
                                        echo htmlspecialchars('active');
                                    } 
                                ?>
                                " href="./news.php">News
                            </a>                           
                        </li>
                        <li class="nav-item">
                            <a class="
                                nav-link
                                <?php
                                    if($contact == 'contact') {
                                        echo htmlspecialchars('active');
                                    } 
                                ?>
                                " href="./contact.php">Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="
                                nav-link
                                <?php
                                    if($login == 'login') {
                                        echo htmlspecialchars('active');
                                    } 
                                ?>
                                " href="./login.php">Login
                            </a>
                        </li>
                    </ul>
                    <div>
                        <a class="nav-link position-relative cart" href="./shopping-cart-page.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" \
                            fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                                <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z"/>
                            </svg>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                <?php 
                                    if(!empty($_SESSION['cart'])) {
                                        echo count($_SESSION['cart']);
                                    } else {
                                        echo 0;
                                    }
                                ?>
                            </span>
                        </a>
                    </div>                
                </div>
            </nav>
        </header>
    </div>
