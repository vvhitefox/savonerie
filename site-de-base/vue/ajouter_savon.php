<?php 



require $_SERVER['DOCUMENT_ROOT']."/controleur/stock_ajouter.php";
require $_SERVER['DOCUMENT_ROOT']."/controleur/stock_pause.php";


if($_POST){
	ajouter($_POST["nom"],$_POST["prix"],$_POST["ingredients"],$_POST["descriptif"],$_POST["type"]);
	echo '<meta http-equiv="refresh" content="0;url='.sprintf("%s://%s%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['SERVER_NAME'],"").'/admin_produits.php" />';
}
function afficherAjout(){
	$html = "";
}
?>

	<form action="vue/ajouter_savon.php" method="POST">
		<div class="form-group mb-2">
		<label for='nom'>nom du produit </label><input class="input-block-level" type="text" id='nom' name='nom'/>
		<label for='prix'>prix du produit </label><input class="input-block-level" type="text" id='prix' name='prix'/>
		<label for='ingredients'>ingredients </label><input class="input-block-level" type="text" id='ingredients' name='ingredients'/>
		<label for='descriptif'>description </label><input class="input-block-level" type="text" id='descriptif' name='descriptif'/>	
		<label for='type'>type </label><input class="input-block-level" type="text" id='type' name='type'/>
		</div>

		<button class="btn btn-primary btn-lg btn-block"  type="submit">ajouter</button>


	</form>

