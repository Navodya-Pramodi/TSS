<?php

require'../Model/Dao.php';
require_once __DIR__ . '/vendor/autoload.php';

$dat=new Dao();
if (isset($_POST['monthly'])) {
    


$sentence="<center><h2 style='color:#42aaf5;'>Monthly  Repairing Summary</h2></center><h3style='color:#42aaf5;'>
Touch Solution System(Pvt) Ltd</h3></center><P>Dell Laptops that received at last month:".$dat->DellCount()."</P><P>Hp Laptops that received at last month:".$dat->HpCount()."</P><br><br><p>Dell Laptops that repair under warrenty:".$dat->WarrentyCountD()."</p></P><p>HP Laptops that repair under warrenty:".$dat->WarrentyCountH()."</p></P><p>Dell Laptops that repair under charging:".$dat->ChargeableCountD()."<p>HP Laptops that repair under charging:".$dat->ChargeableCountH()."</p>";
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($sentence);
$mpdf->Output();

   
}else{


}

  

?>