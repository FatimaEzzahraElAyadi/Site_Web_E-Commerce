<?php

if (isset($_POST['submit'])) {
        require 'cnx.php';
        $lien = connectMaBasi();
		$nom=$_POST['nom'];
		$password=$_POST['pwd'];
		if ($nom == "admin" && $password == 123 ){
			header("location:admin/index.php");
	}
		$query="SELECT * FROM `client` WHERE nom = '$nom' AND pwd='$password' ";
		mysqli_query($lien,$query);

		header("location:index.php");

	}

 
?>
