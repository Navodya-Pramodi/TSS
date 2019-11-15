<div class="col-md-9">

      <?php if(isset($_GET['success'])){
        echo"  <div class='row'>
    <div class='col-md-12 alert alert-success'><p style='color:red;'>Succesfully deleted</p></div>
  </div>";
      }elseif (isset($_GET['successn'])) {
        
        echo"  <div class='row'>
    <div class='col-md-12 alert alert-danger'><p style='color:red;'>Not  deleted</p></div>
  </div>";
      }
 ?>   
  <?php if(isset($_GET['add'])){
    echo "<div class='row alert alert-success'> new user name of registered Receiptionist is <p style='color:red;'> ".$_SESSION['rusername']."</p><BR>";
    echo "new user password of registered Receiptionist is <p style='color:red'>".$_SESSION['ruserpassword']."</p></div>";
  }

   ?> 
  <div class="row">
    <form method="post" action="http://localhost/TSS/Controller/RemoveEmpployeeController.php">
    <div class="col-md-12">
    <div ></div>
    <div class="form-group">
        <label for="exampleFormControlInput1">NIC</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nic" required="">
    </div>
     
  <button type="submit" style="float: right;"class="btn btn-primary">&nbsp;&nbsp;&nbsp;Remove Emoployee&nbsp;&nbsp;&nbsp;</button>




  </form> 
    </div>
 </div>

</div>