<div class="col-md-9">

<?php
    $conn=mysqli_connect("localhost","root","kaushalya","TSS");
    $sql="SELECT status.stnu,customer.lname,jobnote.serialnumber,customer.uid,status.content,status.percentage,status.date,jobnote.tecid,jobnote.cuid,customer.fname from jobnote JOIN customer on jobnote.cuid=customer.uid join status on customer.uid=status.cuid WHERE jobnote.acceptc='1' and jobnote.tecid='".$_SESSION['technicianid']."';";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
    ?>
    <div class="row">
       <div class="col-md-12" style="-webkit-box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);
-moz-box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);
box-shadow: 1px 4px 22px -7px rgba(37,124,222,1);">
       <div class="row" style="height: 10px;"></div>

       <div class="row">
         <div class="col-md-8">
           <div class="row">
            
             <div class="col-md-12">Last status</div>
             <div class="col-md-12">customer name</div>
             <div class="col-md-12">Current Status As Percentage</div>
             <div class="col-md-12">Last Updated Date</div>
       

           </div>
         </div>
         <div class="col-md-4">  
           <div class="row">
             <div class="col-md-12"><?php echo$row['content'];?></div>
             <div class="col-md-12"><?php echo$row['fname']." ".$row['lname'];?></div>
             <div class="col-md-12"><?php echo$row['percentage']."%";?></div>
             <div class="col-md-12"><?php echo $row['date'];?></div>
             
            </div> 
         </div>
       </div>
    
       <div class="row" style="height: 10px;">
         <div class="col-md-12">
           <form  method="post" action="http://localhost/TSS/Controller/UpdateStatusController.php">
             
               <div class="row">
                 <div class="col-md-12">
                   <div class="form-group">

                      <label for="comment"> Status</label>
                      <textarea class="form-control" rows="5" id="comment" name="content"></textarea>
                   </div> 
                </div>
              </div>
              <div class="row">
                 <div class="col-md-12">
                    
                    <div class="form-group">
                          <label for="usr">Status as percentage</label>
                          <input type="text" class="form-control" name="persentage" id="usr">
                          <input type="hidden" value="<?php echo$_SESSION['technicianid'];?>"class="form-control" name="tid" id="usr">
                          <input type="hidden" value="<?php echo$row['uid'];?>" class="form-control" name="cid" id="usr"> 
                    </div>
               </div>
             </div>
               <div class="row">
                 <div class="col-md-12">
                   <div class="form-group">
                    
                     
                           <button class="w3-button w3-red" style="">Update</button>
                            </form>&nbsp;&nbsp;<a style="text-decoration: none;"  href="?tecmesseges=ok&customerid=<?php echo$row['uid'];?>"class="w3-button w3-blue" style="">Messege</a>&nbsp;&nbsp;<a style="text-decoration: none;"  href="http://localhost/TSS/Controller/DeliverReportController.php?id=<?php echo$row['uid'];?>"class="w3-button w3-green" style="">End  & Deliver report</a>&nbsp;&nbsp;&nbsp;&nbsp; 
                            <form method="post" action="http://localhost/TSS/Controller/AmountChangeController.php">
                            <div class="form-group">
                              <label for="usr">Total Additional amount</label>
                               <input type="text" class="form-control" name="amount" id="usr">
                           <input type="hidden" value="<?php echo$row['uid'];?>" class="form-control" name="cid" id="usr">
                            </div><button class="w3-button w3-teal" style="">Total Additional amount</button>
                          </form>
                            <?php
                           if(isset($_GET['success'])){
                                  
                                  echo"<p style='color:red;'>updated</p>";

                           }
                            ?>
                    </div> 
               </div>
             </div>
            </div>





          
         </div>
     
 
 </div>
  </div>
 <div class="row" style="height: 10px;"></div>
     <?php
   }
?>



  
</div>

