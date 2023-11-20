 <!-- footter -->
 <footer>
        <section class="footter bg-black text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Văn Phòng Giao Dịch</h4>
                        <ul>
                            <li><a href="">Trang Chủ</a></li>
                            <li><a href="">Danh Mục</a></li>
                            <li><a href="">Liên Hệ</a></li>
                            <li><a href="">Hỏi Đáp</a></li>
                            <li><a href="">Tuyển Dụng</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Về Chúng Tôi</h4>
                        <ul>
                            <li><a href="">Trang Chủ</a></li>
                            <li><a href="">Danh Mục</a></li>
                            <li><a href="">Liên Hệ</a></li>
                            <li><a href="">Hỏi Đáp</a></li>
                            <li><a href="">Tuyển Dụng</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Chính Sách Bán Hàng</h4>
                        <ul>
                            <li><a href="">Trang Chủ</a></li>
                            <li><a href="">Danh Mục</a></li>
                            <li><a href="">Liên Hệ</a></li>
                            <li><a href="">Hỏi Đáp</a></li>
                            <li><a href="">Tuyển Dụng</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Theo Dõi Chúng Tôi</h4>
                        <ul>
                            <li><a href="">Trang Chủ</a></li>
                            <li><a href="">Danh Mục</a></li>
                            <li><a href="">Liên Hệ</a></li>
                            <li><a href="">Hỏi Đáp</a></li>
                            <li><a href="">Tuyển Dụng</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 ">
                        <h5>Thiên Đường Mua Sắm Boss</h5>
                        <p class="mb-0">Địa chỉ: Số 344 Cầu Giấy, Phường Dịch Vọng, Quận Cầu Giấy, Thành phố Hà Nội</p>
                        <p class="mb-0">Mã số doanh nghiệp: 0108901419 do Sở kế hoạch và đầu tư thành phố Hà Nội cấp ngày 17/09/2019</p>
                        <p class="mb-0">Điện thoại: 0982.022.969</p>
                        <img src="img1/footter_logo.jpg" alt="" width="">
                    </div>
                    <div class="col-md-6 ">
                        <h5>Nhận Tin Khuyến Mãi</h5>
                        <form class="input-group mb-3" action="" method="post">
                            <input type="text" class="form-control" name="email" placeholder="Vui Lòng Nhập Vào Email..."
                                aria-label="Vui Lòng Nhập Vào Email..." aria-describedby="basic-addon2">
                            <span class="input-group-text text-white bg-danger" id="basic-addon2">
                                <button type="submit" class="btn" id="dangkyKM">Đăng Ký</button>
                            </span>
                        </form>  
                        <div>
                            <span class="box50 border border-danger mr-3 text-primary">
                                <i class="fa-brands fa-facebook"></i>
                            </span>
                            <span class="box50 border border-danger mr-3 ">
                                <i class="fa-brands fa-tiktok"></i>
                            </span>
                            <span class="box50 border border-danger mr-3 ">
                                <i class="fa-brands fa-twitter"></i>
                            </span>
                            <span class="box50 border border-danger mr-3 text-bg-danger   ">
                                <i class="fa-brands fa-youtube"></i>
                            </span>
                        </div>                      
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- end footter -->
    <script src="main.js"></script> 
    <script src="js_jquery/jquery.js"></script>
    <script>
        $(() => {
            $('p img').click(function(){
                let imgPath = $(this).attr('src');
                $('#main_img').attr('src', imgPath);
            })
        })
    </script>
</body>
</html>
