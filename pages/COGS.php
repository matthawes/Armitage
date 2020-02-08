<?php include "navigation.html"; ?>

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
          	<div class="col-6 text-center">		
                    <tbody>
			<tr>
                            <td width="50%" class="border-all text-center">Target Food Costs %</td>
                            <td width="50%" class="bg-yellow border-all">&nbsp;</td>
			</tr>
			<tr>
                             <td width="50%" class="border-all text-center">Target Alcohol Costs %</td>
                             <td width="50%" class="border-all">&nbsp;</td>
			</tr>
                    </tbody>
                </div> 
		<div class="col-6 text-center">
                    <tbody
                        <tr>
                            <td width="50%" class="border-all text-center">Projected Food Costs %</td>
                            <td width="50%" class="bg-yellow border-all">&nbsp;</td>
			</tr>
			<tr>
                             <td width="50%" class="border-all text-center">Projected Alcohol Costs %</td>
                             <td width="50%" class="border-all">&nbsp;</td>
			</tr>
                    </tbody>

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
