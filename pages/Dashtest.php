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
 for($i=0; $i<7; $i++){

echo date('m-d-Y: D',strtotime("$i day"))."<br>";

}
?>

  </main>

</body>

  




