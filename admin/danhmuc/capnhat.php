<?php
    if(is_array($dm)){
        extract($dm);
    }
    if(is_file($hinhanh)){
        $img = "<img src=".$hinhanh." height = '100px'>";
    }else{
        $img = '';
    }
?>
<div class="row">
            <div class="row font_title">
                <h1>Cập nhật loại hàng hóa</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=capnhatdm" method="post" enctype="multipart/form-data">
                    <div class="row mb10 form">
                       <p> Mã loại</p>
                        <input type="text" name="maloai" value="<?php if(isset($id) && $id >0) echo $id; ?>"disabled>
                    </div>
                    <div class="row mb10 form">
                       <p> Tên loại</p>
                        <input type="text" name="tenloai" value="<?php if(isset($ten) && $ten != "") echo $ten; ?>">
                    </div>
                    <div class="row mb10 form">
                        <p> Hình ảnh </p>
                        <?php echo $img; ?>
                        <input type="file" name="hinhanh">
                    </div>
                    <div class="row_flex mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id) && $id >0) echo $id; ?>">
                        <input type="submit" name="luu_dm" value="Lưu"><br>
                        <input type="reset" value="Nhập lại"><br>
                        <a href="index.php?act=dsdm"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php 
                        if(isset($thongbao) && $thongbao!="") echo $thongbao
                    ?>
                </form>
            </div>
        </div>
    </div>