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
    $data = fopen("gs://data_employee/Employees.csv", "r");
    $output = fopen('gs://data_employee/temporary.csv', 'w');
    if ($data) {
        while (($line = fgetcsv($data)) !== false) {
            if ($line[0] == $id) {
                $line[1] = str_replace('"', "", $first_name);
                $line[2] = str_replace('"', "", $last_name);
                $line[3] = str_replace('"', "", $age);
                $line[4] = str_replace('"', "", $gender);
                $line[5] = str_replace('"', "", $phone);
                $line[6] = str_replace('"', "", $address);
            }
            fputcsv($output, $line);
        }
        fclose($data);
        fclose($output);
        //clean up
        unlink('gs://data_employee/Employees.csv'); // Delete obsolete BD
        rename('gs://data_employee/temporary.csv', 'gs://data_employee/Employees.csv'); //Rename temporary to new
    } else {
        echo "error opening the file.";
    }
}
if (isset($_POST["update"])) {
    updateUser();
    header("Location: index");
}
