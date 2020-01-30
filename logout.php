<?php include "config.php"; ?>
<?php include "functions.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php 

   $_SESSION['username'] = null;
    $_SESSION['first_name'] = null;
    $_SESSION['last_name'] = null;
    $_SESSION['id'] = null;

header("Location: index.php");


?>