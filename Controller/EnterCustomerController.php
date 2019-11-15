<?php
  
   require'../Model/Dao.php';


   $dat=new Dao();
   $cus=new Customer();

   
   $cus->setFname($_POST['fname']);
   $cus->setLname($_POST['lname']);
   $cus->setPassword($_POST['password']);
   $cus->setNic($_POST['nic']);
   $cus->setId($_SESSION['customerid']);
   
   if($_POST['password']==$_POST['rpassword'])
   {
   	$dat->insertCustomerDetais($cus);
   	header("Location: ../View/Dashbords/Dashbords.php?changeprofile=ok&update=succes");
   }
   else{
    header("Location: ../View/Dashbords/Dashbords.php?changeprofile=ok&updaten=nsucces");

   }

