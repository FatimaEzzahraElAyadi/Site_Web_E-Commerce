<?php

require 'cnx.php';
$lien = connectMaBasi();
$cats= "SELECT * FROM categorie";
$catc=mysqli_query($lien,$cats);
?>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">EnPoche</a>
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catégorie</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<?php 
							while($cata=mysqli_fetch_assoc($catc)){
								
			
							?>
                                <li><a class="dropdown-item" href="cat.php?cat=<?php echo $cata['ID']; ?>"><?php echo $cata['Nom']; ?></a></li>
								<?php } ?>
                                
                            </ul>
                        </li>
						<form method="get" action="recherche.php">
						<li class="input-group">
						<input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Chercher un produit" required>
              <span class="input-group-btn" id="searchBtn" style="display:none;">
                  <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i> </button>
              </span></li></form>
                    </ul>
					
                    <!--<form class="d-flex" >
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Panier
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
							
                        </button>
                    </form>-->
					<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
					<!--<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">-->
					<li><form class="d-flex" action="votre_panier.php">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Panier
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
							
                        </button>
                    </form></li>
					<li class="nav-item"><a class="nav-link active" href="authentification.php">SE CONNECTER</a></li>
                    <li class="nav-item"><a class="nav-link active" href="creation_compte.php">S'INSCRIRE</a></li></ul></div>
                </div>
            </div>
        </nav>
        <!-- Header-->
        
   
  
