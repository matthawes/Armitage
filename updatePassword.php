<?php include "config.php"; ?>
<?php include "header.php"; ?>

<?php

//if the email and token is not provided from the link do not continue
if(!isset($_GET['email']) && !isset($_GET['token'])){
   header("Location: index.php");
}

//select the data attached to the email and token from the database
if($stmt = mysqli_prepare($connect, 'SELECT username, email, token FROM user WHERE token=?')){

    mysqli_stmt_bind_param($stmt, "s", $_GET['token']);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $username, $email, $token);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);
    

    //if the token and email are not retrievable do not continue
    if($_GET['token'] !== $token || $_GET['email'] !== $email){
            header("Location: index.php");
    }
       
}

    
    //if the passwords match then continue to reset
    if(isset($_POST['password']) && isset($_POST['confirmPassword'])){
        if($_POST['password'] === $_POST['confirmPassword']){
            
         //set the chosen password variable   
        $password = $_POST['password'];
        //hash the password for security
        $hashPassword = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));
        //query to update the password in the database and clear the token
        if($stmt = mysqli_prepare($connect, "UPDATE user SET token='', password='$hashPassword' WHERE email = ?")){
            
            mysqli_stmt_bind_param($stmt, "s", $_GET['email']);
            mysqli_stmt_execute($stmt);
            //set message that the password has been updated
            if(mysqli_stmt_affected_rows($stmt) >= 1){
                $message = "Password has been changed. Please click here to login.";
            
            }
        }else {

            mysqli_stmt_close($stmt);
        
        
        }
        
        
        }
        
    }
    
    

    

?>

<body>
 <div class="jumbotron jumbotron-fluid text-center margin-b-0">
		<p class="text-center"><img src="img/Armitage_logo.jpg" width="150"  alt="Armitage logo"/></p>
       <h3>Armitage Accounting Forgot Password</h3>
       <hr class="my-4">
	 <form role="form" autocomplete="off" method="post">
	 <div class="row justify-content-center">
       <div class="col-lg-4 col-md-6 col-sm-9">
           <?php
echo $message;?>
<!--         <input name="username" type="text" id="username" placeholder=" Username" class="form-control" size="30"><br>-->
        <input name="password" pattern=".{10,}" type="password" id="password" placeholder=" Password" class="form-control" size="30"><br>
             <input name="confirmPassword" pattern=".{10,}" type="password" id="password" placeholder="Re-enter Password" class="form-control" size="30"><br>
           <button class="btn btn-warning btn-lg" type="submit">Submit</button><br><br>
        <a class="btn btn-secondary btn-sm" href="index.php" role="button">Back to Login</a>&nbsp;&nbsp;&nbsp;
        <a class="btn btn-secondary btn-sm" href="registerForm.php" role="button">New User</a></div>
	 </div>
	 </form>
    </div>
</body>

<?php include "pages/footer.php"; ?>

