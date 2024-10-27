<?php 
	include("Connection/Conn.php");
	$id = $_REQUEST['id_appointment'];
	
	$sql = "DELETE FROM tbl_appointment WHERE id_appointment = '$id'";
	$result = mysqli_query($conn, $sql);

	if($result){
		echo "<script>";
		echo "alert(\" ยกเลิกสำเร็จ \");";
		echo "window.location.href='index.php?option=Appointment'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\"  ยกเลิกไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>