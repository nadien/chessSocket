<?php

define("APPLICATION", "chessSocket");

require_once "paths.php";
require_once "loadConfig.php";

require_once $paths["vendor"] . "autoload.php";

$app = chessSocket\classes\App::getInstance();
