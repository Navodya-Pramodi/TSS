<?php
   
   require'../Model/Dao.php';


   $dat=new Dao();
   $cus=new Customer;
   $tec=new Technician;
   $mes=new Messege();



   $mes->setContent($_POST['messege']);
   $cus->setId($_POST['cusid']);
   
   $tec->setUid($_SESSION['technicianid']);
   $dat->TecSendMessge($mes,$cus,$tec);
$_SESSION['tem']=$cus->getId();
   header("Location: ../View/Dashbords/Dashbords.php?tecmesseges=ok"); 
   



?>