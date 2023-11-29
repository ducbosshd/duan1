<main>
        <section class="sanpham">
            <h3>Quản Lí Danh Mục</h3>
            <div class="container">
                <form class="row g-3">
                  <div class="col-auto">
                    <label for="timkiem_text" class="visually-hidden">Nhập vào từ khóa...</label>
                    <input type="text" class="form-control" id="timkiem_text" placeholder="Nhập vào từ khóa...">
                  </div>
                  <div class="col-auto ">
                    <select class="form-select " aria-label="Default select example" name="iddm" id="">
                      <option selected>Tất Cả</option>
                    </select>
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Tìm Kiếm</button>
                  </div>
                </form>
                <div class="table-responsive ">
                    <?php 
                      if(isset($thongbao) && $thongbao!="") echo '<p style="color: green;">'.$thongbao.'</p>'
                    ?>
                    <table class="table table-bordered ">
                        <thead>
                          <tr>
                            <th scope="col">Chọn</th>
                            <th scope="col">Mã Danh Mục</th>
                            <th scope="col">Tên Danh Mục</th>
                            <th scope="col">Ảnh Hiển Thị</th>
                            <th scope="col">Hành Động</th>
                          </tr>
                        </thead>
                        <?php foreach ($dsdm as $dm) { 
                            extract($dm);
                            $suadm = 'index.php?act=suadm&id='.$id;
                            $xoadm = "javascript:confirmDelete('index.php?act=xoadm&id=$id')";
                            if(is_file($hinhanh)){
                                $img = '<img src="'.$hinhanh.'" width="60px"';
                            }else{
                                $img = 'Không có hình ảnh';
                            }
                            echo '<tbody class="table-group-divider">
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <th scope="row">'.$id.'</th>
                                            <td><a href="">'.$ten.'</a></td>
                                            <td>'.$img.'</td>
                                            <td>
                                                <a href="'.$suadm.'"><input type="button" value="Sửa" class="btn btn-success"></a>
                                                <a href="#"><input type="button" value="Xóa Tạm Thời" class="btn btn-warning "></a>
                                                <a href="'.$xoadm.'"><input type="button" value="Xóa Vĩnh Viễn" class="btn btn-danger "></a>
                                            </td>
                                        </tr>
                                    </tbody>';
                            } ?>
                      </table>
                </div>
                <div class=" flex-column float-start p-1 m-1 ">
                    <input type="submit" class="btn btn-primary mx-1 py-1" value="Chọn Tất Cả">
                    <input type="reset" class="btn btn-primary mx-1 py-1" value="Bỏ chọn Tất Cả">
                    <input type="reset" class="btn btn-danger mx-1 py-1" value="Xóa Mục Đã Chọn">
                    <a href="index.php?act=themdm" class="btn btn-primary">Nhập Thêm</a>
                </div>
                
            </div>
        </section>
        <script>
            function confirmDelete(delUrl){
                if(confirm('Bạn có chắc chắn muốn xóa không?')){
                    document.location = delUrl;
                }
            }
        </script>
    </main>