<?php
     session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>TSS technologies</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style type="text/css">
    	.bg {
			  background-image: url("Resources/land1.jpg");
  
        	  height: 80vh; 
        

        	  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;

            }
		.modal-body {

			background-color: #000000;

		}
		.t{

			background-color: WHITE;
		}
        .modal-header{

        	background-color: #000000;
        }
         .modal-footer{

        	background-color: #000000;
        }



        .lg{
      background-image: url("Resources/login.jpg");
  
        	  height: 100vh; 
        

        	  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;


   }
            .ct{
      background-image: url("Resources/contacttt.jpg");
  
        	  height: 100vh; 
        

        	  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;


   }        

    </style>
     <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous">
	
			  </script> 
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Slabo+27px&display=swap" rel="stylesheet"> 		  
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">		  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">  
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 		  
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Teko&display=swap" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js" integrity="sha256-arMsf+3JJK2LoTGqxfnuJPFTU4hAK57MtIPdFpiHXOU=" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Mukta&display=swap" rel="stylesheet">

</head>
<body  >	
	<?php
	if (isset($_GET['login'])) 
	{
		require'View/Headers/LoginHeader.php';
		require'View/Bodies/LoginBody.php';
	}elseif(isset($_GET['aboutus'])){
	     require'View/Headers/NotLoggedHeader.php';
	 	 require'View/Bodies/AboutUsBody.php';
	 	 require'View/footer.php';
    
    }elseif(isset($_GET['contact'])){
	 	 require'View/Headers/NotLoggedHeader.php';
	 	 require'View/Bodies/ContactBodies.php';

	                               }elseif(isset($_GET['Waranty'])){

                                            require'View/Headers/NotLoggedHeader.php';
	 	                                    require'View/Bodies/CheckWarrentyExternal.php';


	                               }elseif(isset($_GET['help'])){


	                               	  require'View/Headers/NotLoggedHeader.php';
	 	                              require'View/Bodies/Help.php';
                                      require'View/footer.php';
	                               }else
	                                  {
					if(isset($_SESSION['manager'])||isset($_SESSION['customer'])||isset($_SESSION['receiptionist'])||isset($_SESSION['technician']))
					    {
		                           require'View/Headers/LogoutHeader.php';
		                           require'View/Bodies/HomeBody.php';
								   require'View/footer.php';
			              }else
					      {
						   require'View/Headers/NotLoggedHeader.php';
						   require'View/Bodies/HomeBody.php';
						   require'View/footer.php';
					       }
			 }
	?>
		
	</body>
</html>