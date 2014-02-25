<?php

define("APPLICATION", "chessSocket");

require_once "paths.php";
require_once "loadConfig.php";

$loader = require_once $paths["vendor"] . "autoload.php";

$loader->add("app\controller", $paths["controller"]);

$app = chessSocket\classes\App::getInstance();
