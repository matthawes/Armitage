<?php session_start(); ?>

<?php

if(!isset($_SESSION['user_id'])){
    header("Location: ../index.php");
}
?><?php include "navigation.html"; ?>

<body>


  <main id="main">
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>Alcohol Inventory</h3>
        </header>
          <div class="row">
          	<div class="col-4 text-center">
				<li class="fa fa-arrow-circle-left"></li> December 24, 2019 <li class="fa fa-arrow-circle-right"></li>
				  <table border="0" cellspacing="0" cellpadding="0" class="table table-responsive table-sm">
					  <tbody>
						<tr>
						  <td width="50%" class="border-all text-center">SALES</td>
						  <td width="50%" class="bg-yellow border-all">&nbsp;</td>
						</tr>
						<tr>
						  <td colspan="2">&nbsp;</td>
					    </tr>
						<tr>
						  <td width="50%" class="border-all text-center">COGS</td>
						  <td width="50%" class="border-all">&nbsp;</td>
						</tr>
						<tr>
						  <td colspan="2">&nbsp;</td>
					    </tr>
						<tr>
						  <td width="50%" class="border-all text-center">BEGINNING INV (OVERRIDE)</td>
						  <td width="50%" class="bg-yellow border-all">&nbsp;</td>
						</tr>
					  </tbody>
					</table>
		  	</div>
			  <div class="col-8">
				  <table border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-sm">
					  <thead class="text-sm text-center thead-dark">
						<tr>
						  <th></th>
						  <th></th>
						  <th>Beg.</th>
						  <th>Purch.</th>
						  <th>End</th>
						  <th>Change</th>
						  <th>%</th>
					    </tr>
					</thead>  
						<tbody>  
						<tr>
						  <td class="text-bold">L</td>
						  <td class="text-bold">Liquor</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right"></td>
						</tr>
						<tr>
						  <td class="text-bold">BB</td>
						  <td class="text-bold">Beer Bottle</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right"></td>
						</tr>
						<tr>
						  <td class="text-bold">BT</td>
						  <td class="text-bold">Beer Tap</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right"></td>
						</tr>
						<tr>
						  <td class="text-bold">WG</td>
						  <td class="text-bold">Wine Glass</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right"></td>
						</tr>
						<tr>
						  <td class="text-bold">WB</td>
						  <td class="text-bold">Wine Bottle</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right"></td>
						</tr>
						<tr class="border-0">
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td class="text-right">&nbsp;</td>
						  <td class="text-right">&nbsp;</td>
						  <td class="text-right">$0.00</td>
						  <td class="text-right">&nbsp;</td>
						  <td class="text-right">&nbsp;</td>
						</tr>
					  </tbody>
				</table>

		     </div>
		  </div>
          <div class="row">
          <div class="col-12">
			  <hr>
			 <form>
				  <div class="form-group w-50">
					<select class="form-control" id="exampleFormControlSelect1">
					  <option selected="selected">Select...</option>
					  <option value="WALK-IN COOLER">WALK-IN COOLER</option>
					  <option value="WINE ROOM">WINE ROOM</option>
					  <option value="LIQUOR CAGE">LIQUOR CAGE</option>
					  <option value="BEHIND BAR">BEHIND BAR</option>
					  <option value="BOTTLE COOLER">BOTTLE COOLER</option>
                    </select>
				  </div>
			</form>
		    <table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
			 <thead class="thead-dark">
			   <tr class="text-sm text-center">
			     <th width="8%"><table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
			       <thead class="thead-dark">
			         <tr class="text-sm text-center">
			           <th width="4%">Cat</th>
			           <th width="16%">Item</th>
			           <th width="8%">Vendor</th>
			           <th width="8%">Unit</th>
			           <th width="8%">Cost</th>
			           <th width="8%">Beg.</th>
			           <th width="8%">Purch.</th>
			           <th width="8%">End</th>
			           <th width="8%">Beg.</th>
			           <th width="8%">Purch.</th>
			           <th width="8%">End</th>
			           <th width="8%">Change</th>
		              </tr>
		            </thead>
			       <tbody>
			         <tr>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
		              </tr>
			         <tr>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
		              </tr>
			         <tr>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
		              </tr>
			         <tr>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
		              </tr>
			         <tr>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
		              </tr>
			         <tr>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
		              </tr>
			         <tr>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
		              </tr>
			         <tr>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
		              </tr>
			         <tr>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
		              </tr>
			         <tr>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td class="bg-yellow">&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
			           <td>&nbsp;</td>
		              </tr>
		            </tbody>
		         </table></th>
			   </tr>
			 </thead>
		    </table>
          </div>
			<a class="btn btn-warning btn-lg" href="#" role="button">Submit</a>
		  
        
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
<!-- InstanceEnd --></html>
