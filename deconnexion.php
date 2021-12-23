<?php
session_start();
include("connexion.php");


$_SESSION = array();
session_destroy();
header('location: demarrage.php');
?>