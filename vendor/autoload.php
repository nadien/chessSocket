<?php
require "jwage/SplClassLoader.php";

$classLoader = new \PRS\SplClassLoader;
$classLoader->register();

$classLoader->addNamespace("\\",$paths["vendor"]);
