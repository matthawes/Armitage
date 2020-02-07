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

            $invoice_query = "SELECT invoice.*, vendor.vendor_name, company.company_name, company.address_1, company.address_2, company.city, company.state, company.zip, term.term, payment_method.payment_method
                    FROM invoice
                    LEFT JOIN company ON company.company_id = invoice.company_id
                    LEFT JOIN vendor ON vendor.vendor_id = invoice.vendor_id 
                    LEFT JOIN payment_method ON payment_method.payment_method_id = vendor.payment_method_id 
                    LEFT JOIN term ON term.term_id = invoice.term_id 
                    WHERE invoice_number='".$selectValue."' ORDER BY invoice_id ASC";
            $invoice_result = mysqli_query($connect, $invoice_query);
            $selectedInvoice = mysqli_fetch_array($invoice_result);

            $invoice_lines_query = "SELECT invoice.invoice_id, invoice.invoice_number, invoice_line.*
                    FROM invoice
                    INNER JOIN invoice_line ON invoice_line.invoice_id = invoice.invoice_id
                    WHERE invoice_number='".$selectValue."' ORDER BY invoice_line_id ASC";
                    $invoice_lines_result = mysqli_query($connect, $invoice_lines_query);
            
            while ($selectedInvoiceLines = mysqli_fetch_array($invoice_lines_result)){
                echo $selectedInvoiceLines[0].$selectedInvoiceLines[1].$selectedInvoiceLines[2].$selectedInvoiceLines[3];
            }
    }
?>


    

    
    
    
    
    <main id="main">
        <section id="services">
            <div class="container">
                <div class="section-header wow fadeInUp" style="visibility: visible;">
                    <h3 class="section-title">INVOICE</h3>
                    <span class="section-divider"></span>
                </div>
                <form method="post" action="invoice.php">
                    <fieldset>
                        <div class="section-header wow fadeInUp">
                            <hr class="wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.3s;">
                        </div>
                        <div class="row wow fadeInUp" data-wow-delay="0.2s">
                            <div class="col-4">
                                <label class="control-label" for="memo">Bill To</label>
                                <textarea class="form-control bg-yellow" rows="4" id="address" name="address"><?= $selectedInvoice[company_name] ?? '' ?>&#010;<?= $selectedInvoice[address_1] ?? '' ?>&#010;<?= $selectedInvoice[address_2] ?? '' ?>&#010;<?= $selectedInvoice[city] ?? '' ?> <?= $selectedInvoice[state] ?? '' ?> <?= $selectedInvoice[zip] ?? '' ?></textarea>
                            </div>
                            <div class="col-2">
                                <label class="control-label" for="amountDue">Amount Due</label>  
                                <input id="amountDue" name="amountDue" type="text" placeholder="<?= $selectedInvoice[total_amount] ?? '' ?>" class="bg-yellow form-control">
                            </div>
                            <div class="col-2">
                                <label class="control-label" for="terms">Terms</label>  
                                <input id="terms" name="terms" type="text" placeholder="<?= $selectedInvoice['term'] ?? '' ?>" class="bg-yellow form-control"> 
                            </div>
                            <div class="col-4">
				<label class="control-label" for="invoiceNum">Invoice #</label><br/>
                                <select id="invoiceNum" name="invoiceNum" class="bg-yellow form-control col-6" style="display:inline;">
                                    <option value="">Select an invoice</option>
                                    <?php
                                        while ($invoiceNum = mysqli_fetch_array($invoiceNum_result)){
                                            echo "<option value='".$invoiceNum[0]."'";
                                            if ($selectValue == $invoiceNum[0]) {echo " selected ";}
                                            echo ">".$invoiceNum[0]."</option>";
                                        }
                                    ?>
                                </select>
                                <input class="btn btn-warning btn-md" type="submit" name="submit" value="View Invoice">
                            </div>
			</div>        
                        <hr class="wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s;">
                        <div class="row wow fadeInUp" data-wow-delay="0.4s">
                            <div class="col-2">
                                <label class="control-label" for="vendor">Vendor</label>
                                <input id="vendor" name="vendor" type="text" placeholder="<?= $selectedInvoice[vendor_name] ?? '' ?>" class="bg-yellow form-control">
                            </div>
                            <div class="col-2">
				<label class="control-label" for="date">Date</label>
                                <input id="date" name="date" type="text" placeholder="<?= $selectedInvoice[invoice_date] ?? '' ?>" class="bg-yellow form-control">
                            </div>
                            <div class="col-2">
                                <label class="control-label" for="dueDate">Due Date</label>
                                <input id="dueDate" name="dueDate" type="text" placeholder="<?= $selectedInvoice[due_date] ?? '' ?>" class="bg-yellow form-control">
                            </div>
                            <div class="col-2">
                                <label class="control-label" for="paymentMethod">Payment Method</label>
                                <input id="paymentMethod" name="paymentMethod" type="text" placeholder="<?= $selectedInvoice[payment_method] ?? '' ?>" class="bg-yellow form-control">
                            </div>
                            <div class="col-4">
                                <label class="control-label" for="memo">Memo</label>
                                <input id="memo" name="memo" type="text" placeholder="<?= $selectedInvoice[memo] ?? '' ?>" class="bg-yellow form-control">
                            </div>
                        </div>
                        <hr class="wow fadeInRight" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.3s;">
                    </fieldset>
                </form>
            </div>
        </section>     
    </main>

<?php include "footer.php"; ?>