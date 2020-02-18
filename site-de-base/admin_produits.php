<?php
function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
	""
  );
}

if(isset($_GET["reload"])){
		echo url();
		 echo "<meta http-equiv='refresh' content='0; url=".strtok(url(), '?')."/admin_prduits.php>";
}

include_once 'admin_header.php';
include_once 'vue/stock.php';

?>
	<div class="container">
		<h1>Liste des produits:</h1>
		<div class="container">	
			<?php echo show_stock(); 
			include $_SERVER['DOCUMENT_ROOT']."/vue/ajouter_savon.php";
			?>
		</div>
	</div>




<?php
if(isset($_GET["id"]) && isset($_GET["pause"])){
		pauseItem($_GET["id"],$_GET["pause"]);
		echo '<meta http-equiv="refresh" content="0;url='.sprintf("%s://%s%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['SERVER_NAME'],"").'/admin_produits.php" />';
}
include_once 'admin_footer.php';
?>
