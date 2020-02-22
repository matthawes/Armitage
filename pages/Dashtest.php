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

<?php
  $date = new DateTime('7 days ago');
echo $date->format('Y-m-d');
?>

  </main>

</body>

  



<?php include "../pages/footer.php"?>
