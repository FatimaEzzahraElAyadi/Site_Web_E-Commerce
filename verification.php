<?php
    session_start();
      require 'cnx.php';
	  $lien = connectMaBasi();
	  $nom=$_POST['nom'];
	  $password=$_POST['pwd']; 
	  $_SESSION['nom'] =   $nom;
	  $_SESSION['pwd'] = $password;

if (isset($_POST['submit'])) {


	$query="SELECT * FROM `users` WHERE nom = '$nom' AND pwd='$password' ";

	   
	if ($_POST['nom'] == "admin" && $_POST['pwd'] == 123 ){
		header("location:admin/index.php");
	 }

	 else {	
  

		$query="SELECT * FROM `client` WHERE nom = '$nom' AND pwd='$password' ";
		mysqli_query($lien,$query);

     	header("location:index.php");

	 }
}

 
?>
