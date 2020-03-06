<?php include "header.php"; ?>
<?php include "config.php"; ?>

<?php 
//set message to a blank variable
$message = "";




//if submit button is clicked
if(isset($_POST['submit'])){

    //establish variables
    $email = trim($_POST['email']);
    $length = 50;
    $token = bin2hex(openssl_random_pseudo_bytes($length));
    
    //run query to make sure email matches an email in the database
    $forgotemail_query = "SELECT email FROM user WHERE email = '$email'";
    $forgotemail_result = mysqli_query($connect, $forgotemail_query);

    //if the email does match a users account then add a token to that database user's data
    if(mysqli_num_rows($forgotemail_result) > 0){

        if($stmt = mysqli_prepare($connect, "UPDATE user SET token='{$token}' WHERE email= ?")){
            
        //run a combined statement
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
  
        $ToEmail = '$email';
        $EmailSubject = 'Forgot Password: Armitage Accounting'."\r\n";
        $mailheader = "From: Lou@armitageAccounting"."\r\n";
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $MESSAGE_BODY = 'Here is the link to reset your password: <a href="http://localhost:8888/armitage1.0.0/updatePassword.php?email='.$email.'&token='.$token.' "> "http://localhost:8888/armitage1.0.0/updatePassword.php?email='.$email.'&token='.$token.' "</a></b>';;
 
        mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
        
        } echo "Your message was sent";}

         }

?>
<!--form for email address input to reset password-->

<body>
    <div class="jumbotron jumbotron-fluid text-center margin-b-0">
        <p class="text-center"><img src="img/Armitage_logo.jpg" width="150" alt="Armitage logo" /></p>
        <h3>Armitage Accounting Login</h3>
        <hr class="my-4">
        <form class="form-signin" method="POST">
            <h2 class="form-signin-heading">Reset Password</h2>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9"><?php
echo $message;
?> <?php if(!isset( $emailSent)) ?>
                    <div><input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required size="30"></div><br><br>
                    <div><button class="btn btn-warning btn-lg" name="submit" type="submit">Reset Password</button></div><br>
                    <a class="btn btn-secondary btn-sm" href="registerForm.php">Register</a>&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary btn-sm" href="index.php">Back to Login</a>
                    <div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

<?php include "pages/footer.php"; ?>
