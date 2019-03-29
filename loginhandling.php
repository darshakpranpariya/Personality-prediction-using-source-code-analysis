<?php
	session_start();
	$password='';
	$username = "";
	if(isset($_POST['username'])){
    	$username = $_POST['username'];
	}
	if(isset($_POST['unlock']))
 		$password=$_POST['unlock'];
	$conn=mysqli_connect('localhost', 'root');
	mysqli_select_db($conn,'ppusc');

	$q = "select * from user1 where (username='$username' && password='$password')";
	$result = mysqli_query($conn,$q);
	$row = mysqli_num_rows($result);
	if($row==1){
		$_SESSION['username']=$username;
		header('Location: http://localhost/personality%20prediction/menu.php');
	}
	else{
		header('Location: http://localhost/personality%20prediction/login.php');
	}
	mysqli_close($conn);
?>