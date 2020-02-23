<?php include "navigation.html"; ?>

<?php session_start(); ?>



<?php
if(!isset($_SESSION['user_id'])){

    header("Location: ../index.php");
}
?>

<?php
 (int)$currentpage = (!empty($_GET["currentpage"]))?$_GET["currentpage"]:0;
 (int)$nextpage = $currentpage + 1;
 (int)$previouspage = currentpage - 1;
?>


<body>

  <main id="main">



      <table>
          <tr>
              <td><a href="<?php echo "{$SERVER['PHP_SELF']}?currentpage=$previouspage"; ?>"> << </a></td>
              <td></td>
              <td><a href="<?php echo "{$_SERVER['PHP_SELF']}?currentpage=$nextpage"; ?>"> >> </a></td>
          </tr>
          <tr>
              <?php
                    $ts = date(strtotime('last sunday'));
                    $ts += $currentpage * 86400 * 7;
                    $dow = date('w', $ts);
                    $offset = $dow;
                    
                    $ts = $ts - $offset * 86400;
                    for ($x=0; $x<7; $x++, $ts += 86400) {
                        echo '<td>' . date("m/d/Y, $ts) . '</td>';
                    }
              ?>
          </tr>
      </table>
  </main>

</body>

  




