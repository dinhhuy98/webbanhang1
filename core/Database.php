<?php 
	class Database extends WebConfig
	{
		public $conn;
		function __construct(){
			$this->conn=mysql_connect($this->host,$this->user,$this->pass,$this->db);
			mysqli_set_charset($this->conn,'utf8');
		}
	}
 ?>