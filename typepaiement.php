<?php
 include "cnx.php";

session_start();
$lien = connectMaBasi();


    if (isset($_POST['submit'])) {
        require_once 'panier.php';
        $panier=new Panier('produits');
        $listeProduits=$panier->getPanier();
        foreach($listeProduits as $pr2){
    
     $pr="SELECT * FROM produit where Reference=".$pr2['id'];
     $pr1=mysqli_query($lien,$pr) or die('Erreur SQL!'.$pr.'<br/>'.mysqli_error($lien));
     $pr2=mysqli_fetch_assoc($pr1);
    
        $qte =   $_SESSION['qte'];
        $id_prd = $_SESSION['id_prd'];
        $modp = $_POST['mp'];
        $nom =  $_POST['nom'];
        $_SESSION['nom'] = $nom;
        $_SESSION['modpaiement'] = $modp;
    
  $sql = "INSERT INTO `ligne_commande`( `mode_paiement`, `id_prod`,`date`,`quantite`) VALUES ('$modp','$id_prd',NOW(),'$qte')";
  mysqli_query($lien,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($lien));
  // on ferme la connexion
  mysqli_close($lien);




if($_SESSION['modpaiement'] == "livraison"){

    header("location:livraison.php");

}elseif($_SESSION['modpaiement'] == "par cart"){
    header("location:parcart.php");


}else {

    echo "S'il vous plais choisi le mode de paiement <a href='paiement.php'>Retour</a>";

}
        }}
    ?>
    


