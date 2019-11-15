<?php

   require'../Model/Dao.php';
   
   $tec=new Technician;
   $dat=new Dao;

   $counts=$dat->RetreiveLastTechnicianIdId();
   $counts++;
   $newUsername=$_POST['fname']."".$counts;
   $newUserpassword=$_POST['fname']."".$counts."##";    
   

   $tec->setNic($_POST['nic']);
   $tec->setFname($_POST['fname']);
   $tec->setLname($_POST['lname']);
   $tec->setAddress($_POST['address']);
   $tec->setEmail($_POST['email']);
   $tec->setPassword($newUserpassword);
   $tec->setUsername($newUsername);
   $tec->setTelephone($_POST['telephone']);


   $dat->insertNewTechi($tec);

   $_SESSION['tusername']=$newUsername;
   $_SESSION['tuserpassword']=$newUserpassword;




   header("Location: ../View/Dashbords/Dashbords.php?tecnicianadd=ok&add=succes");

          
    



