<main>
        <section class="ql_taikhoan">
            <div class="container">
                <div class="text-center">
                    <h3>Quản Lí Tài Khoản</h3>
                </div>
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
                    <table class="table table-bordered text-center">
                        <thead>
                          <tr>
                            <th scope="col">Chọn</th>
                            <th scope="col">Mã Tài Khoản</th>
                            <th scope="col">Email</th>
                            <th scope="col">Họ Tên</th>
                            <th scope="col">Ngày Sinh</th>
                            <th scope="col">Số Điện Thoại</th>
                            <th scope="col">Vai trò</th>
                            <th scope="col">Hành Động</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider ">
                            <?php foreach($dstk as $tk){
                                extract($tk);
                                ?><tr>
                                        <td><input type="checkbox"></td>
                                        <th scope="row"><?=$id?></th>
                                        <td><?=$email?></td>
                                        <td><?=$hoten?></td>
                                        <td><?=$ngaysinh?></td>
                                        <td><?=$sdt?></td>
                                        <td><?=$vaitro?><br>
                                          <form action="index.php?act=hang_tk" method="post">
                                            <input type="hidden" name="id" value="<?=$id?>">
                                            <?php if($vaitro < 2){?>
                                              <button type="submit" name="nangcap" class="btn btn-success">Nâng cấp</button>
                                            <?php } if(0<$vaitro){?>
                                              <button type="submit" class="btn btn-warning" name="hacap">Hạ cấp</button>
                                            <?php }?>
                                          </form>
                                        </td>
                                        <td>
                                            <a href="#"><input type="button" value="Xóa Tài Khoản" class="btn btn-danger "></a>
                                        </td>
                                    </tr>';
                            <?php }?>
                          
                        </tbody>
                      </table>
                </div>
                <div class=" flex-column float-start p-1 m-1 ">
                    <input type="submit" class="btn btn-primary mx-1 py-1" value="Chọn Tất Cả">
                    <input type="reset" class="btn btn-primary mx-1 py-1" value="Bỏ chọn Tất Cả">
                    <input type="submit" class="btn btn-danger mx-1 py-1" value="Xóa Mục Đã Chọn">
                    <input type="submit" class="btn btn-success  mx-1 py-1" value="Gửi Thông Báo">
                </div>
            </div>
           
        </section>
    </main>