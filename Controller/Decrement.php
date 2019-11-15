<?php
 session_start();
 
$_SESSION['counter']=$_SESSION['counter']-3;
 

  
   header("Location: ../View/Dashbords/Dashbords.php?checkrepairstatus=ok");
