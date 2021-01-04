<!doctype html>
<?php include "header.php" ?>

<?php 	
//query to get data from the table
$sql = " SELECT * FROM medida WHERE data >= now() - INTERVAL 48 HOUR;";
$result = mysqli_query($mysqli, $sql);
?>
      <?php include "chart.php" ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php include "footer.php" ?>
</html>
