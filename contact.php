<?php
session_start();
$contact='contact';

// REQUIRE CLASSES
require_once __DIR__ . "./models/user-message.php";
require_once __DIR__ . "./models/db.php";

//USER MESSAGE
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];

    $object = new UserMessage();
    $object->setMessage($name, $email, $message);
}

// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-contact.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";

?>