@extends('layouts.index')

@section('center')
    <div class="slider-area">
        <div class="container-fluid p-0">
            <div class="main-slider-active bg-gray owl-carousel slider-dot-position-4 slider-dot-style-1">
                <div class="single-main-slider slider-animated-1 slider-height-hm7 align-items-center custom-d-flex" data-dot="01">
                    <div class="img-position-hm7-1">
                        <img class="animated" src="{{ asset ('images/slider/slider-hm7-position-1.png') }}" alt="slider">
                    </div>
                    <div class="img-position-hm7-5">
                        <img class="animated" src="{{ asset ('images/slider/slider-hm7-position-5.png') }}" alt="slider">
                    </div>
                    <div class="row no-gutters width-100-percent">
                        <div class="ml-auto col-lg-6 col-md-7">
                            <div class="main-slider-content-7-1 text-center">
                                <span class="animated" id="xxx">Flawless Skin </span>
                                <h1 class="animated">Flawless You! </h1>
                                <div class="slider-btn-4">
                                    <a class="animated" href="/shop">Shop now <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-main-slider slider-animated-1 slider-height-hm7 align-items-center custom-d-flex" data-dot="02">
                    <div class="img-position-hm7-1">
                        <img class="animated" src="{{ asset ('images/slider/banner-image.jpeg') }}" alt="slider">
                    </div>
                    <div class="img-position-hm7-5">
                        <img class="animated" src="{{ asset ('images/slider/slider-hm7-position-5.png') }}" alt="slider">
                    </div>
                    <div class="row no-gutters width-100-percent">
                        <div class="ml-auto col-lg-6 col-md-7">
                            <div class="main-slider-content-7-1 text-center">
                                <span class="animated">A Whole New World </span>
                                <h1 class="animated">Beautiful.</h1>
                                <h1 class="animated">Colourful.</h1>
                                <h1 class="animated"> You.</h1>

                                <div class="slider-btn-4">
                                    <a class="animated" href="/shop<">Shop now <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-social">
            <ul>
                <li><a href="https://www.instagram.com/halfcastcosmetics/">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">TWITTER</a></li>
            </ul>
        </div>
    </div>
{{--    <div class="product-area pt-130 pb-215">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="section-title-7 mb-65 text-center">--}}
{{--                <h2>Shop Skincare</h2>--}}
{{--            </div>--}}
{{--            <div class="img-position-skincare mobile">--}}
{{--                <img class="animated" src="{{ asset ('images/menu/cream.png') }}" alt="slider">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="product-slider-active-4">--}}
{{--            <div class="product-all-2">--}}
{{--                <div class="product-wrap-2 product-wrap-opacity-2">--}}
{{--                    <div class="product-img-2">--}}
{{--                        <a href="product-details.html">--}}
{{--                            <img src="{{ asset ('images/product/product-17.jpg') }}" alt="">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="product-content-3">--}}
{{--                        <h3 class="title-blod"><a href="product-details.html">Privilege</a></h3>--}}
{{--                        <p>Experience age defying action in a whole new and effective way. <br>--}}
{{--                        Immunity against aging signs is guaranteed. <br>--}}
{{--                        Feel young again, be privileged.--}}
{{--                        </p>--}}
{{--                        <div class="product-btn">--}}
{{--                            <a href="product-details.html">Shop now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="product-all-2">--}}
{{--                <div class="product-wrap-2 product-wrap-opacity-2">--}}
{{--                    <div class="product-img-2">--}}
{{--                        <a href="product-details.html">--}}
{{--                            <img src="{{ asset ('images/product/product-18.jpg') }}" alt="">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="product-content-3">--}}
{{--                        <h3 class="title-blod"><a href="product-details.html">Extra Fairness</a></h3>--}}
{{--                        <p>Need something more? Something extra? <br>--}}
{{--                        Then try this unique skin illuminator. <br>--}}
{{--                        Get more lightening effect in a little time.--}}
{{--                        </p>--}}
{{--                        <div class="product-btn">--}}
{{--                            <a href="product-details.html">Shop now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="product-all-2">--}}
{{--                <div class="product-wrap-2 product-wrap-opacity-2">--}}
{{--                    <div class="product-img-2">--}}
{{--                        <a href="product-details.html">--}}
{{--                            <img src="{{ asset ('images/product/flawless.jpg') }}" alt="">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="product-content-3">--}}
{{--                        <h3 class="title-blod"><a href="product-details.html">Flawless</a></h3>--}}
{{--                        <p>Achieve that dream skin and flawless look with this unique and professional set of skincare brand. <br>--}}
{{--                            The complete toolkit to bring your fantasies to reality. <br>--}}
{{--                            For people of colour.--}}
{{--                        </p>--}}
{{--                        <div class="product-btn">--}}
{{--                            <a href="product-details.html">Shop now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="product-area section-padding-1 pb-125">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="section-title-7 mb-65 text-center">--}}
{{--                <h2>new arrival</h2>--}}
{{--            </div>--}}
{{--            --}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="product-wrap mb-60">--}}
{{--                        <div class="product-img default-overlay mb-25">--}}
{{--                            <a href="product-details.html">--}}
{{--                                <img class="default-img" src="{{ asset ('images/product/product-19.jpg') }}" alt="">--}}
{{--                                <span class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">sale!</span>--}}
{{--                            </a>--}}
{{--                            <div class="product-action product-action-position-1">--}}
{{--                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>--}}
{{--                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>--}}
{{--                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>--}}
{{--                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-content-2 title-font-width-400 text-center">--}}
{{--                            <h3><a href="product-details.html">Clarifying Brightening Beauty Milk</a></h3>--}}
{{--                            <div class="product-price">--}}
{{--                                <span class="new-price">&#8358 ---</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="product-wrap mb-60">--}}
{{--                        <div class="product-img default-overlay mb-25">--}}
{{--                            <a href="product-details.html">--}}
{{--                                <img class="default-img" src="{{ asset ('images/product/product-20.jpg') }}" alt="">--}}
{{--                                <span class="badge-black badge-right-0 badge-top-0 badge-width-height-1">sold out</span>--}}
{{--                            </a>--}}
{{--                            <div class="product-action product-action-position-1">--}}
{{--                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>--}}
{{--                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>--}}
{{--                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>--}}
{{--                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-content-2 title-font-width-400 text-center">--}}
{{--                            <h3><a href="product-details.html">Unifying Lightening Body Lotion</a></h3>--}}
{{--                            <div class="product-price">--}}
{{--                                <span class="new-price">&#8358 ---</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="product-wrap mb-60">--}}
{{--                        <div class="product-img default-overlay mb-25">--}}
{{--                            <a href="product-details.html">--}}
{{--                                <img class="default-img" src="{{ asset ('images/product/product-21.jpg') }}" alt="">--}}
{{--                            </a>--}}
{{--                            <div class="product-action product-action-position-1">--}}
{{--                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>--}}
{{--                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>--}}
{{--                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>--}}
{{--                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-content-2 title-font-width-400 text-center">--}}
{{--                            <h3><a href="product-details.html">Beauty Facial Cream</a></h3>--}}
{{--                            <div class="product-price">--}}
{{--                                <span class="new-price">&#8358 ---</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="product-wrap mb-60">--}}
{{--                        <div class="product-img default-overlay mb-25">--}}
{{--                            <a href="product-details.html">--}}
{{--                                <img class="default-img" src="{{ asset ('images/product/product-22.jpg') }}" alt="">--}}
{{--                            </a>--}}
{{--                            <div class="product-action product-action-position-1">--}}
{{--                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>--}}
{{--                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>--}}
{{--                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>--}}
{{--                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-content-2 title-font-width-400 text-center">--}}
{{--                            <h3><a href="product-details.html">Active Unifying Lightening Bar</a></h3>--}}
{{--                            <div class="product-price">--}}
{{--                                <span class="new-price">&#8358 ---</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="btn-style-1 text-center">--}}
{{--                <a class="btn-border" href="/shop">--}}
{{--                    <div class="btn-viewmore-normal btn-ptb-1 btn-viewmore-bg-transparent btn-viewmore-common">--}}
{{--                        <span>View all products</span>--}}
{{--                    </div>--}}
{{--                    <div class="btn-viewmore-hover btn-ptb-1 btn-viewmore-common btn-hover-transition">--}}
{{--                        <span>View all products</span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="product-area section-padding-1 pb-125">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="section-title-7 mb-65 text-center">--}}
{{--                <h2>Shop Makeup</h2>--}}
{{--            </div>--}}
{{--            <div class="img-position-makeup">--}}
{{--                <img class="animated" src="{{ asset ('images/menu/face-powder.png') }}" alt="slider">--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="product-wrap mb-60">--}}
{{--                        <div class="product-img default-overlay mb-25">--}}
{{--                            <a href="product-details.html">--}}
{{--                                <img class="default-img" src="{{ asset ('images/product/makeup-1.png') }}" alt="">--}}
{{--                                <span class="badge-black badge-left-0 badge-top-0 badge-width-height-1">NEW NOW</span>--}}
{{--                            </a>--}}
{{--                            <div class="product-action product-action-position-1">--}}
{{--                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>--}}
{{--                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>--}}
{{--                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>--}}
{{--                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-content-2 title-font-width-400 text-center">--}}
{{--                            <h3><a href="product-details.html">Age Defying Bar Soap</a></h3>--}}
{{--                            <div class="product-price">--}}
{{--                                <span class="new-price">&#8358 ---</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="product-wrap mb-60">--}}
{{--                        <div class="product-img default-overlay mb-25">--}}
{{--                            <a href="product-details.html">--}}
{{--                                <img class="default-img" src="{{ asset ('images/product/makeup-2.png') }}" alt="">--}}
{{--                            </a>--}}
{{--                            <div class="product-action product-action-position-1">--}}
{{--                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>--}}
{{--                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>--}}
{{--                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>--}}
{{--                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-content-2 title-font-width-400 text-center">--}}
{{--                            <h3><a href="product-details.html">Unique Glow Face Powder</a></h3>--}}
{{--                            <div class="product-price">--}}
{{--                                <span class="new-price">&#8358 ---</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="product-wrap mb-60">--}}
{{--                        <div class="product-img default-overlay mb-25">--}}
{{--                            <a href="product-details.html">--}}
{{--                                <img class="default-img" src="{{ asset ('images/product/makeup-3.png') }}" alt="">--}}
{{--                            </a>--}}
{{--                            <div class="product-action product-action-position-1">--}}
{{--                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>--}}
{{--                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>--}}
{{--                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>--}}
{{--                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-content-2 title-font-width-400 text-center">--}}
{{--                            <h3><a href="product-details.html">Clarifying Brightening Beauty Milk</a></h3>--}}
{{--                            <div class="product-price">--}}
{{--                                <span class="new-price">&#8358 ---</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="product-wrap mb-60">--}}
{{--                        <div class="product-img default-overlay mb-25">--}}
{{--                            <a href="product-details.html">--}}
{{--                                <img class="default-img" src="{{ asset ('images/product/makeup-1.png') }}" alt="">--}}
{{--                            </a>--}}
{{--                            <div class="product-action product-action-position-1">--}}
{{--                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>--}}
{{--                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>--}}
{{--                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>--}}
{{--                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-content-2 title-font-width-400 text-center">--}}
{{--                            <h3><a href="product-details.html">Unifying Lightening Body Lotion</a></h3>--}}
{{--                            <div class="product-price">--}}
{{--                                <span class="new-price">&#8358 ---</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="btn-style-1 text-center">--}}
{{--                <a class="btn-border" href="/shop">--}}
{{--                    <div class="btn-viewmore-normal btn-ptb-1 btn-viewmore-bg-transparent btn-viewmore-common">--}}
{{--                        <span>View all products</span>--}}
{{--                    </div>--}}
{{--                    <div class="btn-viewmore-hover btn-ptb-1 btn-viewmore-common btn-hover-transition">--}}
{{--                        <span>View all products</span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="product-area section-padding-1 pb-125">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="section-title-7 mb-65 text-center">--}}
{{--                <h2>only for you</h2>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="product-wrap mb-60">--}}
{{--                        <div class="product-img default-overlay mb-25">--}}
{{--                            <a href="product-details.html">--}}
{{--                                <img class="default-img" src="{{ asset ('images/product/product-27.jpg') }}" alt="">--}}
{{--                            </a>--}}
{{--                            <div class="product-action product-action-position-1">--}}
{{--                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>--}}
{{--                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>--}}
{{--                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>--}}
{{--                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-content-2 title-font-width-400 text-center">--}}
{{--                            <h3><a href="product-details.html">Age Defying Bar Soap</a></h3>--}}
{{--                            <div class="product-price">--}}
{{--                                <span class="new-price">&#8358 ---</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="product-wrap mb-60">--}}
{{--                        <div class="product-img default-overlay mb-25">--}}
{{--                            <a href="product-details.html">--}}
{{--                                <img class="default-img" src="{{ asset ('images/product/product-28.jpg') }}" alt="">--}}
{{--                            </a>--}}
{{--                            <div class="product-action product-action-position-1">--}}
{{--                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>--}}
{{--                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>--}}
{{--                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>--}}
{{--                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-content-2 title-font-width-400 text-center">--}}
{{--                            <h3><a href="product-details.html">Unique Glow Face Powder</a></h3>--}}
{{--                            <div class="product-price">--}}
{{--                                <span class="new-price">&#8358 ---</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="product-wrap mb-60">--}}
{{--                        <div class="product-img default-overlay mb-25">--}}
{{--                            <a href="product-details.html">--}}
{{--                                <img class="default-img" src="{{ asset ('images/product/product-19.jpg') }}" alt="">--}}
{{--                                <span class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">-7.7%</span>--}}
{{--                            </a>--}}
{{--                            <div class="product-action product-action-position-1">--}}
{{--                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>--}}
{{--                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>--}}
{{--                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>--}}
{{--                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-content-2 title-font-width-400 text-center">--}}
{{--                            <h3><a href="product-details.html">Clarifying Brightening Beauty Milk</a></h3>--}}
{{--                            <div class="product-price">--}}
{{--                                --}}{{-- <span class="old-price">&#8358 ---</span> --}}
{{--                                <span class="new-price">&#8358 ---</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="product-wrap mb-60">--}}
{{--                        <div class="product-img default-overlay mb-25">--}}
{{--                            <a href="product-details.html">--}}
{{--                                <img class="default-img" src="{{ asset ('images/product/product-20.jpg') }}" alt="">--}}
{{--                            </a>--}}
{{--                            <div class="product-action product-action-position-1">--}}
{{--                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>--}}
{{--                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>--}}
{{--                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>--}}
{{--                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-content-2 title-font-width-400 text-center">--}}
{{--                            <h3><a href="product-details.html">Unifying Lightening Body Lotion</a></h3>--}}
{{--                            <div class="product-price">--}}
{{--                                <span class="new-price">&#8358 ---</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="btn-style-1 text-center">--}}
{{--                <a class="btn-border" href="/shop">--}}
{{--                    <div class="btn-viewmore-normal btn-ptb-1 btn-viewmore-bg-transparent btn-viewmore-common">--}}
{{--                        <span>View all products</span>--}}
{{--                    </div>--}}
{{--                    <div class="btn-viewmore-hover btn-ptb-1 btn-viewmore-common btn-hover-transition">--}}
{{--                        <span>View all products</span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="subscribe-area pt-80 pb-75 bg-black-3">--}}
{{--        <div class="container">--}}
{{--            <div class="subscribe-content-form-wrap">--}}
{{--                <div class="subscribe-content subscribe-content-white subscribe-width-34">--}}
{{--                    <h2>sign up & save</h2>--}}
{{--                    <p>Sale up to 20% off for your next purchase in this month!</p>--}}
{{--                </div>--}}
{{--                <div id="mc_embed_signup" class="subscribe-form subscribe-form-white subscribe-width-65">--}}
{{--                    <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">--}}
{{--                        <div id="mc_embed_signup_scroll" class="mc-form">--}}
{{--                            <input class="email" type="email" required="" placeholder="Your email address…" name="EMAIL" value="">--}}
{{--                            <div class="mc-news" aria-hidden="true">--}}
{{--                                <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">--}}
{{--                            </div>--}}
{{--                            <div class="clear">--}}
{{--                                <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="instagram-area pt-130 pb-130 section-padding-5">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="section-title-7 mb-65 text-center">--}}
{{--                <h2>shop Instagram</h2>--}}
{{--            </div>--}}
{{--            <div class="instagram-feed-thumb">--}}
{{--                <div id="instafeed" class="instagram-wrap black-instagram instafeed-active-3 custom-instagram-row mb-70" data-userid="6666969077" data-accesstoken="6666969077.1677ed0.d325f406d94c4dfab939137c5c2cc6c2">--}}
{{--                </div>--}}
{{--                --}}
{{--                <!-- SnapWidget -->--}}
{{--                <!--<script src="https://snapwidget.com/js/snapwidget.js"></script>--}}
{{--                <iframe src="https://snapwidget.com/embed/787632" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>-->--}}
{{--                <div class="btn-style-1 text-center">--}}
{{--                    <a class="btn-border" href="#">--}}
{{--                        <div class="btn-viewmore-normal btn-ptb-1 btn-ptb-inc btn-viewmore-bg-transparent btn-viewmore-common">--}}
{{--                            <span>View all</span>--}}
{{--                        </div>--}}
{{--                        <div class="btn-viewmore-hover btn-ptb-1 btn-ptb-inc btn-viewmore-common btn-hover-transition btn-hover-black">--}}
{{--                            <span>View all</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="testimonial-area jarallax parallax-img pt-80 pb-80" style="background-image:url({{ asset ('images/bg/halfcast-about-us-banner.jpg') }});">--}}
{{--        <div class="container">--}}
{{--            <div class="testimonial-active owl-carousel">--}}
{{--                <div class="single-testimonial text-center">--}}
{{--                    <img src="{{ asset ('images/icon-img/testimonial-icon.png') }}" alt="testimonial">--}}
{{--                    <p>I love all this theme and love the versatility of it. So many things just work the way they should right out of the box! No complicated anything to deal with! Best of all is the great customer support - every time I have contacted them for help with custom CSS issues I get a reply within 24 hours. That is fantastic!</p>--}}
{{--                    <div class="client-info">--}}
{{--                        <img src="{{ asset ('images/testimonial/client-img-1.jpg') }}" alt="testimonial">--}}
{{--                        <span>Mary Scott - Founder & CEO</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="single-testimonial text-center">--}}
{{--                    <img src="{{ asset ('images/icon-img/testimonial-icon.png') }}" alt="testimonial">--}}
{{--                    <p>I love all this theme and love the versatility of it. So many things just work the way they should right out of the box! No complicated anything to deal with! Best of all is the great customer support - every time I have contacted them for help with custom CSS issues I get a reply within 24 hours. That is fantastic!</p>--}}
{{--                    <div class="client-info">--}}
{{--                        <img src="{{ asset ('images/testimonial/client-img-1.jpg') }}" alt="testimonial">--}}
{{--                        <span>Mary Scott - Founder & CEO</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!--news letter popup start-->--}}
{{--    <div class="newletter-popup">--}}
{{--        <div id="popup2">--}}
{{--            <span class="b-close"><span><i class="dlicon ui-1_simple-remove"></i></span></span>--}}
{{--        </div>--}}
{{--        <div class="popup-wrapper-all">--}}
{{--            <div class="popup-subscribe-area">--}}
{{--                <span>Sign up below to recieve information about HalfCast's latest releases</span>--}}
{{--                <h2>Signup To Our Newsletter</h2>--}}
{{--                <div class="subscribe-bottom">--}}
{{--                    <form  method="POST" action="/newsletter">--}}
{{--                        @csrf--}}
{{--                        <div class="mc-form">--}}

{{--                            @if( session('success'))--}}
{{--                                <div class="alert alert-success" role="alert">--}}
{{--                                    {{session('success')}}--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            @if( session('failure'))--}}
{{--                                <div class="alert alert-danger" role="alert">--}}
{{--                                    {{session('failure')}}--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                            --}}
{{--                            <input type="email" value="" name="email" class="email" placeholder="Your email address…" required>--}}
{{--                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->--}}
{{--                            <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>--}}
{{--                            <div class="clear-2"><input type="submit" value="subscribe" name="subscribe" class="button"></div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="dont-show mt-15">--}}
{{--                    <input type="checkbox" id="newsletter-permission">--}}
{{--                    <label for="newsletter-permission">Do not show popup anymore</label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="popup-image">--}}
{{--                <img src="{{ asset ('images/banner/newsletter.jpg') }}" alt="banner">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
