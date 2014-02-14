<?php
abstract class DBDrive {

	public $affected_rows;
	public $connect_errno;
	public $connect_error;
	
	protected $conn;

	abstract public function close();//close connection
	abstract public function get_charset();//return and collate object
	
	abstract public function multi_query();//exec multiple querys	
	abstract public function next_result();//return the next result for multi_query()
	
	abstract public function query();//exec a single query

	public function scape_string($str)
	{
		$search = array("\\","\0","\n","\r","\x1a","'",'"');
        $replace = array("\\\\","\\0","\\n","\\r","\Z","\'",'\"');
		return str_replace( $search, $replace, $str );
	}
};
