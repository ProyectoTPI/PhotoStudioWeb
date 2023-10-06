<?php
require_once("Connection.php");

class UserModel extends Connection
{

	private $conn;

	public function __construct()
	{

		$this->conn = new Connection();
		$this->conn = $this->conn->getConnection();
	}

	public function login($username)
	{
		$query_parameters = [$username];

		$connection_obj = new Connection();
		$test_connection = $connection_obj->getConnection();

		$query = "select * from usuarios where usuario = ?";
		$cursor = $test_connection->prepare($query);
		$cursor->execute($query_parameters);
		$re = $cursor->fetch(PDO::FETCH_ASSOC);

		return $re;
	}
}
