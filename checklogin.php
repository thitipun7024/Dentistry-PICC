<?php
session_start();
include("Connection/Conn.php");
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "" && $password = ""){
    header("location: Login.php");
}else{
    $sql1 = "SELECT * FROM tbl_user WHERE username = '".$username."' AND password = '".$password."' ";
    $query = mysqli_query($conn, $sql1);

    if(mysqli_num_rows($query) == 1){
        $row = mysqli_fetch_array($query);

            $_SESSION['id'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['role'] = $row['role'];

            if( $_SESSION['role'] == 1){
                header("Location: index.php");
            } else if($_SESSION['role'] == 2){
                header("Location: admin/index.php");
            }
    } else{
        echo "<script>";
        echo "alert(\" user หรือ pass ไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>" ;
    }
}
?>