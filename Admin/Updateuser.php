<?php
session_start();
include("../Connection/Conn.php");
$id = $_POST['id_user'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$old = $_POST['old'];
$sex = $_POST['sex'];
$role = $_POST['role'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];


	$sql = "UPDATE tbl_user SET password = '$password', first_name ='$first_name', last_name ='$last_name', old = '$old', sex ='$sex', role = '$role', email ='$email', phone_number ='$phone_number', updatedate = NOW() WHERE id_user = '$id'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
        $_SESSION['first_name'] = $first_name;
        
		echo "<script>";
		echo "alert(\" เเก้ไขข้อมูลสำเร็จ \");";
		echo "window.location.href='index.php?option=Frmuser'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\" เเก้ไขข้อมูลไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>