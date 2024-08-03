<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../assets/clients/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../assets/clients/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../assets/clients/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">Giới thiệu</a>
                    <a class="text-body mr-3" href="<?= BASE_URL ?>?act=lien-he">Liên hệ</a>
                    <a class="text-body mr-3" href="<?= BASE_URL ?>?act=lien-he">Trợ giúp</a>
                    <a class="text-body mr-3" href="">Câu hỏi thường gặp</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Tài
                            khoản của tôi</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">Đăng nhập</button>
                            <button class="dropdown-item" type="button">Đăng ký</button>
                        </div>
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                            data-toggle="dropdown">VND</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">VND</button>
                            <button class="dropdown-item" type="button">GBP</button>
                            <button class="dropdown-item" type="button">CAD</button>
                            <button class="dropdown-item" type="button">USD</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                            data-toggle="dropdown">VN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">vietnamese</button>
                            <button class="dropdown-item" type="button">english</button>
                            <button class="dropdown-item" type="button">china</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle"
                            style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="<?= BASE_URL ?>?act=gio-hang" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle"
                            style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">DPL</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Dịch vụ khách hàng</p>
                <h5 class="m-0">+84 988 672 894</p>
            </div>
        </div>
    </div>

    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
                    href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Danh mục</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Váy đầm <i
                                    class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Váy đầm nam</a>
                                <a href="" class="dropdown-item">Váy đầm nữ</a>
                                <a href="" class="dropdown-item">Váy đầm em bé</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Áo sơ mi</a>
                        <a href="" class="nav-item nav-link">Quần jeans</a>
                        <a href="" class="nav-item nav-link">Đồ bơi</a>
                        <a href="" class="nav-item nav-link">Đồ ngủ</a>
                        <a href="" class="nav-item nav-link">Đồ thể thao</a>
                        <a href="" class="nav-item nav-link">Jumpsuit</a>
                        <a href="" class="nav-item nav-link">Áo blazer</a>
                        <a href="" class="nav-item nav-link">Áo khoác</a>
                        <a href="" class="nav-item nav-link">Giày</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="<?= BASE_URL ?>" class="nav-item nav-link">Trang chủ</a>
                            <a href="<?= BASE_URL ?>?act=san-pham" class="nav-item nav-link">Cửa hàng</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Trang khác <i
                                        class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="<?= BASE_URL ?>?act=gio-hang" class="dropdown-item">Giỏ hàng</a>
                                    <a href="<?= BASE_URL ?>?act=thanh-toan" class="dropdown-item">Thanh toán</a>
                                </div>
                            </div>
                            <a href="<?= BASE_URL ?>?act=lien-he" class="nav-item nav-link">Liên hệ</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="<?= BASE_URL ?>?act=gio-hang" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="<?= BASE_URL ?>">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="<?= BASE_URL ?>?act=san-pham">Cửa hàng</a>
                    <span class="breadcrumb-item active">Chi tiết sản phẩm</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <img class="w-100 h-100" src="../../uploads/<?= $list1SanPham['img_sp']; ?>" alt="Image"
                        width="100px">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3><?= $list1SanPham['name_sp']; ?></h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1">(99 Reviews)</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4"><?= $list1SanPham['price_sp']; ?></h3>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <a href="<?= BASE_URL ?>?act=gio-hang"><button class="btn btn-primary px-3"><i
                                    class="fa fa-shopping-cart mr-1"></i>Giỏ Hàng</button></a>
                    </div>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="#">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Miêu tả</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Thông tin</a>

                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Mô tả sản phẩm</h4>
                            <p>
                            <p class="mb-4"><?= $list1SanPham['mota_sp']; ?></p>
                            </p>
                        </div>
                        <h4>Bình luận</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                if (isset($binh_luan) && $binh_luan) {
                                    foreach ($binh_luan as $key) { ?>
                                        <div class="media mb-4">
                                            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                                style="width: 45px;">
                                            <div class="media-body">
                                                <h6>tên<small> - <i><?= $key['ngay_bl'] ?></i></small></h6>
                                                <div class="text-primary mb-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <p><?= $key['noi_dung'] ?></p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Để lại đánh giá</h4>
                                <small>Địa chỉ email của bạn sẽ không được công bố. Các trường bắt buộc được đánh
                                    dấu *</small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Đánh giá của bạn * :</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <form method="post"
                                    action="<?= BASE_URL . "?act=add-binh-luan&id=" . $list1SanPham['id'] ?>">
                                    <div class="form-group">
                                        <label for="message">Đánh giá của bạn *</label>
                                        <textarea id="message" name="comment" cols="30" rows="5"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Gửi đánh giá của bạn" class="btn btn-primary px-3"
                                            name="submit">
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-3">Thông tin thêm</h4>
                            <p>

                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">1 đánh giá "Tên sản phẩm"</h4>
                                    <?php
                                    if (isset($binh_luan) && $binh_luan) {
                                        foreach ($binh_luan as $key) { ?>
                                            <div class="media mb-4">
                                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                                    style="width: 45px;">
                                                <div class="media-body">
                                                    <h6>tên<small> - <i><?= $key['ngay_bl'] ?></i></small></h6>
                                                    <div class="text-primary mb-2">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <p><?= $key['noi_dung'] ?></p>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Để lại đánh giá</h4>
                                    <small>Địa chỉ email của bạn sẽ không được công bố. Các trường bắt buộc được đánh
                                        dấu *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Đánh giá của bạn * :</p>
                                        <div class="text-primary">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form method="post"
                                        action="<?= BASE_URL . "?act=add-binh-luan&id=" . $list1SanPham['id'] ?>">
                                        <div class="form-group">
                                            <label for="message">Đánh giá của bạn *</label>
                                            <textarea id="message" name="comment" cols="30" rows="5"
                                                class="form-control"></textarea>
                                        </div>
                                        <div class="form-group mb-0">
                                            <input type="submit" value="Gửi đánh giá của bạn"
                                                class="btn btn-primary px-3" name="submit">
                                        </div>
                                    </form>
                                </div>

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <!-- <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">You May
                Also Like</span></h2>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                    <div class="product-item bg-light">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="../../uploads/<?= $list1SanPham['img_sp']; ?>" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href=""><?= $list1SanPham['name_sp']; ?></a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5><?= $list1SanPham['price_sp']; ?></h5>
                                <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>

                  
                </div>
            </div>
        </div>
    </div> -->
        <!-- Products End -->




        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
            <div class="row px-xl-5 pt-5">
                <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                    <h5 class="text-secondary text-uppercase mb-4">Liên lạc</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i><a href="#">123 Trịnh Văn Bô ,
                            Nam từ Liêm , Hà Nội</a></p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i><a
                            href="#">phamvanduong2004tb@gmail.com</a></p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i><a href="#">+84988672894</a></p>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <h5 class="text-secondary text-uppercase mb-4">Cửa hàng</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="<?= BASE_URL ?>"><i
                                        class="fa fa-angle-right mr-2"></i>Trang
                                    chủ</a>
                                <a class="text-secondary mb-2" href="<?= BASE_URL ?>?act=san-pham"><i
                                        class="fa fa-angle-right mr-2"></i>Cửa hàng
                                    của chúng tôi</a>
                                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Cửa hàng
                                    Detail</a>
                                <a class="text-secondary mb-2" href="<?= BASE_URL ?>?act=gio-hang"><i
                                        class="fa fa-angle-right mr-2"></i>Mua sắm
                                    Cart</a>
                                <a class="text-secondary mb-2" href="<?= BASE_URL ?>?act=thanh-toan"><i
                                        class="fa fa-angle-right mr-2"></i>Thanh
                                    toán</a>
                                <a class="text-secondary" href="<?= BASE_URL ?>?act=lien-he"><i
                                        class="fa fa-angle-right mr-2"></i>Liên hệ với
                                    chúng tôi</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="text-secondary text-uppercase mb-4">Tài khoản của tôi</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="<?= BASE_URL ?>"><i
                                        class="fa fa-angle-right mr-2"></i>Trang
                                    chủ</a>
                                <a class="text-secondary mb-2" href="<?= BASE_URL ?>?act=san-pham"><i
                                        class="fa fa-angle-right mr-2"></i>Cửa hàng
                                    của chúng tôi</a>
                                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Cửa hàng
                                    Detail</a>
                                <a class="text-secondary mb-2" href="<?= BASE_URL ?>?act=gio-hang"><i
                                        class="fa fa-angle-right mr-2"></i>Mua sắm
                                    Cart</a>
                                <a class="text-secondary mb-2" href="<?= BASE_URL ?>?act=thanh-toan"><i
                                        class="fa fa-angle-right mr-2"></i>Thanh
                                    toán</a>
                                <a class="text-secondary" href="<?= BASE_URL ?>?act=lien-he"><i
                                        class="fa fa-angle-right mr-2"></i>Liên hệ với
                                    chúng tôi</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="text-secondary text-uppercase mb-4">Bản tin</h5>
                            <form action="<?= BASE_URL ?>?act=singin">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your Email Address">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary">Đăng ký</button>
                                    </div>
                                </div>
                            </form>
                            <h6 class="text-secondary text-uppercase mt-4 mb-3">Theo dõi chúng tôi</h6>
                            <div class="d-flex">
                                <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-square mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-square mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
                <div class="col-md-6 px-xl-0">
                    <p class="mb-md-0 text-center text-md-left text-secondary">
                        &copy; <a class="text-primary" href="#">Domain</a>.Mọi quyền được bảo lưu.Thiết kế bởi
                        <a class="text-primary" href="https://htmlcodex.com">DPL Code</a>
                        <br>Phân phối bởi: <a href="https://themewagon.com" target="_blank">DPL</a>
                    </p>
                </div>
                <div class="col-md-6 px-xl-0 text-center text-md-right">
                    <img class="img-fluid" src="img/payments.png" alt="">
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="../../assets/clients/lib/easing/easing.min.js"></script>
        <script src="../../assets/clients/lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="../../assets/clients/mail/jqBootstrapValidation.min.js"></script>
        <script src="../../assets/clients/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="../../assets/clients/js/main.js"></script>
</body>

</html>