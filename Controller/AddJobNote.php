<?php

   require'../Model/Dao.php';


   $device=new Device();
   $customer=new Customer();
   $jobnote=new JobNote();
   $data=new Dao();
   $tec=new Technician();
  

   $number0=$_POST['assigni'];
   $customername=$_POST['cname'];

   $counts=$_POST['skill'];
   $counts=$counts+1; 

   $number=$data->selectuid();
   $number=$number+1;
   $username=$customername."".$number;
   $userpassword=$customername."".$number."#";
   
   $tec->setUid($number0);

   $customer->setUsername($username);
   $customer->setAddress($_POST['caddress']);
   $customer->setTel($_POST['ctelephone']);
   $customer->setEmail($_POST['cemail']);
   $customer->setPassword($userpassword);
   $customer->setId($number);

   $cusN=$customer->getId();

   $device->setBrand($_POST['pbrand']);
   $jobnote->setProblem($_POST['problem']);
   $jobnote->setWarenty($_POST['warrenty']);
   $device->setTypee($_POST['type']);
   $device->setSerialnu($_POST['snumber']);
   $device->setModel($_POST['model']);

   $x=$_SESSION['receiptionistid'];
   $_SESSION['addpassword']=$customer->getPassword();
   $_SESSION['addusername']=$customer->getUsername();

 $data->insertJCustomer($jobnote,$customer,$device,$x);
   
   $data->insertJWDevice($jobnote,$customer,$device,$cusN); 
   $data->insertJobNote($jobnote,$customer,$device,$x,$number0);
   $data-> UpdateCurrentCount($tec,$counts);
   header("Location: ../View/Dashbords/Dashbords.php?JobNote=ok&add=succes");

          
    



