<main>
        <section class="sanpham">
            <h3>Quản Lí Sản Phẩm</h3>
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
                    <table class="table table-bordered ">
                        <thead>
                          <tr>
                            <th scope="col">Chọn</th>
                            <th scope="col">Mã</th>
                            <th scope="col">Hình Ảnh</th>
                            <th scope="col">Tên Sản Phẩm</th>
                            <?php foreach ($dstt as $tt){
                                extract($tt);
                                echo '<th scope="col">'.$ten_thuoctinh.'</th>';
                            }?>
                            <th scope="col">Giá Tiền</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Lượt Thích</th>
                            <th scope="col">Bình Luận</th>
                            <th scope="col">Hành Động</th>
                          </tr>
                        </thead>
                        <?php foreach ($dshh as $hh){
                          extract($hh);
                          $ha = load_hd_dd($id);
                          if($ha != ""){
                            if(is_file($ha['hinhanh_url'])){
                              $img = '<img src='.$ha['hinhanh_url'].' width="60px">';
                            }else{
                              $img = "Không có hình ảnh";
                            }
                          }else{
                            $img = "Không có hình ảnh";
                          }
                          $suasp = 'index.php?act=suahh&id='.$id;
                          $td_gt_tt = load_td_tt($dstt,$id);
                          echo '<tbody class="table-group-divider">
                                  <tr>
                                    <td><input type="checkbox"></td>
                                    <th scope="row">'.$id.'</th>
                                    <td>'.$img.'</td>
                                    <td>'.$ten.'</td>
                                    '.$td_gt_tt.'
                                    <td>'.$gia.'đ</td>
                                    <td>'.$mota.'đ</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>
                                        <a href="'.$suasp.'" class="btn btn-success ">Sửa</a>
                                        <a href="#"><input type="button" value="Xóa Tạm Thời" class="btn btn-warning"></a>
                                        <a href="#"><input type="button" value="Xóa Vĩnh Viễn" class="btn btn-danger"></a>
                                    </td>
                                  </tr>
                                </tbody>';
                        }?>
                        <!-- <tbody class="table-group-divider">
                          <tr>
                            <td><input type="checkbox"></td>
                            <th scope="row">1</th>
                            <td>
                              <img src="img1/ao2.jpg" alt="" width="60px">
                            </td>
                            <td>áo mặc được</td>
                            <td>Đỏ</td>
                            <td>XL</td>
                            <td>1000000đ</td>
                            <td>2</td>
                            <td>4</td>
                            <td>
                                <a href="sua-sp.html" class="btn btn-success ">Sửa</a>
                                <a href="#"><input type="button" value="Xóa Tạm Thời" class="btn btn-warning "></a>
                                <a href="#"><input type="button" value="Xóa Vĩnh Viễn" class="btn btn-danger "></a>
                            </td>
                          </tr>
                        </tbody> -->
                      </table>
                </div>
                <div class="row">
                  <div class="d-flex  p-1 m-1  ">
                          <input type="submit" class="btn btn-primary mx-1 py-1" value="Chọn Tất Cả">
                          <input type="reset" class="btn btn-primary mx-1 py-1" value="Bỏ chọn Tất Cả">
                          <input type="reset" class="btn btn-danger mx-1 py-1" value="Xóa Mục Đã Chọn">
                          <a href="addsp.html" class="btn btn-primary  mx-1">Nhập Thêm</a>
                          <a href="#" class="btn btn-primary  mx-1">Biểu Đồ Bình Luận</a> 
                  </div>
              </div>              
            </div>
        </section>
    </main>