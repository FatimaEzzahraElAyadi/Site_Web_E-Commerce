

<?php

require 'cnx.php';
$lien = connectMaBasi();
$cats= "SELECT * FROM categorie";
$catc=mysqli_query($lien,$cats);
?>

<!DOCTYPE html>
<html lang="en">


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
                        <li class="nav-item"><a class="nav-link active" href="#!">About</a></li>
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
              </span></li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Panier
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
					<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
					<li class="nav-item"><a class="nav-link active" href="authentification.php">SE CONNECTER</a></li>
                    <li class="nav-item"><a class="nav-link active" href="creation_compte.php">S'INSCRIRE</a></li></ul>
                    <li class="nav-item dropdown" style=" list-style-type: none;">
                    <a class="nav-link active" href="#"  data-bs-toggle="dropdown" style="color: black;">Espace Administration</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">   
                            <a class="dropdown-item" href="gestion_produits/prod.php">Gestion des produits</a>
                            <a class="dropdown-item" href="gestion_clients/client.php">Gestion des clients</a>
                            <a class="dropdown-item" href="gestion_categorie/categorie.php">Gestion des categories</a>
                        </ul>
                    </li>
                      </div>
                     </div>
                      </nav>
        <!-- Header-->
	
	<?php
       $prod="SELECT * FROM produit ";
       $prod1=mysqli_query($lien,$prod);

?> 
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                   <h1 class="display-4 fw-bolder">Welcome to our Website!</h1>
                   <i><h2 class="display-6 fw-bolder">IT'S NICE TO MEET YOU</h2></i>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
				<?php while($prod2=mysqli_fetch_assoc($prod1)){ ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo $prod2['Image']; ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $prod2['Nom']; ?></h5>
                                    <!-- Product price-->
                                    <?php echo $prod2['Prix']." DH"; ?> 
									
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="../description.php?id=<?php echo $prod2['Reference']; ?>">View options</a></div>
                            </div>
							<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
							<div class="text-center"><a class="btn btn-outline-dark mt-auto"   href="../ajouter_panier1.php?id=<?php echo $prod2['Reference']; ?>">Add to cart</a></div>
							</div>
                        </div>
                    </div>
				<?php } ?>
                    
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
