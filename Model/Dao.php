<?php
 require'../Model/Manager.php';
 require'../Model/Customer.php';
 require'../Model/Technician.php';
 require'../Model/Receiptionist.php';
 require'../Model/Messege.php';
 require'../Model/Device.php';
 require'../Model/JobNote.php';
  require'../Model/Invoice.php';

 session_start();

class Dao{ private $conn;
  private $sql;
  private $result;
  private $row;
 
 
   public function __construct()
   {
                       $this->conn=mysqli_connect("localhost","root","","TSS");
                       if($this->conn)
                       {
                            echo"connected";
                       }else
                       {
                            echo"not connected";     
                       }     

   }

   public function LoginCustomer(Customer $cus)
   {
                  $this->sql="select * from Customer  where username='".$cus->getUserName()."' and password='".$cus->getPassword()."' ;";
                  
                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  $_SESSION['customer']= $this->row['username'];
                                  $_SESSION['customerid']= $this->row['uid'];
                                  return 1;
                  }
                                  return 0;

                          
    }

   public function LoginManager(Manager $man)
   {
                  $this->sql="select * from Manager  where username='".$man->getUserName()."' and password='".$man->getPassword()."' ;";
                  
                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  $_SESSION['manager']= $this->row['username'];
                                  return 1;
                  }
                                  return 0;

                          
    }

   public function LoginTechnician(Technician $tec)
   {
                  $this->sql="select * from Technician  where username='".$tec->getUserName()."' and password='".$tec->getPassword()."' ;";
                  
                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  $_SESSION['technician']= $this->row['username'];
                                   $_SESSION['technicianid']= $this->row['tid'];
                                  return 1;
                  }
                                  return 0;

                          
    }

   public function LoginReceiptionist(Receiptionist $rep)
   {
                  $this->sql="select * from  Receiptionist where username='".$rep->getUserName()."' and password='".$rep->getPassword()."' ;";
                  
                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  $_SESSION['receiptionist']= $this->row['username'];
                                  $_SESSION['receiptionistid']= $this->row['rid'];
                                  return 1;
                  }
                                  return 0;

                          
    }
   public function receiptionistWarrantyAvailability(Device $dev){

   	      $this->sql="select * from  Device  where serialnumber='".$dev->getSerialnu()."' and Brand='".$dev->getBrand()."' ;";
                  
                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  $date = $this->row['warrenty'];
                                  $_SESSION['sn']=$this->row['serialnumber'];
                                  $_SESSION['br']=$this->row['Brand'];
                                  $_SESSION['ml']=$this->row['model'];
                                  return $date;
                  }
                                  return 0;

                          
   }

   public function insertMeseege(Messege $messege,$name)
   {

           $this->sql="insert into contactmesege(id,subject,content,username) values('','".$messege->getSubject()."','".$messege->getContent()."','".$name."');";
          $query=mysqli_query($this->conn,$this->sql);

   } 
   
   public function insertJCustomer(JobNote $jn,Customer $cus,Device $dev,$receiptionistid)
   {

           $this->sql="insert into customer(uid,addre,email,password,username,tel) values('','".$cus->getAddress()."','".$cus->getEmail()."','".$cus->getPassword()."','".$cus->getUsername()."','".$cus->getTel()."');";
          $query=mysqli_query($this->conn,$this->sql);
}
  public function insertJobNote(JobNote $jn,Customer $cus,Device $dev,$receiptionistid,$numberO){

           $this->sql="insert into JobNote(jnnum,createuid,serialnumber,cuid,tecid,problem,Warentystate) values('','".$receiptionistid."','".$dev->getSerialnu()."','".$cus->getId()."','".$numberO."','".$jn->getProblem()."','".$jn->getWarenty()."');";
          $query=mysqli_query($this->conn,$this->sql);
           }

   public function insertJWDevice(JobNote $jn,Customer $cus,Device $dev,$receiptionistid){        
           $this->sql="insert into warrantycheckdevices(deviceid,serialnumber,type,Brand,model,uid) values('','".$dev->getSerialnu()."','".$dev->getTypee()."','".$dev->getBrand()."','".$dev->getModel()."','".$cus->getId()."');";
          $query=mysqli_query($this->conn,$this->sql);
   }

   public function selectuid(){

   	      $this->sql="select * from  customer ORDER BY uid DESC limit 1;";
                  
                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                                  return $this->row['uid'];
                  }
                                  return 0;

                          
   }
     public function selectTechnCount($num){

   	      $this->sql="select * from  technician where tid='".$num."';";
                  
                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                                  return $this->row['skill'];
                  }
                                  return 0;

                          
   }
   public function UpdateCurrentCount(Technician $tec,$number)
   {
                  $this->sql="update Technician set skill ='".$number."'where tid ='".$tec->getUid()."';";                  
                  mysqli_query($this->conn,$this->sql);
                  

                          
    }
    public function insertCustomerDetais(Customer $cus){





         $this->sql="update customer set nic='".$cus->getNic()."',fname='".$cus->getFname()."',lname='".$cus->getLname()."',password='".$cus->getPassword()."' where uid='".$cus->getId()."';";
          $query=mysqli_query($this->conn,$this->sql);        	
    }
   private $DData=array();
   public function retreiveJobNoteDetails(Customer $cus){

                $this->sql="select  customer.fname as cfname,customer.lname as clname,customer.password,customer.username,warrantycheckdevices.serialnumber,warrantycheckdevices.type,warrantycheckdevices.brand,warrantycheckdevices.model,jobnote.date,technician.fname as tfname,technician.lname as tlname,customer.email from customer join warrantycheckdevices on customer.uid=warrantycheckdevices.uid join jobnote on customer.uid=jobnote.cuid join technician on jobnote.tecid=technician.tid where customer.uid='".$cus->getId()."';";
                  
                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                      $this->DData[]=$this->row;
                  }
                                  return $this->DData;

                          
  
   }
 public function CustomerSendMessge(Messege $mess,Customer $cus,Technician $tec)
 {
         	$this->sql="insert into messsege(id,who,content,userid,tid) values('','1','".$mess->getContent()."','".$cus->getId()."','".$tec->getUid()."');";
          $query=mysqli_query($this->conn,$this->sql);
 }              
 public function TecSendMessge(Messege $mess,Customer $cus,Technician $tec)
 {
         	$this->sql="insert into messsege(id,who,content,userid,tid) values('','2','".$mess->getContent()."','".$cus->getId()."','".$tec->getUid()."');";
          $query=mysqli_query($this->conn,$this->sql);
 }              

  public function selectTechnicianId(Customer $cus)
 {

 	              $this->sql="select * from JobNote where cuid='".$cus->getId()."' order by jnnum limit 1;";

                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                                  return $this->row['tecid'];
                  }
                                  return 0;



      }
      public function RetreiveLastReseiptionId(){
      	 $this->sql="select * from Receiptionist order by rid DESC limit 1;";

                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                                  return $this->row['rid'];
                  }
                                  return $this->row['rid'];




      }              
     
      public function RetreiveLastTechnicianIdId(){
      	 $this->sql="select * from Technician order by tid DESC limit 1;";

                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                                  return $this->row['tid'];
                  }
                                  return $this->row['tid'];




      } 
      public function insertNewTechi(Technician $tec)
   {

           $this->sql="insert into technician(tid,nic,fname,lname,address,email,password,username,tel) values('','".$tec->getNic()."','".$tec->getFname()."','".$tec->getLname."','".$tec->getAddress()."','".$tec->getEmail()."','".$tec->getPassword()."','".$tec->getUsername()."','".$tec->getTelephone()."');";
          $query=mysqli_query($this->conn,$this->sql);

   } 
     public function insertNewReceiption(Receiptionist $rep)
   {

           $this->sql="insert into receiptionist(rid,nic,fname,lastname,address,email,password,username,tel) values('','".$rep->getNic()."','".$rep->getFname()."','".$rep->getLname."','".$rep->getAddress()."','".$rep->getEmail()."','".$rep->getPassword()."','".$rep->getUsername()."','".$rep->getTelephone()."');";

          $query=mysqli_query($this->conn,$this->sql);

   } 
   public function UpdateManagerChangedJn(Technician $tec,$num2)
   {
                  $this->sql="update jobnote set jobnote.tecid='".$tec->getUid()."',jobnote.accept='0' where jnnum='".$num2."';";                  
                  mysqli_query($this->conn,$this->sql);
                  

                          
    }
         public function DellCount(){
      	 $this->sql="SELECT count(*) as count FROM warrantycheckdevices WHERE (TIMESTAMPDIFF(MONTH,date,NOW())=1 or TIMESTAMPDIFF(MONTH,date,NOW())=0) and warrantycheckdevices.brand='dell' ;";

                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                          return $this->row['count'];
                  }
                                  return $this->row['count'];



      } 
        public function HpCount(){
      	 $this->sql="SELECT count(*) as count FROM warrantycheckdevices WHERE (TIMESTAMPDIFF(MONTH,date,NOW())=1 or TIMESTAMPDIFF(MONTH,date,NOW())=0) and warrantycheckdevices.brand='hp' ;";

                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                          return $this->row['count'];
                  }
                                  return $this->row['count'];



      }

        public function WarrentyCountH()
        {
      	       $this->sql="SELECT COUNT(distinct jobnote.jnnum) as count from warrantycheckdevices INNER join jobnote on jobnote.serialnumber=warrantycheckdevices.serialnumber WHERE (TIMESTAMPDIFF(MONTH,warrantycheckdevices.date,NOW())=1 or TIMESTAMPDIFF(MONTH,warrantycheckdevices.date,NOW())=0) and warrantycheckdevices.brand='hp' AND jobnote.warentystate='warrenty';";

                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                          return $this->row['count'];
                  }
                          return $this->row['count'];

      }
      public function ChargeableCountH(){
      	 $this->sql="SELECT COUNT(distinct jobnote.jnnum) as count from warrantycheckdevices INNER join jobnote on jobnote.serialnumber=warrantycheckdevices.serialnumber WHERE (TIMESTAMPDIFF(MONTH,warrantycheckdevices.date,NOW())=1 or TIMESTAMPDIFF(MONTH,warrantycheckdevices.date,NOW())=0) and warrantycheckdevices.brand='hp' AND jobnote.warentystate='Chargeable';";

                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                          return $this->row['count'];
                  }
                                  return $this->row['count'];



      }
      public function WarrentyCountD()
        {
      	       $this->sql="SELECT COUNT(distinct jobnote.jnnum) as count from warrantycheckdevices INNER join jobnote on jobnote.serialnumber=warrantycheckdevices.serialnumber WHERE (TIMESTAMPDIFF(MONTH,warrantycheckdevices.date,NOW())=1 or TIMESTAMPDIFF(MONTH,warrantycheckdevices.date,NOW())=0) and warrantycheckdevices.brand='dell' AND jobnote.warentystate='warrenty';";

                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                          return $this->row['count'];
                  }
                          return $this->row['count'];

      }
      public function ChargeableCountD(){
      	 $this->sql="SELECT COUNT(distinct jobnote.jnnum) as count from warrantycheckdevices INNER join jobnote on jobnote.serialnumber=warrantycheckdevices.serialnumber WHERE (TIMESTAMPDIFF(MONTH,warrantycheckdevices.date,NOW())=1 or TIMESTAMPDIFF(MONTH,warrantycheckdevices.date,NOW())=0) and warrantycheckdevices.brand='dell' AND jobnote.warentystate='Chargeable';";

                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                          return $this->row['count'];
                  }
                                  return $this->row['count'];



      }
      public function EndWarrentyCount()
        {
      	       $this->sql="SELECT COUNT(distinct jobnote.jnnum) as count from warrantycheckdevices INNER join jobnote on jobnote.serialnumber=warrantycheckdevices.serialnumber WHERE (TIMESTAMPDIFF(MONTH,jobnote.endDate,NOW())=1 or TIMESTAMPDIFF(MONTH,warrantycheckdevices.date,NOW())=0) and jobnote.warentystate='warrenty';";

                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                          return $this->row['count'];
                  }
                          return $this->row['count'];

      }
      public function EndChargeableCount()
        {
      	       $this->sql="SELECT COUNT(distinct jobnote.jnnum) as count from warrantycheckdevices INNER join jobnote on jobnote.serialnumber=warrantycheckdevices.serialnumber WHERE (TIMESTAMPDIFF(MONTH,jobnote.endDate,NOW())=1 or TIMESTAMPDIFF(MONTH,jobnote.endDate,NOW())=0) AND jobnote.warentystate='chargeable';";

                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                          return $this->row['count'];
                  }
                          return $this->row['count'];

      }

      public function RemoveReceiption(Receiptionist $rep){

               $this->sql="delete from receiptionist where nic='".$rep->getNic()."';";

                  $this->result=mysqli_query($this->conn,$this->sql);
                  if ($this->result) {
                  	return 1;
                  }
                 else{
                 	return 0;
                 }
      }
      public function RemoveTechnician(Technician $tec){

               $this->sql="delete from Technician where nic='".$tec->getNic()."';";

                  $this->result=mysqli_query($this->conn,$this->sql);
                    if ($this->result) {
                  	return 1;
                  }
                 else{
                 	return 0;
                 }

      }
      public function retTNic(Technician $tec){
             $this->sql="select * from Technician where nic='".$tec->getNic()."';";

                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                         return $this->row['nic'];
                  }
                          return 0;

 }
        public function retRNic(Receiptionist $rep){
             $this->sql="select * from Receiptionist where nic='".$rep->getNic()."';";

                  $this->result=mysqli_query($this->conn,$this->sql);
             while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                          return $this->row['nic'];
                  }
                          return 0;





      }
      public function changeTechnitionStateAccept($num){

                  $this->sql="update jobnote set acceptc ='1'where jnnum='".$num."';";                  
                  mysqli_query($this->conn,$this->sql);
                  


      } 
         public function changeTechnitionStateReject($num,$tex){

                  $this->sql="update jobnote set accept ='1',problem='".$tex."'where jnnum='".$num."';";                  
                  mysqli_query($this->conn,$this->sql);
      }
        public function UpdateStatusTechnician($persentage,$tec,$cus,$content)
     {
                  $this->sql="update status set content='".$content."',percentage='".$persentage."' where tecid='".$tec."' and cuid='".$cus."';";                  
                  mysqli_query($this->conn,$this->sql);
    }

    public function endWorkTec(Technician $tec,Customer $cus){
       $this->sql="update jobnote set acceptc ='2'where tecid='".$tec->getUid()."' and cuid='".$cus->getId()."' and acceptc='1';";                  
       mysqli_query($this->conn,$this->sql);
     }    
   
  /*
    public function getUserIdBS($serialnumber,$brand){
    	$this->sql="SELECT * FROM warrantycheckdevices WHERE serialnumber='".$serialnumber."' AND brand='".$brand."';";

                  $this->result=mysqli_query($this->conn,$this->sql);
             while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                          return $this->row['uid'];
                  }
                          return 0;

    }
  */
     public function addInvoiceDetails(Invoice $inv,Customer $cus,Technician $tec,$num)
   {
           $this->sql="insert into invoice(inum,createuid,amount,CustomerId,tid)values('','".$num."','".$inv->getAmount()."','".$cus->getId()."','".$tec->getUid()."');";
          $query=mysqli_query($this->conn,$this->sql);

    }
   public function selectRecId(Customer $cus,Technician $tec){
             $this->sql="SELECT * from jobnote join receiptionist on jobnote.createuid=receiptionist.rid where jobnote.cuid='".$cus->getId()."' and jobnote.tecid='".$tec->getUid()."';";

                  $this->result=mysqli_query($this->conn,$this->sql);
             while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                          return $this->row['createuid'];
                  }
                          return 0;

}
   private $pass=array();
   public function DownlordInvoicerecep(Receiptionist $rep,Customer $cus,$num){
             $this->sql="SELECT * FROM customer join jobnote on customer.uid=jobnote.cuid JOIN invoice on invoice.CustomerId=customer.uid where invoice.createuid='".$rep->getTid()." 'and invoice.CustomerId='".$cus->getId()."'and jnnum='".$num."';";

                  $this->result=mysqli_query($this->conn,$this->sql);
             while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  
                          $this->pass[]=$this->row;
                  }
                          return $this->pass;

}    public function donwnlorDeliverNote(Customer $cus){
       $this->sql="select * from customer JOIN jobnote on customer.uid=jobnote.cuid join device on device.serialnumber=jobnote.serialnumber WHERE jobnote.acceptc=2 and jobnote.cuid='".$cus->getId()."';";

                  $this->result=mysqli_query($this->conn,$this->sql);
             while($this->row=mysqli_fetch_assoc($this->result))
                  {
      $this->DData[]=$this->row;
                  }
                                  return $this->DData;
}
    public function insertStatus(Customer $cus,Technician $tec)
   {

           $this->sql="insert INTO status(stnu,content,tecid,cuid,percentage)VALUES('','work accepted','".$tec->getUid()."','".$cus->getId()."','0');";
          $query=mysqli_query($this->conn,$this->sql);

   }                 


}