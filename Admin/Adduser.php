<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-md-8 col-lg-5">
                <form action="Insertuser.php" method="post" enctype="multipart/form-data">
                    <div class="card bg-white border-0 shadow">
                        <div class="card-body py-3 text-center p-4">
                            <h2 class="fw-bold mb-9 text-uppercase">เพิ่มสมาชิก</h2>
                            <div class="mb-4"></div>

                            <div class="form-outline form-white mb-4">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required/>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="ชื่อ" required/>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="นามสกุล" required/>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="number" name="old" id="old" class="form-control" placeholder="อายุ" required/>
                            </div>

                            <select class="form-select mb-4" name="sex" id="sex" required>
                                <option selected>เพศ</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                            </select>

                            <select class="form-select mb-4" name="role" id="role" required>
                                <option selected>สถานะ</option>
                                <option value="1">user</option>
                                <option value="2">admin</option>
                            </select>

                            <div class="form-outline form-white mb-4">
                                <input type="email" name="email" id="email" class="form-control" placeholder="อีเมล์" required/>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="เบอร์โทรศัพท์" required/>
                            </div>

                            <a class="btn btn-lg px-4 btn-outline-danger" href="Login.php">ยกเลิก</a>
                            <button class="btn btn-primary btn-lg px-4" type="submit">เพิ่มสมาชิก</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>