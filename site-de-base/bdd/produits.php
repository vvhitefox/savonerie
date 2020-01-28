<?php

	function cree_table_produits() {

		global $bdd; 

		$sql = "CREATE TABLE IF NOT EXISTS produits
				(id_produits	INT AUTO_INCREMENT,
				nom				VARCHAR(45) NOT NULL ,
				prix 			FLOAT NOT NULL,
				ingredients		VARCHAR(500) NOT NULL,
				descriptif		VARCHAR(500) NOT NULL,
				type            VARCHAR(100) NOT NULL,
				CONSTRAINT pk_produits PRIMARY KEY (id_produits)
				);
				";
		mysqli_query($bdd,$sql);
		return 0;
	}

	function cree_table_newsletter() {
		global $bdd; 

		$sql = "CREATE TABLE IF NOT EXISTS newsletter
				(id_email	INT AUTO_INCREMENT,
				email			VARCHAR(100) NOT NULL
				);
				";
		mysqli_query($bdd,$sql);
		return 0;
	}
