<div class="row">
        <div class="row_flex font_title">
            <h1>DANH SÁCH HÌNH ẢNH</h1>
            <form action="index.php?act=dshh" method="post">
                <select name="idhh" id="">
                    <option value="0">Tất cả</option>
                    <?php foreach($dshh as $hh){
                        extract($hh);
                        echo '<option value="'.$id.'">'.$ten.'</option>';
                    }?>
                </select>
                
                <button type="submit" name="btnok">GO</button>
            </form>
        </div>
        
        <div class="row frmcontent">
            <?php 
                if(isset($thongbao) && $thongbao!="") echo '<p style="color: green;">'.$thongbao.'</p>'
            ?>
            <div class="row mb10 formds_loai"> 
                <table>
                    <tr>
                        <td></td>
                        <td>Mã hình ảnh</td>
                        <td>Hình ảnh</td>
                        <td>Tên sản phẩm</td>
                        <td>Thao tác</td>
                    </tr>
                    <?php 
                        foreach($dsha as $ha){
                            extract($ha);
                            $suahh = 'index.php?act=suaha&id='.$id;
                            $xoahh = "javascript:confirmDelete('index.php?act=xoaha&id=$id')";
                            if(is_file($hinhanh_url)){
                                $img = "<img src=".$hinhanh." height = '50px'>";
                            }else{
                                $img = 'không có ảnh';
                            }
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$img.'</td>
                            <td>'.$hh['ten'].'</td>
                            <td><a href="'.$suahh.'"><input type="button" value="sửa"></a> <a href="'.$xoahh.'"><input type="button" value="xóa"></a></td>
                            </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row_flex mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=themhh"><input type="button" value="Nhập thêm"></a>
            </div>
            <script>
                function confirmDelete(delUrl){
                    if(confirm('Bạn có chắc chắn muốn xóa không?')){
                        document.location = delUrl;
                    }
                }
            </script>
        </div>
    </div>