<?php
if(is_dir($paths["config"])) {
	$dir = opendir($paths["config"]);
	while($file = readdir($dir)) {
		echo $file . "</br>";
	}
	closedir($dir);
}else{
	exit("config folder no found.");
}
