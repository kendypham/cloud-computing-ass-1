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
    // $data = file_get_contents('gs://data_employee/Employees.csv');
    $data = fopen("gs://data_employee/Employees.csv", "r");
    $output = fopen('gs://data_employee/temporary.csv', 'w');
    if ($data) {
        while (($line = fgetcsv($data)) !== false) {
            if ($line[0] == $id) {
                $line[1] = $first_name;
                $line[2] = $last_name;
                $line[3] = $age;
                $line[4] = $gender;
                $line[5] = $phone;
                $line[6] = $address;
            }
            fputcsv( $output, $line);
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
