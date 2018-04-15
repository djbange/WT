<?php

$db = mysqli_connect('127.0.0.1', 'root', 'Prakash1', 'student_php');

if(isset($_POST['reg_user'])){
  $studentID = mysqli_escape_string($db, $_POST['studentID']);
  $name = mysqli_escape_string($db, $_POST['name']);
  $email = mysqli_escape_string($db, $_POST['email']);
  $year = mysqli_escape_string($db, $_POST['year']);
  $dob = mysqli_escape_string($db, $_POST['dob']);

  $query = "INSERT INTO student VALUES('$studentID','$name','$email','$year','$dob');";

  mysqli_query($db, $query);

  header('location: index.php');
}

?>