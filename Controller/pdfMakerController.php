<?php

require'../Model/Dao.php';
require_once __DIR__ . '/vendor/autoload.php';

$dat=new Dao();
$cus=new Customer();
$cus->setId($_SESSION['customerid']);
$datastore=array();
$datastore=$dat->retreiveJobNoteDetails($cus);
$sentence='';

   foreach ($datastore as $printer) {
   	$sentence1="<strong>username</strong>:".$printer['username']."<br>";
   	$sentence2="<strong>userpassword</strong>:".$printer['password']."<br>";
   	$sentence3="<strong>serial number of device:</strong>".$printer['serialnumber']."<br>";
   	$sentence4="<strong>jobb added at:</strong>".$printer['date']."<br>";
   	$sentence5="<strong>Customers full name at:</strong>".$printer['cfname']." ".$printer['clname']."<br>";
   	$sentence6="<strong>Type:</strong>".$printer['type']."<br>";
   	$sentence7="<strong>Technician full name:</strong>".$printer['tfname']." ".$printer['tlname']."<br>";
   	$sentence8="<strong>Technician email:</strong>".$printer['temail']."<br>";
   	$sentence9="<strong>Model:</strong>".$printer['model']."<br>";
   	$sentence0="<strong>Brand:</strong>".$printer['brand']."<br>";
   	
   	
   }
$sentence.="<h2 style='color:red;'>job note details</h2><p>following are the details related to your service</p><br>".$sentence1."".$sentence2."".$sentence3."".$sentence4."".$sentence5."".$sentence6."".$sentence7."".$sentence8."".$sentence9."".$sentence0;
  

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($sentence);
$mpdf->Output();
  

?>