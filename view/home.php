   <!-- main -->
   <main>
        <section class="main my-3 ">
           <div class="container">
                <div class="banner">
                    <!-- banner bootstrap -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img1/banner1.jpg" class="d-block w-100 img-banner" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img1/banner2.jpg" class="d-block w-100 img-banner" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img1/banner3.jpg" class="d-block w-100 img-banner" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- banner js -->
                    <!-- <div class="banner">
                        <img id="banner" src="img1/banner1.png" alt="">
                        <button class="pre" onclick="pre()">&#10094;</button>
                        <button class="next" onclick="next()">&#10095;</button>
                    </div> -->
                    <!-- end banner js -->
                </div>
                <div class="danhmuc">
                    <div class="container">
                        <h3 class="text-center pt-2 pb-2 ">DANH MỤC MUA HÀNG</h3>
                        <div class="row">
                            <?php foreach($dsdm as $dm){
                                extract($dm);?>
                                <div class="col-md-4 mb-3">
                                <div class="anhdm">
                                    <a href="">
                                    <img src="<?=$hinhanh?>" alt="" class="w-100 anh_dm">
                                    <div class="tenanh"><strong style="font-size: 20px"><?=$ten?></strong></div></a>
                                </div>
                            </div>
                            <?php }
                            ?>
                        </div>           
                    </div>
                </div>
                <div class="topSP">
                    <h3 class="text-center pt-3 ">SẢN PHẨM BÁN CHẠY</h3><hr>
                    <div class="row">
                    </div>
                </div>   
                <div class="tintuc">
                    <h3 class="text-center pt-2 pb-2 ">TIN TỨC MỚI</h3>
                    <div class="row ">
                        <div class="col-md-6 ">
                            <img src="img1/tintuc1.jpg" alt="" class="w-100 img_tintuc">
                            <a href="" class="tintuc"><strong style="font-size: 20px">GRAND OPENING - KRIK 132 CẦU GIẤY</strong></a>
                            <p>Sự kiện khai trương cửa hàng đầu tiên mang tên KRIK tại 132 Cầu Giấy trong những ngày vừa qua đã diễn ra thành công rực rỡ và ấn tượng.
                                KRIK xin gửi lời cảm ơn chân thành nhất tới các vị khách hàng yêu quý, gia đình và bạn bè đã tới tham dự sự kiện và ủng hộ Thương hiệu.
                                Chúng mình sẽ cố gắng phát triển thật lớn mạnh và nâng tầm dịch vụ để làm hài lòng tất cả khách hàng cũng như khẳng định vị trí Thương hiệu tại thị trường thời trang sắp tới.
                            </p>
                        </div>
                        <div class="col-md-6 ">
                            <img src="img1/tintuc2.jpg" alt="" class="w-100 img_tintuc">
                            <a href="" class="tintuc"><strong style="font-size: 20px">GRAND OPENING - KRIK 132 CẦU GIẤY</strong></a>
                            <p>Sự kiện khai trương cửa hàng đầu tiên mang tên KRIK tại 132 Cầu Giấy trong những ngày vừa qua đã diễn ra thành công rực rỡ và ấn tượng.
                                KRIK xin gửi lời cảm ơn chân thành nhất tới các vị khách hàng yêu quý, gia đình và bạn bè đã tới tham dự sự kiện và ủng hộ Thương hiệu.
                                Chúng mình sẽ cố gắng phát triển thật lớn mạnh và nâng tầm dịch vụ để làm hài lòng tất cả khách hàng cũng như khẳng định vị trí Thương hiệu tại thị trường thời trang sắp tới.
                            </p>
                        </div>
                    </div>
                </div>  
               
           </div>
        </section>
    </main>
    <!-- end main -->
