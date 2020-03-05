<?php 
function updateUser()
{
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    echo "{$id},{$first_name},{$last_name},{$age},{$gender},{$phone},{$address}\n";
    // $employees = file_get_contents('gs://data_employee/Employees.csv');
    // if (empty($id) && empty($first_name) && empty($last_name) && empty($age) && empty($gender) && empty($phone) && empty($address)) {
    //     echo "Fields are not empty";
    // } else {
    //     $file = fopen('gs://data_employee/Employees.csv', "w");
    //     if (!empty($employees)) {
    //         fwrite($file, $employees);
    //     }
    //     fwrite($file, "{$id},{$first_name},{$last_name},{$age},{$gender},{$phone},{$address}\n");
    //     fclose($file);
    // }
}
if (isset($_POST["update"])) {
    updateUser();
    // header("Location: index");
}