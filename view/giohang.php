<main>
       <div class="container py-5"><br>
        <h3>Giỏ Hàng Của Bạn</h3><hr>
            <div class="row m-4">
                <div class="col-8 py-2">
                    <?php if(isset($giohang)){ foreach ($giohang as $gh){
                        extract($gh); 
                        $spc = load_spc($id_spchon);
                        $hh= loadone_hh($spc['id_hanghoa']);
                        $hdd = load_hinhanh_dd($hh['id']);?>
                    <div class="row gioHang">
                        <div class="col-3">
                            <img src="<?=$hdd['hinhanh_url']?>" alt="" width="80px" height="100px">
                        </div>
                        <div class="col-6 gioHang_tenSP">
                            <h5 class="tenSP_GH"><?=$hh['ten']?></h5>
                            <div class="input-group">
                                <input type="hidden" class="giasp" value="<?=$hh['gia']?>">
                                <input type="number" class="form-control" name="soluong" min="1" value="<?=$spc['soluong']?>" onclick="tinhtien()">
                                    <input type="hidden" name="idspc" value="<?=$id_spchon?>">
                                    <a href="trangchu.php?act=xoaspc&id=<?=$id?>"><button class="XoaSPgiohang btn btn-outline-success" name="xoaSPC" type="submit">Xóa</button></a>
                            </div>
                        </div>
                        <div class="col-3 py-2 text-end">
                            <div><h5 class="giaSP_GH"><?php echo $hh['gia']*$spc['soluong']?>đ</h5></div>
                        </div>
                    </div><hr>
                    <?php }?>
                </div>
                <div class="col-4 p-3  form_tomtatGH">
                    <h5>Tóm tắt đơn hàng của bạn</h5>
                    <h6>Chưa bao gồm phí vận chuyển</h6>
                    <div class="table-responsive ">
                        <table class="table ">
                            <tbody class="table-group-divider">
                                <tr>
                                  <td><h5>Tổng Tiền</h5></td>
                                  <td style="text-align: right;"><h4 id="tongtien"><?php $tongtien = 0; 
                                  foreach ($giohang as $gh){
                                        extract($gh); 
                                        $spc = load_spc($id_spchon);
                                        $hh= loadone_hh($spc['id_hanghoa']);
                                        $tongtien += $hh['gia']*$spc['soluong'];
                                  }     echo $tongtien?>đ</h4>
                                    </td>
                                </tr>
                              </tbody>
                        </table>
                    </div>
                    <p>Bạn có thể nhập mã giảm giá ở trang thanh toán</p>
                    <button class="tienhanhDH" type="submit">Tiến Hành Đặt Hàng</button>
                </div><?php }else{?> <h4>Bạn chưa có sản phẩm nào</h4><?php }?>
            </div>
    </div>
    <script>
        function tinhtien(){
            var giatien = document.getElementsByClassName('giasp');
            var soluong = document.getElementsByName('soluong');
            var giaSP_GH = document.getElementsByClassName('giaSP_GH');
            var tt = document.getElementById('tongtien');
            var thanhtien;
            var tongtien = 0;
            var gt;
            var sl;
            var length = giatien.length;
            for(var i = 0; i<length;i++){
                gt = giatien[i].value;
                sl = soluong[i].value;
                thanhtien =  gt * sl;
                tongtien += thanhtien;
                giaSP_GH[i].innerText = thanhtien+'đ';              
            }
            tt.innerText = tongtien+'đ';

        }
    </script>
    </main>
    