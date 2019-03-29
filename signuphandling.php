<?php
	session_start();
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mn=$_POST['mn'];
	$conn=mysqli_connect('localhost', 'root');
	mysqli_select_db($conn,'ppusc');
	$q="INSERT INTO user1 (username, email, password, mn) VALUES ('$username', '$email', '$password', '$mn')";
	$result = mysqli_query($conn,$q);
	if($result==1)
		header('location:http://localhost/personality%20prediction/login.php');
	else
		header('location:http://localhost/personality%20prediction/signup.php');
	mysqli_close($conn);
?>

