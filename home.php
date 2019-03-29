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
    background: url('1.jpg');
    background-size: cover;
  }
.box {
  position: absolute;
  top: 35%;
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
  top: 65%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
  padding: 20px;
  background: rgba(150, 98, 98, 0.9);
  box-sizing: border-box;
  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  }
.box h1{
   margin: 0 0 30px;
   padding: 0;
   top: 50%;
   left: 50%;
   color: rgba(10, 4, 4, 0.9);
   box-shadow: 10px 15px 25px rgba(0,0,0,.5);

   text-align: center;

}


.box .upload label{
  position: absolute;
 
  padding: 10px 0;
  
  pointer-events: none;
  color: white;
  text-align: center;
  text-shadow: 3px solid white;
}
.con .upload input[type="submit"]
{
  width: 100%;
  background: none;

  border: 2px solid #4caf50;
  outline: none;
  color: #fff;
  font-size: 19px;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
  text-align:center; 
}
.con .upload input[type="file"],input[type="text"]
{
background: none;
 width: 87%;
  border: 2px solid #4caf50;
  outline: none;
  color: yellow;
  font-size: 18px;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
  text-align:center; 
}
::placeholder{
  color: yellow;
}
</style>
</head>
<body>


<div class="box">
     <h1>Pesonality Prediction Using Source Code Analysis</h1>
   </div>
   <div class="con">
<form action="homephp.php" method="get" enctype="multipart/form-data">
  <div class="upload">
  <label align="center"><h2>Upload text file of your source code</h2></label>
  <input type="text" placeholder="Enter program name" required> 
<input type="file" value="Select File" name="resume" required></div><br />
<div class="upload">
  <input type="submit" name="" value="Submit file">
</div>

</form>
</div>

</body>
</html> 
