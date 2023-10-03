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

	public function login($username, $password)
	{
		$query_parameters = [$username, $password];

		$connection_obj = new Connection();
		$test_connection = $connection_obj->getConnection();

		$query = "select * from usuarios where usuario = ? and contrasenia = ?";
		$cursor = $test_connection->prepare($query);
		$cursor->execute($query_parameters);
		$re = $cursor->fetch(PDO::FETCH_ASSOC);

		return $re;
	}
}
