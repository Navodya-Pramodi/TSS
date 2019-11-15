<?php
   
   $updateid=$_POST['idvalue'];
   $removeid=$_POST['removeid'];
   $number=$_POST['skill'];
   $numbers=$_POST['skills'];
   $jnum2=$_POST['jnum'];


   echo$number;
   
   $number=$number+1;
   $numbers=$numbers-1;

   include'../Model/Dao.php';

   $da=new Dao();
   $tec=new Technician();

   $tec->setUid($updateid);
   $da->UpdateManagerChangedJn($tec,$jnum2);
   $da->UpdateCurrentCount($tec,$number);
   $tec->setUid($removeid);
   $da->UpdateCurrentCount($tec,$numbers);

   header("Location: ../View/Dashbords/Dashbords.php?shiftjob=ok");


    