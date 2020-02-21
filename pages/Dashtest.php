<?php include "navigation.html"; ?>
<?php include "../config.php" ?>
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

    <section id="faq">

      <div class="container">



        <div class="section-header wow fadeInUp">

          <h3 class="section-title">Dashboard</h3>

          <span class="section-divider"></span>

        </div>
	<div class="input-container">			

			<form id="dateForm">

				  <label>

				  Select desired date:

				  <input type="date" name="Date"">

				  </label>

				  <input class="btn btn-warning btn-md" type="submit" name="submit">

			</form>

		</div>
	</main>										   
 </section>
