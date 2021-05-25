<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body style="background-color:white">
	<br>
	<center><img src="https://student.umindanao.edu.ph/images/logo-transparent.png" alt="UM STUDENT PORTAL MAIN"style="height: 180px;"></a></center>
	<div style="background-color:#a11e12" class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php"><?php echo display_error(); ?>
	
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>

		<div class="input-group">
			<button style="background-color:#a11e12" type="submit" class="btn" name="login_btn">Login</button>
		</div>

		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>

	</form>

</body>

</html>