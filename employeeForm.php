<?php session_start();?>
<?php include "header.php"; ?>
<?php include "config.php"; ?>

<?php
//set message variable to blank
$message = "";

//take registration input data and trim for security 
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$full_name = trim($_POST['full_name']);
$phone_number = trim($_POST['phone_number']);
$birthdate = trim($_POST['birthdate']);
$SSN = trim($_POST['SSN']);
$address_1 = trim($_POST['address_1']);
$address_2 = trim($_POST['address_2']);
$city = trim($_POST['city']);
$state = trim($_POST['state']);
$zip = trim($_POST['zip']);
$job_code_id = trim($_POST['job_code_id']);
$current_pay_rate = trim($_POST['current_pay_rate']);
$tipped = trim($_POST['tipped']);
$filing_status = trim($_POST['filing_status']);
$allowances = trim($_POST['allowances']);
$extra_withholding = trim($_POST['extra_Withholding']);
$start_date = trim($_POST['start_date']);
$termination_date = trim($_POST['termination_date']);
$eligible_rehire =trim($_POST['eligible_rehire']) ;
  
    
////encrypt password
$SSN = trim(password_hash($_POST['SSN'], PASSWORD_BCRYPT, [12]));
    
//query to insert data for new user
//$query = "INSERT into employee(first_name, last_name, full_name, phone_number, birthdate, SSN, address_1, address_2, city, state, zip, job_code_id, current_pay_rate, tipped, filing_status, allowances, extra_withholding, start_date, termination_date, eligible_rehire) VALUES ('$first_name', '$last_name', '$full_name', '$phone_number', '$birthdate', '$SSN', '$address_1', '$address_2', '$city', '$state', '$zip', '$job_code_id', '$current_pay_rate', '$tipped', '$filing_status', '$allowances', '$extra_withholding', '$start_date', '$termination_date', '$eligible_rehire')";
    
//connect to database and run query
$results = mysqli_query($connect, $query);
    
// if(!$results){
//     die("Query failed" . mysqli_error($connect) . ' ' . mysqli_errno($connect));//test the result for errors
// }else{
//     header("Location: index.php");
// } 
    ?>

<body>
<div class="jumbotron jumbotron-fluid text-center margin-b-0">
		<p class="text-center"><img src="img/Armitage_logo.jpg" width="150"  alt="Armitage logo"/></p>
       <h3>Armitage Accounting Registration</h3>
       <hr class="my-4">
      <form action="" class="form-signin" method="POST">
        <h2 class="form-signin-heading">New Employee</h2>

    <?php
echo $message;

?>
<div class="container-fluid">
<div class="form-row align-items-center">
<div class="col-lg-4 form-group">
      <input type="text" name="first_name" class="form-control" placeholder="First Name"  required size="30"><br>
     <input type="text" name="last_name" class="form-control" placeholder="Last Name" required size="30"><br>
     <input type="text" name="full_name" class="form-control" placeholder="Full Name"  required size="30"><br>
      <input type="phone_number" name="phone_number" class="form-control" placeholder="Phone Number"  required size="30"><br>
      <input type="text" name="birthdate" class="form-control" placeholder="Date of Birth"  required size="30"><br>
      <input type="text" name="SSN" id="SSN" class="form-control" placeholder="555-55-5555" pattern="\d{3}-?\d{2}-?\d{4}" required size="30"><br>
      <input type="text" name="start_date" id="start_date" class="form-control" placeholder="Start Date" required size="8"><br>

    </div>

<div class="col-lg-2 form-group">
      <input type="text" name="job_code_id" id="job_code_id" class="form-control" placeholder="Job Code ID" required size="30"><br>
      <input type="number" min="0.01" step="0.01" max="2500" value="25.67" name="current_pay_rate" id="current_pay_rate" class="form-control" placeholder="Current Pay Rate $" required size="5"><br>
      <input type="number" min="0.01" step="0.01" max="2500" value="25.67" name="tipped" id="tipped" class="form-control" placeholder="Tipped $" required size="6"><br>
      <input type="text" name="filing_status" id="filing_status" class="form-control" placeholder="Filing Status" required size="10"><br>
      <input type="number" name="allowances" id="allowances" class="form-control" placeholder="Allowances" min="{2,}" required size="2"><br>
      <input type="text" name="extra_withholding" id="extra_withholding" class="form-control" placeholder="Extra Withholding" required size="5"><br>
      <input type="text" name="termination_date" id="termination_date" class="form-control" placeholder="Termination Date" required size="8"><br>
      <input type="text" name="eligible_rehire" id="eligible_rehire" class="form-control" placeholder="Eligible Rehire" required size="3"><br>
    </div>

    <div class="form-row align-items-center">
    <div class="form-group"><div class="col-auto">
      <input type="text" name="address_1" id="address_1" class="form-control" placeholder="Address 1" required size="75"><br>
      <input type="text" name="address_2" id="address_2" class="form-control" placeholder="Address 2" required size="75"><br>
    </div></div></div>

    <div class="form-row align-items-center">
    <div class="form-group"><div class="col-auto">
    <input type="text" name="city" id="city" class="form-control" placeholder="City" required size="30"><br>
    </div><div class="col-auto">
    <select id="state" name="state"><option value="state">State</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Guam">Guam</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Northern Marianas Islands">Northern Marianas Islands</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Puerto Rico">Puerto Rico</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Virgin Islands">Virgin Islands</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></select>&nbsp;&nbsp;&nbsp;
    </div><div class="col-auto">
    <input type="number" name="zip" id="zip" class="form-control" placeholder="Zip" required size="7"><br>
    </div> </div></div></div></div></div></div></div></div></div>
</div>
    </form>
</body>
<style>
.form-group{
  margin: 6%;
  display: inline-flexbox;
}

</style>

<?php include "pages/footer.php" ?>

