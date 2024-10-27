<?php
ob_start();
$option = null;
if (isset($_GET["option"])) {
    $option = $_GET["option"];
}
include('Connection/Conn.php')
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
        if ($option == null) {
            require_once "Home.php";
        } elseif ($option == "Public_relations") {
            require_once "Public_relations.php";
        } elseif ($option == "Appointment") {
            require_once "Appointment.php";
        } elseif ($option == "From_update_user") {
            require_once "From_update_user.php";
        }
        ?>
    </div>

    <?php
    $counterFile = "counter.txt";
    $option = isset($_GET['option']) ? $_GET['option'] : null;

    if ($option === null) {
        if (!file_exists($counterFile)) {
            file_put_contents($counterFile, "0");
        }

        $visitorCount = (int)file_get_contents($counterFile);
        $visitorCount++;
        file_put_contents($counterFile, $visitorCount);

        $sqlcount = "UPDATE tbl_count SET count = '$visitorCount' WHERE id_count = 1";
        $querycount = mysqli_query($conn, $sqlcount);
    } else {
        $visitorCount = (int)file_get_contents($counterFile);
    }
    ?>

    <?php
    include("Footer.php")
    ?>
</body>

</html>