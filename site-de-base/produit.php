<?php include_once("header.php"); ?>

<?php
	
	if ((isset($_GET['id'])) && ($_GET['id'] != null)){

		$id = (int)$_GET['id'];
		$produit = recup_produit($id);

	}

?>

	<div class="col-sm-10 offset-sm-1 mt-5">
		<nav>
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="boutique.php">Toutes les catégories</a></li>
		    <li class="breadcrumb-item"><a href="boutique.php?type=<?php echo $produit['type'] ;?>"> <?php echo $produit['type'] ; ?></a></li>
		    <li class="breadcrumb-item active" aria-current="page"><?php echo $produit['nom'] ; ?></li>
		  </ol>
		</nav>
	</div>



		<div class="col-lg-10 offset-lg-1 col-10 offset-1">

			<div class="row mt-5 mb-5">

				<div class="col-lg-6">

					<img src='https://www.lepetitmarseillais.com/sites/lpm_fr/files/taco-images/le-savon-de-marseille-le-produit-authentique-qui-a-tout-bon-ihp.jpg' class='card-img-top img-fluid mx-auto d-block img-thumbnail' alt=''>


					<form method="post" action="controlleur/ajout_panier.php">

					  <div class="form-row mt-3">

					    <div class="col-lg-5 col-6">
					      	<input type="number" class="form-control" placeholder="1" min="1" name="quantite">
					    </div>

					    <div class="col-lg-5 offset-lg-2 col-6">
					    	<input type="hidden" name="id" value="<?php echo $produit['id_produits'] ;?>">
					      	<button type="submit" class="form-control btn btn-success d-flex align-items-center justify-content-center"> <b> <?php echo $produit['prix']." €" ?> </b> <i class="fas fa-shopping-cart ml-2" style="color: white; vertical-align: middle;"></i> </button>
					    </div>

					  </div>

					</form>

				</div>

				<div class="col-lg-6 mt-3 mb-3 text-center">

					<div> <?php echo $produit['nom'] ; ?></div>

					<br/>

					<hr class="col-lg-4 col-4 separator">

					<div> Description </div>

					<div class="text-grey text-produit-size"> <?php echo $produit['descriptif'] ; ?></div>

					<hr class="col-lg-4 col-4 separator">

					<div> Informations complémentaires </div>

					<div> Ingrédients </div>

					<div class="text-grey text-produit-size"> <?php echo $produit['ingredients'] ; ?></div>

					<hr class="col-lg-4 col-4 separator">

				</div>

			</div>

			<div class="col-lg-12 text-center mt-3 mb-3">
				Produits similaires
			</div>

			<div class="row mt-5 mb-5">

				<div class="col-lg-2 col-4 text-center">
					<img src='https://www.univeda.fr/5866-large_default/savon-saponifie-a-froid-au-basilic-savon-stories.jpg' class='card-img-top img-fluid mx-auto d-block img-thumbnail' alt=''>
				</div>

				<div class="col-lg-2 offset-lg-3 col-4 text-center">
					<img src='https://www.univeda.fr/5866-large_default/savon-saponifie-a-froid-au-basilic-savon-stories.jpg' class='card-img-top img-fluid mx-auto d-block img-thumbnail' alt=''>
				</div>

				<div class="col-lg-2 offset-lg-3 col-4 text-center">
					<img src='https://www.univeda.fr/5866-large_default/savon-saponifie-a-froid-au-basilic-savon-stories.jpg' class='card-img-top img-fluid mx-auto d-block img-thumbnail' alt=''>
				</div>

			</div> 

		</div>

		


<?php include_once("footer.php"); ?>