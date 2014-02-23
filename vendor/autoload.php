<?php
require "PRS/Autoloader.php";

$classLoader = new \PRS\Autoloader;
$classLoader->register();

$classLoader->addNamespace("\\chessCom",$paths["vendor"] ."chessCom/");
