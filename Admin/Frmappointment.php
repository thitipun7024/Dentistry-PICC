<?php 
	include("../Connection/Conn.php");
	$search = null;
	if(isset($_POST["search"])){
		$search = $_POST["search"];
	}
?>

<h1 class="text-center py-2">ข้อมูลสมาชิก</h1>
	<p></p>
	
	<form action="" method="post">
			<div class="row justify-content-between">
				<div class="col-3">
					<a href="index.php?option=Adduser" class="btn btn-primary">เพิ่มสมาชิก</a>
				</div>

				<div class="col-3">
					<div class="input-group">
						<input class="form-control" name="search" placeholder="search">
						<button class="btn btn-success" type="submit">ค้นหา</button>
					</div>
				</div>
			</div>
	</form>

	<div class="card py-4 mt-3">
        <div class="card-body">
		<table class="table table-striped table-responsive">
			<thead>
				<tr>
					<td>ID</td>
					<td>ชื่อผู้ใช้</td>
					<td>ชื่อ</td>
					<td>นามสกุล</td>
					<td>อายุ</td>
					<td>เพศ</td>
					<td>สถานะผู้ใช้</td>
					<td>อีเมล์</td>
					<td>เบอร์โทรศัพท์</td>
					<td>วันที่สร้าง</td>
					<td>เเก้ไขวันที่</td>
					<td></td>
					<td></td>
				</tr>
			</thead>
			
			<tbody>
				<?php
					$sql = "SELECT * FROM tbl_user WHERE username LIKE '%$search%' OR first_name LIKE '%$search%' OR last_name LIKE '%$search%' OR 	old LIKE '%$search%' OR phone_number LIKE '%$search%' ORDER BY id_user ASC";
					$result = mysqli_query($conn, $sql);
				
					$i = 1;
					while($row = mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $row['id_user']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['first_name']; ?></td>
					<td><?php echo $row['last_name']; ?></td>
					<td><?php echo $row['old']; ?></td>
					<td><?php if($row['sex'] == "1"){
									echo "ชาย";
								}elseif($row['sex'] == "2"){
									echo "หญิง";
								} 
						?></td>
					<td><?php if($row['role'] == "1"){
									echo "user";
								}elseif($row['role'] == "2"){
									echo "admin";
								} 
						?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['phone_number']; ?></td>
					<td><?php echo $row['createdate']; ?></td>
					<td><?php echo $row['updatedate']; ?></td>
					
					<td><a class="btn btn-warning" href="index.php?option=Frmedituser&id_user=<?php echo $row['id_user']; ?>">เเก้ไข</a></td>
					<td><a class="btn btn-danger" href="deleteuser.php?id_user=<?php echo $row['id_user']; ?>">ลบ</a></td>
				</tr>
				<?php
					$i++;
					}
				?> 
			</tbody>
		</table>
        </div>
    </div>
	