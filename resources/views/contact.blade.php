@include('layouts.header')
<div class="breadcrumb-area section-padding-1 breadcrumb-bg-4 breadcrumb-ptb-5">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Contact Page</h2>
            </div>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li><span> > </span></li>
                <li class="active"> Contact Page </li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-us-area pt-90 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 ml-auto mr-auto">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="contact-form-area">
                            <h2>Contact Us</h2>
                            <form id="contact-form" action="assets/mail-php/mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input name="name" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input name="email" type="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <button class="submit" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="contact-info-area">
                            <h2>Get Info</h2>
                            <div class="contact-info-top">
                                <div class="sin-contact-info-wrap mb-25">
                                    <div class="contact-icon">
                                        <i class="dlicon business_building"></i>
                                    </div>
                                    <div class="contact-address">
                                        <span>HalfCast Headquarter</span>
                                        <p>PO Box 16122, Trade Fair Complex, Lagos, Nigeria</p>
                                    </div>
                                </div>
                                <div class="sin-contact-info-wrap mb-25">
                                    <div class="contact-icon">
                                        <i class="dlicon business_building"></i>
                                    </div>
                                    <div class="contact-address">
                                        <span>HalfCast Branch</span>
                                        <p>PO Box 16122, Trade Fair Complex, Lagos, Nigeria</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-info-bottom">
                                <ul>
                                    <li><i class="dlicon ui-1_email-83"></i>info@halfcast.com</li>
                                    <li><i class="dlicon ui-2_phone"></i>+234-812-466-7130</li>
                                </ul>
                                <div class="contact-info-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
