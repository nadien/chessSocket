<?php
$libs = array(
	"helper"    => "autoload",
	"app"       => "App",
	"chess"     => "ChessGame",
	"dbManager" => "DBManager",
	"exception" => "autoload",
	"fenom"     => "Fenom"
);

foreach($libs as $dir => $file)
	echo $dir . "/" . $file . ".php";
