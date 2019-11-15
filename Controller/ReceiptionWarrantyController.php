<?php

     require'../Model/Dao.php';

     $data=new Dao();
     $device=new Device();

     $device->setSerialnu($_POST['snumber']);
     $device->setBrand($_POST['brand']);
      
      if ($data->receiptionistWarrantyAvailability($device)!="") {

		 $lexdate=strtotime($data->receiptionistWarrantyAvailability($device));
		 $todat=strtotime(date('Y/m/d'));

				    if($lexdate>$todat){
				    	$_SESSION['warantystatus']="ok";
				    	$_SESSION['warantydate']=$data->receiptionistWarrantyAvailability($device);
				    	header("Location: ../View/Dashbords/Dashbords.php?warrantycheck=ok&warrentycan=ok");

				   
				    }else{
				       $_SESSION['warantystatusbad']="notok";
		header("Location: ../View/Dashbords/Dashbords.php?warrantycheck=ok&warrentycannot=ok");
				         }
      }else{


      	header("Location: ../View/Dashbords/Dashbords.php?warrantycheck=ok&warrentycannot=ok");
      }
    



?>