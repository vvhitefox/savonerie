<?php 



require "../controlleur/stock_ajouter.php";
require "../controlleur/stock_pause.php";

?>
	<script>
	function asd(a)
	{
    if(a==1)
        document.getElementById("formulaire").style.display="none";
    else
        document.getElementById("formulaire").style.display="block";
	}

	</script>
	<button style="margin-left: 80% " onclick="asd(2)">Ajouter un produit</button>
	<button onclick="asd(1)">X</button>
	<form style = "display: none" id="formulaire" action="../controlleur/stock_ajouter.php" method="POST">
		<div class="form-group mb-2">
		<label for='nom'>nom du produit </label><input class="input-block-level" type="text" id='nom' name='nom'/>
		<label for='prix'>prix du produit </label><input class="input-block-level" type="text" id='prix' name='prix'/>
		<label for='ingredients'>ingredients </label><input class="input-block-level" type="text" id='ingredients' name='ingredients'/>
		<label for='descriptif'>description </label><input class="input-block-level" type="text" id='descriptif' name='descriptif'/>	
		<label for='type'>type </label><input class="input-block-level" type="text" id='type' name='type'/>
		</div>
		<button class="btn btn-primary btn-lg btn-block"  type="submit">ajouter</button>


	</form>

