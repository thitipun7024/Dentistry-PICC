<?php
include("Connection/Conn.php");
$username = $_POST['username'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$old = $_POST['old'];
$sex = $_POST['sex'];
$role = "1";
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];

$sql = "SELECT username FROM tbl_user WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num > 0){
    echo "<script>";
    echo "alert(\"user ซ้ำ กรุณาลองใหม่อีกครั้ง \");";
    echo "window.history.back()";
    echo "</script>";
} else {
    $sql2 = "INSERT INTO tbl_user (username, password, first_name, last_name, old, sex, role, email, phone_number, createdate, updatedate) VALUES ('$username','$password','$first_name','$last_name','$old','$sex','$role','$email','$phone_number',NOW(),NULL)";
    $result2 = mysqli_query($conn, $sql2);
   
    echo "<script>";
    echo "alert(\" สมัครสมาชิกสำเร็จ \");";
    echo "window.location.href='Login.php'";
    echo "</script>";
}
mysqli_close($conn);
?>