<!--main page doc for login or options-->
<?php session_start(); ?>
<?php include "config.php"; ?>
<?php include "header.php"; ?>
<?php
//set message variable to blank
$message = "";

//if submit button is clicked
if(isset($_POST['submit'])){

// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];


// To protect MySQL injection for Security purpose
 $username = mysqli_real_escape_string($connect, $username);
 $password = mysqli_real_escape_string($connect, $password);




//Query to find if username and password info matches
$query = "SELECT * FROM user WHERE username ='$username'";
$select_user_query = mysqli_query($connect, $query);
if (!$select_user_query) {
    die("Query failed : " . mysqli_error($connect));
    }else {

    
//gather data from the database for that username 
while($row = mysqli_fetch_array($select_user_query)){
    
    $db_user_id = $row['user_id'];
    $db_username = $row['username'];
    $db_password = $row['password'];
    $db_user_firstname = $row['firstname'];
    $db_user_lastname = $row['lastname'];
    $db_user_company_id = $row['company_id'];
    }
//password verify is a function used to match a password to a hash
//if (password_verify($_POST["password"], $db_password)) {
if ($_POST["password"] == $db_password) {
    
    $_SESSION['username'] = $db_username;
    $_SESSION['first_name'] = $db_user_firstname;
    $_SESSION['last_name'] = $db_user_lastname;
    $_SESSION['user_id'] = $db_user_id;
    $_SESSION['company_id'] = $db_user_company_id;
    
    $company_query = "SELECT company_name FROM company WHERE company_id =" . $db_user_company_id;
    $company_result = mysqli_query($connect, $company_query);
    $companyName_result = mysqli_fetch_array($company_result);
    $_SESSION['company_name'] = $companyName_result[0];

    header("Location: pages/dashboard.php");
    
} else{
    $message= "That password is incorrect." ;
}
   }}
?>




<!--form for login input info or other options-->

<body>

    <div class="jumbotron jumbotron-fluid text-center margin-b-0">
        <p class="text-center"><img src="img/Armitage_logo.jpg" width="150" alt="Armitage logo" /></p>
        <h3>Armitage Accounting Login</h3>
        <hr class="my-4">
        <form id='login-form' action="index.php" method="post">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <?php
echo $message;
?>
                    <input name="username" type="text" id="username" placeholder=" username" autocomplete="on" class="form-control" size="30"><br>
                    <input name="password" pattern=".{10,}" type="password" id="password" placeholder=" password" class="form-control" size="30"><br>
                    

                    <!--
            ****
            PLEASE CHANGE 
            THE API KEY at "data-sitekey="
            ****
            ****
            -->

                    <button class="btn btn-warning btn-lg " class="g-recaptcha" data-sitekey="AIzaSyDtjVkmvSw6czRVoY_eZVQj9TKjx6IfqlQ" data-callback='onSubmit' name="submit" type="submit">Login</button>

                    <br>
                    <br><a class="btn btn-secondary btn-sm" href="forgotPassword.php?forgot=<?php echo uniqid(true);?>" role="button">Forgot Password</a>&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary btn-sm" href="registerForm.php" role="button">New User</a></div>
            </div>
        </form>
    </div>
</body>
<!--invisible recatcha is initiated-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    function onSubmit(token) {
        document.getElementById("login-form").submit();
    }

</script>

<?php include "pages/footer.php"; ?>
