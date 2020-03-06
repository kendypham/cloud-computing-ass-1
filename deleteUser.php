<?php
$line = $_GET["employeeId"];
$data = file_get_contents('gs://data_employee/Employees.csv');
$data = str_replace('"', "", $data);
$data = str_replace($line, '', $data);
$file = fopen('gs://data_employee/Employees.csv', "w");
fwrite($file, $data);
header("Location: index");