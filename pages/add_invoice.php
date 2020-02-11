<?php include "../config.php"; ?>
<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])){header("Location: ../index.php");} ?>
<?php include "navigation.html"; ?>
<?php
            $company_name_query = "SELECT company_id, company_name FROM company";
            $company_name_result = mysqli_query($connect, $company_name_query);
?>
    <main id="main">
        <section id="services">
            <div class="container">
                <div class="section-header wow fadeInUp" style="visibility: visible;">
                    <h3 class="section-title">NEW INVOICE</h3>
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
                                <select id="invoiceNum" name="invoiceNum" class="bg-yellow form-control col-6" style="display:inline;">
                                    <option value="">Select an invoice</option>
                                    <?php
                                        while ($company_names = mysqli_fetch_array($company_name_result)){
                                            echo "<option value='".$company_names[0]."'>".$company_names[1]."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-2">
                                <label class="control-label" for="amountDue">Amount Due</label>  
                                <input id="amountDue" name="amountDue" type="text" placeholder="" class="bg-yellow form-control">
                            </div>
                            <div class="col-2">
                                <label class="control-label" for="terms">Terms</label>  
                                <input id="terms" name="terms" type="text" placeholder="" class="bg-yellow form-control"> 
                            </div>
                            <div class="col-4">
				<label class="control-label" for="invoiceNum">Invoice #</label><br/>
                                <input id="invoiceNum" name="invoiceNum" type="text" placeholder="" class="bg-yellow form-control">
                            </div>
			</div>        
                        <hr class="wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s;">
                        <div class="row wow fadeInUp" data-wow-delay="0.4s">
                            <div class="col-2">
                                <label class="control-label" for="vendor">Vendor</label>
                                <input id="vendor" name="vendor" type="text" placeholder="" class="bg-yellow form-control">
                            </div>
                            <div class="col-2">
				<label class="control-label" for="date">Date</label>
                                <input id="date" name="date" type="text" placeholder="" class="bg-yellow form-control">
                            </div>
                            <div class="col-2">
                                <label class="control-label" for="dueDate">Due Date</label>
                                <input id="dueDate" name="dueDate" type="text" placeholder="" class="bg-yellow form-control">
                            </div>
                            <div class="col-2">
                                <label class="control-label" for="paymentMethod">Payment Method</label>
                                <input id="paymentMethod" name="paymentMethod" type="text" placeholder="" class="bg-yellow form-control">
                            </div>
                            <div class="col-4">
                                <label class="control-label" for="memo">Memo</label>
                                <input id="memo" name="memo" type="text" placeholder="" class="bg-yellow form-control">
                            </div>
                        </div>
                        <hr class="wow fadeInRight" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.3s;">
                    </fieldset>
                </form>
                <div class="row wow fadeInUp" data-wow-delay="0.6s">
                    <div class="col-12">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="text-left table table-bordered table-sm table-hover table-responsive-lg wow fadeInUpBig">
                            <thead class="thead-warning">
                                <tr>
                                    <th>Invoice Number</th>
                                    <th>Invoice Line ID</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                </tr>
                            <tr><td><input id="" name="" type="text" placeholder="" class="bg-yellow form-control"></td><td><input id="" name="" type="text" placeholder="" class="bg-yellow form-control"></td><td><input id="" name="" type="text" placeholder="" class="bg-yellow form-control"></td><td><input id="" name="" type="text" placeholder="" class="bg-yellow form-control"></td></tr>
                            <tr><td><input id="" name="" type="text" placeholder="" class="bg-yellow form-control"></td><td><input id="" name="" type="text" placeholder="" class="bg-yellow form-control"></td><td><input id="" name="" type="text" placeholder="" class="bg-yellow form-control"></td><td><input id="" name="" type="text" placeholder="" class="bg-yellow form-control"></td></tr>
                            <tr><td><input id="" name="" type="text" placeholder="" class="bg-yellow form-control"></td><td><input id="" name="" type="text" placeholder="" class="bg-yellow form-control"></td><td><input id="" name="" type="text" placeholder="" class="bg-yellow form-control"></td><td><input id="" name="" type="text" placeholder="" class="bg-yellow form-control"></td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>     
    </main>

<?php include "footer.php"; ?>