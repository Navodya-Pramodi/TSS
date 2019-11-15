<div class="col-md-9">
  
<?php
    $conn=mysqli_connect("localhost","root","kaushalya","TSS");
    $sql="select * from status where cuid='".$_SESSION['customerid']."' ORDER by stnu LIMIT 1;";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
                                  $count = $row['percentage'];
                                  $contet = $row['content'];
                                  $date = $row['date'];
                                  
    }
                                  

          
?>
     <div class="row">        
        <div class="col-md-12" style="background-color:#9484e0;color:white;height: 55px; "> 
          <center><p style="color: WHITE;font-family: 'Nanum Gothic', sans-serif;font-size: 17px;">The progress of your device or part repair</p></center>
        </div>
      </div>
      <div class="row" style="height: 20px;"></div>
      <div class="row">
        <div class="col-md-11">  
        <div class="container">
  
             <div id="myProgress" >
                <div id="myBar">0%</div>
              </div>

          </div>
          <div class="col-md-1"></div>
          </div>    
      </div>

        <br>
        

                    <script>

                           var i = 0;
                function movee() {
                  if (i == 0) {
                    i = 1;
                    var elem = document.getElementById("myBar");
                    var width = 10;
                    var id = setInterval(frame,100);
                    function frame() {
                      if (width >=<?php echo$count;?>) {
                        clearInterval(id);
                        i = 0;
                      } else {
                        width++;
                        elem.style.width = width + "%";
                        elem.innerHTML = width  + "%";
                      }
                    }
                  }
                }
</script>
 <div class="row">
  <?php
     $conn2=mysqli_connect("localhost","root","kaushalya","TSS");
                  $sql2="select * from jobnote WHERE jobnote.cuid='".$_SESSION['customerid']."' ORDER by jnnum LIMIT 1";
                  $result2=mysqli_query($conn2,$sql2);
                  while($row=mysqli_fetch_assoc($result2))
                  {
                                               $_SESSION['tic']=$row['tecid'];
                                                
                  }



  ?>
  <div class="container">
   <div class="col-md-12 alert alert-info">
    <div class="row">
      <div class="col-md-8">
     <p style="color: #6666ff;font-family: 'Nanum Gothic', sans-serif;font-size: 20px;">Last Status Updated</p>
         <?php
     if (isset($contet)) {
       
             echo "<p>".$contet."</p>";
       
     }else{
        echo "<p>Not yet update</p>";
     }      ?>
      </div>
      <div class="col-md-4">
        <div class="row" style="height: 40px;">
          
        </div>
        <div class="row">
          <?php
          if (isset($contet)) {
       
                 echo "<p style='float:left;'>updated at:".$date."</p>"; 
       
     }else{}
          


     ?>

        </div>
      </div>
    </div>     
     </div>
   </div>
   
 </div>
 <div class="row" style="height: 30px;">
  
</div>

 <div class="row">
   
   <div class="col-md-12" style="background-color:#9484e0;color:white;height: 55px; ">
   <br>  
      <center>Ask question about current situation from technician</center>
  </div>
 </div>
<div class="row" style="height: 10px;"></div>
 <div class="row">
  <div class="col-md-2"></div>
   <div class="col-md-8 " >
     <div class="row"style="background-color: white;">
       
       <div class="col-md-12 " style="background-color: #ffffcc;border-radius: 10px;height:;">
                         
              <?php
                 
                 
                  $da=array();
                  $conn1=mysqli_connect("localhost","root","kaushalya","TSS");
                  if(!isset($_SESSION['counter'])){
                  $sql1="select * from messsege where userid='".$_SESSION['customerid']."' and tid='". $_SESSION['tic']."' order by id desc limit 3;";
                }else{

                  $sql1="select * from messsege where userid='".$_SESSION['customerid']."' and tid='". $_SESSION['tic']."' order by id desc limit ".$_SESSION['counter'].";";
                }
                  $result1=mysqli_query($conn1,$sql1);
                  while($row=mysqli_fetch_assoc($result1))
                  {
                                              $da[]=$row;
                                                
                  }
                  foreach (array_reverse($da) as $pri) 
                  {
                      if($pri['who']=='2')
                      {?>
                        <div class="row" style="height: 10px;"></div>
                         <div class="row" style="height: 10px;">
                           <div class="col-md-1"><img src="images/user.png"height="15px"style="float:right;"></div>
                           <div class="col-md-7" style="background-color: #99bbff; border-radius: 1px 20px 30px;"><?php echo$pri['content'];?></div>
                           <div class="col-md-4"></div>
                         </div>


                     <?php     
                      }elseif($pri['who']=='1')
                      {   
                     ?> 
                         <div class="row" style="height: 10px;"></div>
                         <div class="row" style="height: 10px;">
                           <div class="col-md-6"></div>
                           <div class="col-md-5"style="background-color: #ffccf2; border-radius: 25px;"><?php echo$pri['content'];?></div>
                           <div class="col-md-1"><img src="images/techi.png"height="15px"style="float:left;"></div>
                         </div>

                    <?php
                      }
                }?>
               
       </div>
     </div>
     <div class="row"style="height: 10px;"></div>
     <div class="row " style="height: 35px;">
      <form method="get" action="http://localhost/TSS/Controller/Incrementer.php">
       <button class="btn btn-primary" type="submit" value="2" style="float:right;color: white;"><center> previous messege</center></button>
     </div>
    </form>
   </div>
   <div class="col-md-2"></div>
 </div>
 <div class="row" style="height: 30px;">
  
 <form action="http://localhost/TSS/Controller/MessgeSender.php" method="post">
 <div class="row">
    <div class="col-md-12">
        <div class="form-group">
             <BR> <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="messege"></textarea>
        </div>
   </div>
</div>
 <div class="row">
   <div class="col-md-2"></div>
    <div class="col-md-10">
            <button class="btn btn-primary" 
            type="submit" style="float: right;">SEND MESSEGE</button>
    </div>
    <div class="col-md-2"></div> 
</div>
</form>
</div>
</div>
