<?php
class TransactionModel extends Connection
{

	private $conn;

	public function __construct()
	{
		$this->conn = new Connection();
		$this->conn = $this->conn->getConnection();
	}
	
	public function register($tuples)
	{
		$transactionInsertSQL = "INSERT INTO transacciones (orden_id, estado, monto_final, creacion, cliente_paypal_id, cliente_id)
		VALUES (:id, :status, :value, :creation, :client_paypal_id, :client_id)";
		$stmtTransaction = $this->conn->prepare($transactionInsertSQL);
		$stmtTransaction ->bindParam(':id', $tuples["id"], PDO::PARAM_INT);
		$stmtTransaction->bindParam(':status', $tuples["status"], PDO::PARAM_STR);
		$stmtTransaction->bindParam(':value', $tuples["value"], PDO::PARAM_INT);
		$stmtTransaction->bindParam(':creation', $tuples["creation"], PDO::PARAM_STR);
		$stmtTransaction->bindParam(':client_paypal_id', $tuples["client_paypal_id"], PDO::PARAM_INT);
		$stmtTransaction->bindParam(':client_id', $tuples["client_id"], PDO::PARAM_INT);
		$stmtTransaction->execute();
		return $stmtTransaction->fetchAll(PDO::FETCH_ASSOC);
	}
}
