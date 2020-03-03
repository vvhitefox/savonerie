<?php 
include_once "../bdd/bdd.php";
                                                          

	function ajouterProduit($nom,$prix,$ingredients,$descriptif,$type){
	global $bdd;
	

	$stmt = mysqli_prepare($bdd,"INSERT INTO produits (nom,prix,ingredients,descriptif,type,`Mise en attente`) VALUES (?,?,?,?,?,?)");
	$zero = 0;
	$stmt->bind_param('sdsssi', $nom,$prix,$ingredients,$descriptif,$type,$zero);
	$stmt->execute();
	$stmt->close();
}
if (isset ($_POST['nom'],$_POST['prix'],$_POST['ingredients'],$_POST['descriptif'],$_POST['type'])){
ajouterProduit($_POST['nom'],$_POST['prix'],$_POST['ingredients'],
	$_POST['descriptif'],$_POST['type']);
	header('Location: ../admin/admin_produits.php');

}
?>
