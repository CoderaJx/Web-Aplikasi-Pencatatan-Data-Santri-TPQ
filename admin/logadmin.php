<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
</head>
<body>

	<form action="cek-admin.php" method="POST">
		<label>Username</label>
		<input type="text" name="username" required>

		<br><br>

		<label>Password</label>
		<input type="password" name="password" required>

		<br><br>

		<input type="submit" name="submit" value="LOGIN">
	</form>

</body>
</html>