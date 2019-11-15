<?php
  
  include'../Model/Dao.php';
  $dat=new Dao();



  $persentage=$_POST['persentage'];
  $tec=$_POST['tid'];
  $cus=$_POST['cid'];
  $content=$_POST['content'];

  $dat->UpdateStatusTechnician($persentage,$tec,$cus,$content);


header("Location: ../View/Dashbords/Dashbords.php?updatetstatus=ok&success=ok");

?>