<?php session_start(); ?>
<html>
<head>
  <title>Personality Prediction Using Source Code Analysis</title>
  <link rel="stylesheet" type="text/css" href="look/css1.css"/>
</head>
<body>
   <h1>Hello <?php echo $_SESSION['username']; ?></h1>       
   <script> 
       function effectm1()
       {
         var a=document.getElementById("m1");
         a.style.backgroundColor="green";
       }
        function effectbackm1()
       {
         var a=document.getElementById("m1");
         a.style.backgroundColor="pink";
       }
   </script>
  <h1 id="m1" onmouseover="effectm1()" onmouseout="effectbackm1()">Personality Prediction Using Source Code Analysis </h1>
                                                           
  <div id="d1">
	<!-- <div id="d2">
	  <h2><a href="viewprofile.php">View Profile</a></h2>
    </div>  -->
	<div id="d3">
	  <h2><a href="home.php">Upload Source Code</a></h2>
	</div>
	<div id="d6">
	  <h2 ><a id="l1" href="logout.php">Logout</a></h2>
	</div>
  </div>
</body>
</html>
