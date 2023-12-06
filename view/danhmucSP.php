<main>
        <section class="SP1">
            <div class="container">
                <div class="danhmuc">
                    <h3 class="text-center pt-3 "><?=$tendm?></h3><hr>
                    <div class="row">
                        <?php foreach($dshh as $hh){
                            extract($hh);
                            $hadd = load_hinhanh_dd($id);
                            ?>
                            <div class="col-md-3 py-2 ">
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
        </section>
</main>