<div class="col-md-9">
	
	<div class="row">
		<div class="col-md-12 well" style="height: 210px;">
		<form method="post" action="http://localhost/TSS/Controller/ReceiptionWarrantyController.php">
	  <div class="form-group">
    <label for="exampleFormControlInput1">serial number</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="snumber" placeholder="ender device serial number">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Brand</label>
    <select class="form-control" name="brand" id="exampleFormControlSelect1">
      <option>hp</option>
      <option>dell</option>
      
    </select>
  </div>
  <button type="submit" style="float: right;"class="btn btn-primary">&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;</button>




	</form> 
    </div>
  </div>
  <div class="row">
  		<?php if (isset($_GET['warrentycan'])) {
  			?>
  	<div class="col-md-12 alert alert-info" style="height: 110px;">
          <center><p style="font-family: 'Titillium Web', sans-serif;font-size: 15px;color: green;">Customer can use his warrenty until<?php echo$_SESSION['warantydate'];?></p></center> 
          
  	</div>
  		<?php
  	}elseif(isset($_GET['warrentycannot'])){
?> 	<div class="col-md-12 alert alert-danger"style="height: 100px;"> 
<center><p style="font-family: 'Titillium Web', sans-serif;font-size: 15px;color: red;">Customer cannot use his warrenty</p></center> 
          
      </div>
          <?php
  	}else{}
  	?>
  </div>
	
</div>