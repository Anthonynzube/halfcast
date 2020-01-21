
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HalfCast - Blog</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('images/favicon.png') }}">

    <!-- All CSS is here
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('css/vendor/bootstrap.min.css') }}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset ('css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/vendor/dlicon.css') }}">
    <!-- Others CSS -->
    <link rel="stylesheet" href="{{ asset ('css/plugins/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/easyzoom.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/fullpage.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/plugins/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">

</head>

<body>

    <div class="main-wrapper">
        <!-- Pre Loader -->
        <div class="preloader">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object object_one"></div>
                    <div class="object object_two"></div>
                    <div class="object object_three"></div>
                </div>
            </div>
        </div>
        <header class="header-area transparent-bar section-padding-1">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo logo-width">
                            <a href="index.html">
                                <img src="{{ asset ('images/logo/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 d-flex justify-content-center position-static">
                        <div class="main-menu menu-lh-1 main-menu-padding-1">
                            <nav>
                                <ul>
                                    <li class="position-static"><a class="active" href="{{ route('home') }}">Home</a>
                                        
                                    </li>
                                    <li><a href="{{ route('about') }}">About Us</a>
                                        
                                    </li>
                                    <li><a href="{{ route('shop') }}">Shop <i class="fa fa-angle-down"></i></a>
                                        
                                    </li>
                                    <li><a href="{{ route('contact') }}">Contact </a>
                                        
                                    </li>
                                    <li><a href="{{ route('blog') }}">Blog </i></a>
                                        
                                    </li>
                                    {{-- <li><a href="{{ route('home') }}">Instagram Shop </a></li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="header-right-wrap header-right-flex">
                            <div class="same-style header-wishlist">
                                <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <div class="same-style cart-wrap">
                                <a href="#" class="cart-active">
                                    <i class="dlicon shopping_bag-20"></i>
                                    <span class="count-style">02</span>
                                </a>
                            </div>
                            <div class="same-style header-search">
                                <a class="search-active" href="#">
                                    <i class="dlicon ui-1_zoom"></i>
                                </a>
                            </div>
                            <div class="same-style header-off-canvas">
                                <a class="header-aside-button" href="#">
                                    <i class="dlicon ui-3_menu-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="header-small-mobile section-padding-1">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="mobile-logo logo-width">
                            <a href="index.html">
                                <img alt="" src="{{ asset ('images/logo/logo.png') }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mobile-header-right-wrap">
                            <div class="header-right-wrap header-right-flex">
                                <div class="same-style cart-wrap">
                                    <a href="#" class="cart-active">
                                        <i class="dlicon shopping_bag-20"></i>
                                        <span class="count-style">02</span>
                                    </a>
                                </div>
                                <div class="same-style header-off-canvas">
                                    <a class="header-aside-button" href="#">
                                        <i class="dlicon ui-3_menu-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search start -->
        <div class="search-content-wrap main-search-active">
            <a class="search-close"><i class="dlicon ui-1_simple-remove"></i></a>
            <div class="search-content">
                <p>Start typing and press Enter to search</p>
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search">
                    <button class="button-search"><i class="dlicon ui-1_zoom"></i></button>
                </form>
            </div>
        </div>
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="dlicon ui-1_simple-remove"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{ asset ('images/cart/cart-1.jpg') }}" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Bejewelled velvet sandals</a></h4>
                                <span> 1 × $49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{ asset ('images/cart/cart-2.jpg') }}" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Contrast faux fur jacket</a></h4>
                                <span> 1 × $49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                    </ul>
                    <div class="cart-total">
                        <h4>Subtotal: <span>$170.00</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- aside start -->
        <div class="header-aside-active">
            <div class="header-aside-wrap">
                <a class="aside-close"><i class="dlicon ui-1_simple-remove"></i></a>
                <div class="header-aside-content">
                    <div class="mobile-menu-area">
                        <div class="mobile-search">
                            <form class="search-form" action="#">
                                <input type="text" placeholder="Search entire store…">
                                <button class="button-search"><i class="dlicon ui-1_zoom"></i></button>
                            </form>
                        </div>
                        <div class="mobile-menu-wrap">
                            <!-- mobile menu start -->
                            <div class="mobile-navigation">
                                <!-- mobile menu navigation start -->
                                <nav>
                                    <ul class="mobile-menu">
                                        <li><a href="{{ route('home') }}">Home</a>
                                            
                                        </li>
                                        <li><a href="{{ route('about') }}">About Us</a>
                                            
                                        </li>
                                        <li class="menu-item-has-children "><a href="{{ route('shop') }}">shop</a>
                                            
                                        </li>
                                        <li><a href="{{ route('contact') }}">Contact</a>
                                            
                                        </li>
                                        <li><a href="{{ route('blog') }}">Blog</a>
                                            
                                        </li>
                                        {{-- <li><a href="shop-instagram.html">Instagram Shop </a></li> --}}
                                    </ul>
                                </nav>
                                <!-- mobile menu navigation end -->
                            </div>
                            <!-- mobile menu end -->
                        </div>
                        <div class="mobile-curr-lang-wrap">
                            <div class="single-mobile-curr-lang">
                                <a class="mobile-language-active" href="#">Language <i class="fa fa-angle-down"></i></a>
                                <div class="lang-curr-dropdown lang-dropdown-active">
                                    <ul>
                                        <li><a href="#">English (US)</a></li>
                                        <li><a href="#">English (UK)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-mobile-curr-lang">
                                <a class="mobile-currency-active" href="#">Currency <i class="fa fa-angle-down"></i></a>
                                <div class="lang-curr-dropdown curr-dropdown-active">
                                    <ul>
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">NGN</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-mobile-curr-lang">
                                <a class="mobile-account-active" href="#">My Account <i class="fa fa-angle-down"></i></a>
                                <div class="lang-curr-dropdown account-dropdown-active">
                                    <ul>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Creat Account</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-aside-menu">
                        <nav>
                            <ul>
                                <li><a href="#">About HalfCast</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </nav>
                    </div>
                    <img src="{{ asset ('images/icon-img/payments.png') }}" alt="payment">
                    <p>Pellentesque mollis nec orci id tincidunt. Sed mollis risus eu nisi aliquet, sit amet fermentum justo dapibus.</p>
                    <div class="aside-contact-info">
                        <ul>
                            <li><i class="dlicon ui-2_time-clock"></i>Monday - Friday: 9:00 - 19:00</li>
                            <li><i class="dlicon ui-1_email-84"></i>info@halfcast.com</li>
                            <li><i class="dlicon tech-2_rotate"></i>+234-812-466-7130</li>
                            <li><i class="dlicon ui-1_home-minimal"></i>Trade Fair Complex - Lagos - Nigeria</li>
                        </ul>
                    </div>
                    <div class="social-icon-style mb-25">
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                        {{-- <a class="behance" href="#"><i class="fa fa-behance"></i></a> --}}
                    </div>
                    <div class="copyright">
                        <p>© 2020 <a href="https://hasthemes.com/">HalfCast.</a> All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area section-padding-1 bg-gray breadcrumb-ptb-2">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <div class="breadcrumb-title">
                        <h2>Blog</h2>
                    </div>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li><span> > </span></li>
                        <li class="active"> Blog </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Blog start -->
        <div class="blog-area-2 pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="blog-wrap-3 mb-70">
                            <div class="blog-img-3 mb-20">
                                <a href="blog-details.html"><img src="{{ asset ('images/blog/blog-8.jpg') }}" alt="blog"></a>
                            </div>
                            <div class="blog-content-3">
                                <div class="blog-category">
                                    <a href="#">Technology</a>
                                </div>
                                <h3><a href="blog-details.html">Get Ready Fast For Fall Leaf</a></h3>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#">Posted on December 5, 2018</a></li>
                                        <li>By <a href="#">Joe Doe</a></li>
                                    </ul>
                                </div>
                                <p>Chances are unless you are very lucky you will go thru many different relationships before you find your special someone. Finding your sole mate is like gambling. In poker and
                                </p>
                                <div class="blog-btn-2 blog-btn-2-red">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap-3 mb-70">
                            <div class="blog-img-3 mb-20">
                                <a href="blog-details.html"><img src="{{ asset ('images/blog/blog-9.jpg') }}" alt="blog"></a>
                            </div>
                            <div class="blog-content-3">
                                <div class="blog-category">
                                    <a href="#">Trends</a>
                                </div>
                                <h3><a href="blog-details.html">Toner Cartridge Quality 20</a></h3>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#">Posted on December 5, 2018</a></li>
                                        <li>By <a href="#">Joe Doe</a></li>
                                    </ul>
                                </div>
                                <p>Chances are unless you are very lucky you will go thru many different relationships before you find your special someone. Finding your sole mate is like gambling. In poker and
                                </p>
                                <div class="blog-btn-2 blog-btn-2-red">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap-3 mb-70">
                            <div class="blog-img-3 mb-20">
                                <a href="blog-details.html"><img src="{{ asset ('images/blog/blog-10.jpg') }}" alt="blog"></a>
                                <div class="blog-video">
                                    <a class="video-popup" href="https://player.vimeo.com/video/181061053?autoplay=1&byline=0&collections=0"><i class="dlicon media-1_button-play"></i></a>
                                </div>
                            </div>
                            <div class="blog-content-3">
                                <div class="blog-category">
                                    <a href="#">Technology</a>
                                </div>
                                <h3><a href="blog-details.html">Get For Fall Leaf Viewing Trips</a></h3>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#">Posted on December 5, 2018</a></li>
                                        <li>By <a href="#">Joe Doe</a></li>
                                    </ul>
                                </div>
                                <p>Chances are unless you are very lucky you will go thru many different relationships before you find your special someone. Finding your sole mate is like gambling. In poker and
                                </p>
                                <div class="blog-btn-2 blog-btn-2-red">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap-3 mb-70">
                            <div class="quote-content text-center mb-20">
                                <p><a href="blog-details.html">“Highly customizable. Excellent design. Customer services has exceeded my expectation. They are quick to answer and even when they don’t know the answer right away. They’ll work with you towards a solution”</a></p>
                                <span>Michael Franklin</span>
                            </div>
                            <div class="blog-content-3">
                                <div class="blog-category">
                                    <a href="#">Technology</a>
                                </div>
                                <h3><a href="blog-details.html">Get Ready Fast For Fall Leaf</a></h3>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#">Posted on December 5, 2018</a></li>
                                        <li>By <a href="#">Joe Doe</a></li>
                                    </ul>
                                </div>
                                <p>Chances are unless you are very lucky you will go thru many different relationships before you find your special someone. Finding your sole mate is like gambling. In poker and
                                </p>
                                <div class="blog-btn-2 blog-btn-2-red">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap-3 mb-70">
                            <div class="blog-img-3 mb-20">
                                <a href="blog-details.html"><img src="{{ asset ('images/blog/blog-11.jpg') }}" alt="blog"></a>
                                <div class="blog-video">
                                    <a class="video-popup" href="https://player.vimeo.com/video/181061053?autoplay=1&byline=0&collections=0"><i class="dlicon media-1_button-play"></i></a>
                                </div>
                            </div>
                            <div class="blog-content-3">
                                <div class="blog-category">
                                    <a href="#">Technology</a>
                                </div>
                                <h3><a href="blog-details.html">Fast For Fall Leaf Viewing Trips</a></h3>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#">Posted on December 5, 2018</a></li>
                                        <li>By <a href="#">Joe Doe</a></li>
                                    </ul>
                                </div>
                                <p>Chances are unless you are very lucky you will go thru many different relationships before you find your special someone. Finding your sole mate is like gambling. In poker and
                                </p>
                                <div class="blog-btn-2 blog-btn-2-red">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap-3 mb-70">
                            <div class="blog-img-3 mb-20">
                                <a href="blog-details.html"><img src="{{ asset ('images/blog/blog-12.jpg') }}" alt="blog"></a>
                                <div class="blog-music-icon">
                                    <a href="blog-details.html"><i class="fa fa-music"></i></a>
                                </div>
                            </div>
                            <div class="blog-content-3">
                                <div class="blog-category">
                                    <a href="#">Life Style,</a><a href="#">Technology</a>
                                </div>
                                <h3><a href="blog-details.html">Get Ready Fast Viewing Trips</a></h3>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#">Posted on December 5, 2018</a></li>
                                        <li>By <a href="#">Joe Doe</a></li>
                                    </ul>
                                </div>
                                <p>Chances are unless you are very lucky you will go thru many different relationships before you find your special someone. Finding your sole mate is like gambling. In poker and
                                </p>
                                <div class="blog-btn-2 blog-btn-2-red">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-search">
                            <form class="search-form" action="#">
                                <input type="text" placeholder="Search here…">
                                <button class="button-search"><i class="dlicon ui-1_zoom"></i></button>
                            </form>
                        </div>
                        <div class="sidebar-widget mt-60 mb-55">
                            <h4 class="pro-sidebar-title2">Categories </h4>
                            <div class="sidebar-widget-list mt-40">
                                <ul>
                                    <li><a href="#">Cafe</a> <span>(3)</span></li>
                                    <li><a href="#">Finance</a> <span>(2)</span></li>
                                    <li><a href="#">Life Style</a> <span>(6)</span></li>
                                    <li><a href="#">Photography</a> <span>(2)</span></li>
                                    <li><a href="#">Story love</a> <span>(2)</span></li>
                                    <li><a href="#">Technology</a> <span>(16)</span></li>
                                    <li><a href="#">Trends</a> <span>(1)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-60">
                            <h4 class="pro-sidebar-title2">Popular Post </h4>
                            <div class="sidebar-post-wrap mt-45">
                                <div class="single-sidebar-post">
                                    <div class="sidebar-post-img">
                                        <a href="blog-details.html"><img src="{{ asset ('images/blog/blog-sidebar-1.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="sidebar-post-content">
                                        <h4><a href="blog-details.html">Get Ready Fast For Fall Leaf</a></h4>
                                        <span>December 18, 2018</span>
                                    </div>
                                </div>
                                <div class="single-sidebar-post">
                                    <div class="sidebar-post-img">
                                        <a href="blog-details.html"><img src="{{ asset ('images/blog/blog-sidebar-2.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="sidebar-post-content">
                                        <h4><a href="blog-details.html">Toner Cartridge Quality 20</a></h4>
                                        <span>December 18, 2018</span>
                                    </div>
                                </div>
                                <div class="single-sidebar-post">
                                    <div class="sidebar-post-img">
                                        <a href="blog-details.html"><img src="{{ asset ('images/blog/blog-sidebar-3.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="sidebar-post-content">
                                        <h4><a href="blog-details.html">Get For Fall Leaf Viewing Trips</a></h4>
                                        <span>December 18, 2018</span>
                                    </div>
                                </div>
                                <div class="single-sidebar-post">
                                    <div class="sidebar-post-img">
                                        <a href="blog-details.html"><img src="{{ asset ('images/blog/blog-sidebar-4.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="sidebar-post-content">
                                        <h4><a href="blog-details.html">Get Ready Fast For Fall Leaf</a></h4>
                                        <span>December 18, 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-60">
                            <h4 class="pro-sidebar-title2">Archives </h4>
                            <div class="archives-wrap mt-40">
                                <select>
                                    <option>Select Month</option>
                                    <option> January 2020 </option>
                                    <option> December 2018 </option>
                                    <option> November 2018 </option>
                                </select>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-50">
                            <h4 class="pro-sidebar-title2">Tags</h4>
                            <div class="sidebar-widget-tag mt-35">
                                <ul>
                                    <li><a href="#">Beauty,</a></li>
                                    <li><a href="#">Computer,</a></li>
                                    <li><a href="#">Design,</a></li>
                                    <li><a href="#">Fashion,</a></li>
                                    <li><a href="#">Furniture,</a></li>
                                    <li><a href="#">Life Style,</a></li>
                                    <li><a href="#">Motion Design,</a></li>
                                    <li><a href="#">Photography,</a></li>
                                    <li><a href="#">Technology,</a></li>
                                    <li><a href="#">Travel.</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <div class="banner-sidebar-banner">
                                <a href="#"><img alt="" src="{{ asset ('images/blog/banner-blog.jpg') }}"></a>
                                <div class="banner-sidebar-content">
                                    <h3>Ad Banner </h3>
                                    <h5>info@halfcast.com</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-pagination-style pagination-mrg">
                    <ul>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><span>…</span></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="dlicon arrows-1_tail-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Blog end -->
        @include('pagesLayouts.pagesFooter')
