<?php if(!defined("APLICATION")) die();
class DBManager extends PDO
{
	 public static $drives = array(
        "MySQL"      => array(true, "mysql"),
        "PostgreSQL" => array(true, "pgsql"),
	"SQLite2"    => array(false, "sqlite2"),
        "SQLite3"    => array(false, "sqlite")
    );

	public function __construct()
	{
		if(isset($config) && array_key_exists("database",$config))
			throw new ChessSocketException("Database config no found.");
		
		$environment = $config["app"]["environment"];
		$dbconfig = $config["database"][$environment];
		$drive = strtolower($dbconfig["drive"]);

		$supported = false;
		foreach($drives as $key => $value) {
			if(strtolower($key) == $drive)
				$supported = $key;
		}

		if(!$supported)
			throw new ChessSocketException("Unsupported database drive.");
		
		$driveInfo = self::$drive[$supported]; //It conteins a bool if the DBMS is server and the name of the drive PDO
		$dsnString = $driveInfo[1] + ":"; //It will contein a string like "sqlite2:/path/to/database.sq2" or "mysql:host=xxx;port=xxx;dbname=xxx"
		if($driveInfo[0]) {
			$dsnString .= "host=" . $dbconfig["host"] . ";";
			$dsnString .= "dbname=" . $dbconfig["dbname"] . ";";
			
			if(array_key_exists("port",$dbconfig))
			   $dsnString .= "port=" . $dbconfig["port"] . ";";

			$user = $dbconfig["user"];
			$pass = $dbconfig["pass"];

			parent::__construct($dsnString,$user,$pass);
		}else{
			$path   = $config["paths"]["databases"];
			$dbname = $dbconfig["dbname"];
			$dsnString .= $path . $dbname;
			parent::__construct($dsnString);
		}
   		parent::__construct();
		
	}

};
