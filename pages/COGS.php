<?php session_start(); ?>



<?php if(!isset($_SESSION['user_id'])){

    header("Location: ../index.php");
	} ?>
<?php include "navigation.html"; ?>
<body>

  <main id="main">

    <!--==========================

      Frequently Asked Questions Section

    ============================-->

    <section id="services">
      <div class="container">
        <div class="section-header wow fadeInUp" style="visibility: visible;">
          <h3 class="section-title">COGS</h3>
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
       </div>
      </div>

	  <div class="row">
          	<div style="float: left; class="col-6 text-center" >		
             	 <table border="1" cellspacing="0" cellpadding="0" class="table table-responsive table-sm">	
					<tbody>	
						<tr>
                            <th width="30%" class="border-all text-center">Target Food Costs %</th>
                            <td width="20%" class="bg-yellow border-all">&nbsp;</td>
						</tr>
						<tr>
							<th width="30%" float="left" class="border-all text-center">Projected Food Costs %</th>
                            <td width="20%" class="border-all">&nbsp;</td>
						</tr>
					</tbody>
				</table>
			</div>
						
					
					
			<div style="float: right; class="col-6 text-center">
				 <table border="1" cellspacing="0" cellpadding="0" class="table table-responsive table-sm">	
				 	<tbody>
						<tr>	
                            <th width="30%" class="border-all text-center">Target Alcohol Costs %</th>
                            <td width="20%" class="bg-yellow border-all">&nbsp;</td>
						</tr>
						<tr>
                            <th width="30%" class="border-all text-center">Projected Alcohol Costs %</th>
                            <td width="20%" class="border-all">&nbsp;</td>
						</tr>
                    </tbody>
				</table>
			</div>
		</div>	
	<div class=""row">
		 <div style="float: left; class="col-6 text-center">
		 	  <table border="1" cellspacing="0" cellpadding="0" class="table table-responsive table-sm">
			  		<tr>
					 	 <th colspan="2" class="border-all bg-yellow text-center">Food</th>
					</tr>
					<tr>
						 <th width="30%" class="border-all text-center">Current Food Cost %</th>
						 <td width="20%" class="border-all">&nbsp;</td>
					 </tr>
					 <tr>
					 	 <th width="30%" class="border-all text-left">Adjusted Budget</th>
						 <td width="20%" class="border-all">&nbsp;</td>
					 </tr>
					 <tr>
					 	 <th width="30%" class="border-all text-left">Remaining Budget</th>
						 <td width="20" class="border-all"></td>
					 </tr>
					 <tr>
					 	 <th width="30%" class="border-all text-left">Purchases</th>
						 <td width="20%" class="border-all"></td>
					 </tr>
				</table>
		 </div>
		 <div style="float: right; class="col-6 text-center">
		 	  <table border="1" cellspacing="0" cellpadding="0" class="table table-responsive table-sm">
			  		 <tr>
					 	 <th colspan="2" class="border-all bg-yellow text-center">Alcohol</th>
					 </tr>
					 <tr>
						 <th width="30%" class="border-all text-center">Current Alcohol Cost %</th>
						 <td width="20%" class="border-all">&nbsp;</td>
					 </tr>
					 <tr>
					 	 <th width="30%" class="border-all text-left">Adjusted Budget</th>
						 <td width="20%" class="border-all">&nbsp;</td>
					 </tr>
					 <tr>
					 	 <th width="30%" class="border-all text-left">Remaining Budget</th>
						 <td width="20" class="border-all"></td>
					 </tr>
					 <tr>
					 	 <th width="30%" class="border-all text-left">Purchases</th>
						 <td width="20%" class="border-all"></td>
					 </tr>				 
				</table>
		 </div>
	</div> 
	<div class="row">	
		 <div style="float: left; class="col-6 text-center">
		 	  <div class="row">
			  	   <div class="col text-left">
				    <table border="1" cellspacing="0" cellpadding="0" class="table table-responsive table-sm">
			 	   		 <tr>
					 		<th class="border-all text-left">Date</th>
							<th class="border-all text-left">Vendor</th>
							<th class="border-all text-left">Amount</th>
					 	</tr>
					</table>
			  	   </div>
			  </div>
		 	  
		 	 
			  		 
		 </div>
	
		 <div style="float: right; class="col-6 text-center">
		 	  <table border="1" cellspacing="0" cellpadding="0" class="table table-responsive table-sm">
			  		 <thead>
					 		<th class="border-all text-left">Date</th>
							<th class="border-all text-left">Vendor</th>
							<th class="border-all text-left">Amount</th>
					 </thead>
			  </table>
		 </div>
	</div>		

    </section>



  </main>



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


</-- Footer -->

<?php include "footer.php"; ?>




