<?php 
include_once ("../bdd/bdd.php");
function pauseItem($id,$pause){
	if($id == "")
		return;
	global $bdd;
	print_r($id,$pause);
	print_r("frfdsfsdfdsf");
	$stmt = mysqli_prepare ($bdd,"UPDATE produits SET `Mise en attente` = ? WHERE id_produits = ?");
	$stmt->bind_param("ii",$pause,$id);
	$stmt->execute();
}                                                             

?>