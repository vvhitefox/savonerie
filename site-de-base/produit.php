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



	<div class="row">

		<div class="col-sm-10 offset-sm-1">

			<div class="row mt-5 mb-5">

				<div class="col-sm-6">

					<img src='https://www.lepetitmarseillais.com/sites/lpm_fr/files/taco-images/le-savon-de-marseille-le-produit-authentique-qui-a-tout-bon-ihp.jpg' class='card-img-top img-fluid mx-auto d-block img-thumbnail' alt=''>


					<form>

					  <div class="form-row mt-3">

					    <div class="col-sm-4">
					      	<input type="number" class="form-control" placeholder="0" min="0" onKeyDown="return false">
					    </div>

					    <div class="col-sm-2 d-flex align-items-center">
					    	Quantité
					    </div>

					    <div class="col-sm-4 offset-sm-2">
					      	<button type="submit" class="form-control btn btn-success"> <i class="material-icons">shopping_cart</i> </button>
					    </div>

					  </div>

					</form>

				</div>

				<div class="col-sm-6">

					<div> <?php echo $produit['nom'] ; ?></div>

					<br/>

					<div> Description </div>

					<br/>

					<div class="text-grey text-produit-size"> <?php echo $produit['descriptif'] ; ?></div>

					<br/>

					<div> Informations complémentaires </div>

					<br/>

					<div> Ingrédients </div>

					<br/>

					<div class="text-grey text-produit-size"> <?php echo $produit['ingredients'] ; ?></div>

					<br/>

				</div>

			</div>

			<div class="col-sm-12 text-center">
				Produits similaires
			</div>

			<div class="row m-3">

				<div class="col-sm-4 text-center">
					<img src='https://www.univeda.fr/5866-large_default/savon-saponifie-a-froid-au-basilic-savon-stories.jpg' class='card-img-top img-fluid mx-auto d-block img-thumbnail' alt=''>
				</div>

				<div class="col-sm-4 text-center">
					<img src='https://www.univeda.fr/5866-large_default/savon-saponifie-a-froid-au-basilic-savon-stories.jpg' class='card-img-top img-fluid mx-auto d-block img-thumbnail' alt=''>
				</div>

				<div class="col-sm-4 text-center">
					<img src='https://www.univeda.fr/5866-large_default/savon-saponifie-a-froid-au-basilic-savon-stories.jpg' class='card-img-top img-fluid mx-auto d-block img-thumbnail' alt=''>
				</div>

			</div> 

		</div>

	</div>

<?php include_once("footer.php"); ?>