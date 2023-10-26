<?php

require_once("../models/DirectoryModel.php");

$employeeModel = new DirectoryModel();
$employees = $employeeModel->getEmployees();
