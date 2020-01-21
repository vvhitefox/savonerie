<?php include_once("header.php"); ?>

<section>
<div class="row align-center d-flex justify-content-center">
	<div>
<select name="categorie" id="cat-produit">
    <option value="">choisir une categorie</option>
    <option value="baume">baume</option>
    <option value="savon">savon</option>
    <option value="shampoing">shampoing</option>
    <option value="huile">coffret cadeau</option>
</select>
</div> 
	<div>
<input type="search" id="site-search"
name="q"
       aria-label="recherche de produit">

<button>recherche</button>
</div> 
</div> 
</section>
<?php include_once("footer.php"); ?>