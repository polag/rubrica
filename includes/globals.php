<?php
/* 
include_once 'includes/util.php';
include_once 'includes/FormHandle.php';
include_once 'includes/Rubrica.php';
include_once 'includes/header.php';  */


include_once __DIR__. '/util.php';
include_once __DIR__.'/FormHandle.php';
include_once __DIR__.'/Rubrica.php';
include_once __DIR__.'/header.php'; 

 if (!isset($_SESSION['username'])) {
    header('Location: https://localhost/rubrica-paula/login.php');
} 
 