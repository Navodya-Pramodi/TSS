<div class="col-md-9">
	<form method="post" action="http://localhost/TSS/Controller/EnterCustomerController.php">
  <div class="row">
    <div class="col-md-12" style="background-color: #9484e0;height: 46px;">
     <p style="position: absolute;top: 10px;"> My Information</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
       <div class="form-group">
          <label for="exampleFormControlInput1">NIC</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="nic">
       </div>
    </div> 
  </div>
  <div class="row">
    <div class="col-md-12">
       <div class="form-group">
          <label for="exampleFormControlInput1">First name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="fname" >
       </div>
    </div> 
  </div>
  <div class="row">
    <div class="col-md-12">
       <div class="form-group">
          <label for="exampleFormControlInput1">Last Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="lname" >
       </div>
    </div> 
  </div>
  <div class="row">
    <div class="col-md-12">
       <div class="form-group">
          <label for="exampleFormControlInput1">Change password</label>
          <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
       </div>
    </div> 
  </div>

  <div class="row">
    <div class="col-md-12">
       <div class="form-group">
          <label for="exampleFormControlInput1">Confirm password</label>
          <input type="password" class="form-control" id="exampleFormControlInput1" name="rpassword">
       </div>
    </div> 
  </div>

  <button type="submit" style="float: right;"class="btn btn-primary">&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;</button>
</form>
<div class="row">
  
    <?php
      if (isset($_GET['update'])) {
       ?><div class="col-md-12 alert alert-info"> 
        <?php
          echo" success fuly informations added";
      }elseif(isset($_GET['updaten'])){
        ?>
          <div class="col-md-12 alert alert-danger"> 
       <?php
        echo"<center><h4 style='color:red;'> action not sucess</h4></center>";
      }
    ?>

    
  </div>
  <div class="row"> 
   <div class="col-md-12" style="height: 20px;"></div>
  </div>
<div class="row"> 
   <div class="col-md-12">
     You can downlord Job note here
  <form method="post" action="http://localhost/TSS/Controller/pdfMakerController.php">   
  <button type="submit" style="float: right;"class="btn btn-primary">&nbsp;&nbsp;&nbsp;Downlord&nbsp;&nbsp;&nbsp;</button>
</form>
   </div>
</div> 

  <div class="row"> 
   <div class="col-md-12">
     You can downlord completed dilevery note here
  <form method="post" action="http://localhost/TSS/Controller/DeliveryReportController.php">   
  <button type="submit" style="float: right;"class="btn btn-primary">&nbsp;&nbsp;&nbsp;Downlord&nbsp;&nbsp;&nbsp;</button><input type="hidden" name="cid" value="<?php echo $_SESSION['customerid'];?>">
</form>
   </div>
</div> 





</div>