<?php
include("../Connection/conn.php");
if (empty($_SESSION['id'])) {
    header("Location: Login.php");
    exit();
}
$id = $_REQUEST['id_user'];
$sql = "SELECT * FROM tbl_user WHERE id_user = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>

<div class="container">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-12 col-md-8 col-lg-5">
            <form action="Updateuser.php" method="post" enctype="multipart/form-data">
                <div class="card bg-white border-0 shadow">
                    <div class="card-body py-3 text-center p-4">
                        <h2 class="fw-bold mb-9 text-uppercase">เเก้ไขข้อมูลสมัครสมาชิก</h2>
                        <div class="mb-4"></div>

                        <div class="form-outline form-white mb-4">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?php echo $row['username']; ?>" disabled />
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo $row['password']; ?>"  />
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="ชื่อ" value="<?php echo $row['first_name']; ?>"/>
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="นามสกุล" value="<?php echo $row['last_name']; ?>" />
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="number" name="old" id="old" class="form-control" placeholder="อายุ" value="<?php echo $row['old']; ?>"/>
                        </div>

                        <select class="form-select mb-4" name="sex" id="sex">
                            <option selected value="<?php echo $row['sex']; ?>"><?php
                                if($row['sex'] == "1"){
                                    echo "ชาย";
                                } else {
                                    echo "หญิง";
                                }
                            ?></option>
                            <option value="1">ชาย</option>
                            <option value="2">หญิง</option>
                        </select>

                        <select class="form-select mb-4" name="role" id="role">
                            <option selected value="<?php echo $row['role']; ?>"><?php
                                if($row['role'] == "1"){
                                    echo "user";
                                } else {
                                    echo "admin";
                                }
                            ?></option>
                            <option value="1">user</option>
                            <option value="2">admin</option>
                        </select>

                        <div class="form-outline form-white mb-4">
                            <input type="email" name="email" id="email" class="form-control" placeholder="อีเมล์" value="<?php echo $row['email']; ?>"/>
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="เบอร์โทรศัพท์" value="<?php echo $row['phone_number'] ?>"/>
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="hidden" name="id_user" id="id_user" class="form-control"  value="<?php echo $row['id_user']; ?>"/>
                        </div>

                        <a class="btn btn-lg px-4 btn-outline-danger" href="Login.php">ยกเลิก</a>
                        <button class="btn btn-primary btn-lg px-4" type="submit">ยืนยัน</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>