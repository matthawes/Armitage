<?php session_start();?>
<?php include "header.php"; ?>
<?php include "config.php"; ?>

<?php

//set message variable to blank
$message = "";

//take registration input data and trim for security 
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
//$username = trim($_POST['username']);
//$password = trim($_POST['password']);
//$password2 = trim($_POST['password2']);

//if the passwords match continue, if not then set an error to message variable
// if ($password != $password2)
// {
//     $message = "Oops! Password did not match! Try again. ";   
// } else {

if(isset($_POST['submit'])){   
//  //run a query to ensure username is not taken
// $username_query = "SELECT username FROM user WHERE username = '$username'";
// $username_result = mysqli_query($connect, $username_query);  
//     if(mysqli_num_rows($username_result) > 0){
//         $message = "That username is already taken.";
//     } else {
        
//run a query to ensure email is not already registered
$email_query = "SELECT email FROM user WHERE email = '$email'";
$email_result = mysqli_query($connect, $email_query);

if(mysqli_num_rows($email_result) > 0){
$message = "That email is already registered.";
} else {


//ensure there are no empty fields
if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($phone) ){
//Prevent SQL injection
// $first_name = mysqli_real_escape_string($connect, $first_name);
// $last_name = mysqli_real_escape_string($connect, $last_name);
// $email = mysqli_real_escape_string($connect, $email);
// $phone = mysqli_real_escape_string($connect, $phone);
// $username = mysqli_real_escape_string($connect, $username);
// $password = mysqli_real_escape_string($connect, $password);
    
    
////encrypt password
// $password = trim(password_hash($_POST['password'], PASSWORD_BCRYPT, [12]));
    
//query to insert data for new user
// $query = "INSERT into user(first_name, last_name, email, phone) VALUES ('$first_name', '$last_name', '$email', '$phone')"; 
//connect to database and run query
// $results = mysqli_query($connect, $query); 
// if(!$results){
//     die("Query failed" . mysqli_error($connect) . ' ' . mysqli_errno($connect));//test the result for errors
// }else{
//     header("Location: index.php");
// }}


    
$ToEmail = 'tiffanyspena@gmail.com';
$EmailSubject = 'Site contact form';
$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = "Name: ".$_POST["first_name"]."";
$MESSAGE_BODY .= $_POST["last_name"]."";
$MESSAGE_BODY .= "Email: ".$_POST["email"]."";
$MESSAGE_BODY .= "Phone: ".$_POST["phone"]."";
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");

} echo "Your message was sent";}

}
?>

<body>
    <div class="jumbotron jumbotron-fluid text-center margin-b-0">
        <p class="text-center"><img src="img/Armitage_logo.jpg" width="150" alt="Armitage logo" /></p>
        <h3>Armitage Accounting Registration</h3>
        <hr class="my-4">
        <form action="registerForm.php" class="form-signin" method="POST">
            <h2 class="form-signin-heading">New User</h2>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <?php
echo $message;
?>
                    <div class="input-group">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name" autocomplete="on" required size="30">&nbsp;&nbsp;&nbsp;
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" autocomplete="on" required size="30"><br>
                    </div>
                    <div><br><input type="phone" name="phone" class="form-control" placeholder="Phone Number" autocomplete="on" required size="30"><br>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" autocomplete="on" required size="30"></div><br>

                    <!-- <div><input type="text" name="username" class="form-control" placeholder="Username" autocomplete="on" required size="30"><br>
	</div>
       <div> 
        <input type="password" pattern=".{10,}" name="password" id="inputPassword" class="form-control" placeholder="Password (Minimum 10 characters)" required size="30"></div><br>
            <div> <input type="password" pattern=".{10,}" name="password2" id="inputPassword" class="form-control" placeholder="Re-enter Password" required size="30"></div><br>
      -->
                    <div><button class="btn btn-warning btn-lg" name="submit" type="submit">Submit</button></div><br>
                    <a class="btn btn-secondary btn-sm" href="index.php">Back to Login</a><br>
                </div>
            </div>
        </form>
    </div>
</body>

<?php include "pages/footer.php" ?>
