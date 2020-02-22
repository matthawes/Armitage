<?php include "navigation.html"; ?>
<?php include "../config.php"; ?>
<?php session_start(); ?>



<?php
if(!isset($_SESSION['user_id'])){

    header("Location: ../index.php");
}
?>




<body>

  <main id="main">

<select>
<?php
for ($i = 0; $i < 4; $i++) {
    echo '<option value="' . date("Y-m-d", strtotime("this sunday - $i week")) . '">' . date("M j", strtotime("this sunday - $i week")) . " - " . date("M j", strtotime("this saturday - $i week")) .'</option>';
}
?>
</select>

   



  </main>

</body>

  



<?php include "../pages/footer.php"?>
