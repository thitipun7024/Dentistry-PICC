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
                <form action="Checklogin.php" method="post" enctype="multipart/form-data">
                    <div class="card bg-white border-0 shadow">
                        <div class="card-body py-3 text-center p-4">
                            <h2 class="fw-bold mb-9 text-uppercase">เข้าสู่ระบบจองคิวทำฟัน</h2>
                            <div class="mb-4"></div>

                            <div class="form-outline form-white mb-4">
                                <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="Username" />
                              </div>

                              <div class="form-outline form-white mb-4">
                                <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" />
                              </div>

                              <a class="btn btn-lg px-4" href="Register.php">สมัครสมาชิก</a>
                              <button class="btn btn-primary btn-lg px-4" type="submit">เข้าสู่ระบบ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>