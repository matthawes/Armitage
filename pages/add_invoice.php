<?php include "../config.php"; ?>
<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])){header("Location: ../index.php");} ?>
<?php include "navigation.html"; ?>
<?php
    $company_name_query = "SELECT company_id, company_name FROM company";
    $company_name_result = mysqli_query($connect, $company_name_query);

    $terms_query = "SELECT term_id, term FROM term";
    $terms_result = mysqli_query($connect, $terms_query);

    $vendors_query = "SELECT vendor_id, vendor_name FROM vendor";
    $vendors_result = mysqli_query($connect, $vendors_query);

    $payment_method_query = "SELECT payment_method_id, payment_method FROM payment_method";
    $payment_method_result = mysqli_query($connect, $payment_method_query);

    $food_item_cost_query = "SELECT food_item_cost_id, type FROM food_item_cost";
    $food_item_cost_result = mysqli_query($connect, $food_item_cost_query);    

    ?>
    <main id="main">
        <section id="services">
            <div class="container">
                <div class="section-header wow fadeInUp" style="visibility: visible;">
                    <h3 class="section-title">NEW INVOICE</h3>
                    <span class="section-divider"></span>
                </div>
                <form method="post" action="add_invoice.php">
                    <fieldset>
                        <div class="section-header wow fadeInUp">
                            <hr class="wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.3s;">
                        </div>
                        <div class="row wow fadeInUp" data-wow-delay="0.2s">
                            <div class="col-4">
                                <label class="control-label" for="memo">Bill To</label>
                                <select id="invoiceNum" name="invoiceNum" class="bg-yellow form-control">
                                    <option value="">Select Company</option>
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
                                <select id="term" name="term" class="bg-yellow form-control">
                                    <option value="">Select Term</option>
                                    <?php
                                        while ($terms = mysqli_fetch_array($terms_result)){
                                            echo "<option value='".$terms[0]."'>".$terms[1]."</option>";
                                        }
                                    ?>
                                </select>
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
                                <select id="vendor" name="vendor" class="bg-yellow form-control">
                                    <option value="">Select Vendor</option>
                                    <?php
                                        while ($vendors = mysqli_fetch_array($vendors_result)){
                                            echo "<option value='".$vendors[0]."'>".$vendors[1]."</option>";
                                        }
                                    ?>
                                </select>
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
                                <select id="paymentMethod" name="paymentMethod" class="bg-yellow form-control">
                                    <option value="">Select Payment Method</option>
                                    <?php
                                        while ($payment_method = mysqli_fetch_array($payment_method_result)){
                                            echo "<option value='".$payment_method[0]."'>".$payment_method[1]."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <label class="control-label" for="memo">Memo</label>
                                <input id="memo" name="memo" type="text" placeholder="" class="bg-yellow form-control">
                            </div>
                        </div>
                        <hr class="wow fadeInRight" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.3s;">
                        <div class="row wow fadeInUp" data-wow-delay="0.6s">
                            <div class="col-12">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="text-left table table-bordered table-sm table-hover table-responsive-lg wow fadeInUpBig">
                                    <thead class="thead-warning">
                                        <tr>
                                            <th>Food Item Cost Type</th>
                                            <th>Amount</th>
                                        </tr>
                                    <tr>
                                        <td>
                                            <select id="foodItemCost1" name="foodItemCost1" class="bg-yellow form-control">
                                                <option value="">Select Food Item Cost Type</option>
                                                <?php
                                                    while ($food_item_cost1 = mysqli_fetch_array($food_item_cost_result)){
                                                        echo "<option value='".$food_item_cost1[0]."'>".$food_item_cost1[1]."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                        <td>
                                            <input id="amount1" name="amount1" type="text" placeholder="" class="bg-yellow form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select id="foodItemCost2" name="foodItemCost2" class="bg-yellow form-control">
                                                <option value="">Select Food Item Cost Type</option>
                                                <?php
                                                    while ($food_item_cost2 = mysqli_fetch_array($food_item_cost_result)){
                                                        echo "<option value='".$food_item_cost2[0]."'>".$food_item_cost2[1]."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                        <td>
                                            <input id="amount2" name="amount2" type="text" placeholder="" class="bg-yellow form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select id="foodItemCost3" name="foodItemCost3" class="bg-yellow form-control">
                                                <option value="">Select Food Item Cost Type</option>
                                                <?php
                                                    while ($food_item_cost3 = mysqli_fetch_array($food_item_cost_result)){
                                                        echo "<option value='".$food_item_cost3[0]."'>".$food_item_cost3[1]."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                        <td>
                                            <input id="amount3" name="amount3" type="text" placeholder="" class="bg-yellow form-control">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <input class="btn btn-warning btn-md" type="submit" name="submit" value="Save Invoice">
                    </fieldset>
                </form>
            </div>
        </section>     
    </main>

<?php include "footer.php"; ?>