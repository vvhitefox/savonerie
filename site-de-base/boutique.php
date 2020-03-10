<?php 
	include_once("header.php");
	include_once("vue/select_product_types.php");
?>


	<div class="col-lg-8 offset-lg-2 col-12 mt-3">

		<div class="card border">

		  	<div class="card-header align-center d-flex justify-content-center bg-dark text-white">
		  	Recherche
		  	</div>

		  	<div class="card-body">

		  		<form method="post" action="controlleur/affiche_produits_boutique.php">

		  			<div class="row">

					  	<?php echo show_select(); ?>

						<input class="form-control col-lg-3 offset-lg-1 d-none d-lg-block d-xs-none" name="recherche" id="" placeholder="Rechercher...">

						<input class="form-control col-lg-3 offset-lg-1 col-6 btn btn-outline-success " type="submit" value="Rechercher">

					</div>

				</form>

			</div>

		</div>
	</div>

	<div class="col-sm-8 offset-sm-2 mt-3">
		<div class="row">

		<?php
		
		if (isset($_SESSION['produits'])){
			
			affiche_tableau_produits($_SESSION['produits']);
			
		}

		else if (isset($_GET['type'])){
			
			affiche_tableau_produits(recup_liste_produits_type($_GET['type']));
			
		}

		else{

			affiche_tableau_produits(recup_liste_produits());

		}

		unset($_SESSION['produits']);
		

		?>
		</div>
	</div>

<?php include_once("footer.php"); ?>

