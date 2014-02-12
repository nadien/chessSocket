<?php
class DBConector
{
	// the supported drives and bool value if it's server
	public static const $drives array(
		"MySQL" => true,
		"PostgreSQL" => true,
		"SQLite" => false
		);

	public $insert_id;


	private $db_drive;
	private $db_host;
	private $db_name;
	private $db_user;
	private $db_pass;
	private $db_conn;
	private $drive_is_server = false;

	private $implementor;

	public __construct()
	{
		$this->db_drive = $config["database"]["db_drive"];
		$this->db_name  = $config["database"]["db_name"];

		$driveClassName = "";
		foreach(self::$drives as $key => $value) { //each of supported drives
			if( strtolower($key) == $this->db_drive ) { //if setted drive is supported
				$driveClassName = $key . "Drive"; //make the class name like "MySQLDrive"
				$drive_is_server = $value; //it's true if the drive is a drive
			}
		}

		if($drive_is_server) { //if the drive is server, get the host from settings
			$this->db_host = $config["database"]["db_host"]; 
			$this->db_user  = $config["database"]["db_user"];
			$this->db_pass  = $config["database"]["db_pass"];
		} else {
			$this->db_host = NULL;
			$this->db_user = NULL;
			$this->db_pass = NULL;
		}

		if($driveClassName != "")
			$this->implementor = new $driveClassName($this->db_host, $this->db_name, $this->db_user, $this->db_pass);
		else
			throw new Exception("Database drive setted is not supported.");
		
		if($this->implementor->connect_errno)
			throw new Exception("Error connecting to database: " . $this->implementor->connect_error);
	}

	public query($query)
	{
		if($this->implementor->query($query))
			$this->insert_id = $this->implementor->insert_id;
		else
			throw new Exception("Error in database: " + $this->implementor->error);
	}

	public  

	public __destruct()
	{
		$this->implementor->close();
	}
}
