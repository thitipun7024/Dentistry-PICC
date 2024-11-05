
<div class="col-auto col-md-3  col-xl-2 px-sm-2 px-0 bg-white">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-black text-decoration-none">
             <h5 class="text-center fs-5 d-none d-sm-inline">ADMIN DENTISTRY PICC</h5>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="index.php" class="nav-link align-middle px-0">
                    <img src="../img//2247870.jpg" class="fs-4" alt="Home Icon" style="width: 1.8rem; height: 1.8rem;">
                    <span class="ms-1 d-none d-sm-inline fw-bold">หน้าเเรก</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php?option=Frmuser" class="nav-link align-middle px-0">
                    <img src="../img//2247870.jpg" class="fs-4" alt="Home Icon" style="width: 1.8rem; height: 1.8rem;">
                    <span class="ms-1 d-none d-sm-inline fw-bold">จัดการผู้ใช้</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php?option=Frmappointment" class="nav-link align-middle px-0">
                    <img src="../img//2247870.jpg" class="fs-4" alt="Home Icon" style="width: 1.8rem; height: 1.8rem;">
                    <span class="ms-1 d-none d-sm-inline fw-bold">ตารางที่นัด</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link align-middle px-0">
                    <img src="../img//2247870.jpg" class="fs-4" alt="Home Icon" style="width: 1.8rem; height: 1.8rem;">
                    <span class="ms-1 d-none d-sm-inline fw-bold">ประชาสัมพันธ์</span>
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-black text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-3"><?php echo $_SESSION['first_name']?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="Logout_admin.php">Sign out</a></li>
            </ul>
        </div>
    </div>
</div>