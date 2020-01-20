
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
                                        <li class="menu-item-has-children"><a href="index.html">Home</a>
                                            <ul class="dropdown">
                                                <li class="menu-item-has-children"><a href="#">Demo Group 01</a>
                                                    <ul class="dropdown">
                                                        <li><a href="index.html">Home 01</a></li>
                                                        <li><a href="index-2.html">Home 02</a></li>
                                                        <li><a href="index-3.html">Home 03</a></li>
                                                        <li><a href="index-4.html">Home 04</a></li>
                                                        <li><a href="index-5.html">Home 05</a></li>
                                                        <li><a href="index-6.html">Home 06</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Demo Group 02</a>
                                                    <ul class="dropdown">
                                                        <li><a href="index-7.html">Home 07</a></li>
                                                        <li><a href="index-8.html">Home 08</a></li>
                                                        <li><a href="index-9.html">Home 09</a></li>
                                                        <li><a href="index-10.html">Home 10</a></li>
                                                        <li><a href="index-11.html">Home 11</a></li>
                                                        <li><a href="index-12.html">Home 12</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Demo Group 03</a>
                                                    <ul class="dropdown">
                                                        <li><a href="index-13.html">Home 13</a></li>
                                                        <li><a href="index-14.html">Home 14</a></li>
                                                        <li><a href="index-15.html">Home 15</a></li>
                                                        <li><a href="index-16.html">Home 16</a></li>
                                                        <li><a href="index-17.html">Home 17</a></li>
                                                        <li><a href="index-18.html">Home 18</a></li>
                                                        <li><a href="index-19.html">Home 19</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Pages</a>
                                            <ul class="dropdown">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="contact-us.html">Contact Page</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="comming-soon.html">Comming Soon 01</a></li>
                                                <li><a href="comming-soon-2.html">Comming Soon 02</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children "><a href="shop-fullwide.html">shop</a>
                                            <ul class="dropdown">
                                                <li class="menu-item-has-children"><a href="#">Shop Layout</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-fullwide.html">Shop Fullwidth</a></li>
                                                        <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                        <li><a href="shop-metro.html">Shop Metro Layout</a></li>
                                                        <li><a href="shop-3-col.html">Shop 03 Columns</a></li>
                                                        <li><a href="shop-2-col.html">Shop 02 Columns</a></li>
                                                        <li><a href="shop-collection-1.html">Shop Collection 01</a></li>
                                                        <li><a href="shop-collection-2.html">Shop Collection 02</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Product Layout</a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-details.html">Single 01</a></li>
                                                        <li><a href="product-details-2.html">Single 02</a></li>
                                                        <li><a href="product-details-group.html">Grouped</a></li>
                                                        <li><a href="product-details-sticky.html">Sticky Info</a></li>
                                                        <li><a href="product-details-configurable.html">Configurable</a></li>
                                                        <li><a href="product-details-thumbnail.html">Thumbnail</a></li>
                                                        <li><a href="product-details-video.html">Video</a></li>
                                                        <li><a href="product-details-affiliate.html">Affiliate</a></li>
                                                        <li><a href="product-details-sidebar.html">Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Shop Pages </a>
                                                    <ul class="dropdown">
                                                        <li><a href="my-account.html">My Account</a></li>
                                                        <li><a href="checkout.html">Check Out</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="order-tracking.html">Order Tracking</a></li>
                                                        <li><a href="compare.html">Compare</a></li>
                                                        <li><a href="login-register.html">login / register</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children "><a href="shop-collection-1.html">Collection</a>
                                            <ul class="dropdown">
                                                <li><a href="shop-collection-1.html">Shop Collection 01</a></li>
                                                <li><a href="shop-collection-2.html">Shop Collection 02</a></li>
                                                <li><a href="shop-metro.html">Shop Metro Layout</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children "><a href="blog.html">Blog</a>
                                            <ul class="dropdown">
                                                <li><a href="blog.html">Blog Style 01</a></li>
                                                <li><a href="blog-2.html">Blog Style 02</a></li>
                                                <li><a href="blog-3.html">Blog Style 03</a></li>
                                                <li><a href="blog-details.html">Single Post Style 01</a></li>
                                                <li><a href="blog-details-2.html">Single Post Style 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-instagram.html">Instagram Shop </a></li>
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
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-mobile-curr-lang">
                                <a class="mobile-currency-active" href="#">Currency <i class="fa fa-angle-down"></i></a>
                                <div class="lang-curr-dropdown curr-dropdown-active">
                                    <ul>
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">Real</a></li>
                                        <li><a href="#">BDT</a></li>
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
                                <li><a href="#">About Toro</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Collection</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">New Look</a></li>
                            </ul>
                        </nav>
                    </div>
                    <img src="{{ asset ('images/icon-img/payments.png') }}" alt="payment">
                    <p>Pellentesque mollis nec orci id tincidunt. Sed mollis risus eu nisi aliquet, sit amet fermentum justo dapibus.</p>
                    <div class="aside-contact-info">
                        <ul>
                            <li><i class="dlicon ui-2_time-clock"></i>Monday - Friday: 9:00 - 19:00</li>
                            <li><i class="dlicon ui-1_email-84"></i>Info@la-studioweb.com</li>
                            <li><i class="dlicon tech-2_rotate"></i>(+55) 254. 254. 254</li>
                            <li><i class="dlicon ui-1_home-minimal"></i>Helios Tower 75 Tam Trinh Hoang - Ha Noi - Viet Nam</li>
                        </ul>
                    </div>
                    <div class="social-icon-style mb-25">
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="behance" href="#"><i class="fa fa-behance"></i></a>
                    </div>
                    <div class="copyright">
                        <p>© 2020 <a href="https://hasthemes.com/">Toro.</a> All rights reserved</p>
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
                            <a href="index.html">Home 01 </a>
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
                                    <h5>info@la-studioweb.com</h5>
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
        <footer class="footer-area section-padding-1 border-top-3">
            <div class="container-fluid">
                <div class="footer-top pt-100 pb-60">
                    <div class="row">
                        <div class="footer-column footer-width-24">
                            <div class="footer-widget footer-about mb-30">
                                <a href="index.html">
                                    <img src="{{ asset ('images/logo/logo.png') }}" alt="logo">
                                </a>
                                <p>Lorem ipsum dolor sit amet, magna habemus ius ad, qui minimum voluptar</p>
                                <div class="social-icon-style-2 social-icon-hm4">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="youtube" href="#"><i class="fa fa-youtube"></i></a>
                                    <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-column footer-width-12">
                            <div class="footer-widget footer-info-list-2 mb-30">
                                <h3 class="footer-title">Company Link</h3>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">The Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-column footer-width-14">
                            <div class="footer-widget footer-info-list-2 mb-30">
                                <h3 class="footer-title">Userful Link</h3>
                                <ul>
                                    <li><a href="#">Guides & Articles</a></li>
                                    <li><a href="#">Customer Reviews</a></li>
                                    <li><a href="#">Coupon Codes</a></li>
                                    <li><a href="#">Military Discount</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-column footer-width-19">
                            <div class="footer-widget footer-info-list-2 footer-contect mb-30">
                                <h3 class="footer-title">Contact info</h3>
                                <ul>
                                    <li><i class="dlicon ui-2_time-clock"></i> Monday - Friday: 9:00 - 19:00</li>
                                    <li><i class="dlicon ui-1_email-83"></i> info@example.com</li>
                                    <li><i class="dlicon tech-2_rotate"></i> (+612) 2531 5600</li>
                                    <li><i class="dlicon ui-1_home-simple"></i> PO Box 1622 Colins Street West Victoria 8077 Australia</li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-column footer-width-29 mb-30">
                            <div class="contact-page-map">
                                <div id="contact-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-botoom">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-2 text-center">
                                <p>© 2020 <a href="https://hasthemes.com/">Toro.</a> All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="support-lists">
            <ul>
                <li><a href="#"><i class="dlicon ui-3_chat-46"></i></a></li>
                <li><a href="#"><i class=" dlicon ui-3_phone"></i></a></li>
                <li><a href="#"><i class="dlicon ui-1_email-85"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- All JS is here
