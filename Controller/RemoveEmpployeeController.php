<?php

  require'../Model/Dao.php';


  $nic=$_POST['nic'];
  $rep=new Receiptionist;
  $tec=new Technician;
  $dat=new Dao();

  $rep->setNic($nic);
  $tec->setNic($nic);
  if($dat->retRNic($rep)=='0'&&$dat->retTNic($tec)=='0'){
  	 header("Location: ../View/Dashbords/Dashbords.php?remove=ok&successn=ok");
  }else{
    $s=$dat->RemoveReceiption($rep);
   $d= $dat->RemoveTechnician($tec);
  	header("Location: ../View/Dashbords/Dashbords.php?remove=ok&success=ok");
  }
 