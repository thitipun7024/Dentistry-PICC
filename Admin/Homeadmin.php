<h1 class="text-center py-3">Dashboard</h1>

<div class="container">
    <div class="row row-cols-1 row-cols-lg-3 g-1 g-lg-3">
        <div class="col-12">
            <div class="card text-bg-primary">
                <div class="card-header">ข้อมูลผู้ใช้ทั้งหมด</div>
                <div class="card-body">
                    <?php
                    $sql1 = "SELECT * FROM tbl_user";
                    $query1 = mysqli_query($conn, $sql1);
                    $row1 = mysqli_num_rows($query1)
                    ?>
                    <h1 class="card-title"><?php echo $row1; ?> คน</h1>
                </div>
            </div>
        </div>
        <div class="col-12">
        <div class="card text-bg-success" >
                <div class="card-header">ข้อมูลการนัดหมาย</div>
                <div class="card-body">
                    <?php
                    $sql2 = "SELECT * FROM tbl_appointment";
                    $query2 = mysqli_query($conn, $sql2);
                    $row2 = mysqli_num_rows($query2)
                    ?>
                    <h1 class="card-title"><?php echo $row2; ?> รายการ</h1>
                    </div>
            </div>
        </div>
        <div class="col-12">
        <div class="card text-bg-secondary" >
                <div class="card-header">ข้อมูลประชาสัมพันธ์</div>
                <div class="card-body">
                    <?php
                    $sql3 = "SELECT * FROM tbl_public_relations";
                    $query3 = mysqli_query($conn, $sql3);
                    $row3 = mysqli_num_rows($query3)
                    ?>
                    <h1 class="card-title"><?php echo $row3; ?> รายการ</h1>
                    </div>
            </div>
        </div>
        <div class="col-12">
        <div class="card text-bg-dark" >
                <div class="card-header">ข้อมูลผู้เข้าชม</div>
                <div class="card-body">
                    <?php
                    $sql4 = "SELECT * FROM tbl_count";
                    $query4 = mysqli_query($conn, $sql4);
                    $row4 = mysqli_fetch_array($query4);
                    ?>
                    <h1 class="card-title"><?php echo $row4['count']; ?> รอบ</h1>
                    </div>
            </div>
        </div>
    </div>
</div>