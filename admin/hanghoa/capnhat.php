<?php
    if(is_array($hh)){
        extract($hh);
    }
    $hadd = load_hd_dd($id);
    if($hadd != ""){
        if(is_file($hadd['hinhanh_url'])){
          $img_dd = '<img src='.$hadd['hinhanh_url'].' style="margin-bottom: 10px;width: 100px; padding:0"><br>';
        }
    }
    $listha = loadall_ha($id);
?>
<main>
    <section class="sua_sp">
        <div class="container p-1">
            <div class="name_sua_sp text-center ">
                <h3>Sửa Sản Phẩm</h3>
            </div>
            <div class="form_nd">
                <form action="index.php?act=dshh" class="form_sua_sp" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                    <label for="tensp" class="form-label">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" id="tensp" value="<?php echo isset($ten)?$ten:""?>">
                    </div>
                    <div class="mb-3">
                    <label for="mausac" class="form-label">Màu Sắc</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="maudo" value="option1">
                            <label class="form-check-label" for="maudo">Đỏ</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="mautrang" value="option2">
                            <label class="form-check-label" for="mautrang">Trắng</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="mauden" value="option3">
                            <label class="form-check-label" for="mauden">Đen</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kickco" class="form-label">Kích Cỡ</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="s" value="option1">
                            <label class="form-check-label" for="s">S</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="M" value="option2">
                            <label class="form-check-label" for="M">M</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="L" value="option3">
                            <label class="form-check-label" for="L">L</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="giasp" class="form-label">Giá Tiền</label>
                        <input type="text" class="form-control" id="giasp" value="<?php echo isset($gia)?$gia:""?>">
                    </div>
                    <div class="mb-3">
                        <label for="hinhanhchinh" class="form-label">Hình Ảnh Chính</label><br>
                        <div class="image-container">
                            <?=$img_dd?>
                            <input type="file" class="form-control" id="hinhanhchinh" name="hinhanhchinh">
                        </div>
                    </div>            
                    <div class="mb-3">
                        <label for="hinhanhphu" class="form-label">Hình Ảnh Chi Tiết</label>
                        <div class="hinhanhphu">
                            <div class="image-container image-chitiet">
                                <?php if($listha != []){
                                    foreach($listha as $ha){
                                        if(is_file($ha['hinhanh_url'])){
                                            echo '<div style="width:120px;text-align: center"><img src='.$hadd['hinhanh_url'].' style="margin: 10px;width: 100px; padding:0"><br>
                                            <button type="button" class="btn btn-danger">Xóa</button></div>';
                                        }
                                    }
                                }?>
                            </div>
                            <input type="file" class="form-control hinhanhphu-input" id="hinhanhphu-1" name="hinhanhphu">
                        </div>
                    <div class="flex-column">
                        <button type="submit" class="btn btn-primary">Sửa Sản Phẩm</button>
                        <button type="reset" class="btn btn-secondary">Nhập Lại</button>
                        <a href="admin.html" class="btn btn-primary">Danh Sách</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>