<?php
$conn = mysqli_connect("localhost", "root", "1234", "angularjs");
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
    $name     = mysqli_real_escape_string($conn, $info->name);
    $email    = mysqli_real_escape_string($conn, $info->email);
    $year      = mysqli_real_escape_string($conn, $info->year);
    $dob      = mysqli_real_escape_string($conn, $info->dob);
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO insert_emp_info( name, email, year, dob) VALUES ( '$name', '$email', '$year', '$dob')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $roll    = $info->roll;
        $query = "UPDATE insert_emp_info SET name = '$name', email = '$email', year = '$year', dob = '$dob' WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>