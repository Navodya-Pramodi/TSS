<?php
 session_start();
  if(!isset($_SESSION['counter'])){
      $_SESSION['counter']=0;  	
  	  $_SESSION['counter']=$_SESSION['counter']+6;
  }else{
$_SESSION['counter']=$_SESSION['counter']+3;
 

  }
   
   header("Location: ../View/Dashbords/Dashbords.php?checkrepairstatus=ok");
