<?php 
require $_SERVER['DOCUMENT_ROOT']."/controleur/stock_ajouter.php";

if($_POST){
	 ajouter($_POST["nom"],$_POST["prix"],$_POST["ingredients"],$_POST["descriptif"],$_POST["type"]);
	 header("location:javascript://history.go(-1)");
}
function afficherAjout(){
	$html = "";
}
?>

	<form action="vue/ajouter_savon.php" class="form-inline" method="POST">
		 <div class="form-group mb-2">
		<label for='nom'>nom du produit</label><input type="text" id='nom' name='nom'/>
		 </div>

 <div class="form-group mb-2">
		<label for='prix'>prix du produit</label><input type="text" id='prix' name='prix'/>
 </div>
		<label for='ingredients'>ingredients </label><input type="text" id='ingredients' name='ingredients'/>

 <div class="form-group mb-2">
		<label for='descriptif'>description</label><input type="text" id='descriptif' name='descriptif'/>	
 </div>

 <div class="form-group mb-2">
		<label for='type'>type</label><input type="text" id='type' name='type'/>
 </div>

 <div class="form-group mb-2">
		<button type="submit">ajouter</button>
 </div>

	</form>

