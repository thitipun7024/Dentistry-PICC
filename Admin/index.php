<?php
session_start();
include("../Connection/Conn.php");
if (empty($_SESSION['id'])) {
  header("Location: ../Login.php");
  exit();
}

ob_start();
$option = null;
if (isset($_GET["option"])) {
    $option = $_GET["option"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Admin Dentistry PICC</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php
            include("Sidebar.php"); 
            ?>

            <div class="col py-3" style="background-color: #dadada;">
                <?php
        if ($option == null) {
            require_once "Homeadmin.php";
        } elseif ($option == "Adduser"){
            require_once "Adduser.php";
        }elseif ($option == "Frmuser"){
            require_once "Frmuser.php";
        } elseif ($option == "Frmedituser"){
            require_once "Frmedituser.php";
        } elseif ($option == "Frmappointment"){
            require_once "Frmappointment.php";
        }
        ?>
            </div>

        </div>
    </div>



    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>