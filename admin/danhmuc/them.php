<div class="row">
            <div class="row font_title">
                <h1>Thêm mới loại hàng hóa</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=themdm" method="post" enctype="multipart/form-data">
                    <div class="row mb10 form">
                       <p> Mã loại</p>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10 form">
                       <p> Tên loại</p>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10 form">
                       <p> Hình ảnh </p>
                        <input type="file" name="hinhanh">
                    </div>
                    <div class="row_flex mb10">
                        <input type="submit" name="luu_dm" value="Thêm mới"><br>
                        <input type="reset" value="Nhập lại"><br>
                        <a href="index.php?act=dsdm"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php 
                        if(isset($thongbao) && $thongbao!="") echo '<p style="color: green;">'.$thongbao.'</p>'
                    ?>
                </form>
            </div>
        </div>
    </div>