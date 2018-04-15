<?php 
  $db = mysqli_connect('127.0.0.1', 'root', 'Prakash1', 'student_php');

  if(isset($_POST['update_user'])){
    $oldStudentID = mysqli_escape_string($db, $_POST['oldStudentID']);

    $verify_query = "SELECT * FROM student WHERE id='$oldStudentID' LIMIT 1;";
    $result = mysqli_query($db, $verify_query);

    if(mysqli_num_rows($result) == 1){
      $name = mysqli_escape_string($db, $_POST['name']);
      $email = mysqli_escape_string($db, $_POST['email']);
      $year = mysqli_escape_string($db, $_POST['year']);
      $dob = mysqli_escape_string($db, $_POST['dob']);

      $update_query = "UPDATE student SET name='$name', email='$email', year='$year', dob='$dob' WHERE id='$oldStudentID'";

      mysqli_query($db, $update_query);

      header('location: index.php');
    }
  }
?>

<form action="update.php" method="post">
  <div class="input-group">
    <label for="oldStudentID">Student ID</label>
    <input type="text" name="oldStudentID">
  </div>
  <br><br>
  <div class="input-group">
    <label for="name">Name</label>
    <input type="text" name="name">
  </div>
  <div class="input-group">
    <label for="email">Email</label>
    <input type="email" name="email">
  </div>
  <div class="input-group">
    <label for="year">Year</label>
    <input type="text" name="year">
  </div>
  <div class="input-group">
    <label for="dob">Date of Birth</label>
    <input type="date" name="dob">
  </div>
  <div class="input-group">
    <button type="submit" name="update_user">Update</button>
  </div>
</form>