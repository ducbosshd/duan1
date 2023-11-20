<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css_bootstrap/bootstrap.min.css">
    <script src="js_bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b1ce9c2366.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <section class="adm_menu">
            <div class="container">
                <div class="name_admin text-center p-2 "><h1>Trình Quản Lý Website</h1></div>
                <div class="row">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                          <a class="navbar-brand d-none " href="#">Navbar</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Trang Chủ</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Danh Mục</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Sản Phẩm</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Thống kê</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Bình Luận</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Hình Ảnh</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </section>
    </header>
    <main>
        <section class="addsp">
            <div class="container p-1">
               <div class="name_addsp text-center ">
                    <h3>Thêm Sản Phẩm Mới</h3>
               </div>
               <div class="form_nd">
                    <form class="form_addsp" method="post">
                        <div class="mb-3">
<label for="tensp" class="form-label">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" id="tensp" placeholder="Nhập vào tên sản phẩm...">
                        </div>
                        <div class="mb-3">
                        <label for="mausac" class="form-label">Màu Sắc</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="maudo" value="option1">
                                <label class="form-check-label" for="maudo">Đỏ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="mautrang" value="option2">
                                <label class="form-check-label" for="mautrang">Trắng</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="mauden" value="option3">
                                <label class="form-check-label" for="mauden">Đen</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="kickco" class="form-label">Kích Cỡ</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="s" value="option1">
                                <label class="form-check-label" for="s">S</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="M" value="option2">
                                <label class="form-check-label" for="M">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="L" value="option3">
                                <label class="form-check-label" for="L">L</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="giasp" class="form-label">Giá Tiền</label>
                            <input type="text" class="form-control" id="giasp" placeholder="Nhập giá sản phẩm...">
                        </div>
                        <div class="mb-3 ">
                            <label for="hinhanh" class="form-label ">Hình Ảnh</label>
                            <input type="file" class="form-control" id="hinhanh" name="hinhanh">
                        </div>
                        <div class="flex-column">
<button type="submit" class="btn btn-primary">Thêm Mới</button>
                            <button type="reset" class="btn btn-secondary">Nhập Lại</button>
                            <a href="#" class="btn btn-primary">Danh Sách</a>
                        </div>
                    </form>
               </div>
            </div>
        </section>
    </main>
</body>
</html>