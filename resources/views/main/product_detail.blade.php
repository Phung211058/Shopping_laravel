<!DOCTYPE html>
<html>

<head>
    <title>Ministore</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main/index.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet">
    <!-- script
    ======================================================================= -->
    <!-- <script src="js/modernizr.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"
    tabindex="0">


    <div class="search-popup">
        <div class="search-popup-container">

            <form role="search" method="get" class="search-form" action="">
                <input type="search" id="search-form" class="search-field" placeholder="Type and press enter"
                    value="" name="s" />
                <button type="submit" class="search-submit"></button>
            </form>

            <h5 class="cat-list-title">Browse Categories</h5>

            <ul class="cat-list">
                <li class="cat-list-item">
                    <a href="#" title="Mobile Phones">Mobile Phones</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Smart Watches">Smart Watches</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Headphones">Headphones</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Accessories">Accessories</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Monitors">Monitors</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Speakers">Speakers</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Memory Cards">Memory Cards</a>
                </li>
            </ul>

        </div>
    </div>

    <header id="header" class="site-header header-scrolled position-fixed text-black bg-light">
        <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('images/main/main-logo.png') }}" class="logo">
                </a>
                <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar"
                    aria-labelledby="bdNavbarOffcanvasLabel">
                    <div class="offcanvas-header px-4 pb-0">
                        <a class="navbar-brand" href="index.html">
                            <img src="images/main-logo.png" class="logo">
                        </a>
                        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                            aria-label="Close" data-bs-target="#bdNavbar"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul id="navbar"
                            class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link me-4 active" href="#billboard">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#company-services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#mobile-products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#smart-watches">Watches</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#yearly-sale">Sale</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#latest-blog">Blog</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link me-4 dropdown-toggle link-dark" data-bs-toggle="dropdown"
                                    href="#" role="button" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="about.html" class="dropdown-item">About</a>
                                    </li>
                                    <li>
                                        <a href="blog.html" class="dropdown-item">Blog</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="dropdown-item">Shop</a>
                                    </li>
                                    <li>
                                        <a href="cart.html" class="dropdown-item">Cart</a>
                                    </li>
                                    <li>
                                        <a href="checkout.html" class="dropdown-item">Checkout</a>
                                    </li>
                                    <li>
                                        <a href="single-post.html" class="dropdown-item">Single Post</a>
                                    </li>
                                    <li>
                                        <a href="single-product.html" class="dropdown-item">Single Product</a>
                                    </li>
                                    <li>
                                        <a href="contact.html" class="dropdown-item">Contact</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <div class="user-items ps-5">
                                    <ul class="d-flex justify-content-end list-unstyled">
                                        <li class="search-item pe-3">
                                            <a href="#" class="search-button">
                                                <div class="search">
                                                    <i class="bi bi-search"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="pe-3">
                                            <a href="#">
                                                <div class="user">
                                                    <i class="bi bi-file-person-fill"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <div class="cart">
                                                    <i class="bi bi-cart-fill"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section id="billboard" class="position-relative overflow-hidden bg-light-blue">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row mt-5 d-flex justify-content-between ">
                            <div class="col-md-5">
                                <div class="image-holder">
                                    <img src="/images/{{ $product->image }}" alt="banner" class="w-100">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-content d-flex flex-column mt-5">
                                    <p class="fs-1 text-uppercase text-dark mb-0">{{ $product->name }}</p>
                                    <del
                                        class="fs-6 text-secondary fw-bold mt-0">{{ $product->formatted_price }}₫</del>
                                    <p class="fs-4 text-danger fw-bold mt-0 mb-0">{{ $product->formatted_sale_price }}₫
                                    </p>
                                    <p class="fs-6 text-secondary-emphasis">{{ $product->description }}</p>
                                    <div>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-half text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                    <div>
                                        <input type="button" value="-" class="minus">
                                        <input type="number" step="1" min="1" name="quantity"
                                            value="1" class="input-text qty text ">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                    <a href=""class="btn btn-black col-4 d-flex justify-content-evenly">
                                        <span>ADD TO CART</span>
                                        <i class="bi bi-bag-plus-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="company-services" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-dark">Free delivery</h3>
                            <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-dark">Quality guarantee</h3>
                            <p>Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-dark">Daily offers</h3>
                            <p>Amet consectetur adipi elit loreme ipsum dolor sit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-dark">100% secure payment</h3>
                            <p>Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mobile-products" class="product-store position-relative padding-large no-padding-top">
        <div class="container">
            <div class="row">
                <div class="display-header d-flex justify-content-between pb-3">
                    <h2 class="display-7 text-dark text-uppercase">Mobile Products</h2>
                    <div class="btn-right">
                        <a href="shop.html" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
                    </div>
                </div>
                <div class="swiper product-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($products as $product)
                            <div class="swiper-slide">
                                <div class="product-card position-relative">
                                    <div class="image-holder">
                                        <img src="/images/{{ $product->image }}" alt="product-item"
                                            class="img-fluid">
                                    </div>
                                    <div class="cart-concern position-absolute">
                                        <div class="cart-button d-flex">
                                            <a href="/details/{{ $product->id }}"
                                                class="btn btn-medium btn-black">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="card-detail justify-content-between align-items-baseline pt-3">
                                        <h3 class="card-title text-uppercase">
                                            <a href="/details/{{ $product->id }}">{{ $product->name }}</a>
                                        </h3>
                                        <span
                                            class="item-price text-primary">{{ $product->formatted_sale_price }}</span><span
                                            class="text-warning">₫</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination position-absolute text-center"></div>
    </section>
    <section id="smart-watches" class="product-store padding-large position-relative">
        <div class="container">
            <div class="row">
                <div class="display-header d-flex justify-content-between pb-3">
                    <h2 class="display-7 text-dark text-uppercase">Smart Watches</h2>
                    <div class="btn-right">
                        <a href="shop.html" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
                    </div>
                </div>
                <div class="swiper product-watch-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="images/product-item6.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
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
                                    <img src="images/product-item7.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
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
                                    <img src="images/product-item8.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
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
                                    <img src="images/product-item9.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
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
                                    <img src="images/product-item10.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
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
    <section id="yearly-sale" class="bg-light-blue overflow-hidden mt-5 padding-xlarge"
        style="background-image: url('images/single-image1.png');background-position: right; background-repeat: no-repeat;">
        <div class="row d-flex flex-wrap align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="text-content offset-4 padding-medium">
                    <h3>10% off</h3>
                    <h2 class="display-2 pb-5 text-uppercase text-dark">New year sale</h2>
                    <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Sale</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">

            </div>
        </div>
    </section>
    <section id="latest-blog" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="display-header d-flex justify-content-between pb-3">
                    <h2 class="display-7 text-dark text-uppercase">Latest Posts</h2>
                    <div class="btn-right">
                        <a href="blog.html" class="btn btn-medium btn-normal text-uppercase">Read Blog</a>
                    </div>
                </div>
                <div class="post-grid d-flex flex-wrap justify-content-between">
                    <div class="col-lg-4 col-sm-12">
                        <div class="card border-none me-3">
                            <div class="card-image">
                                <img src="images/post-item1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-body text-uppercase">
                            <div class="card-meta text-muted">
                                <span class="meta-date">feb 22, 2023</span>
                                <span class="meta-category">- Gadgets</span>
                            </div>
                            <h3 class="card-title">
                                <a href="#">Get some cool gadgets in 2023</a>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card border-none me-3">
                            <div class="card-image">
                                <img src="images/post-item2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-body text-uppercase">
                            <div class="card-meta text-muted">
                                <span class="meta-date">feb 25, 2023</span>
                                <span class="meta-category">- Technology</span>
                            </div>
                            <h3 class="card-title">
                                <a href="#">Technology Hack You Won't Get</a>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card border-none me-3">
                            <div class="card-image">
                                <img src="images/post-item3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-body text-uppercase">
                            <div class="card-meta text-muted">
                                <span class="meta-date">feb 22, 2023</span>
                                <span class="meta-category">- Camera</span>
                            </div>
                            <h3 class="card-title">
                                <a href="#">Top 10 Small Camera In The World</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="position-relative">
        <div class="container">
            <div class="row">
                <div class="review-content position-relative">
                    <div
                        class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center">
                    </div>
                    <div class="swiper testimonial-swiper">
                        <div class="quotation text-center">
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center d-flex justify-content-center">
                                <div class="review-item col-md-10">
                                    <i class="icon icon-review"></i>
                                    <blockquote>“Tempus oncu enim pellen tesque este pretium in neque, elit morbi
                                        sagittis lorem habi mattis Pellen tesque pretium feugiat vel morbi suspen dise
                                        sagittis lorem habi tasse morbi.”</blockquote>
                                    <div class="rating">
                                    </div>
                                    <div class="author-detail">
                                        <div class="name text-dark text-uppercase pt-2">Emma Chamberlin</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center d-flex justify-content-center">
                                <div class="review-item col-md-10">
                                    <i class="icon icon-review"></i>
                                    <blockquote>“A blog is a digital publication that can complement a website or exist
                                        independently. A blog may include articles, short posts, listicles,
                                        infographics, videos, and other digital content.”</blockquote>
                                    <div class="rating">
                                    </div>
                                    <div class="author-detail">
                                        <div class="name text-dark text-uppercase pt-2">Jennie Rose</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <section id="subscribe" class="container-grid padding-large position-relative overflow-hidden">
        <div class="container">
            <div class="row">
                <div
                    class="subscribe-content bg-dark d-flex flex-wrap justify-content-center align-items-center padding-medium">
                    <div class="col-md-6 col-sm-12">
                        <div class="display-header pe-3">
                            <h2 class="display-7 text-uppercase text-light">Subscribe Us Now</h2>
                            <p>Get latest news, updates and deals directly mailed to your inbox.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <form class="subscription-form validate">
                            <div class="input-group flex-wrap">
                                <input class="form-control btn-rounded-none" type="email" name="EMAIL"
                                    placeholder="Your email address here" required="">
                                <button class="btn btn-medium btn-primary text-uppercase btn-rounded-none"
                                    type="submit" name="subscribe">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="instagram" class="padding-large overflow-hidden no-padding-top">
        <div class="container">
            <div class="row">
                <div class="display-header text-uppercase text-dark text-center pb-3">
                    <h2 class="display-7">Shop Our Insta</h2>
                </div>
                <div class="d-flex flex-wrap">
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="images/insta-item1.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                            </div>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="images/insta-item2.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                            </div>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="images/insta-item3.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                            </div>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="images/insta-item4.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                            </div>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="images/insta-item5.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                            </div>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="footer-top-area">
                    <div class="row d-flex flex-wrap justify-content-between">
                        <div class="col-lg-3 col-sm-6 pb-3">
                            <div class="footer-menu">
                                <img src="images/main-logo.png" alt="logo">
                                <p>Nisi, purus vitae, ultrices nunc. Sit ac sit suscipit hendrerit. Gravida massa
                                    volutpat aenean odio erat nullam fringilla.</p>
                                <div class="social-links">
                                    <ul class="d-flex list-unstyled">
                                        <li>
                                            <a href="#">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 pb-3">
                            <div class="footer-menu text-uppercase">
                                <h5 class="widget-title pb-2">Quick Links</h5>
                                <ul class="menu-list list-unstyled text-uppercase">
                                    <li class="menu-item pb-2">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">About</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Shop</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Blogs</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 pb-3">
                            <div class="footer-menu text-uppercase">
                                <h5 class="widget-title pb-2">Help & Info Help</h5>
                                <ul class="menu-list list-unstyled">
                                    <li class="menu-item pb-2">
                                        <a href="#">Track Your Order</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Returns Policies</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Shipping + Delivery</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Faqs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 pb-3">
                            <div class="footer-menu contact-item">
                                <h5 class="widget-title text-uppercase pb-2">Contact Us</h5>
                                <p>Do you have any queries or suggestions? <a href="mailto:">yourinfo@gmail.com</a>
                                </p>
                                <p>If you need support? Just give us a call. <a href="">+55 111 222 333 44</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </footer>
    <div id="footer-bottom">
        <div class="container">
            <div class="row d-flex flex-wrap justify-content-between">
                <div class="col-md-4 col-sm-6">
                    <div class="Shipping d-flex">
                        <p>We ship with:</p>
                        <div class="card-wrap ps-2">
                            <img src="images/dhl.png" alt="visa">
                            <img src="images/shippingcard.png" alt="mastercard">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="payment-method d-flex">
                        <p>Payment options:</p>
                        <div class="card-wrap ps-2">
                            <img src="images/visa.jpg" alt="visa">
                            <img src="images/mastercard.jpg" alt="mastercard">
                            <img src="images/paypal.jpg" alt="paypal">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="copyright">
                        <p>© Copyright 2023 MiniStore. Design by <a
                                href="https://templatesjungle.com/">TemplatesJungle</a> Distribution by <a
                                href="https://themewagon.com">ThemeWagon</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <scriptsrc="js/jquery-1.11.0.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    {{-- <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="{{ asset('js/main/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main/product.js') }}"></script>
</body>

</html>
