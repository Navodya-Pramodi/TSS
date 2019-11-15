<div class="container-fluid lg">
	 
	

	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			
		 <div class="modal-dialog " style="opacity: 0.8;position: absolute;top:140px;">
                   <div class="modal-content">
                        <div class="modal-header">
                                <h3 class="modal-title">Log In</h3>
                         </div>
                         <div class="modal-body">
                               <form role="form" method="post"  action="Controller/LoginController.php">
                                    <div class="form-group">                                 
                                       <input type="text" class="form-control" name="username" placeholder="User name" required>
                                    </div>
				                    <div class="form-group">
				                        <input type="password" class="form-control" name="userpassword" placeholder="Password" required>
				                    </div>
				         </div>                
		                 <div class="modal-footer">
		                 	<?php
	if (isset($_GET['fail'])) {
		?>

      	   <center><p style="color: white;">Try again<p></center>


		<?php	}
	?>
	
		                             <button class="btn btn-primary btn-block"  type="submit"name="submit">Submit</button>
		                  </div>
                                 </form>
                   </div>


            
         </div>
      
		</div>
		<div class="col-md-3"></div>	
	</div>
</div>