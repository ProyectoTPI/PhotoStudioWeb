<?php
class Connection {
	private $host = getenv("HOST");
	private $username = getenv("USERNAME");
	private $password = getenv("PASSWORD");
	private $database = getenv("DATABASE");
	private $conn;

	public function __construct() {
		try {
			$connection_string = "mysql:host=$this->host;dbname=$this->database;charset=utf8";
		} catch (\Throwable $th) {
			//throw $th;
		}
	}

	public function getConnection() {
	}
}

?>