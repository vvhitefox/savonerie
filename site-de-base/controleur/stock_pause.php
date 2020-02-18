<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/bdd/bdd.php";
function pauseItem($id,$pause){
	if($id == "")
		return;
	global $bdd;
	$stmt = mysqli_prepare ($bdd,"UPDATE produits SET Miseenpause = ? WHERE id_produits = ?");
	$stmt->bind_param("ii",$pause,$id);
	$stmt->execute();
}                                                             

?>