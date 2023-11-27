<main>
       <div class="container">
        
        <form class="form_dangnhap" method="post" action="trangchu.php?act=dangnhap">
            <?php
             if(isset($_SESSION['thanhcong']) && $_SESSION['thanhcong'] == true) {
              echo "<h4 style='color: green;'>Đăng kí thành công!!! Mời bạn đăng nhập</h4>";
              unset($_SESSION['thanhcong']);
              }
              if(isset($thongbao)){
                echo $thongbao;
              }
             ?>
            <div class="mb-3">
              <label for="taikhoan" class="form-label">Tài Khoản</label>
              <input type="text" class="form-control" name="taikhoan" value="<?php echo isset($_SESSION['taikhoan']) ?  $_SESSION['taikhoan'] : "" ?>" id="taikhoan" placeholder="Nhập vào tài khoản của bạn...">
            </div>
            <div class="mb-3">
              <label for="matkhau" class="form-label">Mật Khẩu</label>
              <input type="password" class="form-control" id="matkhau" name="matkhau" placeholder="Nhập mật khẩu...">
            </div>
            <div class="row py-1 ">
                <div class="col-9 ">
                    <a href="trangchu.php?act=dangky" class="dangky">Đăng Ký</a><br>
                    <a href="quenmk.html" class="quenMK">Quên Mật Khẩu</a>
                </div>
                <div class="col-3">
                    <button type="submit" name="dangnhap" class="dangnhap">Đăng Nhập</button>
                </div>
            </div>
          </form>         
       </div>
    </main>