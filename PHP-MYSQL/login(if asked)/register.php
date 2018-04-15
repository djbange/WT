<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Registration</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

  <form action="register.php" method="post">
    <?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a Member? <a href="login.php">Sign In</a>
		</p>
  </form>
</body>
</html>
