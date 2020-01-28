<?php include_once("header.php"); ?>
<script>
			function ValidateEmail() 
				{
				 var button = document.getElementById("boutonvalidation");
			     var champ = document.getElementById("champemail");
				 if(!champ.value){
					 champ.style.backgroundColor = "white";
					 return;
				 }
				 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(champ.value))
				  {
					button.classList.remove('disabled');
					//button.classList.submit = true;
					champ.style.backgroundColor = "lightgreen";
					return;
				  }
				    button.classList.add('disabled');
					//button.type = ""	;
					champ.style.backgroundColor = "#FF7777";
				}
				
				function sendEmail(){
					 var champ = document.getElementById("champemail");
					 if(!champ.value){
						 alert("veulliez entrez un email");
						 return;
					 }
					 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(champ.value))
					  {
						alert("vous receverrez un email de confirmation");
						return;
					  }
						alert("veulliez entrez un email valide");
				}
	</script>

<div class="row">
	<div class="col-sm-8 offset-sm-2 mt-3">
		<div class="card border">

		  	<div class="card-header align-center d-flex justify-content-center bg-success text-white">
		  	Pourquoi ne pas vous inscrire a la newsletter ?
		  	</div>

		  	<div class="card-body">
		  		<form method="post" action="accueil.php" id="postform">
		  			<div class="row">
						 <div class="col-sm-4 text-center">e-mail:</div> 
						 <input name = "email" class = "form-control col-sm-4 ml-3"  onkeyup="ValidateEmail()" id="champemail"/>
						<input type="submit" class="btn btn-outline-success col-sm-2 ml-2 disabled" onclick="sendEmail()" id="boutonvalidation" value="s'inscrire" style="float:left">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row col-sm-8 offset-sm-2">
	<section>
	<h1>Quel sens ?</h1>
	<h2><ul>

		<li>	FRABRICATION FRANCAISE : Savon solide et Cosmétique</li>
		<li>	AUTHENTICITE / PRODUITS SIMPLE ET SAINS</li>

	</ul></h2>
	<h3>Produits haute qualité</h3>
	<p>Nous travaillons avec des huiles, des beurres, des huiles essentielles bio et des argiles qui sont totalement naturels. Tous les ingrédients utilisés dans les savons sont choisis pour leurs propriétés et leur qualité. </p>
	<h2>
		<li>	SANTE / BIEN ËTRE </li>
	</h2>
	<h3>Respect de la peau</h3>
	<p>la méthode de saponification à froid permet de préserver les vertus les ingrédients,  Nos produits sont respectueux de la peau en protégeant le film hydrolipidique. Un surgras de 6% minimum est ajouté à chaque produit de la gamme pour apporter une propriété particulière à chaque savon. </p>
	<p>Respecte tous les types de peau, il est très adapté aux peaux sensibles et atopiques</p>
	<h2>
		<li>	ENGAGEMENT / EVEIL DES CONSCIENCES</li>
	</h2>
	<h3>Respect de L’humain et son environnement : Entreprise écoresponsable</h3>
	<p>Un process écologique, le procédé traditionnel de saponification diminue de 90% les dépenses énergétiques (par rapport aux méthodes industrielles) : 100% biodégradables</p>
	<p>Utiliser un savon à froid, c’est aussi faire le choix de respecter la nature en ne rejetant rien de toxique dans les eaux usées.</p>
	<h2>
		<li>	ZERO DECHET /AGIR POUR DEMAIN</li>		
	</h2>
	<p>Avec un savon à froid, vous adoptez une démarche « zéro-déchet » et évitez de remplir vos poubelles de flacons plastiques.</p>
	<h2>
		<li>	REGLEMENTATION/ Formation</li>
	</h2>
	<p>Nos savons sont fabriqués en conformité avec la règlementation cosmétique actuelles. Aujourd’hui, notre atelier est inscrit auprès de l’Agence Nationale de la Sécurité du Médicament (ANSM), et toutes les formulations de nos produits ont été validées par un expert en Toxicologie. La Savonnerie respecte la Norme Iso 22716 des Bonnes Pratiques de fabrication Cosmétique.</p>


	</section>
</div>
<?php include_once("footer.php"); ?>
