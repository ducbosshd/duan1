<?php
    if(is_array($dm)){
        extract($dm);
    }
    if(is_file($hinhanh)){
        $img = "<img src=".$hinhanh." height = '100px' style='padding-bottom: 5px;'>";
    }else{
        $img = '';
    }
?>
<main>
    <section class="add_dm">
        <div class="container p-1">
            <div class="name_add_dm text-center ">
                <h3>Chỉnh sửa Danh Mục</h3>
            </div>
            <div class="form_nd">
                <form action="index.php?act=capnhatdm" class="form_add_dm" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                    <label for="add_tendm" class="form-label">Tên Danh Mục</label>
                    <input type="text" class="form-control" id="add_tendm" name="tenloai" value="<?=$ten?>">
                    </div>
                    <div class="mb-3">
                    <div class="mb-3 ">
                        <label for="hinhanhdm" class="form-label ">Hình Ảnh Danh Mục</label><br>
                        <?=$img?>
                        <input type="file" class="form-control" id="hinhanhdm" name="hinhanh">
                    </div>
                    <div class="flex-column">
                        <input type="hidden" name="id" value="<?php if(isset($id) && $id >0) echo $id;?>">
                        <button type="submit" class="btn btn-primary" name="luu_dm">Cập nhật</button>
                        <button type="reset" class="btn btn-secondary">Nhập Lại</button>
                        <a href="index.php?act=dsdm" class="btn btn-primary">Danh Sách Danh Mục</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>