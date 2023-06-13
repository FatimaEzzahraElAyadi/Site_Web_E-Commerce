<?php
    require '../../cnx.php';
    $lien = connectMaBasi();
//inserstion des donnes
if (isset ($_POST['valider'])){
$ID=$_POST['ID'];
$Nom=$_POST['Nom'];
$Prenom=$_POST['Prenom'];
$Email=$_POST['Email'];
$pwd=$_POST['pwd'];
$pwdc=$_POST['pwdc'];
$Tel=$_POST['Tel'];
$Ville=$_POST['Ville'];
$Adresse=$_POST['Adresse'];
$lien=connectMaBasi();//appel de la fonction de connexion à la BD
 $sql = "INSERT INTO `client`VALUES ('$ID','$Nom','$Prenom','$Email','$pwd','$pwdc','$Tel','$Ville','$Adresse')";
mysqli_query($lien,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($lien));//execution de la requete

mysqli_close($lien);//fermer la connexion 


}

//suppression des données
if (isset ($_POST['supprimer'])){
$ID=$_POST['ID'];
$lien=connectMaBasi();
$sql = "DELETE FROM client WHERE ID=$ID";
mysqli_query ($lien,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($lien));
// on ferme la connexion
mysqli_close($lien);
}    

//MAJ des données
if (isset ($_POST['modifier'])){
    $ID=$_POST['ID'];
    $Nom=$_POST['Nom'];
    $Prenom=$_POST['Prenom'];
    $Email=$_POST['Email'];
    $pwd=$_POST['pwd'];
    $pwdc=$_POST['pwdc'];
    $Tel=$_POST['Tel'];
    $Ville=$_POST['Ville'];
    $Adresse=$_POST['Adresse'];
$lien=connectMaBasi();
 $sql ="UPDATE `client` SET `id`='$ID',`nom`='$Nom',`prenom`='$Prenom',`email`='$Email',
 `pwd`='$pwd',`pwdc`='$pwdc',`tel`='$Tel',`ville`='$Ville',`adresse`='$Adresse' WHERE ID=$ID";
mysqli_query ($lien,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($lien));
// on ferme la connexion
mysqli_close($lien);
}    

//affichage des clients
if(isset($_POST['affich_clt'])){
    header("location:lists_clt.php");
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
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,
                     400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                
                <div class="card-body">
                    <h2 class="title">Formulaire Client</h2>
                    <form method="POST" action="">
                    <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="ID" name="ID">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Nom" name="Nom">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Prénom" name="Prenom">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="Email">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Mot de passe" name="pwd">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Confirmation de mot de passe" name="pwdc">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Tél" name="Tel">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Ville" name="Ville">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="textarea" placeholder="Adresse" name="Adresse">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green"  type="submit" name="valider" >Enregister</button>
                            <button class="btn btn--pill btn--green" type="submit" name="supprimer" >Supprimer</button>
                            <button class="btn btn--pill btn--green"  type="submit" name="modifier" >Modifier</button>
                            <button class="btn btn--pill btn--green" type="submit" name="affich_clt" >Les Clients </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
