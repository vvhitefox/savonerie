<?php 

function show_select(){
	global $bdd;
	
	$stockTypes = recup_types_list(); 	

	$result = "	<select class=\"form-control col-lg-3 offset-lg-1 d-none d-lg-block d-xs-none\" form=\"formulaire\" id=\"type2\" name='categorie'>
		 <option value=\"toutes\">Toutes les catégories</option>
";

		for($i = 0;$i < count($stockTypes);$i++){
				 $result = $result."<option>";
				 $result = $result.$stockTypes[$i]["nom"];
				 $result = $result."</option>";
				}

	$result = $result."</select>";
	return $result;
}

?>