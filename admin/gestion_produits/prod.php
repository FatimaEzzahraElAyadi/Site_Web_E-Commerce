<?php
    require '../../cnx.php';
    $lien = connectMaBasi();
//inserstion des donnes
if (isset ($_POST['valider'])){
$Ref = $_POST['Ref']; 
$Nom=$_POST['Nom'];
$Prix=$_POST['Prix'];
$Description=$_POST['Description'];
$Image = 'images./'.$_POST['Image'];
$IdCat=$_POST['IdCat'];
$lien=connectMaBasi();//appel de la fonction de connexion à la BD
$sql = "INSERT INTO `produit`(`Reference`,`Nom`, `Prix`, `Image`, `Description`, `IdCat`) VALUES ('$Ref','$Nom','$Prix','$Image','$Description','$IdCat')";
mysqli_query($lien,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($lien));//execution de la requete

mysqli_close($lien);//fermer la connexion 

}

//suppression des données
if (isset ($_POST['supprimer'])){
  
$Ref = $_POST['Ref']; 
$lien=connectMaBasi();
$sql = "DELETE FROM `produit` WHERE Reference=$Ref";
mysqli_query ($lien,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($lien));
// on ferme la connexion
mysqli_close($lien);
}    


//MAJ des données
if (isset ($_POST['modifier'])){
$Ref = $_POST['Ref']; 
$Nom=$_POST['Nom'];
$lien=connectMaBasi();
 $sql = "UPDATE `produit` set Nom='$Nom'  WHERE Reference=$Ref";
mysqli_query ($lien,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($lien));
// on ferme la connexion
mysqli_close($lien);
}    

//affichage des clients
if(isset($_POST['affich_prod'])){
  header("location:lists_prod.php");}  

                          
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
                    <h2 class="title"> Formulaire produits</h2>
                    <form method="POST" action="">
                    <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Reference " name="Ref">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Nom" name="Nom">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Prix" name="Prix">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="ID Categorie" name="IdCat">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Description" name="Description">
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-3" type="file" placeholder="Image" name="Image">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green"  type="submit" name="valider" >Enregister</button>
                            <button class="btn btn--pill btn--green" type="submit" name="supprimer" >Supprimer</button>
                            <button class="btn btn--pill btn--green"  type="submit" name="modifier" >Modifier</button>
                            <button class="btn btn--pill btn--green" type="submit" name="affich_prod" >Les Produits </button>
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
