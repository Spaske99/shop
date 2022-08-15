<?php
session_start();
$login='login';

// REQUIRE CLASSES
require_once __DIR__ . "./models/user-login.php";
require_once __DIR__ . "./models/db.php";

//LOG IN
if (isset($_GET['submit1'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];

    $object = new Users();
    $object->Login($email, $password);
}

//SING UP
if (isset($_GET['submit2'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    $object = new Users();
    $object->setUsers($name, $email, $password);
}

// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-login.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";





?>