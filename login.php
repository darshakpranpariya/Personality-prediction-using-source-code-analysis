<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
	<link rel="stylesheet" type="text/css" href="look/ls.css">
</head>
<body>
	<div class="login-box">
		<img src="a.png" class="avtar"/>
		<h1>LogIn Here</h1>
		<form action="loginhandling.php" method="post">
			<p>UserName</p>
			<input type="text" name="username" placeholder="Enter UserName" required>
			<p>PassWord</p>
			<input type="password" name="unlock" placeholder="Enter PassWord" required>
			<input type="submit" value="LogIn">
			<a href="#">Forgot PassWord</a>
		</form>
	</div>
</body>
</html>