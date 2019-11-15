
<form method="post" action="http://localhost/TSS/Controller/DownloadReports.php">
<div class="col-md-9">
  <div class="row" style="height: 20px;"></div>
	<div class="row">
    <div class="col-md-8"><p > Downlord mothly report</p></div>
    <div class="col-md-4"><button type="submit" name="monthly"class="w3-button w3-blue">Download</button>
    </div> 
  </div>

  <div class="row" style="height: 20px;"></div>

</form>
<?php
    $da=array();     
    $conn=mysqli_connect("localhost","root","kaushalya","TSS");
    $sql="SELECT * FROM customer join jobnote on customer.uid=jobnote.cuid where jobnote.acceptc=2;";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        $da[]=$row;
     }
     foreach ($da as $sh) {?>
     <form method="post" action="http://localhost/TSS/Controller/DeliveryReportController.php">
     <div class="col-md-12" style="-webkit-box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);
-moz-box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);
box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);height: 100px;">
        <div class="row" style="height: 20px;"></div>
     	<div class="row">
     	      <div class="col-md-5">Serial number:</div>
     	      <div class="col-md-5"><?php echo$sh['serialnumber'];?></div>	
     	      <input type="hidden" name="cid" value="<?php echo$sh['uid'];?>">
     	       <div class="col-md-2"><button class="w3-button w3-teal">Downlord</button></div>
     	</div>
     	<div class="row">
     		  <div class="col-md-5">Full name:</div>
     	      <div class="col-md-5"><?php echo$sh['lname']." ".$sh['fname'];?></div>
     	</div>

     </div>    
</form>
<?php 

}

?>
</div>