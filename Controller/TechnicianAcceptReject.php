<?php
 include '../Model/Dao.php';
    $dat=new Dao();
  
    $num=$_POST['jnum'];
    $tex=$_POST['reson'];
    $cus=new Customer();
    $tec=new Technician();
    $cus->setId($_POST['uid']);
    $tec->setUid($_SESSION['technicianid']);

  if (isset($_POST['accept'])) {
  	  $dat->changeTechnitionStateAccept($num);
  	  $dat->insertStatus($cus,$tec);
      header("Location: ../View/Dashbords/Dashbords.php?checkTechJobnote=ok&success=ok");

  }elseif (isset($_POST['reject'])) {
 	  $dat->changeTechnitionStateReject($num,$tex);
 	  header("Location: ../View/Dashbords/Dashbords.php?checkTechJobnote=ok&successnot=ok");
  }
 










?>