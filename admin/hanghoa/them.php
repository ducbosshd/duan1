
<main>
    <section class="sua_sp">
        <div class="container p-1">
            <div class="name_sua_sp text-center ">
                <h3>Sửa Sản Phẩm</h3>
            </div>
            <div class="form_nd">
                <form action="index.php?act=themhh" class="form_sua_sp" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="tensp" class="form-label">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" name="tenhh" id="tensp" placeholder="Nhập tên sản phẩm...">
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
                            extract($tt);
                            $dsgt_tt = loadall_gtthuoctinh($tt['id']);
                            $checkbox = '';
                            foreach ($dsgt_tt as $gt_tt){
                                    $checkbox .= '<div class="form-check form-check-inline">
                                            <input class="form-check-input" name="gt_tt[]" type="checkbox" value="'.$gt_tt['id'].'">
                                            <label class="form-check-label">'.$gt_tt['tengiatri'].'</label>
                                        </div>';
                            }
                            echo    '<div class="mb-3">
                                        <label class="form-label">'.$ten_thuoctinh.'</label><br>
                                        '.$checkbox.'
                                    </div>';
                        }
                    ?>
                    <div class="mb-3">
                        <label for="giasp" class="form-label">Giá Tiền</label>
                        <input type="text" class="form-control" name="gia" id="giasp" placeholder="Nhập giá sản phẩm...">
                    </div>
                    <div class="mb-3">
                        <label for="giasp" class="form-label">Mô tả</label>
                        <textarea name="mota" class="form-control" cols="30" rows="10" placeholder="Nhập mô tả..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="hinhanhchinh" class="form-label">Hình Ảnh Chính</label><br>
                        <div class="image-container">
                            <input type="file" class="form-control" id="hinhanhchinh" name="hinhanhchinh">
                        </div>
                    </div>            
                    <div class="mb-3">
                        <label for="hinhanhphu" class="form-label">Hình Ảnh Chi Tiết</label>
                        <div class="hinhanhphu">
                            <input type="file" class="form-control hinhanhphu-input" id="hinhanhphu-1" name="hinhanhphu[]" multiple>
                        </div>
                    <div class="flex-column">
                        <button type="submit" class="btn btn-primary" name="luu_hh">Thêm Sản Phẩm</button>
                        <button type="reset" class="btn btn-secondary">Nhập Lại</button>
                        <a href="index.php?act=dshh" class="btn btn-primary">Danh Sách</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>