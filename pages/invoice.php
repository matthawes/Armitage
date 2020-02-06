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
        
    <section id="invoice">
      <div class="container">
<form method="post" action="invoice.php">
            <fieldset>
        <div class="section-header wow fadeInUp">
          <legend class="section-title">INVOICE</legend>
          <span class="section-divider"></span>
        </div>
          
          
  	    
		  
		<div class="row wow fadeInUp" data-wow-delay="0.2s">
						<div class="col-4">
				<label class="control-label" for="invoiceNum">Invoice #</label><br/>
				<select id="invoiceNum" name="invoiceNum" class="bg-yellow form-control-sm">
                            <option value="">Select an invoice</option>
                            <?php
                                while ($invoiceNum = mysqli_fetch_array($invoiceNum_result)){
                                    echo "<option value='".$invoiceNum[0]."'";
                                    if ($selectValue == $invoiceNum[0]) {echo " selected ";}
                                    echo ">".$invoiceNum[0]."</option>";
                                }
                            ?>
                        </select>
                                <input class="btn btn-warning btn-sm" type="submit" name="submit" value="View Invoice">
			</div>
                    
                    
                    
                    
                    
			<div class="col-2">
                            <label class="control-label" for="vendor">Vendor</label>
                            <input id="vendor" name="vendor" type="text" placeholder="<?= $selectedInvoice[vendor_name] ?? '' ?>" class="bg-yellow form-control">
			</div>
			
			<div class="col-2">
				<label class="control-label" for="date">Date</label>
                                <input id="date" name="date" type="text" placeholder="<?= $selectedInvoice[invoice_date] ?? '' ?>" class="bg-yellow form-control">
			</div>
			
			<div class="col-2">
  <label class="control-label" for="amountDue">Amount Due</label>  
  
  <input id="amountDue" name="amountDue" type="text" placeholder="<?= $selectedInvoice[total_amount] ?? '' ?>" class="bg-yellow form-control">
			</div>
                    <div class="col-2">
                        
                         <label class="control-label" for="terms">Terms</label>  

  <input id="terms" name="terms" type="text" placeholder="<?= $selectedInvoice[term] ?? '' ?>" class="bg-yellow form-control"> 
                        
                    </div>

			
			</div>        

            
            
            
            



<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address"><?= $selectedInvoice[address_1] ?? '' ?></textarea>
  </div>
</div>





<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dueDate">Due Date</label>  
  <div class="col-md-4">
  <input id="dueDate" name="dueDate" type="text" placeholder="<?= $selectedInvoice[due_date] ?? '' ?>" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="paymentMethod">Payment Method</label>  
  <div class="col-md-4">
  <input id="paymentMethod" name="paymentMethod" type="text" placeholder="<?= $selectedInvoice[payment_method] ?? '' ?>" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="memo">Memo</label>  
  <div class="col-md-5">
  <input id="memo" name="memo" type="text" placeholder="<?= $selectedInvoice[memo] ?? '' ?>" class="form-control input-md">
    
  </div>
</div>     
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
          </fieldset>
</form>
        
   </div>
    </section>     
        
        
        
        
        
        
        



                




        





 

		  


                  
                  
  </main>

</body>
<?php include "footer.php"; ?>
