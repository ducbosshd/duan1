<main>
       <div class="container"><br>
        <h3>Thông Tin Giao Hàng</h3><hr>
        <form class="form_thongtinGH " action="trangchu.php?act=hoantatTH" method="post">
            <div class="row m-4">
                <div class="col-8 ">
                          <input type="text" value="<?php echo (isset($_SESSION['taikhoan'])) ? $_SESSION['taikhoan']['hoten'] : '' ?>" class="form-control hoten" name="tenKH" id="hovaten" placeholder="Họ và tên..."><br>
                          <input type="text" value="<?php echo (isset($_SESSION['taikhoan'])) ? $_SESSION['taikhoan']['sdt'] : '' ?>"class="form-control sdt" name="sdtKH" id="sodienthoai" placeholder="Số điện thoại..."><br>
                          <input type="text"class="form-control dia_chi" name="diachi" id="diachi" placeholder="Địa chỉ nhận hàng..."><br>
                          <textarea class="form-control ghichu" name="ghichu" rows="3" placeholder="Ghi chú..."></textarea><br>
                          <select class="form-select thanhtoan" id="tinhtrangTT" name="tinhtrangTT" aria-label="Default select example" onchange="hienthi()">
                                <option selected>Chọn Phương Thức Thanh Toán</option>
                                <option value="shipCOD">Thanh Toán Khi Nhận Hàng (COD)</option>
                                <option value="daTT">Thanh Toán Online</option>
                          </select> 
                          <div style="display: none;" id="thanhtoanol">
                            <p>heeloo</p>
                          </div>
                </div>
                <div class="col-4 ">
                    <div class="row SPthanhtoan">
                        <?php if(isset($_SESSION['taikhoan']) && isset($giohang)){ 
                            foreach ($giohang as $gh){
                        extract($gh); 
                        $spc = load_spc($id_spchon);
                        $hh= loadone_hh($spc['id_hanghoa']);
                        $hdd = load_hinhanh_dd($hh['id']);
                        ?>
                        <table class="table">
                            <tr>
                                <td class="col-auto" rowspan="2">
                                    <img src="<?=$hdd['hinhanh_url']?>" alt="" width="80px" height="100px">
                                </td>
                                <td class="col-auto">
                                    <h6><?=$hh['ten']?></h6>
                                    <p><?=$spc['soluong']?></p>
                                </td>
                                <td class="col-auto">
                                    <?php echo $spc['soluong']*$hh['gia']?>
                                </td>
                            </tr>
                        </table>
                        <?php }}else{
                             $spc = load_spc($idspc);
                             $hh= loadone_hh($spc['id_hanghoa']);
                             $hdd = load_hinhanh_dd($hh['id']);
                             ?>
                             <table class="table">
                                 <tr>
                                     <td class="col-auto" rowspan="2">
                                         <img src="<?=$hdd['hinhanh_url']?>" alt="" width="80px" height="100px">
                                     </td>
                                     <td class="col-auto">
                                         <h6><?=$hh['ten']?></h6>
                                         <p><?=$spc['soluong']?></p>
                                     </td>
                                     <td class="col-auto">
                                         <?php echo $spc['soluong']*$hh['gia']?>
                                     </td>
                                 </tr>
                             </table>
                             <?php }
                         ?>
                    </div><hr>           
                    <table class="table ">
                        <tbody class="table-group-divider">
                            <tr>
                              <td><h5>Tổng Tiền</h5></td>
                              <td style="text-align: right;"><h4><?=$tongtien?></h4></td>
                            </tr>
                          </tbody>
                    </table>
                    <div class="row d-flex justify-content-center ">
                        <?php if(isset($_SESSION['taikhoan']) && isset($giohang)){ 
                            foreach ($giohang as $gh){
                                extract($gh); ?> 
                                <input type="hidden" name="idsp_chon[]" value="<?=$id_spchon?>">
                        <?php }}else{ ?>
                            <input type="hidden" name="idsp_chon[]" value="<?=$idspc?>"> <?php }
                         ?>
                        <button class="btn btn-outline-success" name="hoantatDH" type="submit">Hoàn Tất Đơn Hàng</button>
                    </div>
                </div>
            </div>
        </form>
       </div>
    </main>
    <script>
    function hienthi() {
        var selectElement = document.getElementById('tinhtrangTT');
        var divElement = document.getElementById('thanhtoanol');

        if (selectElement.value === 'daTT') {
            divElement.style.display = 'block';
        } else {
            divElement.style.display = 'none';
        }
    }
    </script>