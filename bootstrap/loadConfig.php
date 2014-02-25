<?php
if (is_dir($paths["config"])) { //check config folder
    $dir = opendir($paths["config"]);
    while ($file = readdir($dir)) { //read all files into config folder
        $configFile = $paths["config"] . $file; //get full path to file 
        $module = str_replace(".config.php","",$file); //get the module from format like module.config.php
        if (is_file($configFile)) {
            $config[$module] = require($configFile); //get config array from the file	
        }
    }
    closedir($dir);
} else {
    exit("config folder no found.");//if config folder is no found
}

