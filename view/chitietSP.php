<?php extract($hh)?>
<main>
       <section class="chitietSP py-4">        
            <div class="container">
                <h2>Chi Tiết Sản Phẩm</h2><hr>
                <div class="row">
                    <div class="col-8 hienthianh">
                        <div class="row">
                            <div class="col-2 "><p>
                                <?php foreach ($dsha as $ha){
                                    extract($ha);?>
                                    <img src="<?=$hinhanh_url?>" alt=""  class="anh2"><br>
                                <?php }?>
                            </p></div>
                            <div class="col-10 "> 
                                <img src="<?=$dsha[0]['hinhanh_url']?>" alt="" class="anh1" id="main_img" />
                            </div>
                        </div> 
                     </div>
                    <div class="col-4 select_chitietSP">
                        <form action="trangchu.php?act=donhang" method="post">
                        <div class="chitietSP_trangthai">
                            <h4><?=$ten?></h4>
                            <span class="trangthaiSP">Trạng thái của SP(còn hàng,hết hàng)</span><hr>
                            <h3>Giá Sản Phẩm: <?=$gia?>₫</h3><br>
                            <input type="hidden" name="gia" value="<?=$gia?>">
                        </div>
                        <div class="select_mau">
                            <h5>Màu Sắc</h5>
                            <?php foreach ($mausac as $ms){
                                extract($ms);?>
                                <div class="mausac" style="background-color: <?=$tengiatri?>;"><input type="radio" name="mausac" value="<?=$id?>" style="position:absolute;"></div>
                            <?php }?>
                            
                        </div>
                        <div class="select_size">
                            <h5>Kích Cỡ</h5>
                            <select name="kichco" class="form-select" aria-label="Default select example">
                                <option value="" selected>Chọn kích cỡ...</option>
                                <?php foreach($kichco as $kc){
                                    extract($kc);?>
                                    <option value="<?=$id?>"><?=$tengiatri?></option>
                                <?php }?>
                            </select><br>
                        </div>
                        <div class="soluongSP">
                            <h5>Số Lượng</h5>
                            <input type="number" class="form-control" name="soluong" min="1" value="1">
                        </div><br>
                        <div class="row ">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <div class="col-6 ">
                                <a href="<?php echo (!isset($_SESSION['taikhoan']))?"javascript:confirmDN('trangchu.php?act=dangnhap')":''?>">
                                <button name="themSP" type="<?php echo (!isset($_SESSION['taikhoan']))?'button':'submit'?>" class="themSP">Thêm Vào Giỏ Hàng</button></a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <button type="submit" name="muangay" class="muangay">Mua Ngay</button>
                            </div>
                        </div></form><hr>
                        <div class="thongtinSP">
                            <h6>THUỘC TÍNH SẢN PHẨM</h6>
                            <p><?=$mota?></p>
                            <!-- <p></p> -->
                        </div>
                     </div>
                </div><br>
               <div class="binhluan py-5">
                    <h4>Bình Luận</h4><hr>
                    <div class="bangBL">
                       
                                <?php foreach($binhluan as $bl){
                                    extract($bl);
                                    $nd = loadone_tk($id_nguoidung);
                                    echo '<div>
                                        <strong>'.$nd['hoten'].'</strong><br>
                                        <span>'.$ngaybinhluan.'</span><br>
                                        <span>'.$noidung.'</span><br>
                                        </div>    
                                        '; }?>
                        
                    </div>
                    <?php if(isset($_SESSION['taikhoan'])){?>
                        <div class="formBL">
                            <div class="container-fluid">
                                <form class="d-flex" action="" method="post">
                                <input style="margin: 0 4px;" name="binhluan" class="form-control vietBL" type="text" placeholder="Bình Luận...">
                                <button name="thembl" style="margin: 0;" class="btn btn-outline-success themBL" type="submit">Bình Luận</button>
                                </form>
                            </div>
                        </div>
                    <?php } else{?>
                        <p>Bạn cần <a href="trangchu.php?act=dangnhap">đăng nhập</a> mới có thể bình luận</p>
                    <?php }?>
               </div>
                <div class="SPlienquan">
                    <h2>Sản Phẩm Cùng Loại</h2><hr>
                    <div class="row">
                        <?php foreach($spcl as $sp){
                            extract($sp);
                            $hadd = load_hinhanh_dd($id);?>
                            <div class="col-md-3 py-3 ">
                                <div class="sanpham">
                                        <a href="trangchu.php?act=sanphamct&id=<?=$id?>" class="tenSP">
                                            <img src="<?=$hadd['hinhanh_url']?>" alt="<?=$ten?>" class="img-fluid">
                                            <br><strong style="font-size: 20px"><?=$ten?></strong>
                                            <p class="giaSP"><?=$gia?> VND</p>
                                        </a>
                                        <a href="trangchu.php?act=sanphamct&id=<?=$id?>" style="display: inline-block; text-decoration:none; padding: 7px 15px; margin: auto; border-radius: 5px; cursor: pointer; background-color: white; color: black; border: 1px solid black;"
                                            onmouseover="this.style.backgroundColor='#ff6600'; this.style.color='white'" onmouseout="this.style.backgroundColor='white'; this.style.color='black'">
                                            CHI TIẾT SẢN PHẨM
                                        </a>
                                        <!-- <i class="fas fa-heart heart-icon"></i> -->
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    </div>
                </div>
            </div>
       </section>
    </main>
    <script>
        function confirmDN(url){
            if(confirm('Bạn phải đăng nhập mới thêm được vào giỏ hàng. Bạn có muốn đăng nhập không?')){
                document.location = url;
            }
        }
    </script>