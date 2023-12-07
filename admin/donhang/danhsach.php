<main>
        <section class="ql_donhang">
            <div class="container">
                <div class="text-center ">
                    <h3>Quản Lí Đơn Hàng</h3>
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
                            <th scope="col">Mã Đơn Hàng</th>
                            <th scope="col">Mã Tài Khoản</th>
                            <th scope="col">Tên Người Nhận</th>
                            <th scope="col">Địa Chỉ</th>
                            <th scope="col">Số Điện Thoại</th>
                            <th scope="col">Ghi Chú</th>
                            <th scope="col">Phương thức thanh toán</th>
                            <th scope="col">Trạng Thái</th>
                            <th scope="col">Hành Động</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider ">
                            <?php foreach($dsdh as $dh){
                                extract($dh)?>
                          <tr>
                            <td><input type="checkbox"></td>
                            <th><?=$id?></th>
                            <td><?=$id_nguoidung?></td>
                            <td><?=$hoten_nn?></td>
                            <td><?=$diachi_nn?></td>
                            <td><?=$sdt_nn?></td>
                            <td><?=$ghichu_nn?></td>
                            <td><?=$tinhtrangthanhtoan?></td>
                            <td>
                                <form action="index.php?act=update_ttdh" method="post">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <?php if($tinhtrangdonhang == 0){?>
                                        Đang chuẩn bị hàng
                                    <br><button type="submit" name="next" class="btn btn-success">Next</button>
                                    <?php } if($tinhtrangdonhang == 1){?>
                                        Đã giao cho bên vận chuyển
                                    <br><button type="submit" name="next" class="btn btn-success">Next</button>
                                    <?php } if($tinhtrangdonhang == 2){?>
                                        Giao hàng thành công <br>
                                    <?php } if($tinhtrangdonhang == 3){?>
                                        Đơn hàng thất bại <br>
                                    <?php } if($tinhtrangdonhang != 2 && $tinhtrangdonhang != 3){?>
                                    <button type="submit" class="btn btn-danger" name="thatbai">Thất bại</button>
                                    <?php }?>
                                </form>
                            </td>
                            <td>
                                <a href="index.php?act=chitiet_DH" class="btn btn-success ">Chi Tiết</a>
                            </td>
                          </tr>
                          <?php }?>
                        </tbody>
                      </table>
                </div>
                <div class=" flex-column float-start p-1 m-1 ">
                    <input type="submit" class="btn btn-primary mx-1 py-1" value="Chọn Tất Cả">
                    <input type="reset" class="btn btn-primary mx-1 py-1" value="Bỏ chọn Tất Cả">
                    <input type="reset" class="btn btn-danger mx-1 py-1" value="Xóa Mục Đã Chọn">
                </div>
            </div>
           
        </section>
    </main>