<?php
session_start();
$news='news';

// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-news.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";

?>