<?php include_once("header.php");

 ?>

<div class="container-fluid">
	<div class="row h-100">
		<div class="col-lg-8 offset-lg-2 pt-5 pb-5 my-auto">
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
				
				<?php

					if (isset($_SESSION['panier'])){

						echo"

						<div class='card-footer'>

							<div class='row'>

								<div class='col-lg-2 offset-lg-5 text-center pb-3 pt-3'>
								    Coût total : ". total_cout_panier() ." €
								</div>

							</div>

							<div class='row'>

								<div class='col-lg-5 col-5 offset-lg-1 offset-1'>
								    <a href='controlleur/creation_paiement.php'><button class='form-control btn btn-outline-success'>Payer</button></a>
								</div>

								<div class='col-lg-5 col-5'>
								    <a href='controlleur/vider_panier.php'><button type='submit' class='form-control btn btn-outline-danger'>Vider</button></a>
								</div>
			
							</div>

					  	</div>";
					  }
			  	?>

			</div>

		</div>
	</div>
</div>


    <script src="https://js.mollie.com/v1/mollie.js"></script>
    <script src="js/mollie.js"></script>

<?php include_once("footer.php"); ?>