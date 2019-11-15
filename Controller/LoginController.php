<?php


include'../Model/Dao.php';


$data=new Dao();
$man=new Manager();
$cus=new Customer();
$tech=new Technician();
$recep=new Receiptionist();


$man->setUsername($_POST['username']);
$man->setPassword($_POST['userpassword']);
$cus->setUsername($_POST['username']);
$cus->setPassword($_POST['userpassword']);
$recep->setUsername($_POST['username']);
$recep->setPassword($_POST['userpassword']);
$tech->setUsername($_POST['username']);
$tech->setPassword($_POST['userpassword']);

if($data->LoginManager($man)==1){

header("Location: ../View/Dashbords/Dashbords.php?tecnicianadd=ok");
}elseif($data->LoginCustomer($cus)==1){

   header("Location: ../View/Dashbords/Dashbords.php?changeprofile=ok");

}elseif($data->LoginReceiptionist($recep)==1){

    header("Location: ../View/Dashbords/Dashbords.php?warrantycheck=ok");


}elseif($data->LoginTechnician($tech)==1){

   header("Location: ../View/Dashbords/Dashbords.php?checkTechJobnote=ok");

}else{
header("Location: ../index.php?login=ok&fail=ok");
}