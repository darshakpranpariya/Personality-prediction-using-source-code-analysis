<?php
	session_start();
	$resume='';
	// if(!empty($_FILES['resume']['tmp_name']) 
 //     && file_exists($_FILES['resume']['tmp_name'])) {
 //    	$resume= file_get_contents($_FILES['resume']['tmp_name']);
	//  }
	if(isset($_GET['resume']))
		$resume = $_GET['resume'];
	 copy($resume,"11.txt");
	 echo "Wait for 10 Seconds.................";
	 sleep(12);
	 header('location:http://localhost/personality%20prediction/answer.php');
	// $command = escapeshellcmd('E:/wamp64/www/Personality Prediction/
	// 	personality prediction.py');
	// $output = shell_exec($command);
	// echo "$output";
	//  $output = shell_exec("personality prediction.py");
	//  echo "$output";
	//  $conn=mysqli_connect('localhost', 'root');
	//  mysqli_select_db($conn,'ppusc');
	//  $file = file_get_contents('12.txt');
	//  $un = $_SESSION['username'];
	// $q="insert into user1 VALUES (sf = '$file') where username='$un";
	 
	// // echo "$un";
	//  $result = mysqli_query($conn,$q);
	//  echo $result;
	//  if($result==1)
	//  	echo "Inserted successfully";
	//  else
	//  	echo "Not Inserted";
	//  mysqli_close($conn);
?>