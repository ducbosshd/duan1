<main>
    <section class="main my-3 ">
        <div class="container">
            <div class="topSP">
                <h3 class="text-center pt-3 ">SẢN PHẨM</h3><hr>
                <div class="row">
                    <?php foreach($dshh as $hh){
                        extract($hh);
                        $hadd = load_hinhanh_dd($id);
                        ?>
                        <div class="col-md-3 py-2 ">
                            <div class="sanpham">
                                <a href="#" class="tenSP">  
                                <img src="<?=$hadd['hinhanh_url']?>" alt="<?=$ten?>" class="img-fluid">
                                <br><strong style="font-size: 20px"><?=$ten?></strong>
                                <p class="giaSP"><?=$gia?> VND</p></a>
                                <form method="post">
                                    <button type="submit" class="themSP">THÊM VÀO GIỎ HÀNG</button>
                                    <i class="fas fa-heart heart-icon"></i>
                                </form>
                            </div>
                        </div>   
                    <?php }?>                                     
                </div>
            </div>  
        </div>
    </section> 
</main>