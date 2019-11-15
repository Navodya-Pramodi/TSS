<div class="col-md-9">
   <?php

  if(isset($_GET['add'])){
    echo "<div class='row alert alert-success'> new user name of registered technician is <p style='color:red;'> ".$_SESSION['tusername']."</p><BR>";
    echo "new user password of registered technician is <p style='color:red'>".$_SESSION['tuserpassword']."</p></div>";
  }

   ?> 
  
	<div class="row">
		<form method="post" action="http://localhost/TSS/Controller/AddTechnicianController.php">
	  <div class="col-md-12">
    <div ></div>
    <div class="form-group">
        <label for="exampleFormControlInput1">NIC</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nic" >
    </div>
     <div class="form-group">
        <label for="exampleFormControlInput1">First Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="fname" >
    </div>
     <div class="form-group">
        <label for="exampleFormControlInput1">Last Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="lname" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" >
    </div>
     <div class="form-group">
        <label for="exampleFormControlInput1">Address</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="address" >
    </div>
     <div class="form-group">
        <label for="exampleFormControlInput1">Telephone</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="telephone" >
    </div>
  <button type="submit" style="float: right;"class="btn btn-primary">&nbsp;&nbsp;&nbsp;Add Technician&nbsp;&nbsp;&nbsp;</button>




	</form> 
    </div>
 </div>

</div>