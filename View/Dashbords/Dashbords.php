<?php
 session_start();
     ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style type="text/css">
		.t{

			background-color: WHITE;
		}
		.x{

             height: 100vh;

		}
       
				#myProgress {
				  width: 100%;
				  background-color: #ddd;
				}

				#myBar {
				  width: 1%;
				  height: 30px;
				  background-color: #4CAF50;
}
div.ex3 {
  background-color: lightblue;
  height: 40px;
  width: 200px;  
  overflow-y: auto;
}

     </style>
     <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous">
	
			  </script> 
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Slabo+27px&display=swap" rel="stylesheet"> 		  
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">		  
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 		  
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Teko&display=swap" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js" integrity="sha256-arMsf+3JJK2LoTGqxfnuJPFTU4hAK57MtIPdFpiHXOU=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body onload="movee()">
<?php
  


     if(isset($_SESSION['receiptionist']))
     {
     	require'ReceipDashboard.php';
     }elseif(isset($_SESSION['customer'])){
        require'CustomerDashboard.php';
 }elseif(isset($_SESSION['manager'])){
   require'ManagerDashboard.php';
}
elseif(isset($_SESSION['technician'])){
   require'TechnicianDashbord.php';
}



?>



</body>
</html>