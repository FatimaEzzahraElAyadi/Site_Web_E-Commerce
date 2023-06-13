<?php

session_start();
if(isset($_SESSION['nom']) && isset($_SESSION['pwd'])){

    header("location:paiement.php");
}else{
    header('location:creation_compte.php');
}

?>