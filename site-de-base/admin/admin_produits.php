<<<<<<< HEAD
<?php
include_once 'admin_header.php';
?>
	<div class="container">
		<h1>Liste des produits:</h1>
		<div class="container">	kjgifivbb
		<?php 
			include_once '../bdd/bdd.php';
include $_SERVER['DOCUMENT_ROOT']."/controleur/stock_ajouter.php";
		?>
		</div>
	</div>


<?php
include_once 'admin_footer.php';
=======
<?php
include_once 'admin_header.php';
?>
	<div class="container">
		<h1>Liste des produits:</h1>
		<div class="container">	
		<?php 
			include_once '../bdd/bdd.php';
			
		?>
		</div>
	</div>

<?php
include $_SERVER['DOCUMENT_ROOT']."/controleur/stock_ajouter.php";
?>



<?php
include_once 'admin_footer.php';
>>>>>>> 15b94ba201fd2781686304beece74160dd265b93
?>