<?php session_start(); ?>

<?php

if(!isset($_SESSION['user_id'])){
    header("Location: ../index.php");
}
?><?php include "navigation.html"; ?>


<body>

  
  <main id="main">

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">

        <div class="section-header wow fadeInUp">
          <h3 class="section-title">Manager Notes</h3>
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
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="text-center table table-striped table-responsive-lg wow fadeInUpBig">
          <tbody>
            <tr>
				<td class="text-left" width="15%"><label for="Date">Date</label></td>
				<td width="85%">
    			<textarea id="Date" name="Date" placeholder="" rows="3" style="width:85%;"></textarea>
			  <button type="submit" class="btn btn-warning">Submit</button>
			  </td>
			  </tr>
			  
			 <tr>
				<td class="text-left"><label for="Weather">Weather</label></td>
				<a class="weatherwidget-io" href="https://forecast7.com/en/44d98n93d27/minneapolis/?unit=us" data-label_1="MINNEAPOLIS" data-label_2="WEATHER" data-theme="original" >MINNEAPOLIS WEATHER</a><script>
				!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
				</script>
				 <td>
    			<textarea id="W" name="W" placeholder="" rows="3" style="width:85%;"></textarea>
			  <button type="submit" class="btn btn-warning">Submit</button></td>
			  </tr>
			  
			  <tr>
				  <td class="text-left">Covers</td>
				  <td><label for="Covers"></label>
    			<textarea id="C" name="C" placeholder="" rows="3" style="width:85%;"></textarea>
			 <button type="submit" class="btn btn-warning">Submit</button></td>
			  </tr>
			  
			  <tr>
				  <td class="text-left">Sales</td>
				  <td><label for="Sales"></label>
    			<textarea id="S" name="S" placeholder="" rows="3" style="width:85%;"></textarea>
			  <button type="submit" class="btn btn-warning">Submit</button></td>
			  </tr>
			  
            <tr>
              <td class="text-left">Repairs and Maintenance</td>
				<td><label for="Repair"></label>
    			<textarea id="R" name="R" placeholder="" rows="3" style="width:85%;"></textarea>
			  <button type="submit" class="btn btn-warning">Submit</button></td>
			</tr>
			  
            <tr>
              <td class="text-left">Guest Service</td>
				<td><label for="Guest"></label>
    			<textarea id="G" name="G" placeholder="" rows="3" style="width:85%;"></textarea>
			  <button type="submit" class="btn btn-warning">Submit</button></td>
			  </tr>
            <tr>
              <td class="text-left">Employees</td>
				<td><label for="Employee"></label>
    			<textarea id="E" name="E" placeholder="" rows="3" style="width:85%;"></textarea>
			  <button type="submit" class="btn btn-warning">Submit</button></td>
			  </tr>
            <tr>
              <td class="text-left">Tasks</td>
				<td><label for="Tasks"></label>
    			<textarea id="T" name="T" placeholder="" rows="3" style="width:85%;"></textarea>
			 <button type="submit" class="btn btn-warning">Submit</button></td>
			  </tr>
            <tr>
              <td class="text-left">Events</td>
				<td><label for="Events"></label>
    			<textarea id="Events" name="Events" placeholder="" rows="3" style="width:85%;"></textarea>
			  <button type="submit" class="btn btn-warning">Submit</button></td>
			  </tr>
            <tr>
              <td class="text-left">Other</td>
				<td><label for="Others"></label>
    			<textarea id="O" name="O" placeholder="" rows="3" style="width:85%;"></textarea>
			  <button type="submit" class="btn btn-warning">Submit</button></td>
			  </tr>
            
          </tbody>
</table>
  
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
<style>
	#dateForm {text-align:center; display:table;}
	#dateUpOne {display:table;}
	#dateDownOne {display:table;}
	.tallInput {height:30px; width: 150px;}
	.input-container {padding:5px; align: center; width: 25%; margin:auto; display:grid; grid-template-columns: 1fr 1fr 1fr;}
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
	window.onload = function() {
			loadCurDate();
	};
</script>
	
<?php include "../pages/footer.php"; ?>
