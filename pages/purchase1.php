<?php session_start(); ?>

<?php

if(!isset($_SESSION['user_id'])){
    header("Location: ../index.php");
}
?>
<?php include "navigation.html"; ?>
<?php include "../config.php"; ?>
<?php
	
	if(isset(_POST['submit'])) {
		$purchaseTitle = $_POST["purchase_title"];
		if($purchase_title == 'Alcohol Costs'){
			$selectValue = mysqli_real_escape_string($connect, $_POST["purchase_title]);
			$selectOption = "SELECT alcohol_inventory.*, vendor.vendor_name, cost_of_goods.entry_date FROM alcohol_inventory
				LEFT JOIN vendor ON vendor.vendor_id = alcohol_inventory.vendor_id
				LEFT JOIN cost_of_goods ON costs_of_goods.cost_of_goods_id = alcohol_inventory.cost_of_goods_id";
			$purchase_result = mysqli_query($connect, $selectOption);
			}
			}
<body>


  <main id="main">
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>Purchases</h3>
            <span class="section-divider"></span>
            <div class="input-container">
                <div id="dateDownOne" onClick="decreaseDateByOne()">
                    <b>Previous</b>
                </div>	
                <form id="dateForm">
                    <input type="date" class="tallInput" id="date" onblur="clearPage()">
                </form>
                <div id="dateUpOne" onClick="increaseDateByOne()">
                    <b>Next</b>
                </div>
            </div>
            
            <style>
			.rollInput {width:50%;}
			#dateForm {text-align:center; display:table;}
			#dateUpOne {display:table;}
			#dateDownOne {display:table;}
			.input-container {padding:5px; align: center; width: 25%; margin:auto; display:grid; grid-template-columns: 1fr 1fr 1fr;}
			.container {overflow:hidden;}
			#startingCash {border:2px solid #000; margin:0px 0px 5px 5px; background-color:#ffe8b8;}
			input {width:100%; height:20px;}
			.finalDiv {height:25px;}
			.tallInput {height:30px;}
			.cashHeader {margin:5px 5px -2px 5px;}
			.cashFooter {margin:-2px 5px 5px 5px;}
			.cashLabeltd {border:2px solid #000;}
			.oddRow {background-color:#ffe8b8;}
			.evenRow {background-color:#e8e8e8;}
			.filler {background-color:#ff9c00; border:0;}
			.headerFiller {background-color:#fff; border:0;}
			#cashFlow {table-layout: fixed;}
			#cashContainer {padding:5px; background-color:#ff9c00; width:63%; border: 2px solid #000;}
			#countContainer {padding:5px; background-color:#ff9c00; width:35%; border: 2px solid #000; float:right;}
			#overShortContainer {margin:0 auto; width:25%; background-color:#ff9c00;}
			input[type="date"] {
				position: relative;}

			/* create a new arrow, because we are going to mess up the native one*/
			input[type="date"]:after {
			padding: 0 5px;
			display:none;}


			/* make the native arrow invisible and stretch it over the whole field so you can click anywhere 
				in the input field to trigger the native datepicker*/
			input[type="date"]::-webkit-calendar-picker-indicator {
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				width: auto;
				height: auto;
				color: transparent;
				background: transparent;}

			/* adjust increase/decrease button */
			input[type="date"]::-webkit-inner-spin-button {display: none;}

			/* adjust clear button */
			input[type="date"]::-webkit-clear-button {display:none;}
		</style>
            
            <script>
                function increaseDateByOne(){
                    document.getElementById("date").stepUp(1);
                    clearPage();   
                }
                function decreaseDateByOne(){
                    document.getElementById("date").stepDown(1);
                    clearPage();
                }
                function loadCurDate(){
                    document.getElementById("date").valueAsDate = new Date();
                }
                window.onload = function(){
                    loadCurDate();
                }
            </script>
            
        </header>
          <div class="row">
          	<div class="col-6">                
				  <table border="0" cellspacing="0" cellpadding="0" class="table table-responsive table-sm">
					  <tbody>
						<tr>
						  <td width="80%" class="border-all text-left">Target Advertising%</td>
						  <td width="20%" class="bg-yellow border-all">&nbsp;</td>
						</tr>
						<tr>
						  <td width="80%" class="border-all text-left">Target Cleaning Supplies%</td>
						  <td width="20%" class="border-all">&nbsp;</td>
						</tr>
						<tr>
						  <td width="80%" class="border-all text-left">Target Linen%</td>
						  <td width="20%" class="bg-yellow border-all">&nbsp;</td>
						</tr>
                        <tr>
						  <td width="80%" class="border-all text-left">Target Office Supplies%</td>
						  <td width="20%" class="bg-yellow border-all">&nbsp;</td>
						</tr>
						<tr>
						  <td width="80%" class="border-all text-left">Target Repairs and Maintenance%</td>
						  <td width="20%" class="border-all">&nbsp;</td>
						</tr>
						<tr>
						  <td width="80%" class="border-all text-left">Target Restaurant Supplies%</td>
						  <td width="20%" class="bg-yellow border-all">&nbsp;</td>
						</tr> 
					  </tbody>
					</table>
		  	</div>
			  <div class="col-6">               
			   <table border="0" cellspacing="0" cellpadding="0" class="table table-responsive table-sm">
				  <tbody>
						<tr>
                            <td width="75%" class="border-all text-left">Current Food Cost%</td>
                            <td width="50%" class="bg-yellow border-all">&nbsp;</td>
						</tr>
                        <tr>
                            <td width="75%" class="border-all text-left">Current Alcohol Cost%</td>
                            <td width="50%" class="bg-yellow border-all">&nbsp;</td>
						</tr>
						<tr>
						  <td width="75%" class="border-all text-left">Adjusted Budget</td>
						  <td width="25%" class="border-all">&nbsp;</td>
						</tr>
						<tr>
						  <td width="75%" class="border-all text-left">Remaining Budget</td>
						  <td width="25%" class="bg-yellow border-all">&nbsp;</td>
						</tr>
                        <tr>
						  <td width="75%" class="border-all text-left">Purchases</td>
						  <td width="25%" class="bg-yellow border-all">&nbsp;</td>
						</tr>
				    </tbody>
				</table>
		  	</div>
		  </div>
          <div class="row">
          <div class="col-12">
			  <form method="post">
                 <div class="form-group w-50">                   
					<select class="form-control"  id="exampleFormControlSelect1">                
					   <option value="none">Select...</option>
                        		   <option value="Food Costs" <? if(@$_POST['purchase_title'] == 'Food Costs') { echo 'selected = \"selected\"'; }?>>Food Costs</option>
                       			   <option value="Alcohol Costs" <? if(@$_POST['purchase_title'] == 'Alcohol Costs') { echo 'selected = \"selected\"'; }?>>Alcohol Costs</option>
					   <option value="Advertising" <? if(@$_POST['purchase_title'] == 'Advertising') { echo 'selected = \"selected\"'; }?>>Advertising</option>
					   <option value="Cleaning Supplies" <? if(@$_POST['purchase_title'] == 'Cleaning Supplies') { echo 'selected = \"selected\"'; }?>>Cleaning Supplies</option>
					   <option value="Linen" <? if(@$_POST['purchase_title'] == 'Linen') { echo 'selected = \"selected\"'; }?>>Linen</option>
					   <option value="Office Supplies" <? if(@$_POST['purchase_title'] == 'Office Supplies') { echo 'selected = \"selected\"'; }?>>Office Supplies</option>
					   <option value="Repair and Maintenance" <? if(@$_POST['purchase_title'] == 'Repair and Maintenance') { echo 'selected = \"selected\"'; }?>>Repair and Maintenance</option>
                       			   <option value="Restaurant Supplies" <? if(@$_POST['purchase_title'] == 'Restaurant Supples') { echo 'selected = \"selected\"'; }?>>Restauraunt Supplies</option>
                    </select> 
                     <a class="btn btn-warning btn-lg" name="submit" href="#" role="button">Submit</a>
				  </div>                        
			</form>                
		    <table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
			 <thead class="thead-dark">
			   <tr class="text-center">
			     <th width="8%"><table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
			       <thead class="thead-dark">
			         <tr class="text-center">
			           <th width="16%">Date</th>
			           <th width="16%">Vendor</th>
			           <th width="16%">Amount</th>
			         </tr>
		           	</thead>
			    <tbody>
				<?php 
					if($_SERVER['REQUEST_METHOD']=="POST') {
					while($selectedOption = mysqli_fetch_array($purchase_result)) {
					echo "<tr><td>".$selectedOption['entry_date']."</td><td>".$selectedOption['vendor_name']."</td><td>".$selectedOption['cost']."</td>
				<td></td>
			       
		            </tbody>
		         </table>
			 </thead>
		    </table>
          </div>
		</div>
      </div>
    </section>
    <!-- #about -->

  </main>
  <!-- InstanceEndEditable --><!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-lg-2 col-md-6 footer-info">
          <img src="../img/Armitage_logo.jpg" class="img-fluid" alt="Armitage Accounting" style="max-width: 150px;"/> </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.armitageaccounting.com/">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Location</h4>
            <p>
              4125 Bridgewater Circle<br>
				Vadnais Heights, MN 55127<br>
            </p>
          </div>

        <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>736.229.3201<br>
                <span class="text-white"><script type="text/javascript" language="javascript">
                <!-- // Generated by http://rumkin.com/tools/mailto_encoder
                ML="</unt\".@=ih a:geco>flrm";
                MI="0<;:E?C85F<9D4A=93CA7<EF94<>?<@@A23493>6@AF5B93CA7<EF94<>?<@@A23493>6@AF01<B";
                OT="";
                for(j=0;j<MI.length;j++){
                OT+=ML.charAt(MI.charCodeAt(j)-48);
                }document.write(OT);
                // --></script>

                </span>
				<br>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright Armitage Accounting. All Rights Reserved
      </div>
   
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>
  <script src="../lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
<!-- InstanceEnd --></html>
