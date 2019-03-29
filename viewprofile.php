<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-color: pink;
    background-size: cover;
  }
.box {
  position: absolute;
  top: 15%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 900px;
  padding: 20px;
  background: rgba(150, 98, 98, 0.5);
  box-sizing: border-box;
  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  }
  .con {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
  padding: 20px;
  background: rgba(150, 98, 98, 0.9);
  box-sizing: border-box;
  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  border: 5px solid red ;
  }
  .con1 {
  position: absolute;
  top: 65%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
  padding: 20px;
  background: rgba(150, 98, 98, 0.9);
  box-sizing: border-box;
  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  border: 5px solid red ;
  }
  .con2 {
  position: absolute;
  top: 90%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
  padding: 20px;
  background: rgba(150, 98, 98, 0.9);
  box-sizing: border-box;
  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  border: 5px solid red ;
  }
.box h1{
   margin: 0 0 30px;
   padding: 0;
   top: 50%;
   left: 50%;
   color: #F1C40F;
   box-shadow: 10px 15px 25px rgba(0,0,0,.5);
   text-align: center;

}
.con1 h2{
	text-align: center;
	font-size: 30px;
	color: violet;
	text-decoration: underline;
}
.con .l {
	border-radius: 10px;
  border: 5px solid green ;
}
.con h1{
  color:  #7DCEA0;
}
.con1 h1{
  color: #fff;
}
a{
  text-decoration: none;
}
</style>
</head>
<body>
<div class="box">
     <h1>Pesonality Prediction Using Source Code Analysis</h1>
   </div>
   <div class="con">
   		<div class="l">
      <h1 align="center"><?php echo $_SESSION['username']; ?> </h1>
  	</div>
  </div>
  <div class="con1">
    <?php
      $t = file_get_contents( "12.txt" );
    ?>
      <h2>Your Personality is</h2>
      <h1 align="center"><?php echo $t; ?> </h1>
  </div>
  <div class="con2">
      <h1 align="center"><a href="logout.php">LogOut</a> </h1>
  </div>
</body>
</html> 