============================================ -->

    <!-- Modernizer JS -->
    <script src="{{ asset ('js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <!-- jquery -->
    <script src="{{ asset ('js/vendor/jquery-3.3.1.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset ('js/vendor/popper.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset ('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('js/plugins/owl-carousel.js') }}"></script>
    <script src="{{ asset ('js/plugins/slick.js') }}"></script>
    <script src="{{ asset ('js/plugins/jarallax.min.js') }}"></script>
    <script src="{{ asset ('js/plugins/countdown.js') }}"></script>
    <script src="{{ asset ('js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset ('js/plugins/instafeed.js') }}"></script>
    <script src="{{ asset ('js/plugins/tilt.js') }}"></script>
    <script src="{{ asset ('js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset ('js/plugins/isotope.js') }}"></script>
    <script src="{{ asset ('js/plugins/scrolloverflow-fullpage.js') }}"></script>
    <script src="{{ asset ('js/plugins/fullpage.js') }}"></script>
    <script src="{{ asset ('js/plugins/jquery-ui-touch-punch.js') }}"></script>
    <script src="{{ asset ('js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset ('js/plugins/easyzoom.js') }}"></script>
    <script src="{{ asset ('js/plugins/resizesensor.js') }}"></script>
    <script src="{{ asset ('js/plugins/sticky-sidebar.js') }}"></script>
    <script src="{{ asset ('js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset ('js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset ('js/plugins/cookie.js') }}"></script>
    <script src="{{ asset ('js/plugins/bpopup.js') }}"></script>
    <script src="{{ asset ('js/plugins/wow.js') }}"></script>
    <script src="{{ asset ('js/plugins/ajax-mail.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset ('js/main.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYNfZ-tL7Q_kGLMO4Y5xz4lCl70V74AF4"></script>
    <script>
        function init() {
            var mapOptions = {
                zoom: 11,
                scrollwheel: false,
                center: new google.maps.LatLng(40.709896, -73.995481),
                styles: [{
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ]
            };
            var mapElement = document.getElementById('contact-map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.709896, -73.995481),
                map: map,
                icon: '{{ asset ('images/icon-img/2.png') }}',
                animation: google.maps.Animation.BOUNCE,
                title: 'Snazzy!'
            });
        }
        google.maps.event.addDomListener(window, 'load', init);
    </script>

</body>

</html>