<?php 
include("COnnection/Conn.php");

$sql = "SELECT * FROM tbl_count";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
<footer class="bg-body-tertiary text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    &#169; 2020 Copyright:
    <a class="text-body" href="#">Dentistry PIC</a>
    &nbsp;
    จำนวนผู้เข้าชม <?php echo $row['count'] ?>
  </div>
</footer>