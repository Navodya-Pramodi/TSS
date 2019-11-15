<?php

require'../Model/Dao.php';
require_once __DIR__ . '/vendor/autoload.php';

$dat=new Dao();
$rep=new Receiptionist();
$cus=new Customer;
$jn=$_POST['jnum'];
$rep->setTid($_SESSION['receiptionistid']);
$cus->setId($_POST['cid']);
$datastore=array();
$datastore=$dat->DownlordInvoicerecep($rep,$cus,$jn);

   foreach ($datastore as $printer) {
      $sentence1="<div class='row'><div class='col-md-6'><strong>Date</strong>:".date('m-d-y')."<br></div><div class='col-md-6'></div></div><div class='row' style='height: 20px;'></div>";
      $sentence2="<div class='row'><div class='col-md-6'><strong>Technician Id</strong>:".$printer['tid']."<br></div><div class='col-md-6'></div></div><div class='row' style='height: 20px;'></div>";
         $sentence3="<div class='row'><div class='col-md-6'><strong>Customer name</strong>:".$printer['fname']." ".$printer['lname']."<br></div><div class='col-md-6'></div></div><div class='row' style='height: 20px;'></div>";
         $sentence4="<div class='row'><div class='col-md-6'><strong>Device serial number</strong>:".$printer['serialnumber']."<br></div><div class='col-md-6'></div></div><div class='row' style='height: 20px;'></div>";
         $sentence5="<div class='row'><div class='col-md-6'><strong>Total addtional amount:Rs</strong>:".$printer['amount'].".00<br></div><div class='col-md-6'></div></div><div class='row' style='height: 20px;'></div>";

   }
$sentence="<h2 style='color:red;'>Invoice Details</h2><p>following are the details related to your service</p><br>".$sentence1."<br>".$sentence2."".$sentence3."".$sentence4."".$sentence5;
  

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($sentence);
$mpdf->Output();
  

?>