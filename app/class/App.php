<?php
class App {

	private static $instance;

	private function __construct()
	{
	}

	public static function singleton()
	{
		if(!isset(self::$instance))
			self::$instance = new __CLASS__;

		return self::$instance;
	}
	
	public function __clone()
	{
		trigger_error("Clone no allowed.",E_USER_ERROR);
};
