<div class="col-md-9">
	<div class="row" style="height: 20px;"></div>
<?php
     $da=array();     
    $conn=mysqli_connect("localhost","root","kaushalya","TSS");
    $sql="SELECT * FROM customer join jobnote on customer.uid=jobnote.cuid JOIN invoice on invoice.CustomerId=customer.uid where invoice.createuid='".$_SESSION['receiptionistid']."';";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        $da[]=$row;
     }
     foreach ($da as $sh) {
     	
    
?>
       
	<div class="row" style="-webkit-box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);
-moz-box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);
box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);height: 90px;">
	   <div class="col-md-9">
	   	 
	   	   <div class="row"><div class="col-md-12"><?php echo"Device serial number:".$sh['serialnumber']."<br>
	   	   owner: ".$sh['fname']." ".$sh['lname'];?> </div></div>
	   	   
	   </div>
	   <div class="col-md-3">
	   	<form method="post" action="http://localhost/TSS/Controller/InvoicepdfController.php">
	   		<input type="hidden" name="cid" value="<?php echo $sh['uid'];?>">
	   		<input type="hidden" name="jnum" value="<?php echo $sh['jnnum'];?>">
	   		<button  type="submit" class="w3-button w3-blue">Downlord</button>
	   	</form>
	   </div>	
	</div>
	<?php
}?>
</div>