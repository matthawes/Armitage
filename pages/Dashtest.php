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


  date('Y-m-d', strtotime('-7 days')) 



  </main>

</body>

  



<?php include "../pages/footer.php"?>
