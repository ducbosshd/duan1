<main>
       <div class="container">
        <form class="form_quenMK" action="trangchu.php?act=quenmk" method="post">
            <div class="mb-3">
              <label for="email" class="form-label">Tài Khoản</label>
              <input type="text" class="form-control" name="email" placeholder="Nhập vào email của bạn...">
            </div>
            <div class="row py-1 ">
                <div class="col-9 ">
                </div>
                <div class="col-3">
                  <input type="submit" value="Gửi mật khẩu" name="guiemail">
                </div>
            </div>
            <?php if(isset($guimail) && $guimail != ''){
            echo $guimail;
            } ?>
          </form>
       </div>
</main>