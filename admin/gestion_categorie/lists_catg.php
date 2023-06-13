<?php
    require '../../cnx.php';

    if(isset($_POST['affich_clt'])){
        header("location:lists_catg.php");
    }
      $lien = connectMaBasi();
      $sql = "SELECT * FROM `categorie` " ;
      $RecupererDonSql = mysqli_query($lien,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($lien));
                                           
               ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
 

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->


    <!-- Vendor CSS-->


    <!-- Main CSS-->
    <link href="../css/main.css" rel="stylesheet" media="all">
</head>

<body  style=" background:linear-gradient(blue,0.3%, pink);">
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins" >
        <div class="wrapper wrapper--w780" >
            <div class="card card-3">
            <strong><em>LISTES DES CATEGORIES</em></strong></td>;
              <table border="1" style="text-align:center">             
            <tr style='color:white;text-align:center'>
                  <th>ID</th>
                  <th>Nom</th>
            </tr>';
         
           <?php while ($ligne = mysqli_fetch_array ($RecupererDonSql,1)) {
              echo "<tr>";
                  foreach ($ligne as $colonne){
                       echo " <td  style='color:white;width: 190px;text-align:center;height: 100px'>" .$colonne. "</td>";
                     }
                       }
                           echo "</tr>";
                           echo "</table>";  
                           mysqli_close($lien);
                          
                            ?>

                
            </div></div></div>
                

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
