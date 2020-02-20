<?php session_start(); ?>
<?php include "../config.php"; ?>
<?php include "../pages/navigation.html"; ?>

<?php if(!isset($_SESSION['user_id'])){

    header("Location: ../index.php");
	} ?>

<?php 
	  	$selectValue = mysqli_real_escape_string($connect, $_POST["cogDate"]);
    		$cogdate_query = "SELECT entry_date FROM cost_of_goods WHERE entry_date <> '' ORDER BY entry_date ASC";
    		$cogDate_result = mysqli_query($connect, $cogdate_query);
			if ($_SERVER['REQUEST_METHOD']=="POST") {
			   $selectValue = mysqli_real_escape_string($connect, $_POST["cogDate"]);
               $cogDate_query = "SELECT cost_of_goods.*, cost_of_goods.entry_date, cost_of_goods.vendor_id, cost_of_goods.amount,company.target_food_cost_percentage, company.target_alcohol_cost_percentage
                    FROM cost_of_goods
                    INNER JOIN company ON cost_of_goods.company_id = company.company_id
					WHERE entry_date='".$selectValue."'";
               $cogDate_result = mysqli_query($connect, $cogDate_query);
           	   $selectedCOG = mysqli_fetch_array($cogDate_result);
			   }
			   
			   

?>



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
			<form id="dateForm" style="left:">
				  <label style="float: left;">
				  Enter the desired date:
				  <input type="date" name="cogDate"">
				  </label>
				  <input class="btn btn-warning btn-md" type="submit" name="submit">
			</form>
		</div>
      </div>
	  <div class="container" style="padding-top:5%">
	  	   <div class="row">
          		<div style="float: left; padding-left: 5%; padding-right: 5%; padding-bottom: 2%" class="col-6 text-center">	
             	 	 <table border="1" cellspacing="0" cellpadding="0" class="table">	
					 		<tbody>	
									<tr>
                            			<th width="80%" class="border-all text-center">Target Food Costs %</th>
                           				<td width="20%" placeholder= "<?= $selectedCOG['target_food_cost_percentage'] ?>" class="bg-yellow border-all"></td>
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
				     <table width="50%" float: left; border="1" cellspacing="0" cellpadding="0" class="table">
						   <tbody>
			 	   		  		 <tr>
					 			 	 <th width="20%" class="border-all bg-yellow text-center">Date</th>
									 <th width="60%" class="border-all bg-yellow text-center">Vendor</th>
									 <th width="20%" class="border-all bg-yellow text-center">Amount</th>
					 			 </tr>
								 <?php
                                if ($_SERVER['REQUEST_METHOD']=="POST") {
                                    while ($selectedcogLines = mysqli_fetch_array($cogDate_result)){
                                        echo "<tr>
						<td class='border-all'>".$selectedCOG['entry_date']."</td>
						<td class='border-all'>".$selectedCOG['vendor_id']."</td>
						<td class='border-all'>".$selectedCOG['amount']."</td></tr>";
                                    }
                                }
                            ?>
							</tbody>	 
					 </table>
			     </div>   
		 		 <div style="float: right; padding-left: 5%; padding-right: 5%; padding-bottom: 2%" class="col-6 text-center">
				 
		 	  		 <table width="50%" float: right; border="1" cellspacing="0" cellpadding="0" class="table">
			  		 		<tbody>
								  <tr>
					 			   	  <th class="border-all bg-yellow text-center">Date</th>
								   	  <th class="border-all bg-yellow text-center">Vendor</th>
								   	  <th class="border-all bg-yellow text-center">Amount</th>
								  </tr>
								  <?php
                                if ($_SERVER['REQUEST_METHOD']=="POST") {
                                    while ($selectedcogLines = mysqli_fetch_array($cogDate_result)){
                                        echo "<tr>
						<td class='border-all'>".$selectedCOG['entry_date']."</td>
						<td class='border-all'>".$selectedCOG['vendor_id']."</td>
						<td class='border-all'>".$selectedCOG['amount']."</td></tr>";
                                    }
                                }
                            ?>
								  
					 		</tbody>
			  		 </table>
		 		</div>
			</div>		
		 </div> 
    </section>	
	
  </main>



 

<?php include "footer.php"; ?>

	
