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
				 <div class="row">	
             	 <table border="1" cellspacing="0" cellpadding="0" class="table table-responsive table-sm">	
					<tbody>	
						<tr>
                            <th width="60%" class="border-all text-center">Target Food Costs %</th>
                            <td width="40%" class="bg-yellow border-all">&nbsp;</td>
						</tr>
						<tr>
							<th width="60%" float="left" class="border-all text-center">Projected Food Costs %</th>
                            <td width="40%" class="border-all">&nbsp;</td>
						</tr>
					</tbody>
				</table>
				</div>
			</div>
						
					
					
			<div style="float: right; class="col-6 text-center">
				 <div class="row">
				 <table border="1" cellspacing="0" cellpadding="0" class="table table-responsive table-sm">	
				 	<tbody>
						<tr>	
                            <th width="60%" class="border-all text-center">Target Alcohol Costs %</th>
                            <td width="40%" class="bg-yellow border-all">&nbsp;</td>
						</tr>
						<tr>
                            <th width="60%" class="border-all text-center">Projected Alcohol Costs %</th>
                            <td width="40%" class="border-all">&nbsp;</td>
						</tr>
                    </tbody>
				</table>
				</div>
			</div>
		</div>	