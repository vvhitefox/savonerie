<?php

session_start();

global $bdd;

$mysql_host = "localhost";
$mysql_login = "root";
$mysql_password = "";
$bd_name ="le_vrai_sens";
$bdd = mysqli_connect($mysql_host, $mysql_login,$mysql_password, $bd_name);
mysqli_set_charset($bdd, "utf8");