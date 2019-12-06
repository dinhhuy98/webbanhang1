<?php 
	class Database extends WebConfig
	{
		public $conn;
		function __construct(){
			$this->conn=mysqli_connect($this->host,$this->user,$this->pass,$this->db) or die ('KHONG THE KET NOI VOI DATABASE');
			mysqli_set_charset($this->conn,'utf8');
		}
		function queryAll($sql){
			$result=mysqli_query($this->conn,$sql);
			$a=array();
			while($row=mysqli_fetch_assoc($result)){
				$a[]=$row;
			}
			return $a;
		}
	}
 ?>