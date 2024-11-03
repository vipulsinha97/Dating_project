<!doctype html>
<html lang="en">
<head>
    @include("includes/top")
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/events.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
</head>

<body>
    @include("includes/header")
    <main>
        <section class="container-fluid banner-bg">
            <div class="row pt-5 pb-5">
                <!-- Column for content -->
                <div class="col-md-6 d-flex-center">
                    <h2 class="h2-head">Find Your Perfect Match Today</h2>
                </div>
                <!-- Column for image -->
                <div class="col-md-6  align-right">
                    <img src="{{asset('assets/images/group20.png')}}" class="img-fluid" alt="Description of Image">
                </div>
            </div>
        </section>

        <section class="howitworks mt-5 mb-5">
            <div class="container-fluid py-0">
                <h2 class="align-left mt-4 mb-4">Speed Dating NJS</h2>
                <p class="p-desc align-left mb-5">Smart Dating at live events, Not just Swipe is the most successful way to date</p>
            </div>
        </section>

        <section class="events-main mt-5 mb-5">
            <div class="container-fluid py-5">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Mumbai Events:</h3>
                    </div>
                    <div class="col-md-6 align-right"><span class="seeall">See All</span>
                        <span class="city-drpdwn dropdown">
                            <button type="button" class="btn btn-citydrpdwn dropdown-toggle" data-bs-toggle="dropdown">
                                Cities
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Link 1</a></li>
                                <li><a class="dropdown-item" href="#">Link 2</a></li>
                                <li><a class="dropdown-item" href="#">Link 3</a></li>
                            </ul>
                        </span>
                    </div>
                </div>
                <!-- Age Group: (25-30) START -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>Age Group: (25-30)</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="events-carsouel-main">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="events-slider" class="owl-carousel">
                                            <div class="post-slide">
                                                <div class="post-img">
                                                    <img src="assets/images/me1.png" alt="">
                                                    <div class="eventtime">
                                                        <span class="session">45 min</span>
                                                    </div>
                                                    <!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
                                                </div>
                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a href="#">Saturday Night Virtual Speed Dating.</a>
                                                    </h3>
                                                    <p class="post-description">Date live via NJS on a series of live, matched dates from the comfort of your home.</p>
                                                    <div class="date-time-main">
                                                        <span class="post-date"><img src="assets/images/edate.svg" alt="">May 31</span>
                                                        <span class="post-time"><img src="assets/images/etime.svg" alt="">Sat- 7:30</span>
                                                    </div>
                                                </div>
                                                <div class="buytkt">
                                                    <span class="bt"><a href="#" class="book-ticket">Book Ticket</a></span>
                                                    <span class="bb"><a href="#" class="book-btn"><img src="assets/images/arw-diag.svg" alt=""></a></span>
                                                </div>
                                            </div>

                                            <div class="post-slide">
                                                <div class="post-img">
                                                    <img src="assets/images/me1.png" alt="">
                                                    <div class="eventtime">
                                                        <span class="session">45 min</span>
                                                    </div>
                                                    <!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
                                                </div>
                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a href="#">Saturday Night Virtual Speed Dating.</a>
                                                    </h3>
                                                    <p class="post-description">Date live via NJS on a series of live, matched dates from the comfort of your home.</p>
                                                    <div class="date-time-main">
                                                        <span class="post-date"><img src="assets/images/edate.svg" alt="">May 31</span>
                                                        <span class="post-time"><img src="assets/images/etime.svg" alt="">Sat- 7:30</span>
                                                    </div>
                                                </div>
                                                <div class="buytkt">
                                                    <span class="bt"><a href="#" class="book-ticket">Book Ticket</a></span>
                                                    <span class="bb"><a href="#" class="book-btn"><img src="assets/images/arw-diag.svg" alt=""></a></span>
                                                </div>
                                            </div>

                                            <div class="post-slide">
                                                <div class="post-img">
                                                    <img src="assets/images/me1.png" alt="">
                                                    <div class="eventtime">
                                                        <span class="session">45 min</span>
                                                    </div>
                                                    <!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
                                                </div>
                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a href="#">Saturday Night Virtual Speed Dating.</a>
                                                    </h3>
                                                    <p class="post-description">Date live via NJS on a series of live, matched dates from the comfort of your home.</p>
                                                    <div class="date-time-main">
                                                        <span class="post-date"><img src="assets/images/edate.svg" alt="">May 31</span>
                                                        <span class="post-time"><img src="assets/images/etime.svg" alt="">Sat- 7:30</span>
                                                    </div>
                                                </div>
                                                <div class="buytkt">
                                                    <span class="bt"><a href="#" class="book-ticket">Book Ticket</a></span>
                                                    <span class="bb"><a href="#" class="book-btn"><img src="assets/images/arw-diag.svg" alt=""></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Age Group: (25-30) END -->

                <!-- Age Group: (30-35) START -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>Age Group: (30-35)</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="events-carsouel-main">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="events-slider2" class="owl-carousel">
                                            <div class="post-slide">
                                                <div class="post-img">
                                                    <img src="assets/images/me1.png" alt="">
                                                    <div class="eventtime">
                                                        <span class="session">45 min</span>
                                                    </div>
                                                    <!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
                                                </div>
                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a href="#">Saturday Night Virtual Speed Dating.</a>
                                                    </h3>
                                                    <p class="post-description">Date live via NJS on a series of live, matched dates from the comfort of your home.</p>
                                                    <div class="date-time-main">
                                                        <span class="post-date"><img src="assets/images/edate.svg" alt="">May 31</span>
                                                        <span class="post-time"><img src="assets/images/etime.svg" alt="">Sat- 7:30</span>
                                                    </div>
                                                </div>
                                                <div class="buytkt">
                                                    <span class="bt"><a href="#" class="book-ticket">Book Ticket</a></span>
                                                    <span class="bb"><a href="#" class="book-btn"><img src="assets/images/arw-diag.svg" alt=""></a></span>
                                                </div>
                                            </div>

                                            <div class="post-slide">
                                                <div class="post-img">
                                                    <img src="assets/images/me1.png" alt="">
                                                    <div class="eventtime">
                                                        <span class="session">45 min</span>
                                                    </div>
                                                    <!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
                                                </div>
                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a href="#">Saturday Night Virtual Speed Dating.</a>
                                                    </h3>
                                                    <p class="post-description">Date live via NJS on a series of live, matched dates from the comfort of your home.</p>
                                                    <div class="date-time-main">
                                                        <span class="post-date"><img src="assets/images/edate.svg" alt="">May 31</span>
                                                        <span class="post-time"><img src="assets/images/etime.svg" alt="">Sat- 7:30</span>
                                                    </div>
                                                </div>
                                                <div class="buytkt">
                                                    <span class="bt"><a href="#" class="book-ticket">Book Ticket</a></span>
                                                    <span class="bb"><a href="#" class="book-btn"><img src="assets/images/arw-diag.svg" alt=""></a></span>
                                                </div>
                                            </div>

                                            <div class="post-slide">
                                                <div class="post-img">
                                                    <img src="assets/images/me1.png" alt="">
                                                    <div class="eventtime">
                                                        <span class="session">45 min</span>
                                                    </div>
                                                    <!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
                                                </div>
                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a href="#">Saturday Night Virtual Speed Dating.</a>
                                                    </h3>
                                                    <p class="post-description">Date live via NJS on a series of live, matched dates from the comfort of your home.</p>
                                                    <div class="date-time-main">
                                                        <span class="post-date"><img src="assets/images/edate.svg" alt="">May 31</span>
                                                        <span class="post-time"><img src="assets/images/etime.svg" alt="">Sat- 7:30</span>
                                                    </div>
                                                </div>
                                                <div class="buytkt">
                                                    <span class="bt"><a href="#" class="book-ticket">Book Ticket</a></span>
                                                    <span class="bb"><a href="#" class="book-btn"><img src="assets/images/arw-diag.svg" alt=""></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Age Group: (30-35) END -->

            </div>
        </section>






    </main>
    @include("includes/footer")
    @include("includes/bottom")

    <script src="assets/js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#events-slider").owlCarousel({
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [980, 2],
                itemsMobile: [600, 1],
                navigation: true,
                nav: true,
                navigationText: ["Next", "Prev"],
                // navText: ["‹", "›"],
                navText: [
                    '<img src="assets/images/a1.svg" alt="Previous" style="width: 30px; height: 30px;">',
                    '<img src="assets/images/a2.svg" alt="Next" style="width: 30px; height: 30px;">'
                ],
                pagination: true,
                loop: true,
                dots: true,
                autoPlay: true
            });

            $("#events-slider2").owlCarousel({
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [980, 2],
                itemsMobile: [600, 1],
                navigation: true,
                nav: true,
                navigationText: ["Next", "Prev"],
                // navText: ["‹", "›"],
                navText: [
                    '<img src="assets/images/a1.svg" alt="Previous" style="width: 30px; height: 30px;">',
                    '<img src="assets/images/a2.svg" alt="Next" style="width: 30px; height: 30px;">'
                ],
                pagination: true,
                loop: true,
                dots: true,
                autoPlay: true
            });
        });


    </script>
</body>



</html>