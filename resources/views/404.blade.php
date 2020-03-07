@include('layouts.header')
    <div class="error-area bg-gray-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-content text-center">
                        <img src="{{ asset ('images/banner/error.png') }}" alt="banner">
                        <h3>Page cannot be found!</h3>
                        <p>It looks like nothing was found at this locations.</p>
                        <div class="btn-style-1 text-center">
                            <a class="btn-border-black2" href="/">
                                <div class="btn-viewmore-normal btn-ptb-3 btn-viewmore-bg-transparent btn-viewmore-common btn-font-3">
                                    <span>Back to home</span>
                                </div>
                                <div class="btn-viewmore-hover btn-ptb-3 btn-viewmore-common btn-hover-transition btn-font-3">
                                    <span>Back to home</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="support-lists">
        <ul>
            <li><a href="#"><i class="dlicon ui-3_chat-46"></i></a></li>
            <li><a href="#"><i class=" dlicon ui-3_phone"></i></a></li>
            <li><a href="#"><i class="dlicon ui-1_email-85"></i></a></li>
        </ul>
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


</body>

</html>