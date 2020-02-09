<?php session_start(); ?>



<?php if(!isset($_SESSION['user_id'])){

    header("Location: ../index.php");
	} ?>
<?php include "../pages/navigation.html"; ?>

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
	  <div class="container" style="padding-top:5%">
	  	   <div class="row">
          		<div style="float: left; padding-left: 5%; padding-right: 5%; padding-bottom: 2%" class="col-6 text-center">	
             	 	 <table border="1" cellspacing="0" cellpadding="0" class="table">	
					 		<tbody>	
									<tr>
                            			<th width="80%" class="border-all text-center">Target Food Costs %</th>
                           				<td width="20%" class="bg-yellow border-all">&nbsp;</td>
									</tr>
									<tr>
										<th width="80%" float="left" class="border-all text-center">Projected Food Costs %</th>
                            			<td width="20%" class="border-all">&nbsp;</td>
									</tr>
							</tbody>
					</table>
				</div>
				<div style="float: right; padding-left: 5%; padding-right: 5%; padding-bottom: 2%" class="col-6 text-center">
					<table border="1" cellspacing="0" cellpadding="0" class="table">	
				 		   <tbody>
						   		  <tr>	
                            	  	  <th width="80%" class="border-all text-center">Target Alcohol Costs %</th>
                           			  <td width="20%" class="bg-yellow border-all">&nbsp;</td>
								  </tr>
								  <tr>
                            	  	  <th width="80%" class="border-all text-center">Projected Alcohol Costs %</th>
                            		  <td width="20%" class="border-all">&nbsp;</td>
								  </tr>
                   			</tbody>
					</table>
				</div>		
			</div>
		</div>	
		<div class="container">
			<div class="row">
		 		 <div style="float: left; padding-left: 5%; padding-right: 5%; padding-bottom: 2%" class="col-6 text-center">
		 	  	 	<table border="1" cellspacing="0" cellpadding="0" class="table">
			  			   <tbody>
						   		  <tr>
					 	 		  	  <th colspan="2" class="border-all bg-yellow text-center">Food</th>
								  </tr>
								  <tr>
						 		  	  <th width="80%" class="border-all text-center">Current Food Cost %</th>
						 			  <td width="20%" class="border-all">&nbsp;</td>
								  </tr>
					 			  <tr>
  					 	 		  	  <th width="80%" class="border-all text-left">Adjusted Budget</th>
						 			  <td width="20%" class="border-all">&nbsp;</td>
								  </tr>
					 			  <tr>
					 	 		  	  <th width="80%" class="border-all text-left">Remaining Budget</th>
						 			  <td width="20" class="border-all"></td>
								  </tr>
					 			  <tr>
					 			  	  <th width="80%" class="border-all text-left">Purchases</th>
						 			  <td width="20%" class="border-all"></td>
								  </tr>
					 		</tbody>
					</table>
		 	    </div>
		 	   	<div style="float: right; padding-left: 5%; padding-right: 5%; padding-bottom: 2%" class="col-6 text-center">
		 	   		<table border="1" cellspacing="0" cellpadding="0" class="table">
			  		 	   <tbody>
					 	   		  <tr>
					 	 		  	  <th colspan="2" class="border-all bg-yellow text-center">Alcohol</th>
					 			  </tr>
					 			  <tr>
						 		  	  <th width="80%" class="border-all text-center">Current Alcohol Cost %</th>
						 			  <td width="20%" class="border-all">&nbsp;</td>
					 			  </tr>
					 			  <tr>
					 	 		  	  <th width="80%" class="border-all text-left">Adjusted Budget</th>
									  <td width="20%" class="border-all">&nbsp;</td>
					 			  </tr>
					 			  <tr>
					 	 		  	  <th width="80%" class="border-all text-left">Remaining Budget</th>
						 			  <td width="20" class="border-all"></td>
					 			  </tr>
					 			  <tr>
					 	 		  	  <th width="80%" class="border-all text-left">Purchases</th>
						 			  <td width="20%" class="border-all"></td>
					 			  </tr>	
					 		</tbody> 			 
					 </table>
		 		 </div>
			 </div>
		</div>
		<div class="container">
			 <div class="row">	
		 	     <div style="float: left; padding-left: 5%; padding-right: 5%; padding-bottom: 2%" class="col-6 text-center">
				     <table border="1" cellspacing="0" cellpadding="0" class="table">
						   <tbody>
			 	   		  		 <tr>
					 			 	 <th width="20%" class="border-all bg-yellow text-center">Date</th>
									 <th width="60%" class="border-all bg-yellow text-center">Vendor</th>
									 <th width="20%" class="border-all bg-yellow text-center">Amount</th>
					 			 </tr>
								 <tr>
								 	 <td></td>
								 	 <td></td>
								 	 <td></td>
								 </tr>
							</tbody>	 
					 </table>
			     </div>   
		 		 <div style="float: right; padding-left: 5%; padding-right: 5%; padding-bottom: 2%" class="col-6 text-center">
				 
		 	  		 <table border="1" cellspacing="0" cellpadding="0" class="table">
			  		 		<tbody>
								  <tr>
					 			   	  <th width="20%" class="border-all bg-yellow text-center">Date</th>
								   	  <th width="60%" class="border-all bg-yellow text-center">Vendor</th>
								   	  <th width="20%" class="border-all bg-yellow text-center">Amount</th>
								  </tr>
								  <tr>
								 	 <td</td>
								 	 <td</td>
								 	 <td></td>
								 </tr>
					 		</tbody>
			  		 </table>
		 		</div>
			</div>		
		 </div> 
    </section>
  </main>



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

<?php include "footer.php"; ?>

	