<?php
$appPath    = __DIR__ . "/../app/";
$vendorPath = __DIR__ . "/../vendor/";

$paths = array(

	"config" => __DIR__ . "/../config/",
	
	"app"    => $appPath,
	
	"vendor" => $vendorPath,


    // Paths to app/ sub-folders

    "controller" => $appPath . "controller",
    
    "view"       => $appPath . "view",

    "model"      => $appPath . "model",

    "cache"      => $appPath . "cache",

);
