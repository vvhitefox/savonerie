<?php include_once("header.php"); ?>

<div class="row">

	<div class="col-sm-8 offset-sm-2 mt-5 mb-5 text-center">
		<h1>Quel sens ?</h1>
	</div>

	<div class="col-sm-8 offset-sm-2 mt-3 mb-3 text-center">
		<h3>Fabrication Française : Savon solide et cosmétique</h3>
	</div>

	<div class="col-sm-8 offset-sm-2 mt-3 mb-3 text-center">
		<h3>Authenticité / Produits simples et sains</h3>
	</div>

	<div class="col-sm-8 offset-sm-2 mt-5 mb-5">
		<h4>Produits haute qualité</h4>
	</div>

	<div class="col-sm-8 offset-sm-2 mt-2 mb-2">
		<p>Nous travaillons avec des huiles, des beurres, des huiles essentielles bio et des argiles qui sont totalement naturels. Tous les ingrédients utilisés dans les savons sont choisis pour leurs propriétés et leur qualité. </p>	
	</div>

	<div class="col-sm-8 offset-sm-2 mt-3 mb-3 text-center">
		<h2>Santé / Bien être</h2>
	</div>

	<div class="col-sm-8 offset-sm-2 mt-5 mb-5">
		<h4>Respect de la peau</h4>
	</div>

	<div class="col-sm-8 offset-sm-2 mt-2 mb-2">
		<p>La méthode de saponification à froid permet de préserver les vertus les ingrédients, nos produits sont respectueux de la peau en protégeant le film hydrolipidique. Un surgras de 6% minimum est ajouté à chaque produit de la gamme pour apporter une propriété particulière à chaque savon. </p>
		<p>Respecte tous les types de peau, il est très adapté aux peaux sensibles et atopiques</p>	
	</div>

	<div class="col-sm-8 offset-sm-2 mt-3 mb-3 text-center">
		<h2>Engagement / Eveil des consciences</h2>
	</div>

	<div class="col-sm-8 offset-sm-2 mt-5 mb-5">
		<h4>Respect de L’humain et son environnement : Entreprise éco-responsable</h4>
	</div>

	<div class="col-sm-8 offset-sm-2 mt-2 mb-2">
		<p>Un process écologique, le procédé traditionnel de saponification diminue de 90% les dépenses énergétiques (par rapport aux méthodes industrielles) : 100% biodégradables</p>
		<p>Utiliser un savon à froid, c’est aussi faire le choix de respecter la nature en ne rejetant rien de toxique dans les eaux usées.</p>
	</div>

	<div class="col-sm-8 offset-sm-2 mt-3 mb-3 text-center">
		<h2>Zero déchets / Agir pour demain</h2>
	</div>

	<div class="col-sm-8 offset-sm-2 mt-2 mb-2">
		<p>Avec un savon à froid, vous adoptez une démarche « zéro-déchet » et évitez de remplir vos poubelles de flacons plastiques.</p>
	</div>

	<div class="col-sm-8 offset-sm-2 mt-3 mb-3 text-center">
		<h2>Réglementation / Formation</h2>
	</div>

	<div class="col-sm-8 offset-sm-2 mt-2 mb-2">
		<p>Nos savons sont fabriqués en conformité avec la règlementation cosmétique actuelles. Aujourd’hui, notre atelier est inscrit auprès de l’Agence Nationale de la Sécurité du Médicament (ANSM), et toutes les formulations de nos produits ont été validées par un expert en Toxicologie. La Savonnerie respecte la Norme Iso 22716 des Bonnes Pratiques de fabrication Cosmétique.</p>
	</div>

	
</div>

<div class="row">
			<div class="col-sm-8 offset-sm-2 mt-3 mb-3">
				<div class="card border">

				  	<div class="card-header align-center d-flex justify-content-center bg-success text-white">
				  	Pourquoi ne pas vous inscrire à la Newsletter ?
				  	</div>

				  	<div class="card-body">
				  		<form method="post" action="accueil.php" id="postform">
				  			<div class="row">
								 <div class="col-sm-4 text-center">E-mail:</div> 
								 <input name = "email" class = "form-control col-sm-4 ml-3"  onkeyup="ValidateEmail()" id="champemail"/>
								<input type="submit" class="btn btn-outline-success col-sm-2 ml-2 disabled" onclick="sendEmail()" id="boutonvalidation" value="s'inscrire" style="float:left">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

<?php include_once("footer.php"); ?>
