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
          	<div style="float: left; width="50%"  class="col-4 text-center" >		
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
						
					
					
			<div style="float: right; width="50%" class="col-4 text-center">
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
		 <div style="float: left; width:"50%" class="col-4 text-center">
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
		 <div style="float: right; width:"50%" class="col-4 text-center">
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
		 <div style="float: left; width:"50%" class="col-4 text-center">
		 	  <table border="1" cellspacing="0" cellpadding="0" class="table table-responsive table-sm">
			  		 <thead>
					 		<th class="border-all text-left">Date</th>
							<th class="border-all text-left">Vendor</th>
							<th class="border-all text-left">Amount</th>
					 </thead>
			  </table>
		 </div>
		 <div style="float: right; width:"50%" class="col-4 text-center">
		 	  <table border="1" cellspacing="0" cellpadding="0" class="table table-responsive table-sm">
			  		 <thead>
					 		<th class="border-all text-left">Date</th>
							<th class="border-all text-left">Vendor</th>
							<th class="border-all text-left">Amount</th>
					 </thead>
			  </table>
		 </div>
	</div>		

    </section><!-- #faq -->



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

  <script src="../js/main.js"></script><!--==========================
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




</body>
