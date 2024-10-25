<?php
include("Connection/Conn.php");

$sql = "SELECT * FROM tbl_public_relations";
$query = mysqli_query($conn, $sql);
?>
<h1 class="justify-content-centen text-center py-5">ประชาสัมพันธ์</h1>

<div class="container d-flex justify-content-center py-5">
    <div class="row d-flex">
        <?php
        $i = 1;
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
            <a href=""></a>
            <div class="card w-100 mb-5 border-0">
            <div class="row g-0 align-items-center ">
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="img/<?php echo $row['img']; ?>" width="70%" alt="Card image">
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['topic']; ?></h5>
                        <p class="card-text text-break"><?php echo $row['detail']; ?></p>
                      </div>
                </div>
            </div>
          </div>
        <?php
            $i++;
        }
        ?>
    </div>
</div>

