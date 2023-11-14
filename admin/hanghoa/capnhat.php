<?php
    if(is_array($hh)){
        extract($hh);
    }
     
    if(is_file($hinhanh)){
        $img = "<img src=".$hinhanh." height = '100px'>";
    }else{
        $img = '';
    }
?>
<div class="row">
            <div class="row font_title">
                <h1>Sửa thông tin hàng hóa</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=capnhathh" method="post" enctype="multipart/form-data">
                    <div class="row mb10 form">
                        <p> Mã hàng hóa</p> 
                        <input type="text" name="id" value="<?php if(isset($hh['id']) && $hh['id'] >0) echo $hh['id'];?>" disabled>
                    </div>
                    <div class="row mb10 form">
                        <p> Tên hàng hóa</p> 
                        <input type="text" name="tenhh" value="<?php if(isset($ten) && $ten !="") echo $ten;?>">
                    </div>
                    <div class="row mb10 form">
                        <p> Giá hàng hóa</p> 
                        <input type="text" name="gia" value="<?php if(isset($gia) && $gia >0) echo $gia;?>">
                    </div>
                    <div class="row mb10 form">
                        <p> Danh mục</p>
                        <select name="iddm" id="">
                            <option value="">Chọn danh mục</option>
                            <?php foreach($dsdm as $dm){
                                extract($dm);
                                echo '<option value="'.$id.'">'.$ten.'</option>';
                            }?>
                        </select>
                    </div>
                    <div class="row mb10 form">
                        <p> Hình ảnh </p>
                        <?php echo $img; ?>
                        <input type="file" name="hinhanh">
                    </div>
                    <div class="row mb10 form">
                        <p> Mô tả </p>
                        <textarea name="mota" id="" cols="30" rows="10" value=""><?php if(isset($mota) && $mota !="") echo $mota;?></textarea>
                    </div>
                    <div class="row_flex mb10">
                        <input type="hidden" name="id" value="<?php if(isset($hh['id']) && $hh['id'] >0) echo $hh['id'];?>">
                        <input type="submit" name="luu_hh" value="Cập nhật"><br>
                        <input type="reset" value="Nhập lại"><br>
                        <a href="index.php?act=dshh"><input type="button" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>