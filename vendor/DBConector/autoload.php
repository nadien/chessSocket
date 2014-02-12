<?php
if( !array_key_exist("app",$config) || !array_key_exist("database",$config))
	die("Config files no found");

$interfacesDir = __DIR__ . "interfaces/";
$implementsDir = __DIR__ . "implements/";

//Load the abstract class
require_once $interfacesDir . "DBDrive.php";

//Load implements for each database drive
require_once $implementsDir . "MySQLDrive.php";

//Load the bridge class
require_once "DBConector.php";
