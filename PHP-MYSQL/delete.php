<?php
  $db = mysqli_connect('127.0.0.1', 'root', 'Prakash1', 'student_php');

  if(isset($_POST['delete_user'])){
    $studentID = mysqli_escape_string($db, $_POST['studentID']);

    $verify_query = "SELECT * FROM student WHERE id='$studentID' LIMIT 1;";
    $result = mysqli_query($db, $verify_query);

    if(mysqli_num_rows($result) == 1){
      $delete_query = "DELETE FROM student WHERE id='$studentID'";

      mysqli_query($db, $delete_query);

      header('location: index.php');
    }
  }
?>

<form action="delete.php" method="post">
  <div class="input-field">
    <label for="studentID">Student ID</label>
    <input type="text" name="studentID">
  </div>
  <div class="input-field">
    <button type="submit" name="delete_user">Delete Student</button>
  </div>
</form>