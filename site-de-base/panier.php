<?php include_once("header.php");

 ?>

<div class="col-lg-8 offset-lg-2 pt-5">
	<div class="card">
		<h5 class="card-header">Votre panier</h5>
		<?php

		if (!isset($_SESSION['panier'])){

			echo "	<div class='card-body'>
						<h5 class='card-title'>Aucun article dans le panier</h5>
						<p class='card-text'>Veuillez ajouter des produits dans votre panier depuis la partie boutique</p>
					</div>";
			

		}

		else{

			affiche_panier();

		}


		?>
		

		<div class="card-footer">
			<form method="post" action="controlleur/vider_panier.php">
				<div class="col-lg-3">
			    	<button type="submit" class="form-control btn btn-outline-danger">Vider</button>
			    </div>
		    </form>
	  	</div>
	</div>
</div>
<?php include_once("footer.php"); ?>