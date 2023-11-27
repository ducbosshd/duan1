 <?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     var_dump($_POST);}
?> 
<main>
    <div class="container">
        <form class="form_dangky" method="post" action="">
            <div class="mb-3">
                <label for="taikhoan" class="form-label">Tài Khoản</label>
                <input type="text" name="taikhoan" value="<?php echo (isset($_POST['taikhoan']) && !isset($_SESSION['taikhoan'])) ? $_POST['taikhoan'] : ''; ?>" class="form-control" id="taikhoan" placeholder="Nhập vào email của bạn...">
                <span><?php echo (isset($_POST["dangkyTK"]) && isset($_SESSION['taikhoan'])) ? $_SESSION['taikhoan'] : ''; ?></span>
            </div>
            <div class="mb-3">
                <label for="matkhau" class="form-label">Mật Khẩu</label>
                <input type="password" name="matkhau" value="<?php echo (isset($_POST['matkhau']) && !isset($_SESSION['matkhau'])) ? $_POST['matkhau'] : ''; ?>" class="form-control" id="matkhau" placeholder="Nhập mật khẩu...">
                <span><?php echo (isset($_POST["dangkyTK"]) && isset($_SESSION['matkhau'])) ? $_SESSION['matkhau'] : ''; ?></span>
            </div>
            <div class="mb-3">
                <label for="tenKH" class="form-label">Họ Và Tên</label>
                <input type="text" name="tenKH" value="<?php echo (isset($_POST['tenKH']) && !isset($_SESSION['tenKH'])) ? $_POST['tenKH'] : ''; ?>" class="form-control" id="tenKH" placeholder="Nhập tên của bạn...">
                <span><?php echo (isset($_POST["dangkyTK"]) && isset($_SESSION['tenKH'])) ? $_SESSION['tenKH'] : ''; ?></span>
            </div>
            <div class="mb-3">
                <label for="sdtKH" class="form-label">Số Điện Thoại</label>
                <input type="number" name="sdtKH" value="<?php echo (isset($_POST['sdtKH']) && !isset($_SESSION['sdtKH'])) ? $_POST['sdtKH'] : ''; ?>" class="form-control" id="sdtKH" placeholder="Nhập số điện thoại của bạn...">
                <span><?php echo (isset($_POST["dangkyTK"]) && isset($_SESSION['sdtKH'])) ? $_SESSION['sdtKH'] : ''; ?></span>
            </div>
            <div class="mb-3">
                <label for="ngaysinhKH" class="form-label">Ngày Sinh</label>
                <input type="date" name="ngaysinhKH" value="<?php echo (isset($_POST['ngaysinhKH']) && !isset($_SESSION['ngaysinhKH'])) ? $_POST['ngaysinhKH'] : ''; ?>" class="form-control" id="ngaysinhKH" placeholder="Nhập ngày sinh của bạn...">
                <span><?php echo (isset($_POST["dangkyTK"]) && isset($_SESSION['ngaysinhKH'])) ? $_SESSION['ngaysinhKH'] : ''; ?></span>
            </div>
            <div class="row py-1">
                <div class="col-9">
                </div>
                <div class="col-3">
                    <button type="submit" name="dangkyTK" class="dangkyTK">Đăng Ký Tài Khoản</button>
                </div>
            </div>
        </form>
    </div>
</main>
