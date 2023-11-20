<main>
       <div class="container py-5"><br>
        <h3>Thông Tin Giao Hàng</h3><hr>
            <div class="row m-4">
                <div class="col-8 ">
                    <form class="form_thongtinGH " action="" method="post">
                          <input type="text" class="form-control hoten" id="hovaten" placeholder="Họ và tên..."><br>
                          <input type="text" class="form-control sdt" id="sodienthoai" placeholder="Số điện thoại..."><br>
                          <input type="text" class="form-control dia_chi" id="diachi" placeholder="Địa chỉ..."><br>
                          <textarea class="form-control ghichu" id="ghichu" rows="3" placeholder="Ghi chú..."></textarea><br>
                          <select class="form-select thanhtoan" aria-label="Default select example">
                            <option selected>Chọn Phương Thức Thanh Toán</option>
                            <option value="1">Thanh Toán Khi Nhận Hàng (COD)</option>
                            <option value="2">Thanh Toán Online</option>
                          </select>  
                    </form>
                </div>
                <div class="col-4 ">
                    <div class="row SPthanhtoan">
                        <div class="col-auto  ">
                            <img src="img1/ao1.jpg" alt="" width="60px" height="80px">
                        </div>
                        <div class="col-auto  ">
                            <h6>Áo Blazer Fitted</h6>
                            <input type="number" class="form-control" name="soluong" min="1" value="1">
                        </div>
                        <div class="col-auto">
                            <p>1.000.000đ</p>
                            <button class="btn btn-outline-success XoaSPthanhtoan" type="submit">Xóa</button>
                        </div>
                    </div><hr>
                    <form class="d-flex" action="" method="post">
                        <input class="form-control me-2 magiamGia" type="text" placeholder="Mã Giảm Giá">
                        <button class="btn btn-outline-success SDmagiamGia" type="submit">Dùng</button>
                    </form><br>
                    <table class="table ">
                        <tbody class="table-group-divider">
                            <tr>
                              <td>Phí vận chuyển</td>
                              <td style="text-align: right;">10.000đ</td>
                            </tr>
                            <tr>
                              <td><h5>Tổng Tiền</h5></td>
                              <td style="text-align: right;"><h4>1.000.000đ</h4></td>
                            </tr>
                          </tbody>
                    </table>
                    <div class="row d-flex justify-content-center ">
                        <button class="btn btn-outline-success hoantatDH" type="submit">Hoàn Tất Đơn Hàng</button>
                    </div>
                </div>
            </div>

       </div>
    </main>