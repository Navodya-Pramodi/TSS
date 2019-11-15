<?php
   
   require'../Model/Dao.php';


   $dat=new Dao;
   $tec=new Technician;
   $cus=new Customer;
   $inv=new Invoice;

   $inv->setAmount($_POST['amount']); 
   $cus->setId($_POST['cid']);
   $tec->setUid($_SESSION['technicianid']);  


   $res=$dat->selectRecId($cus,$tec);
   $dat->addInvoiceDetails($inv,$cus,$tec,$res);

   header("Location: ../View/Dashbords/Dashbords.php?updatetstatus=ok&success=ok");
?>