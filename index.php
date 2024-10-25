<?php
ob_start();
$option = null;
if(isset($_GET["option"])){
    $option = $_GET["option"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dentistry PICC</title>
</head>

<body>
    <?php
    include("Header.php")
    ?>

<div class="container-fluid mt-3">
        <?php
        if($option == null){
            require_once "Home.php";
        }elseif($option == "Public_relations"){
            require_once "Public_relations.php";
        }elseif($option == "Appointment"){
            require_once "Appointment.php";
        }
        ?>
    </div>

    <?php
    include("Footer.php")
    ?>
</body>

</html>