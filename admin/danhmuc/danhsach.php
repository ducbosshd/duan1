<div class="row">
        <div class="row font_title">
            <h1>DANH SÁCH LOẠI HÀNG</h1>
        </div>
        <div class="row frmcontent">
            <?php 
                if(isset($thongbao) && $thongbao!="") echo '<p style="color: green;">'.$thongbao.'</p>'
            ?>
            <div class="row mb10 formds_loai">
                <table>
                    <tr>
                        <td></td>
                        <td>Mã loại</td>
                        <td>Tên loại</td>
                        <td>Hình ảnh</td>
                        <td>Thao tác</td>
                    </tr>
                    <?php 
                        foreach($dsdm as $dm){
                            extract($dm);
                            $suadm = 'index.php?act=suadm&id='.$id;
                            $xoadm = "javascript:confirmDelete('index.php?act=xoadm&id=$id')";
                            if(is_file($hinhanh)){
                                $img = "<img src=".$hinhanh." height = '50px'>";
                            }else{
                                $img = 'không có ảnh';
                            }
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$ten.'</td>
                            <td>'.$img.'</td>
                            <td><a href="'.$suadm.'"><input type="button" value="sửa"></a> <a href="'.$xoadm.'"><input type="button" value="xóa"></a></td>
                            </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=themdm"><input type="button" value="Nhập thêm"></a>
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