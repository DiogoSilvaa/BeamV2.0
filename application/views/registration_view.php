<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<div class="container">
		<div class="header">
			<h2>Register</h2>
		</div>
		<form action="registration.php" method="post">
			<div>
				<label for="username">Username :</label>
				<input type="email" name="email">
			</div>
			<div>
				<label for="email">Email :</label>
				<input type="email" name="email">
			</div>
			<div>
				<label for="password">Password :</label>
				<input type="password" name="password_1">
			</div>
			<div>
				<label for="password">Confirm password :</label>
				<input type="password" name="password_2">
			</div>
			<button type="submit" name="reg_user"> Submit </button>
			<p>Already a user?<a href="login_view.php"><b>Log in</b></a></p>
		</form>
	</div>
</body>
</html>