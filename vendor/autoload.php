<?php
//load libraries

//format used in array is like $libs["vendor"]["libName"]["fileToInclude"]
//the folder struct should be like /vendor/libName/src/fileToInclude
$libs = array(

//load chessSocket libraries
	"chessSocket" => array(
		"Helper"   => "autoload",
		"App"       => "App",
		"DBManager" => "DBManager",
		"Exception" => "autoload"
	),

//load template engine
	"bzick" => array("fenom" => "Fenom" )
);

foreach($libs as $vendor => $libraries)
	foreach($libraries as $lib => $file)
	require_once $paths["vendor"] . $vendor . "/" . $lib . "/src/" . $file . ".php";

