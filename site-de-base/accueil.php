<?php include_once("header.php"); ?>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/alala.jpg"  class="d-block w-100 img-fluid" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/alala.jpg" class="d-block w-100 img-fluid" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/alala.jpg" class="d-block w-100 img-fluid" alt="...">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

	<div class="col-lg-8 offset-lg-2 col-8 offset-2 mt-5 mb-5 text-center">
		<h1>Quel sens ?</h1>
	</div>

	<div class="col-lg-8 offset-lg-2 col-8 offset-2 mt-3 mb-3 text-center">
		<h3>Fabrication Française : Savon solide et cosmétique</h3>
	</div>

	<div class="col-lg-8 offset-lg-2 col-8 offset-2 mt-5 mb-5 text-center">
		<h3>Authenticité / Produits simples et sains</h3>
	</div>

	<div class="">
		<div class="col-lg-4 offset-lg-2 col-8 offset-2 mt-5 mb-5 text-center">
			<h2>Produits haute qualité</h2>

			<p class="text-left mt-3 mb-3">Nous travaillons avec des huiles, des beurres, des huiles essentielles bio et des argiles qui sont totalement naturels. Tous les ingrédients utilisés dans les savons sont choisis pour leurs propriétés et leur qualité.</p>
		</div>
	</div>

	<hr class="col-lg-8 col-8 separator">

	<div class="col-lg-8 offset-sm-2 col-8 offset-2 mt-5 mb-5 text-center">
		<h2>Santé / Bien être</h2>
	</div>

	<div class="">
		<div class="col-lg-4 offset-lg-6 col-8 offset-2 mt-3 mb-3 text-center">
			<h2>Respect de la peau</h2>
			<p class="text-right mt-3 mb-3">La méthode de saponification à froid permet de préserver les vertus les ingrédients, nos produits sont respectueux de la peau en protégeant le film hydrolipidique. Un surgras de 6% minimum est ajouté à chaque produit de la gamme pour apporter une propriété particulière à chaque savon. 
			Respecte tous les types de peau, il est très adapté aux peaux sensibles et atopiques</p>
		</div>
	</div>

	<hr class="col-lg-8 col-8 separator">

	<div class="col-lg-8 offset-sm-2 col-8 offset-2 mt-5 mb-5 text-center">
		<h2>Engagement / Eveil des consciences</h2>
	</div>

	<div class="">
		<div class="col-lg-4 offset-lg-2 col-8 offset-2 mt-3 mb-3 text-center">
			<h2>Respect de L’humain et son environnement : Entreprise éco-responsable</h2>

			<p class="text-left mt-3 mb-3">Un process écologique, le procédé traditionnel de saponification diminue de 90% les dépenses énergétiques (par rapport aux méthodes industrielles) : 100% biodégradables.
			Utiliser un savon à froid, c’est aussi faire le choix de respecter la nature en ne rejetant rien de toxique dans les eaux usées.</p>
		</div>
	</div>

	<hr class="col-lg-8 col-8 separator">

	<div class="">
		<div class="col-lg-4 offset-lg-6 col-8 offset-2 mt-3 mb-3 text-center">
			<h2>Zéro déchets</h2>

			<p class="text-right mt-3 mb-3">Avec un savon à froid, vous adoptez une démarche « zéro-déchet » et évitez de remplir vos poubelles de flacons plastiques.</p>
		</div>
	</div>

	<hr class="col-lg-8 col-8 separator">

	<div class="">
		<div class="col-lg-4 offset-lg-2 col-8 offset-2 mt-3 mb-3 text-center">
			<h2>Réglementation / Formation</h2>

			<p class="text-left mt-3 mb-3">Nos savons sont fabriqués en conformité avec la règlementation cosmétique actuelles. Aujourd’hui, notre atelier est inscrit auprès de l’Agence Nationale de la Sécurité du Médicament (ANSM), et toutes les formulations de nos produits ont été validées par un expert en Toxicologie. La Savonnerie respecte la Norme Iso 22716 des Bonnes Pratiques de fabrication Cosmétique.</p>
		</div>
	</div>

	

<div class="">
			<div class="col-lg-8 offset-lg-2 col-10 offset-1 mt-3 mb-3">
				<div class="card border">

				  	<div class="card-header align-center d-flex justify-content-center bg-success text-white">
				  	Pourquoi ne pas vous inscrire à la Newsletter ?
				  	</div>

				  	<div class="card-body">

				  		<form method="post" action="modele/sendEmail.php" id="postform">
				  			<div class="row">
								 <div class="col-lg-2 d-none d-sm-block text-center">E-mail:</div> 
								 <input name = "email" class = "form-control col-lg-4 col-6"  onkeyup="ValidateEmail()" id="champemail" placeholder="Email" />
								<input type="submit" class="btn btn-outline-success col-lg-4 col-5 offset-1 disabled" onclick="sendEmail()" id="boutonvalidation" value="s'inscrire" style="float:left">
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>

<?php include_once("footer.php"); ?>