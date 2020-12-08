<?php
class Config
{
    public $host_name = 'localhost';
    public $user_name = 'root';
    public $password = '';
    public $database = 'CedHosting';
    public function Connect() {
		$this->conn = new mysqli($this->host_name, $this->user_name, $this->password, $this->database);
		if($this->conn->connect_error) {
			$output  = "Connection Failed " . $this->conn->connect_error ."due to this reason";
		} else {
			$output =  $this->conn;
		}
		return $output;
	}
}


?>