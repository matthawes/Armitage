<?php include "header.php"; ?>
<?php include "config.php"; ?>

<body>
    <div class="jumbotron jumbotron-fluid text-center margin-b-0">
        <p class="text-center"><img src="img/Armitage_logo.jpg" width="150" alt="Armitage logo" /></p>
        <h3>Armitage Accounting Login</h3>
        <hr class="my-4">
        <form class="form-signin" method="POST">
            <h2 class="form-signin-heading">Reset Password</h2>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <?php echo $message;?>


    <?php 
    
    $result = $mysqli->query("SELECT company_name FROM user, company, and user_company 
    WHERE user.user_id=user.company_id 
    ORDER BY company_name ASC");
    ?>
<select name="categories">
    <option value="Select Company">Select Company to access: </option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['path'] . "'>'" . $row['name'] . "'</option>";
    }?>



</form>



</body>
<?php include "footer.php"; ?>
