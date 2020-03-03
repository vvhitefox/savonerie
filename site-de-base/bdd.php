<?php

session_start();

global $bdd;

$mysql_host = "localhost";
$mysql_login = "l3_info_1";
$mysql_password = "Wqifc34q";
$bd_name ="l3_info_1";
$bdd = mysqli_connect($mysql_host, $mysql_login,$mysql_password, $bd_name);
mysqli_set_charset($bdd, "utf8");
