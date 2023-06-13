<?php

session_start();
include 'include/header.php';
require_once 'panier.php';
$panier=new Panier('produits');
$listeProduits=$panier->getPanier();
?>
<?php if(!$listeProduits){ ?>
<p>ERR</p>
<?php }else{ ?>
<div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header">
            <h2>Panier</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class="text-center py-3 px-4" style="min-width: 400px;">Nom &amp; Description</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Prix</th>
                    <th class="text-center py-3 px-4" style="width: 120px;">Quantite</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                    <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                  </tr>
                </thead>
                <tbody>
				
				<?php foreach($listeProduits as $pr2){ ?>
				<tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img  style="width:100px; height:100px; border-radius:500px;" src="<?php echo $pr2['image']; ?>" />
                        <div class="media-body">
                          <a class="d-block text-dark"><?php echo $pr2['nom']; ?></a>
                          <small>
                            <span class="text-muted"><?php echo $pr2['description']; ?> </span>
                            
                          </small>
                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4"><?php echo $pr2['prix']." DH"; ?> </td>
					 <!--<div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>-->
							<form method="GET">
              <td class="text-right font-weight-semibold align-middle p-4"><?php echo $pr2['qte']; ?> </td>
                    <td class="text-right font-weight-semibold align-middle p-4" id="prix_totale"><?php echo ($pr2['qte']*$pr2['prix']) ." DH"; ?> </td>
                    <td class="text-center align-middle px-0"><a href="supprimer_panier.php?id=<?php echo $pr2['id']; ?>" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">Supprimer</a></td>
                  </tr>

                  </form>
        <?php } ?>
		
		<?php } ?>
		 </tbody>
              </table>
            </div>
            <!-- / Shopping cart table -->
        
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
              
                <div class="text-right mt-4">
                  <label class="text-muted font-weight-normal m-0">le prix total</label>
                  <?php 
                      $somme =0;
                    
                      foreach($listeProduits as $pr2){

                        $somme += $pr2['qte']*$pr2['prix'];
                       } ?>
                      
                       
                  <div class="text-large"><strong><?php  echo $somme." DH"; ?></strong></div>

                </div>
              </div>
            </div>
        
           
			  <div>
			  <ul class="nav navbar-nav">
			  <li>
          <form class="d-flex" action="index.php">
			       <button class="btn btn-outline-dark" type="submit"> Continue Achat <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
             </button>
            </form></li><br>
            <?php $_SESSION['qte'] = $pr2['qte']; $_SESSION['id_prd'] = $pr2['id'] ;?>
			  <li><form  method="GET" class="d-flex" action="traitement_paiement.php">
                        <button class="btn btn-outline-dark" type="submit">

                            Terminer
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
							
                        </button>
                    </form></li></ul></div>
            
        
          </div>
      </div>
  </div>
		
		