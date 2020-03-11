<?php session_start(); ?>

<?php

if(!isset($_SESSION['user_id'])){
    header("Location: ../index.php");
}
?>
<?php include "navigation.html"; ?>
<?php include "../config.php"; ?>

<body>


  <main id="main">
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
	<div class="container">
		<header class="section-header">
			<h3>Purchases</h3>
			<span class="section-divider"></span>
				<div class="input-container">
		</header>
		<div class="row">
          <div class="col-12">
        	<form method="POST">
                 <div class="form-group w-50">                   
                    <select name="purchases" class="form-control" id="exampleFormControlSelect1">                
			<option value="">Select...</option>
                        <option value="food">Food Costs</option>
                        <option value="alcohol">Alcohol Costs</option>
			<option value="advertising">Advertising</option>
			<option value="cleaning">Cleaning Supplies</option>
			<option value="linen">Linen</option>
			<option value="office">Office Supplies</option>
			<option value="repair_maint">Repair and Maintenance</option>
                        <option value="restaurant">Restauraunt Supplies</option>
                    </select>
                     <input class="btn btn-warning btn-sm" type="submit" name="submit" value="View Purchases">
		</div>                        
		</form>  
                        <?php
                        if(isset($_POST['submit']))
                        {
				
			
		  	if($_POST['purchases'] == "food")
			{
                        $foodOption = "SELECT food_item_cost.*, cost, start_date, vendor_name 
			FROM food_item_cost, vendor 
			LEFT JOIN vendor ON vendor.vendor_id = food_item_cost.vendor_id";
                        $purchase_result = mysqli_query($connect, $foodOption);
                        }
                        else if($_POST['purchases'] == alcohol")
                        {
                        $purchaseOption = "SELECT vendor_name FROM vendor";
                        $purchase_result = mysqli_query($connect, $purchaseOption);
                        }
                        else if($_POST['purchases'] == "advertising")
                        {
                        }
                        else if($_POST['purchases'] == "cleaning")
                        {
                        }
                        else if($_POST['purchases'] == "linen")
                        {
                        }
                        else if($_POST['purchases'] == "repair_maint")
                        {
                        }
                        else($_POST['purchases'] == "restaurant")
                        {
                        };
			}
                        ?>
		  <?php
			<tr>
				while($selectedPurchase = mysqli_fetch_array($purchase_result)){
                                        echo "<td>".$selectedPurchase['vendor_name']"</td>";
                                        }
			</tr>
		  ?>
		</div>
	</div>	
    </section>
    <!-- #about -->

  </main>
  <!-- InstanceEndEditable --><!--==========================
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

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  

</body>
