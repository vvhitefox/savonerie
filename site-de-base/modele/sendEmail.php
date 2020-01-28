<?php
$base_dir = realpath(dirname(__FILE__)  ."/". '..') . "/";
include_once("{$base_dir}/bdd/produits.php");

if(!isset($_POST["email"]) || !$_POST["email"]){return;}
sendEmail($_POST["email"]);

function sendEmail($mail){
	global $bdd;

	if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		return;
	}
	
	cree_table_newsletter();
	
	$stmt = mysqli_prepare($bdd,"INSERT INTO newsletter VALUES (NULL,?)");
	if(!$stmt){ echo $bdd->error;return;}
	$stmt->bind_param('s', $mail);
	$stmt->execute();
	$stmt->close();
	
	
}
 ?>