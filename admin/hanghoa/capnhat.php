<?php
    if(is_array($hh)){
        extract($hh);
    }
    if($ha_dd != ""){
        if(is_file($ha_dd['hinhanh_url'])){
          $img_dd = '<input type="hidden" name="idha_dd" value="'.$ha_dd['id'].'">
          <img src='.$ha_dd['hinhanh_url'].' style="margin-bottom: 10px;width: 100px; padding:0"><br>';
        }else{
            $img_dd = '<input type="hidden" name="idha_dd" value="'.$ha_dd['id'].'">';
        }
    }else{
        $img_dd = "";
    }
?>
<main>
    <section class="sua_sp">
        <div class="container p-1">
            <div class="name_sua_sp text-center ">
                <h3>Sửa Sản Phẩm</h3>
            </div>
            <div class="form_nd">
                <form action="index.php?act=capnhathh" class="form_sua_sp" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="tensp" class="form-label">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" name="tenhh" id="tensp" value="<?php echo isset($ten)?$ten:""?>">
                    </div>
                    <div class="mb-3">
                        <label for="giasp" class="form-label">Danh Mục</label>
                        <select name="iddm" id="" class="form-control">
                            <option value="">Tất Cả</option>
                            <?php foreach ($dsdm as $dm){
                                echo '<option value="'.$dm['id'].'">'.$dm['ten'].'</option>';
                            }?>
                        </select>
                    </div>
                    <?php 
                        foreach($dstt as $tt){
                            $dstt_hh = loadall_tt_hanghoa($hh['id'], $tt['id']);
                            extract($tt);
                            $dsgt_tt = loadall_gtthuoctinh($tt['id']);
                            $checkbox = '';
                            $kiemtra = false;
                            foreach ($dsgt_tt as $gt_tt){
                                foreach ($dstt_hh as $tt_hh){
                                    if($gt_tt['id'] == $tt_hh['id']){
                                        $checkbox .= '<div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="gt_tt[]" type="checkbox" value="'.$gt_tt['id'].'" checked>
                                                    <label class="form-check-label">'.$gt_tt['tengiatri'].'</label>
                                                </div>';
                                        $kiemtra = true;
                                        break;
                                    }else{
                                        $kiemtra = false;
                                    }
                                }
                                if(!$kiemtra){
                                    $checkbox .= '<div class="form-check form-check-inline">
                                            <input class="form-check-input" name="gt_tt[]" type="checkbox" value="'.$gt_tt['id'].'">
                                            <label class="form-check-label">'.$gt_tt['tengiatri'].'</label>
                                        </div>';
                                } 
                            }
                            echo    '<div class="mb-3">
                                        <label class="form-label">'.$ten_thuoctinh.'</label><br>
                                        '.$checkbox.'
                                    </div>';
                        }
                    ?>
                    <div class="mb-3">
                        <label for="giasp" class="form-label">Giá Tiền</label>
                        <input type="text" class="form-control" name="gia" id="giasp" value="<?php echo isset($gia)?$gia:""?>">
                    </div>
                    <div class="mb-3">
                        <label for="giasp" class="form-label">Mô tả</label>
                        <textarea name="mota" class="form-control" cols="30" rows="10"><?php echo isset($mota)?$mota:""?></textarea>
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
                                <?php if($dsha != []){
                                    foreach($dsha as $ha){
                                        if(is_file($ha['hinhanh_url'])){
                                            echo '<div style="width:120px;text-align: center">
                                                        <input type="hidden" name="id_anh" value="'.$ha['id'].'">
                                                        <img src='.$ha['hinhanh_url'].' style="margin: 10px;width: 100px; padding:0"><br>
                                                        <button type="submit" name="xoaanh" class="btn btn-danger">Xóa</button>
                                                    </div>';
                                        }
                                    }
                                }?>
                            </div>
                            <input type="file" class="form-control hinhanhphu-input" id="hinhanhphu-1" name="hinhanhphu[]" multiple>
                        </div>
                    <div class="flex-column">
                        <input type="hidden" name="id" value="<?php echo isset($hh['id'])?$hh['id']:''?>">
                        <button type="submit" class="btn btn-primary" name="luu_hh">Sửa Sản Phẩm</button>
                        <button type="reset" class="btn btn-secondary">Nhập Lại</button>
                        <a href="index.php?act=dshh" class="btn btn-primary">Danh Sách</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>