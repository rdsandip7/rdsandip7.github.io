<?php 
class Connection{
	private $host;
	private $user;
	private $password;
	private $db_name;

	public $conn;
	public $sql;
	protected $res;
	protected $error;
	protected $numRows;
	protected $affRows;

	public $data=array();

	public function __construct($h="localhost",$u="root",$p="",$db="db_group75"){
		$this->host=$h;
		$this->user=$u;
		$this->password=$p;
		$this->db_name=$db;

		$this->conn=mysqli_connect($this->host,$this->user,$this->password,$this->db_name)
				or die($this->error=mysqli_error($conn));
	}
	public function __destruct(){
		mysqli_close($this->conn);
	}
}//class ends


