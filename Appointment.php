<?php
include("Connection/conn.php");
if(empty($_SESSION['id'])){
	header("Location: Login.php");
	exit();
}
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
            <input type="date" class="form-control" name="date" id="date">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">เวลาที่ต้องการนัด</label>
            <input type="time" class="form-control" name="time" id="time">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">รายละเอียด</label>
            <textarea class="form-control" name="detail" id="detail"></textarea>
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
