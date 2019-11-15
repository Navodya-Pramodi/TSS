<?php

require'../Model/Dao.php';
require_once __DIR__ . '/vendor/autoload.php';

$dat=new Dao();
$cus=new Customer();
$cus->setId($_POST['cid']);
$datastore=array();
$datastore=$dat->donwnlorDeliverNote($cus);
$sentence='';

   foreach ($datastore as $printer) {
   	$sentence1="<strong>Technician delails</strong><br>Tecnician id:".$printer['username']."<br><br>";

   	$sentence2="<strong>Customer delails</strong><br>Customer Name:".$printer['fname']." ".$printer['lname']."<br><br>";
   	$sentence3="Received Date:".$printer['date']."<br>";
   	$sentence4="Address:".$printer['addre']."<br>";

   	$sentence6="<br><strong>Device Details </strong><br><br>Brand:".$printer['Brand']."<br>";
   	$sentence7="Model:".$printer['model']."<br>";
   	$sentence8="serial number:".$printer['serialnumber']."<br>";
   	
   	
   }
$sentence.="<center><h2 style='color:red;'>Delivery Report</h2></center><p>following are the details related to customer service</p><br>".$sentence1."".$sentence2."".$sentence3."".$sentence4."".$sentence6."".$sentence7."".$sentence8;
  

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($sentence);
$mpdf->Output();
  

?>