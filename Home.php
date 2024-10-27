<div class="container-fluid py-5">
        <div class="text-center">
            <div class="row justify-content-center align-items-center gx-4">
                <div class="col-12 col-md-6 col-lg-5 mb-5">
                    <div class="mx-auto col-10">
                        <h2>"บริการนัดหมายหมอฟันออนไลน์ สะดวกสบายและรวดเร็ว"</h2>
                        <p>เพราะสุขภาพช่องปากและฟันเป็นสิ่งสำคัญ เราจึงขอเป็นผู้ดูแลรอยยิ้มของคุณ ด้วยบริการนัดหมายออนไลน์ที่ออกแบบมาให้ใช้งานง่าย คุณสามารถเลือกวันเวลาและทันตแพทย์ที่คุณต้องการได้ เพียงไม่กี่คลิก ก็สามารถจองคิวได้โดยไม่ต้องรอคิวในคลินิก ประหยัดเวลาและเพิ่มความสะดวกสบายให้กับทุกการนัดหมายของคุณ</p>
                        <?php
                        if (empty($_SESSION['id'])) {
                        ?>
                            <a class="btn btn-primary btn-lg rounded-pill" href="Login.php">เริ่มนัดหมอเลย</a>
                        <?php
                        } else {
                        ?>
                            <a class="btn btn-primary btn-lg rounded-pill" href="index.php?option=Appointment">เริ่มนัดหมอเลย</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-7 mb-5 d-flex justify-content-center">
                    <img src="https://img.freepik.com/free-vector/dentist-consultation-flat-background_23-2148116204.jpg?t=st=1729671014~exp=1729674614~hmac=f64c88abdd05c78f00b1eaadfacaef2ed621552946625d4aa655f99d2e10717f&w=826" width="70%" alt="Dental Consultation">
                </div>
            </div>
        </div>
    </div>

    </div>