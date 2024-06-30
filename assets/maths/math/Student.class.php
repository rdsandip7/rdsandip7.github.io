<?php
include_once('connection.class.php');
class Student extends Connection{
	private $StudentName;
	private $rollno;
	private $databasem;
	private $webm;
	private $mathm;
	private $programingm;
	private $networkm;
	
	public function allStudents(){
		$this->sql="SELECT *FROM students";
		$this->res=mysqli_query($this->conn,$this->sql) or die($this->error=mysqli_error($conn));
		$this->numRows=mysqli_num_rows($this->res);
		$this->data = array();
		if($this->numRows>0){
			while($row=mysqli_fetch_assoc($this->res)){
				array_push($this->data,$row);
			}
		}
		return $this->data;
	}
}
?>
