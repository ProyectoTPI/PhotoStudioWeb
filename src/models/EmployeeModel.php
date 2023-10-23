<?php
require_once("../config/Connection.php");

class EmployeeModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Connection();
        $this->conn = $this->conn->getConnection();
    }

    public function getEmployees()
    {
        try {
            $query = "SELECT * FROM empleados";
            $stmt = $this->conn->prepare($query);

            if ($stmt->execute()) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }
    
    public function deleteEmployee($employeeId)
{
    try {
        $query = "DELETE FROM empleados WHERE empleado_id = :employeeId";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':employeeId', $employeeId, PDO::PARAM_INT);

        return $stmt->execute();
    } catch (PDOException $e) {
        return false;
    }
}
}
?>
