<?php
session_start();
session_destroy();

$hostname = $_SERVER['HTTP_HOST'];
$path = dirname($_SERVER['PHP_SELF']);

header('Location: login.php');
?>
