<?php
$libs = array

foreach($libs as $lib => $file)
require_once $paths["vendor"] . $vendor . "/" . $lib . "/src/" . $file . ".php";
