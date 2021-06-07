<?php 
session_start();
$_SESSION['root'] = getcwd() ;
header('Location: pages/landing-page.php');
?>