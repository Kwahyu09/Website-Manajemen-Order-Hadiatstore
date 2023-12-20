<!DOCTYPE html>
<html>

<head>
    <title>Hadiat.store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="Krisna Wahyudi">
    <meta name="keywords" content="">
    <meta name="description" content="Website Toko Hadiat Stroe">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link rel="stylesheet" type="text/css" href="/cssgw.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- script
    ================================================== -->
    <script src="/js/modernizr.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"
    tabindex="0">
    <header id="header" class="site-header header-scrolled position-fixed text-black bg-light">
        @include('partial.navbar')
    </header>
    <!-- Reservation -->
    <section id="home" class="">
        <div class="container mt-6">
            <div class="content px-md-5 mt-6">
                <div class="row">
                    <div class="col-12 col-lg-6 content-body mt-5">
                        <img src="/buket/logoo.png" alt="" class="w-100 rounded mt-6">
                    </div>
                    <div class="col-12 col-lg-6 align-self-center reserv-body mr-3 mt-5">
                        <h1>Buket Balon Bunga Bengkulu</h1>
                        <h4><i>@Hadiat.store</i></h4>
                        <p>Toko Buket Bunga yang ada diBengkulu bertepatan di Jalan Nangka 1 dan di Gang Setia III Unib
                            Belakang. Bisa Request Warna Balon dan Free Greeting Card</p>
                        <a class="btn" style="padding: 10px; background-color: rgb(218, 134, 168); color: white;"
                            href="/login" role="button">Order Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cara-order" class="padding-small mt-5">
        <div class="container">
            <div class="row">
                <div class="section-divider mb-2">
                    <span class="decoration-icon">&#9733;</span>
                    <hr>
                    <span class="decoration-icon">&#9733;</span>
                </div>
                <h1 class="text-center mb-2">Cara Order</h1>
                <div class="section-divider mb-3">
                    <span class="decoration-icon">&#9733;</span>
                    <hr>
                    <span class="decoration-icon">&#9733;</span>
                </div>
                <div class="col-lg-3 col-md-6 pb-3 mt-2">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-1">
                            <h1>1</h1>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-dark">Login / Hubungi Admin</h3>
                            <p>ada 2 cara untuk order yaitu:</p>
                            <ol>
                                <li>
                                    <p>order didalam sistem ini, Buat Akun/ login untuk yang sudah punya akun</p>
                                </li>
                                <li>
                                    <p>hubungi WhatsApp admin</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3 mt-2">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-1">
                            <h1>2</h1>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-dark">Tentukan Model, Warna dan Tangkai Buket</h3>
                            <p>
                                <ul>
                                    <li>
                                        <p>Tentukan Model Buket yang seperti apa(Biasa/Mix) bisa dilihat diintagram
                                            lebih jelasnya</p>
                                    </li>
                                    <li>
                                        <p>Tentukan Warna Kelopak dan Tangkai</p>
                                    </li>
                                    <li>
                                        <p>Tentukan Jumlah Tangkai(Minimal Order 5 Tangkai)</p>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3 mt-2">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-1">
                            <h1>3</h1>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-dark">Isi Format Order</h3>
                            <p>Isi Format Order yang diberikan admin atau yang sudah ada didalam sistem ini</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3 mt-2">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-1">
                            <h1>4</h1>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-dark">Perhatikan</h3>
                            <p>hari, tanggal dan jam yang diinputkan sesuai. jika terjadi perubahan segera hubungi
                                admin. minimal order h-1 sebelum pengambilan</p>
                        </div>
                    </div>
                </div>
                <div class="review-content position-relative mt-5">
                    <div class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center">
                    </div>
                    <div class="swiper testimonial-swiper">
                        <div class="quotation text-center">
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center d-flex justify-content-center">
                                <div class="review-item col-md-10">
                                    <i class="icon icon-review"></i>
                                    <blockquote>“Minimal Order 5 Tangkai, Harga Pertangkai Kelopak Biasa 4K Dan Pertangkai Kelopak Mix 5K ”</blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Reservation -->
    <div id="produk1" class="padding-small mr-3">
        <section class="product-store position-relative padding-large no-padding-top">
            <div class="container">
                <div class="row">
                    <div class="section-divider mb-2">
                        <span class="decoration-icon">&#9733;</span>
                        <hr>
                        <span class="decoration-icon">&#9733;</span>
                    </div>
                    <div class="display-header d-flex justify-content-center pb-3">
                        <h2 class="display-7 text-dark text-uppercase text-center">Produk Buket 1</h2>
                        <div class="btn-right">
                        </div>
                    </div>
                    <div class="section-divider mb-4">
                        <span class="decoration-icon">&#9733;</span>
                        <hr>
                        <span class="decoration-icon">&#9733;</span>
                    </div>
                    <div class="swiper product-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product-card position-relative">
                                    <div class="image-holder">
                                        <img src="/images/product-item1.jpg" alt="product-item" class="img-fluid">
                                    </div>
                                    <div class="cart-concern position-absolute">
                                        <div class="cart-button d-flex">
                                            <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                    class="cart-outline">
                                                    <use xlink:href="#cart-outline"></use>
                                                </svg></a>
                                        </div>
                                    </div>
                                    <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                        <h3 class="card-title text-uppercase">
                                            <a href="#">Iphone 10</a>
                                        </h3>
                                        <span class="item-price text-primary">$980</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card position-relative">
                                    <div class="image-holder">
                                        <img src="/images/product-item2.jpg" alt="product-item" class="img-fluid">
                                    </div>
                                    <div class="cart-concern position-absolute">
                                        <div class="cart-button d-flex">
                                            <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                    class="cart-outline">
                                                    <use xlink:href="#cart-outline"></use>
                                                </svg></a>
                                        </div>
                                    </div>
                                    <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                        <h3 class="card-title text-uppercase">
                                            <a href="#">Iphone 11</a>
                                        </h3>
                                        <span class="item-price text-primary">$1100</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card position-relative">
                                    <div class="image-holder">
                                        <img src="/images/product-item3.jpg" alt="product-item" class="img-fluid">
                                    </div>
                                    <div class="cart-concern position-absolute">
                                        <div class="cart-button d-flex">
                                            <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                    class="cart-outline">
                                                    <use xlink:href="#cart-outline"></use>
                                                </svg></a>
                                        </div>
                                    </div>
                                    <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                        <h3 class="card-title text-uppercase">
                                            <a href="#">Iphone 8</a>
                                        </h3>
                                        <span class="item-price text-primary">$780</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card position-relative">
                                    <div class="image-holder">
                                        <img src="/images/product-item4.jpg" alt="product-item" class="img-fluid">
                                    </div>
                                    <div class="cart-concern position-absolute">
                                        <div class="cart-button d-flex">
                                            <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                    class="cart-outline">
                                                    <use xlink:href="#cart-outline"></use>
                                                </svg></a>
                                        </div>
                                    </div>
                                    <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                        <h3 class="card-title text-uppercase">
                                            <a href="#">Iphone 13</a>
                                        </h3>
                                        <span class="item-price text-primary">$1500</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card position-relative">
                                    <div class="image-holder">
                                        <img src="/images/product-item5.jpg" alt="product-item" class="img-fluid">
                                    </div>
                                    <div class="cart-concern position-absolute">
                                        <div class="cart-button d-flex">
                                            <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                    class="cart-outline">
                                                    <use xlink:href="#cart-outline"></use>
                                                </svg></a>
                                        </div>
                                    </div>
                                    <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                        <h3 class="card-title text-uppercase">
                                            <a href="#">Iphone 12</a>
                                        </h3>
                                        <span class="item-price text-primary">$1300</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination position-absolute text-center"></div>
        </section>
    </div>
    <section id="produk2" class="product-store padding-small position-relative">
        <div class="container">
            <div class="row">
                <div class="section-divider mb-2">
                    <span class="decoration-icon">&#9733;</span>
                    <hr>
                    <span class="decoration-icon">&#9733;</span>
                </div>
                <div class="display-header d-flex justify-content-center pb-3">
                    <h2 class="display-7 text-dark text-uppercase text-center">Produk Buket 2</h2>
                    <div class="btn-right">
                    </div>
                </div>
                <div class="section-divider mb-4">
                    <span class="decoration-icon">&#9733;</span>
                    <hr>
                    <span class="decoration-icon">&#9733;</span>
                </div>
                <div class="swiper product-watch-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="/images/product-item6.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                class="cart-outline">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Pink watch</a>
                                    </h3>
                                    <span class="item-price text-primary">$870</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="/images/product-item7.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                class="cart-outline">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Heavy watch</a>
                                    </h3>
                                    <span class="item-price text-primary">$680</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="/images/product-item8.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                class="cart-outline">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">spotted watch</a>
                                    </h3>
                                    <span class="item-price text-primary">$750</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="/images/product-item9.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                class="cart-outline">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">black watch</a>
                                    </h3>
                                    <span class="item-price text-primary">$650</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="/images/product-item10.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                class="cart-outline">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">black watch</a>
                                    </h3>
                                    <span class="item-price text-primary">$750</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination position-absolute text-center"></div>
    </section>
    <section id="warna" class="position-relative">
        <div class="container">
            <div class="row">
                <div class="section-divider">
                    <span class="decoration-icon">&#9733;</span>
                    <hr>
                    <span class="decoration-icon">&#9733;</span>
                </div>
                <div class="review-content position-relative">
                    <div class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center">
                    </div>
                    <div class="swiper testimonial-swiper">
                        <div class="quotation text-center">
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center d-flex justify-content-center">
                                <div class="review-item col-md-10">
                                    <i class="icon icon-review"></i>
                                    <blockquote>“Barang siapa yang tidak mensyukuri yang sedikit, maka ia tidak akan
                                        mampu mensyukuri sesuatu yang banyak,”</blockquote>
                                    <div class="rating">
                                    </div>
                                    <div class="author-detail">
                                        <div class="name text-dark text-uppercase pt-2">(HR. Ahmad)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center">
                        <svg class="chevron-right">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <section id="instagram" class="padding-large overflow-hidden no-padding-top mt-5">
        <div class="container">
            <div class="row">
                <div class="section-divider">
                    <span class="decoration-icon">&#9733;</span>
                    <hr>
                    <span class="decoration-icon">&#9733;</span>
                </div>
                <div class="display-header text-uppercase text-dark text-center pb-3">
                    <h2 class="display-7">Warna Ready</h2>
                </div>
                <div class="section-divider mb-4">
                    <span class="decoration-icon">&#9733;</span>
                    <hr>
                    <span class="decoration-icon">&#9733;</span>
                </div>
                <div class="d-flex flex-wrap">
                    <figure class="instagram-item pe-2">
                        <a href="#warna" class="image-link position-relative">
                            <img src="/warna/pink.jpeg" alt="instagram" class="insta-image">
                            <h4 class="text-center mt-2 mb-5">Pink</h4>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="#warna" class="image-link position-relative">
                            <img src="/warna/silver.jpeg" alt="instagram" class="insta-image">
                            <h4 class="text-center mt-2 mb-5">Silver</h4>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="#warna" class="image-link position-relative">
                            <img src="/warna/ungu.jpeg" alt="instagram" class="insta-image">
                            <h4 class="text-center mt-2 mb-5">Ungu</h4>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="#warna" class="image-link position-relative">
                            <img src="warna/gold.jpeg" alt="instagram" class="insta-image">
                            <h4 class="text-center mt-2 mb-5">Gold</h4>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="#warna" class="image-link position-relative">
                            <img src="warna/rosegold.jpeg" alt="instagram" class="insta-image">
                            <h4 class="text-center mt-2 mb-5">Rosegold</h4>
                        </a>
                    </figure>
                </div>
                <div class="d-flex flex-wrap mt-5">
                    <figure class="instagram-item pe-2">
                        <a href="#warna" class="image-link position-relative">
                            <img src="/warna/pink.jpeg" alt="instagram" class="insta-image">
                            <h4 class="text-center mt-2 mb-5">Pink</h4>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="#warna" class="image-link position-relative">
                            <img src="/warna/silver.jpeg" alt="instagram" class="insta-image">
                            <h4 class="text-center mt-2 mb-5">Silver</h4>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="#warna" class="image-link position-relative">
                            <img src="/warna/ungu.jpeg" alt="instagram" class="insta-image">
                            <h4 class="text-center mt-2 mb-5">Ungu</h4>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="#warna" class="image-link position-relative">
                            <img src="warna/gold.jpeg" alt="instagram" class="insta-image">
                            <h4 class="text-center mt-2 mb-5">Gold</h4>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="#warna" class="image-link position-relative">
                            <img src="warna/rosegold.jpeg" alt="instagram" class="insta-image">
                            <h4 class="text-center mt-2 mb-5">Rosegold</h4>
                        </a>
                    </figure>
                </div>
                <div class="section-divider mb-2 mt-5">
                    <span class="decoration-icon">&#9733;</span>
                    <hr>
                    <span class="decoration-icon">&#9733;</span>
                </div>
                <div class="section-divider mb-4">
                    <span class="decoration-icon">&#9733;</span>
                    <hr>
                    <span class="decoration-icon">&#9733;</span>
                </div>
            </div>
        </div>
    </section>
    @include('partial.footer')
    <script src="/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/js/plugins.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
</body>

</html>
