<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
</head>
<body style="text-align: center;">
  <div class="header">
    <h2>Register</h2>
  </div>
  <form action="register.php" method="post">
    <div class="input-group">
      <label for="studentID">Student ID</label>
      <input type="text" name="studentID">
    </div>
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
      <button type="submit" name="reg_user">Register</button>
    </div>
  </form>
    <br><br>
    <a href="update.php">Update</a>
    <a href="delete.php">Delete</a>

  <table>
    <tr>
      <th>Student ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Year</th>
      <th>Date of Birth</th>
    </tr>
    <?php include('student_data.php'); ?>
  </table>
</body>
</html>

