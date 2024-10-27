<?php
session_start();
include("Connection/Conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <title> </title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="index.php">Dentistry PICC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        if (isset($_SESSION['id'])) {
          $firstname = $_SESSION["first_name"];
        ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?option=Appointment">ตารางนัดของฉัน</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?option=Public_relations">ประชาสัมพันธ์</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">เกี่ยวกับเรา</a>
          </li>
        </ul>
        <form class="d-flex text-center align-items-center">
          <a href="index.php?option=From_update_user" class="px-4 nav-link">ยินดีต้อนรับ:&nbsp;
            <?php echo $firstname ?>
          </a>
          <a href="Logout.php" class="btn btn-danger">ออกจากระบบ</a>
        </form>
        <?php
        } else {
        ?>


        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?option=Public_relations">ประชาสัมพันธ์</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">เกี่ยวกับเรา</a>
          </li>
        </ul>
        <form class="d-flex">
          <a href="Login.php" class="btn btn-primary">เข้าสู่ระบบ</a>
        </form>
        <?php
        }
        ?>
      </div>
    </div>
  </nav>


  <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>