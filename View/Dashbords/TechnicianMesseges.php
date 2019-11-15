<div class="col-md-9">
  <?php


if (isset($_GET['customerid'])) {
  $xx=$_GET['customerid'];
}else{

   $xx=$_SESSION['tem'];


}
  ?>
    <div class="row" style="height: 40px;background-color:#9484e0;color: white;">
      <div class="col-md-12">
          <center>Messege with client</center>
      </div>
    </div>
    <div class="row" style="height: 30px;">
      
    </div>
    <div class="row" >
      <div class="col-md-12">
        <div class="container" style="background-color: #ffffcc;">
        <?php 
                $da=array();
                $conn1=mysqli_connect("localhost","root","kaushalya","TSS");
                $sql1="select * from messsege where userid='".$xx."' and tid='".$_SESSION['technicianid']."' order by id desc limit 5;";
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
    </div>
    <div class="row">
      <div class="col-md-12">
        <form action="http://localhost/TSS/Controller/MessegeReceiver.php" method="post">
           <div class="form-group">
             <BR> 
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="messege"></textarea>
            </div>
        
      </div>
      <input type="hidden" name="cusid" value="<?php echo$xx;?>">
      
    </div> 
    <div class="row">
      <div class="col-md-12">
         <button class="w3-button w3-blue" type="submit">Send</button>
      </div>
    </div> 
    </form>

</div>