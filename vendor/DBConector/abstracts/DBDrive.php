<?php
abstract class DBDrive {

	public $affected_rows;
	public $connect_errno;
	public $connect_error;
	
	protected $conn;

	abstract public function close();//close connection
	abstract public function get_charset();//return and collate object
	
	abstract public function query($sql);//exec a single query

	public function scape_string($str)
	{
		$search = array("\\","\0","\n","\r","\x1a","'",'"');
        $replace = array("\\\\","\\0","\\n","\\r","\Z","\'",'\"');
		return str_replace( $search, $replace, $str );
	}
	
	abstract public function fetch_all_columns();
	abstract public function fetch_all();
	abstract public function fetch_array();
	abstract public function fetch_assoc();
	abstract public function fetch_object();
	abstract public function fetch_row();
	abstract public function field_is_null();

	abstract public function select_db($db);
	
	public function set_charset($charset)
	{
		return $conn->query("SET NAMES " . $charset);
	}
};
