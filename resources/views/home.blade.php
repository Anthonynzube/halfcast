@extends('layouts.index')

@section('center')
    <div class="slider-area pt-120 bg-light-pink-2 section-padding-1">
        <div class="container-fluid">
            <div class="main-slider-active owl-carousel slider-dot-position-1 slider-dot-style-1">
                <div class="single-main-slider slider-animated-1" data-dot="01">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-6 col-md-6">
                            <div class="main-slider-img">
                                <img src="{{ asset ('images/slider/slider-hm1-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="main-slider-content-1 slider-content-mrg-l-1">
                                <span class="animated">NEW COLLECTIONS 2020 </span>
                                <h1 class="animated">LONDON </h1>
                                <div class="slider-btn-1">
                                    <a class="animated" href="#">DISCOVER NOW </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-main-slider slider-animated-1" data-dot="02">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-6 col-md-6">
                            <div class="main-slider-img">
                                <img src="{{ asset ('images/slider/slider-hm1-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="main-slider-content-1 slider-content-mrg-l-1">
                                <span class="animated">NEW COLLECTIONS 2020  </span>
                                <h1 class="animated">GLEAM </h1>
                                <div class="slider-btn-1">
                                    <a class="animated" href="#">DISCOVER NOW </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-main-slider slider-animated-1" data-dot="03">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-6 col-md-6">
                            <div class="main-slider-img">
                                <img src="{{ asset ('images/slider/slider-hm1-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="main-slider-content-1 slider-content-mrg-l-1">
                                <span class="animated">ACCESSORIES COLLECTIONS  </span>
                                <h1 class="animated">VINTAGES </h1>
                                <div class="slider-btn-1">
                                    <a class="animated" href="#">DISCOVER NOW </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-social slider-social-white">
            <ul>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">TWITTER</a></li>
            </ul>
        </div>
    </div>
    <div class="product-area pt-130 pb-130">
        <div class="container-fluid">
            <div class="section-title-1 mb-70 text-center">
                <h2>NEW ARRIVAL</h2>
            </div>
        </div>
        <div class="product-slider-active product-slider-padding dot-style-1">
            <div class="product-wrap product-wrap-opacity">
                <div class="product-img default-overlay mb-40">
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
                <div class="product-content">
                    <h3 class="title-blod"><a href="product-details.html">Check Bermuda Shorts</a></h3>
                    <div class="product-price">
                        <span class="new-price">$25.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrap product-wrap-opacity">
                <div class="product-img default-overlay mb-40">
                    <a href="product-details.html">
                        <img class="default-img" src="{{ asset ('images/product/product-2.jpg') }}" alt="">
                        <img class="hover-img" src="{{ asset ('images/product/product-2-2.jpg') }}" alt="">
                    </a>
                    <div class="product-action product-action-position-1">
                        <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                        <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                    </div>
                </div>
                <div class="product-content">
                    <h3 class="title-blod"><a href="product-details.html">Check Bermuda Shorts</a></h3>
                    <div class="product-price">
                        <span class="new-price">$25.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrap product-wrap-opacity">
                <div class="product-img default-overlay mb-40">
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
                <div class="product-content">
                    <h3 class="title-blod"><a href="product-details.html">Check Bermuda Shorts</a></h3>
                    <div class="product-price">
                        <span class="new-price">$25.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrap product-wrap-opacity">
                <div class="product-img default-overlay mb-40">
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
                <div class="product-content">
                    <h3 class="title-blod"><a href="product-details.html">Check Bermuda Shorts</a></h3>
                    <div class="product-price">
                        <span class="new-price">$25.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area section-padding-2 padding-120-row-col pb-125">
        <div class="container-fluid">
            <div class="section-title-1 mb-70 text-center">
                <h2>Must have</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-60">
                        <div class="product-img default-overlay mb-25">
                            <a href="product-details.html">
                                <img class="default-img" src="{{ asset ('images/product/product-5.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset ('images/product/product-5-2.jpg') }}" alt="">
                                <span class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">sale!</span>
                            </a>
                            <div class="product-action product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-2 text-center">
                            <h3><a href="product-details.html">Double-breasted faux fur coat</a></h3>
                            <div class="product-price">
                                <span class="new-price">$22.00 - $49.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-60">
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
                        <div class="product-content-2 text-center">
                            <h3><a href="product-details.html">Quilted parka with hood</a></h3>
                            <div class="product-price">
                                <span class="new-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-60">
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
                        <div class="product-content-2 text-center">
                            <h3><a href="product-details.html">Contrast faux fur jacket</a></h3>
                            <div class="product-price">
                                <span class="new-price">$50.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-60">
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
                        <div class="product-content-2 text-center">
                            <h3><a href="product-details.html">Bejewelled velvet sandals</a></h3>
                            <div class="product-price">
                                <span class="new-price">$35.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-60">
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
                        <div class="product-content-2 text-center">
                            <h3><a href="product-details.html">Strappy sandals</a></h3>
                            <div class="product-price">
                                <span class="new-price">$85.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-60">
                        <div class="product-img default-overlay mb-25">
                            <a href="product-details.html">
                                <img class="default-img" src="{{ asset ('images/product/product-10.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset ('images/product/product-10-2.jpg') }}" alt="">
                                <span class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">-7.7%</span>
                            </a>
                            <div class="product-action product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-2 text-center">
                            <h3><a href="product-details.html">Down puffer coat with wraparound collar</a></h3>
                            <div class="product-price">
                                <span class="old-price">$80.00</span>
                                <span class="new-price">$55.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-style-1 text-center">
                <a class="btn-border" href="{{ route('shop')}}">
                    <div class="btn-viewmore-normal btn-ptb-1 btn-viewmore-bg-transparent btn-viewmore-common">
                        <span>View all products</span>
                    </div>
                    <div class="btn-viewmore-hover btn-ptb-1 btn-viewmore-common btn-hover-transition">
                        <span>View all products</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="delay-area bg-light-pink pt-190 pb-190 res-white-overly-xs">
        <div class="bg-1 jarallaxa"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto">
                    <div class="delay-content text-center">
                        <span>limit edition shimmiry skitrt</span>
                        <h2>off 30%</h2>
                        <div class="timer timer-style-1 mb-50">
                            <div data-countdown="2020/06/01"></div>
                        </div>
                        <div class="btn-style-1 text-center">
                            <a class="btn-border" href="product-details.html">
                                <div class="btn-viewmore-normal btn-ptb-2 btn-viewmore-bg-black btn-viewmore-common btn-font-2">
                                    <span>SHOP NOW</span>
                                </div>
                                <div class="btn-viewmore-hover btn-ptb-2 btn-viewmore-common btn-font-2">
                                    <span>SHOP NOW</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscribe-area pt-80 pb-75">
        <div class="container">
            <div class="subscribe-content-form-wrap">
                <div class="subscribe-content subscribe-width-34">
                    <h2>sign up & save</h2>
                    <p>Sale up to 20% off for your next purchase in this month!</p>
                </div>
                <div id="mc_embed_signup" class="subscribe-form subscribe-width-65">
                    <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                        <div id="mc_embed_signup_scroll" class="mc-form">
                            <input class="email" type="email" required="" placeholder="Your email address…" name="EMAIL" value="">
                            <div class="mc-news" aria-hidden="true">
                                <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                            </div>
                            <div class="clear">
                                <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection