<main>
    <section class="add_dm">
        <div class="container p-1">
            <div class="name_add_dm text-center ">
                <h3>Chỉnh sửa Danh Mục</h3>
            </div>
            <div class="form_nd">
                <form action="" class="form_add_dm" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                    <label for="add_tendm" class="form-label">Tên Danh Mục</label>
                    <input type="text" class="form-control" id="add_tendm" name="tenloai" placeholder="Nhập tên danh mục...">
                    </div>
                    <div class="mb-3">
                    <div class="mb-3 ">
                        <label for="hinhanhdm" class="form-label ">Hình Ảnh Danh Mục</label>
                        <input type="file" class="form-control" id="hinhanhdm" name="hinhanh">
                    </div>
                    <div class="flex-column">
                        <button type="submit" class="btn btn-primary" name="luu_dm">Thêm mới</button>
                        <button type="reset" class="btn btn-secondary">Nhập Lại</button>
                        <a href="index.php?act=dsdm" class="btn btn-primary">Danh Sách Danh Mục</a>
                    </div>
                </form>
                <?php 
                    if(isset($thongbao) && $thongbao!="") echo '<p style="color: green;">'.$thongbao.'</p>'
                ?>
            </div>
        </div>
    </section>
</main>