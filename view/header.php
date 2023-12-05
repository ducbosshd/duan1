<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css_bootstrap/bootstrap.min.css">
    <script src="js_bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b1ce9c2366.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <section class="logo">
            <div class="container py-2">
                <div class="row">
                    <div class="col-md-2"> 
                        <img src="img1/logo2.jpg" class="img-fluid " alt="" width=""  >
                    </div>
                    <div class="col-md-7">
                    </div>
                    <div class="col-md-3 p-0 item_hearder">
                        <div class="row">
                           <?php if(isset($_SESSION['taikhoan'])): ?>
                            <div class="col">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="fs-3">
                                            <i class="fa-regular fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-9 fs-6" style="max-width: 150px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                        <?php if($_SESSION['taikhoan']['vaitro'] == 0): ?>
                                            <a href="trangchu.php?act=nguoidung" class="item_dangnhap"><?php echo $_SESSION['taikhoan']['email']; ?></a>
                                        <?php else: ?>
                                            <a href="index.php" class="item_dangnhap"><?php echo $_SESSION['taikhoan']['email']; ?></a>
                                        <?php endif; ?>
                                        <span style="overflow: visible; white-space: normal; text-overflow: unset;">
                                            <a href="trangchu.php?act=dangxuat">Đăng Xuất</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                            <form action="" method="post">
                                                    <a href="#" class="position-relative">
                                                        <span class="fs-3 item_dangnhap"><i class="fa-regular fa-heart"></i></span>
                                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                        0
                                                        </span>
                                                    </a>
                                            </form>        
                                    </div>
                                    <div class="col">
                                        <a href="trangchu.php?act=giohang" class="position-relative">
                                        <span class="fs-3 item_dangnhap"><i class="fa-solid fa-cart-shopping"></i></span>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        <?php if(isset($_SESSION['taikhoan'])){
                                            echo $sl = soluong_giohang($_SESSION['taikhoan']['id']);
                                        } else{
                                            echo '0';
                                        }?>
                                        </span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <?php else : ?>
                            <div class="col">
                                <div class="row">
                                    <div class="col-3 ">
                                        <div class="fs-3" >
                                            <i class="fa-regular fa-user"></i>
                                        </div>           
                                        <div class="col-9 fs-6 "><a href="trangchu.php?act=dangnhap" class="item_dangnhap">Xin Chào <br>
                                                <strong>ĐăngNhập</strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <!-- nút toggle menu-->
                        <a class="navbar-brand d-none" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu_nav"
                         aria-controls="menu_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- kết thúc nút toggle menu -->
                      <div class="collapse navbar-collapse" id="menu_nav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="trangchu.php">Trang Chủ</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="trangchu.php?act=sanpham">Sản Phẩm</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" 
                            aria-expanded="false">
                                Danh Mục
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php 
                                    foreach ($dsdm as $dm){
                                    extract($dm);
                                    $linkdm = "trangchu.php?act=danhmuc&iddm=".$id;
                                    echo '<li><a class="dropdown-item" href="'.$linkdm.'">'.$ten.'</a> </li>';
                                    }
                                ?>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Tin Tức</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Liên Hệ</a>
                          </li>
                        </ul>
                        <form class="d-flex align-items-center" action="" method="post">
                            <input class="timkiem" type="search" placeholder="Tìm Kiếm..." aria-label="Search">
                            <button class="btn btn-outline-success" name="btnok" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </nav>
            </div>
        </section>
    </header>
    <!-- end header -->