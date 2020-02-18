<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/bdd/bdd.php";
function ajouter($nom,$prix,$ingredients,$descriptif,$type){
	global $bdd;
	$stmt = mysqli_prepare ($bdd,"INSERT INTO Produits (nom,prix,ingredients,descriptif,type) VALUES (?,?,?,?,?)");
	$stmt->bind_param("sisss", $nom,$prix,$ingredients,$descriptif,$type);
	$stmt->execute();
}                                                             

?>