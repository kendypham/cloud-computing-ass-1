<?php
function addUser()
{
    $id = uniqid();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
   
    $employees = file_get_contents('gs://data_employee/Employees.csv');
    if (empty($id) && empty($first_name) && empty($last_name) && empty($age) && empty($gender) && empty($phone) && empty($address)) {
        echo "Fields are not empty";
    } else {
        $file = fopen('gs://data_employee/Employees.csv', "w");
        print_r($file);
        if (!empty($employees)) {
            fwrite($file, $employees);
        }
        fwrite($file, "{$id},{$first_name},{$last_name},{$age},{$gender},{$phone},{$address}\n");
        fclose($file);
    }
}
if (isset($_POST["submit"])) {
    addUser();
    header("Location: index");
}
