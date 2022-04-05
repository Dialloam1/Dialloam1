<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include_once('view/header.php');

include_once('controller/router.php');

include_once('view/footer.php');


