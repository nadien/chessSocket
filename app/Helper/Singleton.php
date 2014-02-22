<?php
class Singleton {
    protected static $instances;

    protected function __construct()
	{
		trigger_error("Clone is not allowed.", E_USER_ERROR);
	}

    final private function __clone() { }

    public static function getInstance() {
        $class = get_called_class();

        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new $class;
        }
        return self::$instances[$class];
    }
};
