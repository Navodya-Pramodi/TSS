<div class="col-md-9">
   <div class="row" style="height: 30px;background-color:  #9484e0;color: white;">
     <div class="col-md-12">
      <center>Give permission to add new parts</center> 
     </div>
   </div>
   <div class="row" style="height: 30px;background-color:  #9484e0;color: white;">
     <div class="col-md-12">
       <?php
       $conn=mysqli_connect("localhost","root","kaushalya","TSS");
       $this->sql="select * from Customer  where username='".$cus->getUserName()."' and password='".$cus->getPassword()."' ;";
                  
       $this->result=mysqli_query($this->conn,$this->sql);
       while($this->row=mysqli_fetch_assoc($this->result))
       {
       }
   
       ?> 
     </div>
   </div>
</div>
