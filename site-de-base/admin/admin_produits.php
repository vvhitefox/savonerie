
<?php
include_once 'admin_header.php';
?>
	<div class="container">
		<?php include_once("../vue/ajouter_savon.php");?>
		<h1>Liste des produits:</h1>
		<div class="container">
		<?php 
			include_once ("../bdd/bdd.php");
include_once ("../controlleur/stock_ajouter.php");
include_once ("../vue/stock.php");
		echo show_stock();
		?>
		</div>
	</div>



<?php
if(isset($_GET["id"]) && isset($_GET["pause"])){
		pauseItem($_GET["id"],$_GET["pause"]);
		echo '<meta http-equiv="refresh" content="0;url='.strtok(sprintf("%s://%s%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']),'?').'" />';
}
include_once 'admin_footer.php';?>
