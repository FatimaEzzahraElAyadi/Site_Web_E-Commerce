<?php
session_start();
include 'include/header.php';

	$pr="SELECT * FROM produit where Reference=".$_GET['id'];
	$pr1=mysqli_query($lien,$pr) or die('Erreur SQL!'.$pr.'<br/>'.mysqli_error($lien));
	$pr2=mysqli_fetch_assoc($pr1);

	require_once 'panier.php';
	
	$panier=new Panier('produits');
	
	$valeurs=array(
	'id' => $pr2['Reference'],
	'image' => $pr2['Image'],
	'nom' => $pr2['Nom'],
	'description' => $pr2['Description'],
	'qte' => $_GET['qte'],
	'prix' => $pr2['Prix'] );
	
	
	$panier->set($_GET['id'],$valeurs);
	
	header('location: votre_panier.php');
	?>
