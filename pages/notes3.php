<?php session_start(); ?>

<?php

if(!isset($_SESSION['user_id'])){
    header("Location: ../index.php");
}
?><?php include "navigation.php"; ?>


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
        </div>
		<div class="row">
		  <div class="col-12">
			  <a class="weatherwidget-io" href="https://forecast7.com/en/44d98n93d27/minneapolis/?unit=us" data-label_1="MINNEAPOLIS" data-label_2="WEATHER" data-theme="original" >MINNEAPOLIS WEATHER</a><script>
				!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
				</script>
			 <br>
			  <form>
				  <div class="form-group w-50">
					<select class="form-control" id="exampleFormControlSelect1">
					  <option selected="selected">Select topic...</option>
					  <option value="Date">Date</option>
					  <option value="Weather">Weather</option>
					  <option value="Covers">Covers</option>
					  <option value="Sales">Sales</option>
					  <option value="Repairs and Maintenance">Repairs and Maintenance</option>
					  <option value="Guest Service">Guest Service</option>
					  <option value="Employees">Employees</option>
					  <option value="Tasks">Tasks</option>
					  <option value="Events">Events</option>
					  <option value="Other">Other</option>
                    </select>
				  </div>
				  <div class="form-group">
					<textarea rows="10" class="form-control" id="exampleFormControlTextarea1" placeholder="enter notes..."></textarea>
			    </div>
				  <button type="submit" class="btn btn-warning">Submit</button>
			</form>
			</div>
		  </div>  

      </div>
    </section><!-- #faq -->

  </main>

  

<?php include "footer.php"; ?>