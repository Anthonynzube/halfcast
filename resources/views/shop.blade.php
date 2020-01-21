<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HalfCast - Shop</title>
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
        <header class="header-area section-padding-1">
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
                            <li><i class="dlicon tech-2_rotate"></i>(+234) 81 012 345 67</li>
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
                        <p>© 2020 <a href="https://hasthemes.com/">Toro.</a> All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area section-padding-1 bg-gray breadcrumb-ptb-1">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <div class="breadcrumb-title">
                        <h2>Shop</h2>
                    </div>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li><span> &gt; </span></li>
                        <li class="active"> shop </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-area section-padding-1 pt-100 pb-100">
            <div class="container-fluid">
                <div class="shop-top-bar">
                    <div class="shop-top-bar-left">
                        <div class="shop-top-show">
                            <span>Showing 1–12 of 39 results</span>
                        </div>
                        <div class="shop-page-list">
                            <ul>
                                <li>Show</li>
                                <li class="active"><a href="#">12</a></li>
                                <li><a href="#">15</a></li>
                                <li><a href="#">30</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-top-bar-right">
                        <div class="shop-tab nav">
                            <a href="#shop-1" class="active" data-toggle="tab"><i class="dlicon ui-2_grid-45"></i></a>
                            <a href="#shop-2" data-toggle="tab"><i class="dlicon design_bullet-list-69"></i></a>
                        </div>
                        <div class="shop-filter ml-50">
                            <a class="shop-filter-active" href="#">Filters <i class="fa fa-angle-down angle-down"></i> <i class="fa fa-angle-up angle-up"></i></a>
                        </div>
                        <div class="shop-short-by ml-50">
                            <span>Sort by <i class="fa fa-angle-down angle-down"></i> <i class="fa fa-angle-up angle-up"></i></span>
                            <ul>
                                <li class="active"><a href="#">Default sorting</a></li>
                                <li><a href="#">Sort by popularity</a></li>
                                <li><a href="#">Sort by average rating</a></li>
                                <li><a href="#">Sort by latest</a></li>
                                <li><a href="#">Sort by price: low to high</a></li>
                                <li><a href="#">Sort by price: high to low</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product-filter-wrapper">
                    <div class="row">
                        <!-- Product Filter -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                            <div class="product-filter">
                                <h5>Price</h5>
                                <div class="price-filter">
                                    <ul>
                                        <li><a href="#">$0.00 - $20.00</a></li>
                                        <li><a href="#">$20.00 - $40.00</a></li>
                                        <li><a href="#">$30.00 - $50.00</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Product Filter -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                            <div class="product-filter">
                                <h5>Size</h5>
                                <div class="product-size">
                                    <ul>
                                        <li><a href="#">Full Size</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Product Filter -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                            <div class="product-filter">
                                <h5>Color</h5>
                                <div class="product-color">
                                    <ul>
                                        <li><a href="#">Blue</a></li>
                                        <li><a href="#">Brown</a></li>
                                        <li><a href="#">Green</a></li>
                                        <li><a href="#"> Pink</a></li>
                                        <li><a href="#">Violet</a></li>
                                        <li><a href="#"> White</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Product Filter -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                            <div class="product-filter">
                                <h5>Brands</h5>
                                <div class="product-brands">
                                    <ul>
                                        <li><a href="#">Airi</a></li>
                                        <li><a href="#">Draven</a></li>
                                        <li><a href="#">Mango</a></li>
                                        <li><a href="#"> Valentino</a></li>
                                        <li><a href="#">Zara </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content jump-3 pt-30">
                    <div id="shop-1" class="tab-pane active">
                        <div class="row">
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-3.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-3-2.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">Fashion sneaker winter</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-4.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-4-2.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">News strappy sandals</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$26.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-1.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-1-2.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">Check bermuda shorts</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-5.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-5-2.jpg') }}" alt="">
                                            <span class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">7.7%</span>
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">Down puffer coat with collar</a></h3>
                                        <div class="product-price">
                                            <span class="old-price">$80.00</span>
                                            <span class="new-price">$55.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-6.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-6-2.jpg') }}" alt="">
                                            <span class="badge-black badge-right-0 badge-top-0 badge-width-height-1">sold uot</span>
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">Bejewelled velvet sandals</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$49.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-7.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-7-2.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">Contrast faux fur jacket</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$55.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-8.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-8-2.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">Bejewelled velvet sandals</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$75.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-9.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-9-2.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">Strappy sandals</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-16.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-16-2.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">Fashion sneaker winter</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-15.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-15-2.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">News strappy sandals</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$26.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-14.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-14-2.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">Check bermuda shorts</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-13.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-13-2.jpg') }}" alt="">
                                            <span class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">7.7%</span>
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">Down puffer coat with collar</a></h3>
                                        <div class="product-price">
                                            <span class="old-price">$80.00</span>
                                            <span class="new-price">$55.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-12.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-12-2.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">Bejewelled velvet sandals</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$49.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-11.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-11-2.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">Contrast faux fur jacket</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$55.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-5">
                                <div class="product-wrap mb-50">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{ asset ('images/product/product-13.jpg') }}" alt="">
                                            <img class="hover-img" src="{{ asset ('images/product/product-13-2.jpg') }}" alt="">
                                            <span class="badge-white badge-text-black badge-left-20 badge-top-20 badge-width-height-1">12 Sold/31</span>
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                            <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-2 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">News strappy sandals</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$26.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="shop-2" class="tab-pane">
                        <div class="shop-list-wrap mb-70">
                            <div class="row">
                                <div class="custom-col-32-shop">
                                    <div class="product-wrap">
                                        <div class="product-img default-overlay">
                                            <a href="product-details.html">
                                                <img class="default-img" src="{{ asset ('images/product/product-8.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset ('images/product/product-8-2.jpg') }}" alt="">
                                            </a>
                                            <div class="shop-list-quickview">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-68-shop">
                                    <div class="shop-list-content ml-20">
                                        <h3><a href="#">Checked Knit Jumpsuit</a></h3>
                                        <div class="pro-list-price">
                                            <span>$50.00</span>
                                        </div>
                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                        <div class="product-list-action">
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                            <div class="pro-list-actioncart">
                                                <a title="Add to cart" href="#">Add to cart</a>
                                            </div>
                                            <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-list-wrap mb-70">
                            <div class="row">
                                <div class="custom-col-32-shop">
                                    <div class="product-wrap">
                                        <div class="product-img default-overlay">
                                            <a href="product-details.html">
                                                <img class="default-img" src="{{ asset ('images/product/product-1.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset ('images/product/product-1-2.jpg') }}" alt="">
                                            </a>
                                            <div class="shop-list-quickview">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-68-shop">
                                    <div class="shop-list-content ml-20">
                                        <h3><a href="#">Contrast Faux Fur Jacket</a></h3>
                                        <div class="pro-list-price">
                                            <span>$80.00</span>
                                        </div>
                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                        <div class="product-list-action">
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                            <div class="pro-list-actioncart">
                                                <a title="Add to cart" href="#">Add to cart</a>
                                            </div>
                                            <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-list-wrap mb-70">
                            <div class="row">
                                <div class="custom-col-32-shop">
                                    <div class="product-wrap">
                                        <div class="product-img default-overlay">
                                            <a href="product-details.html">
                                                <img class="default-img" src="{{ asset ('images/product/product-2.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset ('images/product/product-2-2.jpg') }}" alt="">
                                            </a>
                                            <div class="shop-list-quickview">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-68-shop">
                                    <div class="shop-list-content ml-20">
                                        <h3><a href="#">Sleeve Button Cowl Neck</a></h3>
                                        <div class="pro-list-price">
                                            <span>$50.00</span>
                                        </div>
                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                        <div class="product-list-action">
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                            <div class="pro-list-actioncart">
                                                <a title="Add to cart" href="#">Add to cart</a>
                                            </div>
                                            <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-list-wrap mb-70">
                            <div class="row">
                                <div class="custom-col-32-shop">
                                    <div class="product-wrap">
                                        <div class="product-img default-overlay">
                                            <a href="product-details.html">
                                                <img class="default-img" src="{{ asset ('images/product/product-3.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset ('images/product/product-3-2.jpg') }}" alt="">
                                            </a>
                                            <div class="shop-list-quickview">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-68-shop">
                                    <div class="shop-list-content ml-20">
                                        <h3><a href="#">Cable – knit sweater</a></h3>
                                        <div class="pro-list-price">
                                            <span>$70.00</span>
                                        </div>
                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                        <div class="product-list-action">
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                            <div class="pro-list-actioncart">
                                                <a title="Add to cart" href="#">Add to cart</a>
                                            </div>
                                            <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-pagination-style text-center">
                        <ul>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="dlicon arrows-1_tail-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('pagesLayouts.pagesFooter')