<div class="col-md-9">
<?php
 
    $conn=mysqli_connect("localhost","root","kaushalya","TSS");
    $sql="SELECT jnnum,customer.uid as cuide,problem,warentystate,serialnumber,customer.lname as clname,customer.fname as cfname,jobnote.date as 'jdate' FROM jobnote JOIN technician on jobnote.tecid=technician.tid join customer on  jobnote.cuid=customer.uid where jobnote.accept='0' and jobnote.acceptc='0' and jobnote.tecid='".$_SESSION['technicianid']."';";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
     ?><div class="row" style="height:10px;"></div>
     <div class="row" style="-webkit-box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);
-moz-box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);
box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);">
         <div class="container">
            <div class="col-md-8">
            	<div class="row" style="height:10px;"></div>
            	<div class="row"><div class="col-md-8"></div><div class="col-md-4"><?php echo$row['cfname']." ".$row['clname'];?></div></div>
            	<div class="row" style="height:10px;"></div>
            	<div class="row"><div class="col-md-8">Repair received date</div><div class="col-md-4"><?php echo$row['jdate'];?></div></div>
            	<div class="row" style="height:10px;"></div>
            	<div class="row"><div class="col-md-8">problem:</div><div class="col-md-4"><?php echo$row['problem'];?></div></div>
            	<div class="row" style="height:10px;"></div>
            	<div class="row"><div class="col-md-8">warenty/Chargeable:</div><div class="col-md-4"><?php echo$row['warentystate'];?></div></div>
            	<div class="row" style="height:10px;"></div>
            	<div class="row"><div class="col-md-8">serialnumber:</div><div class="col-md-4"><?php echo$row['serialnumber'];?></div></div>
            	<div class="row" style="height:10px;"></div>
            	
                <form method="post" action="http://localhost/TSS/Controller/TechnicianAcceptReject.php">
            	<div class="row" >
		            		 <div class="form-group">
								  <label for="comment"></label>
								  <textarea class="form-control" rows="5"  name="reson"id="comment"placeholder="Reson for reject"></textarea>
								</div> 
		                   	</div>
		                   	<input type="hidden" name="jnum" value="<?php echo$row['jnnum'];?>">
                        <input type="hidden" name="uid" value="<?php echo$row['cuide'];?>">
            </div>
            
            <div class="col-md-4">
            	<div class="row" style="height: 30px;"></div>
            	<div class="row" >
            		<div class="col-md-10 ">
            			<button type="submit" name="accept"class="w3-button w3-blue">accept</button>
            			
            		</div>
            	</div>

            	<div class="row" style="height: 115px;"></div>
            	<div class="row" >
            		<div class="col-md-10">
            			<button type="submit" name="reject"class="w3-button w3-red">reject&nbsp;&nbsp;</button>
            		</div>
            	</div>
            </form>	
            </div>
           </div> 
      </div>

<?php  

    }
    if(!($row=mysqli_fetch_assoc($result)))
    {

     echo"<h1> there are no other new request</h1>";

    }
?>
		 
</div>

    <?php




    /*<div class="col-md-1"></div>
    <div class="col-md-10">
    <?php

   
    
    $conn=mysqli_connect("localhost","root","kaushalya","TSS");
    $sql="SELECT * FROM jobnote JOIN technician on jobnote.tecid=technician.tid where jobnote.accept='0';";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
     
?>
       <div class="row" style="height: 10px;"></div>                          
       <div class="row" style="-webkit-box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);
-moz-box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);
box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);">
         <div class="col-md-8">
           <div class="row"><div class="col-md-8">Task received date :</div><div class="col-md-4" style="color: #000080;"><?php echo$row['date'];?></div></div>
           <div class="row"><div class="col-md-8">Technician full name :</div><div  style="color: #000080;"class="col-md-4"><?php echo$row['fname']."".$row['lname'];?></div></div>
           <div  class="row"><div class="col-md-8">Problem of device:</div><div class="col-md-4"style="color: #000080;"><?php echo$row['problem'];?></div></div>
           <div class="row"><div class="col-md-8">reson for reject:</div><div class="col-md-4" style="color: #000080;"><?php echo$row['whayreject'];?></div></div>
         </div>

         <div class="col-md-2"><?php
      $conne=mysqli_connect("localhost","root","kaushalya","TSS");
     $data=array();
     $sqll="SELECT * FROM technician WHERE skill=(select MIN(skill)from technician);";
     $resultt=mysqli_query($conne,$sqll);
     while($rows=mysqli_fetch_assoc($resultt))
      {
             $data[]=$rows;
             
     }
          ?>
 
                   <form action="http://localhost/TSS/Controller/UpdateJobNote.php" method="post">
          <?php
                foreach ($data as $ke) {
                      ?>
                      <div class="radio">
                        <label>
                          <input type="radio" name="idvalue" value="<?php echo $ke['tid'];?>"><?php  echo $ke['fname']." ".$ke['lname']."<br>";?></label>
                      </div>
                      <input type="hidden" name="skill" value="<?php echo $ke['skill'];?>">
      <?php                                     
                    
                
                  
                }

         ?>
         <input type="hidden" name="removeid" value="<?php echo $row['tecid'];?>">
         <input type="hidden" name="skills" value="<?php echo $row['skill'];?>">
         <input type="hidden" name="jnum" value="<?php echo $row['jnnum'];?>">
         </div>
         <div class="col-md-2"><button class="w3-button w3-blue " style="float: right;">Assign</button></div>
       </div>
       </form>
       <div class="row" style="height: 10px;"></div>                           
   <?php                             
    }
   ?>

   </div>
  </div>
</div>




*/