<div class="container-fluid ct">
	<div class="row" style="height: 175px;"></div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
						<div class="well" style="opacity: 0.9;">
		       <form method="post" action="Controller/ContactUsController.php">
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
				    <div class="col-sm-10">
				      <input type="text" name="name"class="form-control" id="inputEmail3" placeholder="Enter Your Name">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Enter Your Email" name="email">
				    </div>
				  </div>
				  
				  <div class="form-group row">
				    <label for="inputPassword3" class="col-sm-2 col-form-label">Subject</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputPassword3" placeholder="Enter the Subject" name="subject">
				    </div>
				  </div>
				  <div class="form-group">
    									<label for="exampleFormControlTextarea1">Content</label>
    												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
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
</div>