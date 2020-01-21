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
                                    <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-column footer-width-12">
                            <div class="footer-widget footer-info-list-2 mb-30">
                                <h3 class="footer-title">Company Link</h3>
                                <ul>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="{{ route('blog') }}">The Blog</a></li>
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
                                <p>© 2020 <a href="https://halfcast.com/">HalfCast.</a> All rights reserved.</p>
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