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

  

<?php include "footer.php"; ?>