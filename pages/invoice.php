<?php include "../config.php"; ?>
<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])){header("Location: ../index.php");} ?>
<?php include "navigation.html"; ?>
<?php
    $selectValue = mysqli_real_escape_string($connect, $_POST["invoiceNum"]);
    $invoiceNum_query = "SELECT invoice_number FROM invoice WHERE invoice_number <> '' ORDER BY invoice_number ASC";
    $invoiceNum_result = mysqli_query($connect, $invoiceNum_query);
    if ($_SERVER[REQUEST_METHOD]=="POST") {
            $selectValue = mysqli_real_escape_string($connect, $_POST["invoiceNum"]);
            $invoice_query = "SELECT invoice.*, vendor.vendor_name, vendor.address_1, term.term, payment_method.payment_method
                    FROM invoice 
                    LEFT JOIN vendor ON vendor.vendor_id = invoice.vendor_id 
                    LEFT JOIN payment_method ON payment_method.payment_method_id = vendor.payment_method_id 
                    LEFT JOIN term ON term.term_id = invoice.term_id 
                    WHERE invoice_number='".$selectValue."' ORDER BY invoice_id ASC";
            $invoice_result = mysqli_query($connect, $invoice_query);
            $selectedInvoice = mysqli_fetch_array($invoice_result);
}
?>

<body>

    <main id="main">
        
        <form class="form-horizontal" method="post" action="invoice.php">
            <fieldset>
                <legend>Invoice</legend>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="invoiceNum">Invoice Number</label>
                    <div class="col-md-4">
                        <select id="invoiceNum" name="invoiceNum" class="form-control">
                            <option value="">Select an invoice</option>
                            <?php
                                while ($invoiceNum = mysqli_fetch_array($invoiceNum_result)){
                                    echo "<option value='".$invoiceNum[0]."'";
                                    if ($selectValue == $invoiceNum[0]) {echo " selected ";}
                                    echo ">".$invoiceNum[0]."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="openInvoice"></label>
                    <div class="col-md-4">
                        <input class="btn btn-primary" type="submit" name="submit" value="View Invoice">
                    </div>
                </div>


                

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="vendor">Vendor</label>
  <div class="col-md-4">
    <input id="vendor" name="vendor" type="text" placeholder="<?php= $selectedInvoice[vendor_name] ?>" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Date</label>  
  <div class="col-md-4">
  <input id="date" name="date" type="text" placeholder="<?php echo $selectedInvoice[invoice_date]; ?>" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address"><?php echo $selectedInvoice[address_1]; ?></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="amountDue">Amount Due</label>  
  <div class="col-md-4">
  <input id="amountDue" name="amountDue" type="text" placeholder="<?php echo $selectedInvoice[total_amount]; ?>" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="terms">Terms</label>  
  <div class="col-md-4">
  <input id="terms" name="terms" type="text" placeholder="<?php echo $selectedInvoice[term]; ?>" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dueDate">Due Date</label>  
  <div class="col-md-4">
  <input id="dueDate" name="dueDate" type="text" placeholder="<?php echo $selectedInvoice[due_date]; ?>" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="paymentMethod">Payment Method</label>  
  <div class="col-md-4">
  <input id="paymentMethod" name="paymentMethod" type="text" placeholder="<?php echo $selectedInvoice[payment_method]; ?>" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="memo">Memo</label>  
  <div class="col-md-5">
  <input id="memo" name="memo" type="text" placeholder="<?php echo $selectedInvoice[memo]; ?>" class="form-control input-md">
    
  </div>
</div>

</fieldset>
</form>

        





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

</body>
<?php include "footer.php"; ?>
