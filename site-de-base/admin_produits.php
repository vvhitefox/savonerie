<?php
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
include_once 'admin_footer.php';
?>
