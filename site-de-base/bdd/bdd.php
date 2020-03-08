<?php

namespace _PhpScoper5e55118e73ab9;

session_start();

global $bdd;

$mysql_host = "localhost";
$mysql_login = "l3_info_1";
$mysql_password = "Wqifc34q";
$bd_name ="l3_info_1";
$bdd = mysqli_connect($mysql_host, $mysql_login,$mysql_password, $bd_name);
mysqli_set_charset($bdd, "utf8");
/*
 * Make sure to disable the display of errors in production code!
 */
\ini_set('display_errors', 1);
\ini_set('display_startup_errors', 1);
\error_reporting(\E_ALL);
require_once __DIR__ . "/../vendor/autoload.php";

/*
 * Initialize the Mollie API library with your API key.
 *
 * See: https://www.mollie.com/dashboard/developers/api-keys
 */
$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey("test_5aWmmzw7gUFmqmDyA9J4Amvkw2BhUz");


