<?php
   
   require'../Model/Dao.php';


   $dat=new Dao();
   $cus=new Customer;
   $tec=new Technician;
   $mes=new Messege();



   $mes->setContent($_POST['messege']);
   $cus->setId($_SESSION['customerid']);
   $val=$dat->selectTechnicianId($cus);
   $tec->setUid($val);
   $dat->CustomerSendMessge($mes,$cus,$tec);

   header("Location: ../View/Dashbords/Dashbords.php?checkrepairstatus=ok"); 
   



?>