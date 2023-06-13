<?php

if (isset($_POST['submit'])) {
    require 'cnx.php';
    $lien = connectMaBasi();

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordC = $_POST['pwdc'];
    $tel = $_POST['tel'];
    $ville = $_POST['ville'];
    $adresse = $_POST['adresse'];
     
    // $passwordC = md5($passwordC);
    // $password = md5($password);
    //$query="SELECT login FROM users WHERE login='$login'  ";
    /*$result=mysqli_query($connexion,$query);
	$nb=mysqli_num_rows($result);	
	if($nb == 1 ){
		 echo "Veiller choisir un notre login";
	}*/
    if($password == $passwordC){
    $query = "INSERT INTO `client`( `nom`, `prenom`, `email`, `pwd`, `pwdc`, `tel`, `ville`, `adresse`)
        VALUES ('$nom','$prenom','$email','$password','$passwordC','$tel','$ville','$adresse')";
    mysqli_query($lien, $query) or die('Erreur SQL!' . $query . '<br/>' . mysqli_error($lien));

    //header("location:authentification.php");mysqli_close($lien);
    mysqli_close($lien);
    }else {
        echo "<h3>Verfier votre mot de passe</h3>";
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,
                     400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                
                <div class="card-body">
                    <h2 class="title">Créer un nouveau compte</h2>
                    <form method="POST" action='creation_compte.php'>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Nom" name="nom">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Prénom" name="prenom">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Mot de passe" name="pwd">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Confirmation de mot de passe" name="pwdc">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Tél" name="tel">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Ville" name="ville">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="textarea" placeholder="Adresse" name="adresse">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green"  type="submit" name="submit"><a href="index.php">Envoyer</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->