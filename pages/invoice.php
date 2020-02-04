<?php include "../pages/navigation.html"; ?>
<?php session_start(); ?>

<?php

if(!isset($_SESSION['user_id'])){
    header("Location: ../index.php");
}
?>

<body>

 

  <main id="main">

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="services">
      <div class="container">

        <div class="section-header wow fadeInUp">
          <h3 class="section-title">INVOICE</h3>
          <span class="section-divider"></span>
        </div>
		  
	    <h2 class="wow fadeInUp" data-wow-delay="0.2s">Bill to:</h2>
		  
		<div class="row wow fadeInUp" data-wow-delay="0.2s">
			
			<div class="col-6">
				<textarea class="form-control bg-yellow" id="billToCo" rows="3">Kado No Mise&#013;&#010;33 N 1st Ave&#013;&#010;Minneapolis, MN 55401</textarea>
			</div>
			
			<div class="col-2">
				<h4 class="text-center">Date</h4>
				<input class="form-control bg-yellow text-center" type="text" value="6/25/2019" id="billToDate">
			</div>
			
			<div class="col-2">
				<h4 class="text-center">Terms</h4>
				<input class="form-control bg-yellow text-center" type="text" value="Net 15" id="billToTerms">
			</div>
			
			<div class="col-2">
				<h4 class="text-center">Invoice #</h4>
				<input class="form-control bg-yellow text-center" type="text" value="2580" id="billToInvoiceNo">
			</div>
			
			</div>
		  <hr class="wow fadeInRight" data-wow-delay="0.3s">	
			<div class="row wow fadeInUp" data-wow-delay="0.4s">
			
			
			<div class="col-3">
				<h4 class="text-center">Item</h4>
				<textarea class="form-control bg-yellow" id="billToItem" rows="6">Monthly Accounting</textarea>
		    </div>
			
		  <div class="col-5">
				<h4 class="text-center">Description</h4>
				<textarea class="form-control bg-yellow" id="billToDesc" rows="6">All-inclusive accounting services</textarea>
		    </div>
			
		  <div class="col-2">
				<h4 class="text-center">Price Each</h4>
				<textarea class="form-control bg-yellow" id="billToPrice" rows="6">&nbsp;</textarea>
		    </div>
			
		  <div class="col-2">
				<h4 class="text-center">Amount</h4>
				<textarea class="form-control bg-yellow" id="billToAmount" rows="6">&nbsp;</textarea>
		    </div>
			
		  </div>
		  <hr class="wow fadeInRight" data-wow-delay="0.5s">
		   <div class="row justify-content-end wow fadeInUp" data-wow-delay="0.6s">
			<div class="col-2">
			  <h4 class="text-left">Total</h4>
			</div>

		  <div class="col-2">
				<input class="form-control text-center" type="text" value="&nbsp;" id="billToTotal">
			</div>

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
  <script src="../js/main.js"></script>

</body>
<?php include "footer.php"; ?>
