@extends('layout.app')

@section('styles')
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
@endsection

@section('content')
    <div style="overflow-x: hidden;">
        <!-- main-slider -->
        <section class="main-slider">
            <div class="main-slider-carousel owl-carousel owl-theme nav-style-one">
                <div class="slide" style="background-image:url({{ asset('assets/images/main-slider/kidcare1.jpg') }})">
                    <div class="container">
                        <div class="content-box">
                            <h3>Best Choise</h3>
                            <h1>Make Your Children's Life Special</h1>
                            <div class="text">Cupidatat non proident sunt culpa qui officia deserunt<br />mollit anim
                                idest
                                laborum</div>
                            <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-image:url({{ asset('assets/images/main-slider/kidcare2.jpg') }})">
                    <div class="container">
                        <div class="content-box">
                            <h3>Best Choise</h3>
                            <h1>Make Your Children's Life Special</h1>
                            <div class="text">Cupidatat non proident sunt culpa qui officia deserunt<br />mollit anim
                                idest laborum</div>
                            <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-image:url({{ asset('assets/images/main-slider/kidcare3.jpg') }})">
                    <div class="container">
                        <div class="content-box">
                            <h3>Best Choise</h3>
                            <h1>Make Your Children's Life Special</h1>
                            <div class="text">Cupidatat non proident sunt culpa qui officia deserunt<br />mollit anim
                                idest laborum</div>
                            <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- main-slider end -->

        <!-- service-section -->
        <section class="service-section sec-pad" style="background-image: url({{ asset('assets/images/background/bg-kid.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="sec-title style-two">
                                <h5>Services</h5>
                                <h1>Best Services for Kids</h1>
                            </div>
                            <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore
                                dolore magna aliqua enim minim veniam.</div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 carousel-column">
                        <div class="carousel-content">
                            <div class="services-carousel owl-carousel owl-theme">
                                <div class="service-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-bus-1"></i></div>
                                        <h3><a href="#">Bus Service</a></h3>
                                        <div class="text">Cupidatat non proident sunt culpa qui officia deserunt mollit
                                            anim.</div>
                                    </div>
                                </div>
                                <div class="service-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-running"></i></div>
                                        <h3><a href="#">Sports Training</a></h3>
                                        <div class="text">Cupidatat non proident sunt culpa qui officia deserunt mollit
                                            anim.</div>
                                    </div>
                                </div>
                                <div class="service-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-drum"></i></div>
                                        <h3><a href="#">Music Training</a></h3>
                                        <div class="text">Cupidatat non proident sunt culpa qui officia deserunt mollit
                                            anim.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->

        <!-- cta-section -->
        <section class="cta-section centred">
            <div class="anim-icon">
                <div class="icon icon-1 float-bob-x"></div>
                <div class="icon icon-2 rotate-me"></div>
            </div>
            <div class="parallax-scene parallax-scene-1 parallax-icon">
                <span data-depth="0.40" class="parallax-layer icon icon-1"></span>
                <span data-depth="0.50" class="parallax-layer icon icon-2"></span>
                <span data-depth="0.30" class="parallax-layer icon icon-3"></span>
                <span data-depth="0.40" class="parallax-layer icon icon-4"></span>
                <span data-depth="0.50" class="parallax-layer icon icon-5"></span>
                <span data-depth="0.30" class="parallax-layer icon icon-6"></span>
                <span data-depth="0.40" class="parallax-layer icon icon-7"></span>
            </div>
            <div class="container">
                <div class="content-box">
                    <h3>Join with KidCare</h3>
                    <h1>Enrol Your Child<br />in KidCare</h1>
                    <div class="text">Cupidatat non proident sunt culpa qui officia<br />deserunt mollit anim idest
                        laborum </div>
                    <div class="btn-box"><a href="#" class="theme-btn">Enrol Now</a></div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->

        <!-- classes-section -->
        <section class="classes-section sec-pad">
            <div class="anim-icon">
                <div class="icon icon-1 float-bob-x"></div>
            </div>
            <div class="container">
                <div class="sec-title centred">
                    <h5>Classess</h5>
                    <h1>Education for Your<br />Children</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                        <div class="inner-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="image-box"><a href="class-details.html"><img src="{{ asset('assets/images/resource/music-class.jpg') }}"
                                        alt=""></a></figure>
                            <div class="lower-content">
                                <div class="link-btn"><a href="class-details.html"><i class="flaticon-next"></i></a>
                                </div>
                                <h3><a href="class-details.html">Music Lessons</a></h3>
                                <div class="price">$480</div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor
                                    incidie labore magna aliqua.</div>
                                <ul class="info-box">
                                    <li>Age: <span>2-4 Years</span></li>
                                    <li>Size: <span>12 Seats</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                        <div class="inner-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <figure class="image-box"><a href="class-details.html"><img src="{{ asset('assets/images/resource/paper-class.jpg') }}"
                                        alt=""></a></figure>
                            <div class="lower-content">
                                <div class="link-btn"><a href="class-details.html"><i class="flaticon-next"></i></a>
                                </div>
                                <h3><a href="class-details.html">Paper Plates Art</a></h3>
                                <div class="price">$580</div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor
                                    incidie labore magna aliqua.</div>
                                <ul class="info-box">
                                    <li>Age: <span>2-4 Years</span></li>
                                    <li>Size: <span>12 Seats</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                        <div class="inner-block wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <figure class="image-box"><a href="class-details.html"><img src="{{ asset('assets/images/resource/education-class.jpg') }}"
                                        alt=""></a></figure>
                            <div class="lower-content">
                                <div class="link-btn"><a href="class-details.html"><i class="flaticon-next"></i></a>
                                </div>
                                <h3><a href="class-details.html">Education Lessons</a></h3>
                                <div class="price">$550</div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor
                                    incidie labore magna aliqua.</div>
                                <ul class="info-box">
                                    <li>Age: <span>2-4 Years</span></li>
                                    <li>Size: <span>12 Seats</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- classes-section end -->

        <!-- feature-section -->
        <section class="feature-section">
            <div class="anim-icon">
                <div class="icon icon-1"></div>
                <div class="icon icon-2"></div>
            </div>
            <div class="image-column" style="background-image: url({{ asset('assets/images/background/bg-facilitate.jpg') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 offset-xl-7 inner-column">
                        <div class="inner-content">
                            <div class="sec-title style-two">
                                <h5>Facilities</h5>
                                <h1>Best Facilities<br />for Kids</h1>
                            </div>
                            <div class="inner-box">
                                <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="icon-box"><i class="flaticon-bus"></i></div>
                                    <h3><a href="#">Transportation</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                                        eiusmod tempor incididunt labore.</div>
                                </div>
                                <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="icon-box"><i class="flaticon-console"></i></div>
                                    <h3><a href="#">Outdoor Games</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                                        eiusmod tempor incididunt labore.</div>
                                </div>
                                <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="icon-box"><i class="flaticon-harvest"></i></div>
                                    <h3><a href="#">Nutritious Food</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                                        eiusmod tempor incididunt labore.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->

        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-bottom">
                <div class="container">
                    <div class="inner-container clearfix">
                        <div class="left-content pull-left">
                            <div class="copyright">Copyright &copy; <a href="#">KidCare</a> 2023. All Rights
                                Reserved</div>
                        </div>
                        <div class="right-content pull-right">
                            <ul class="social-style-one footer-social clearfix">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->
    </div>
@endsection

@section('scripts')
    <!-- jequery plugins -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
@endsection
