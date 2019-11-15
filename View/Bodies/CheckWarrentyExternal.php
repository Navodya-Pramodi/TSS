<div class="container-fluid ct">
	<div class="row" style="height: 175px;"></div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
						<div class="well" style="opacity: 0.9;">
		       <form method="post" action="Controller/ExternalwarentyController.php">
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Serial number</label>
				    <div class="col-sm-10">
				      <input type="text" name="snumber"class="form-control" id="inputEmail3" placeholder="Enter Your Name">
				    </div>
				  </div> 
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Brand</label>
				    <div class="col-sm-10">
					    <select class="form-control" name="brand" id="exampleFormControlSelect1">
					      <option>hp</option>
					      <option>dell</option>
					      
					    </select>
					</div>
				</div>
				  <div class="form-group row">
				    <div class="col-sm-10">
				      <button type="submit" class="btn btn-primary">send messege</button>
				    </div>
				  </div>
				  


				</form>	
			</div>			
		</div>
		<div class="col-md-3"></div>	
	</div>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<?php
                 if (isset($_GET['it'])) {
   ?>
                   	 <center><p class="alert alert-info"style="font-family: 'Titillium Web', sans-serif;font-size: 15px;color: green;">Customer can use his warrenty until<?php echo$_SESSION['warantydate'];?></p></center> 
   <?php              
                 }elseif (isset($_GET['its'])) {
?>                 	<center><p class="alert alert-danger" style="font-family: 'Titillium Web', sans-serif;font-size: 15px;color: red;">Customer cannot use his warrenty</p></center> 
<?php

                 }else{

                 }




			?>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>