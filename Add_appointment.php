<?php
session_start();
include("Connection/Conn.php");
$user = $_SESSION['id'];
$date = $_POST['date'];
$time = $_POST['time'];
$detail = $_POST['detail'];


$sql = "SELECT time_appointment FROM tbl_appointment WHERE time_appointment= '$time'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num > 0){
    echo "<script>";
    echo "alert(\" เวลานี้มีคนจองเเล้ว \");";
    echo "window.history.back()";
    echo "</script>";
} else {
    $sql2 = "INSERT INTO tbl_appointment (id_user, date_appointment, time_appointment, detail, createdate, updatedate ) VALUES ('$user','$date','$time','$detail', NOW(), NULL )";
    $result2 = mysqli_query($conn, $sql2);
   
    echo "<script>";
    echo "alert(\"นัดหมายสำเร็จ\");";
    echo "window.location.href='index.php?option=Appointment'";
    echo "</script>";
}
?>