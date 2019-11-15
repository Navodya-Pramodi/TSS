<?php
   require'../Model/Dao.php';


   $dat=new Dao;
   $cus=new Customer;
   $dev=new Device;
   $tec=new Technician;



    $cus->setId($_GET['id']);
    $tec->setUid($_SESSION['technicianid']);
    $number=$dat->selectTechnCount($_SESSION['technicianid']);
    $number=$number-1;
    $dat->UpdateCurrentCount($tec,$number);
    $dat->endWorkTec($tec,$cus);

    header("Location: ../View/Dashbords/Dashbords.php?updatetstatus=ok&success=ok");
?>