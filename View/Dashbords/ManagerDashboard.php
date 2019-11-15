<div class="container-fluid" >
	<div class="row " >
		<div class="col-md-3" style="-webkit-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);height: 140vh;">
			<div class="row" style="background-color:#bdbbc7;height: 8vh;-webkit-box-shadow: 2px 2px 13px -10px rgba(0,0,0,0.75);
-moz-box-shadow: 2px 2px 13px -10px rgba(0,0,0,0.75);
box-shadow: 2px 2px 13px -10px rgba(0,0,0,0.75);height: 13vh;">
				<div class="col-md-12" style="color:#7d6df2;font-family: 'Titillium Web', sans-serif;font-size: 24px;">
					<p style="position: absolute;top: 10px;left:70px;">TSS TECHNOLOGY</p>
				</div>	
			</div>
			
			<a href="Dashbords.php?tecnicianadd=ok"><div class="row" style="-webkit-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);height: 13vh;">
				<div class="col-md-12">
					<br><center><p style="font-family: 'Titillium Web', sans-serif;font-size: 20px;">Create Technician Profile</p></center>
				</div>	
			</div>
			</a>

			<a href="Dashbords.php?receiptionadd=ok">
			<div class="row" style="-webkit-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);height: 13vh;">
				<div class="col-md-12" onclick="movee()">
					<br><center><p style="font-family: 'Titillium Web', sans-serif;font-size: 20px;">Create Receiption Profile</p></center>
				</div>	
			</div>
		</a>
		<a href="Dashbords.php?shiftjob=ok"><div class="row" style="-webkit-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);height: 13vh;">
				<div class="col-md-12">
					<br><center><p style="font-family: 'Titillium Web', sans-serif;font-size: 20px;">Shift Job Notes</p></center>
				</div>	
			</div>
		</a>
        		<a href="Dashbords.php?reportCheck=ok"><div class="row" style="-webkit-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);height: 13vh;">
				<div class="col-md-12">
					<br><center><p style="font-family: 'Titillium Web', sans-serif;font-size: 20px;">Report Check</p></center>
				</div>	
			</div>
		</a>
		

		<a href="http://localhost/TSS/Controller/LogoutController.php?Logout=yes">
			<div class="row" style="-webkit-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);height: 13vh;">
				<div class="col-md-12">
					<br><center><p style="font-family: 'Titillium Web', sans-serif;font-size: 20px;">Log out</p></center>
				</div>	
			</div>
		 </a>
		</div>

		<?php
		if (isset($_GET['tecnicianadd'])) {
			require'AddNewTechnician.php';
		}elseif (isset($_GET['receiptionadd'])) {
			require'AddNewReceiption.php';
		}elseif(isset($_GET['shiftjob'])){
			require'JobNoteShift.php';
		}elseif(isset($_GET['reportCheck'])){
			require'ReportCreate.php';
		}elseif(isset($_GET['remove'])){
			require'RemoveEmployee.php';
		}
 

		?>
	</div>
</div>