<?php
include("Connection/conn.php");
if (empty($_SESSION['id'])) {
  header("Location: Login.php");
  exit();
}
$id = $_SESSION['id'];
$sql = "SELECT * FROM tbl_appointment INNER JOIN tbl_user ON tbl_appointment.id_user = tbl_user.id_user WHERE tbl_appointment.id_user = '$id'";
$query = mysqli_query($conn, $sql);
?>

<h1 class="justify-content-centen text-center">การนัดหมายของคุณ</h1>

<div class="container justify-content-centen text-center py-5">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">เพิ่มการนัดหมาย</button>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">เพิ่มการนัดหมาย</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="Add_appointment.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">วันที่ต้องการนัด</label>
            <input type="date" class="form-control" name="date" id="date" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">เวลาที่ต้องการนัด</label>
            <input type="time" class="form-control" name="time" id="time" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">รายละเอียด</label>
            <textarea class="form-control" name="detail" id="detail" required></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
          <button type="submit" class="btn btn-primary">ส่งการนัดหมาย</button>
        </div>
      </form>

    </div>
  </div>
</div>

<div class="container py-5">
  <div class="container overflow-hidden text-center">
    <div class="row row-col-1 row-col-lg-2 gx-5">
      <?php
       if(mysqli_num_rows($query) > 0){
        $i = 1;
        while($row = mysqli_fetch_assoc($query)){
      ?>
        <div class="col-12 col-md-12 col-lg-6 py-2">
        <div class="card">
          <div class="card-header bg-primary">
            <h1 class="card-title text-white">ตารางนัดของคุณ</h1>
          </div>
          <div class="card-body text-start">
            <h4>ชื่อ-นามสุล</h4>
            <p class="card-text text-start"><?php echo  $row['first_name']; ?>&nbsp;<?php echo  $row['last_name'];  ?></p>
            &nbsp;
            <h4>วันที่นัด</h4>
            <p class="card-text text-start"><?php echo  $row['date_appointment']; ?></p>
            &nbsp;
            <h4>เวลาที่นัด</h4>
            <p class="card-text text-start"><?php echo  $row['time_appointment']; ?></p>
            &nbsp;
            <h4>รายละเอียดการนัด</h4>
            <p class="card-text text-start"><?php echo  $row['detail']; ?></p>
            &nbsp;
            <h4>สถานะ</h4>
            <p class="card-text text-start">
            <?php 
            if($row['status_appoimtment'] == 1){
            ?>
            ยังไม่ถึงวันนัด
            <?php
            } elseif($row['status_appoimtment'] == 2) {
            ?>
            สำเร็จเเล้ว
            <?php
            } else {
            ?>
            ไม่สำเร็จ
            <?php
            }
          ?>
            </p>
          </div>
          <div class="card-footer text-end">
            <a class="btn btn-danger" href="Delete_appointment.php?id_appointment=<?php echo $row['id_appointment']; ?>">ยกเลิก</a>
          </div>
        </div>
      </div>
      <?php
        $i++;
        };
      ?>

      <?php
       } else {
      ?>
      <h1 class="justify-content-centen text-center">ไม่มีการนัดหมาย</h1>
      <?php
       }
      ?>
    </div>
  </div>
</div>