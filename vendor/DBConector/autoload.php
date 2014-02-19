<?php
if( !isset($config) )
	die("Config files no found");
if( !array_key_exists("app",$config) || !array_key_exists("database",$config))
	die("Config files no found");

$abstractsDir = __DIR__ . "/abstracts/";
$implementsDir = __DIR__ . "/implements/";

//Load the abstract class
require_once $abstractsDir . "DBDrive.php";

//Load implements for each database drive
require_once $implementsDir . "MySQLDrive.php";

//Load the bridge class
require_once "DBConector.php";
