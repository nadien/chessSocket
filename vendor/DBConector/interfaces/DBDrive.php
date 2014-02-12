interface DBDrive {

	public $insert_id;
	public $connect_errno;
	public $connect_error;
	public $error;
	public $affected_rows;
	public __construct($host,$db,$user,$pass);
	public close();
	public __destruct();
}
