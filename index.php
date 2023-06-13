

<!DOCTYPE html>
<html lang="en">
    <?php include 'include/header.php'; ?>
	
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
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="description.php?id=<?php echo $prod2['Reference']; ?>">View options</a></div>
                            </div>
                            
							<form method="GET" action="ajouter_panier.php">
							<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
							<div class="text-center"><input type="hidden" name="id" value="<?php echo $prod2['Reference']; ?>" />
                            
							<input class="btn btn-outline-dark" type="submit" value="Add to cart" /></div>
                            <input  style="padding:10px;width: 140px;margin-left: 37px; margin-top: 20px; align-items: center ; border:0;box-shadow:0 0 15px 4px rgba(0,0,0,0.06);" type="text" name="qte" value="1"/>

							</div></form>
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
