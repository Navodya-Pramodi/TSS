<div class="container-fluid " >
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
			
			<a href="Dashbords.php?warrantycheck=ok"><div class="row" style="-webkit-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);height: 13vh;">
				<div class="col-md-12">
					<br><center><p style="font-family: 'Titillium Web', sans-serif;font-size: 20px;">Check Waranty</p></center>
				</div>	
			</div>
			</a>
			<a href="Dashbords.php?invoice=ok"><div class="row" style="-webkit-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);height: 13vh;">
				<div class="col-md-12">
					<br><center><p style="font-family: 'Titillium Web', sans-serif;font-size: 20px;">Downlord invoices</p></center>
				</div>	
			</div>
			</a>
			<a href="Dashbords.php?JobNote=ok">
			<div class="row" style="-webkit-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);
box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.75);height: 13vh;">
				<div class="col-md-12">
					<br><center><p style="font-family: 'Titillium Web', sans-serif;font-size: 20px;">Job Note</p></center>
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
		if (isset($_GET['warrantycheck'])) {
			require'ReceiptionCheckWarranty.php';
		}elseif (isset($_GET['JobNote'])) {
			require'ReceiptionJobNote.php';
		}elseif (isset($_GET['invoice'])) {
			require'ReceiptionDownlordInvoice.php';
		}
 

		?>
	</div>
</div>