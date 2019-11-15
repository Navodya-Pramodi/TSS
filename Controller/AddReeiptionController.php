<?php

   require'../Model/Dao.php';

 
   $Rep=new Receiptionist(); 

   
   $dat=new Dao;

   $counts=$dat->RetreiveLastReseiptionId();
   $counts++;
   $newUsername=$_POST['fname']."".$counts;
   $newUserpassword=$_POST['fname']."".$counts."##";    
   

   $Rep->setNic($_POST['nic']);
   $Rep->setFname($_POST['fname']);
   $Rep->setLname($_POST['lname']);
   $Rep->setAddress($_POST['address']);
   $Rep->setEmail($_POST['email']);
   $Rep->setPassword($newUserpassword);
   $Rep->setUsername($newUsername);
   $Rep->setTelephone($_POST['telephone']);


   $dat->insertNewReceiption($Rep);

   $_SESSION['rusername']=$newUsername;
   $_SESSION['ruserpassword']=$newUserpassword;




   header("Location: ../View/Dashbords/Dashbords.php?receiptionadd=ok&add=succes");

          
    



