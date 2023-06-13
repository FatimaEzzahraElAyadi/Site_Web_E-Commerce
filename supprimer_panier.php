<?php
session_start();
//include 'include/header.php';
require_once 'panier.php';
$panier=new Panier('produits');
$panier->delete($_GET['id']);

header('Location: votre_panier.php');
?>