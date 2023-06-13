<?php include 'include/header.php';
if(isset($_GET['id'])){
	$pr="SELECT * FROM produit where Reference=".$_GET['id'];
	$pr1=mysqli_query($lien,$pr) or die('Erreur SQL!'.$pr.'<br/>'.mysqli_error($lien));
  } 
?>
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
				<?php while($prod2=mysqli_fetch_assoc($pr1)){ ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo $prod2['Image']; ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $prod2['Nom']; ?></h5>
									<?php echo $prod2['Description']; ?>
                                    <!-- Product price-->
                                    <h6 class="fw-bolder"><?php echo $prod2['Prix']." DH"; ?> </h6>
									
                                </div>
                            </div>
                            <!-- Product actions-->
                           
							
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
		
		<?php include 'include/footer.php'; ?>