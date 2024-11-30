<!doctype html>
<html lang="en">
<head>
    @include("includes/top")
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/events.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.theme.default.min.css')}}">
</head>

<body>
    @include("includes/header")
    <main>
        <section class="container-fluid banner-bg p-0" style="background: #fcf6f6;overflow: hidden;">
            <div class="row pt-5 pb-0">
                <!-- Column for content -->
                <div class="col-md-6 d-flex-center">
                </div>
                <!-- Column for image -->
                <div class="col-md-6  align-right posabs">
                    <img src="{{asset('/assets/images/eventdetailsicon.svg')}}" class="img-fluid" alt="Description of Image">
                </div>
            </div>
        </section>

        <section class="howitworks mt-5 mb-5">
            <div class="container-fluid py-0">
                <h2 class="align-left mt-4 mb-4">Virtual Speed Dating NJS</h2>
                <p class="p-desc align-left mb-5">Smart mating at live events, Not just Swipe is the most successful way to date</p>
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
                    <div class="col-md-6 pt-5">
                        <div class="event-details-left">
                        <img src="{{asset('/assets/images/d1.png')}}" class="" alt="">
                        <div class="date">Saturday, 31st May - Mumbai</div>
                        <div class="ed-title"><h2>Saturday Night Virtual Matched Speed Dating Mumbai</h2></div>
                        <div class="ed-subtitle"><h4>Saturday Night Virtual Dating - Start the weekend in style</h4></div>
                        <ul>
                        <li>Online Speed Dating</li>
                        <li>Matched dates, based on your profile</li>
                        <li>Contact with your matches after the event</li>
                        </ul>
                        <div class="ed-date-time">
                            <span class="post-date"><img src="{{asset('/assets/images/carbon_user-multiple.svg')}}" class="" alt="">Age: 25-30</span>
                            <span class="post-time"><img src="{{asset('/assets/images/hugeicons_time-half-pass.svg')}}" class="" alt="">Duration: 2:30 h</span>
                                                    </div>
                        </div>
                        
                
                    </div>
                    <div class="col-md-6">
                    <div class="event-details-right">
                            <div class="ed-tickettitle mb-5"><h2>Ticket</h2></div>
                           
                            <div class="ticket-main">
                                <div class="ticket-left">
                                <img src="{{asset('/assets/images/d1.png')}}" class="" alt="">
                                </div>
                                <div class="ticket-right">
                               <h4>Saturday Date Night in Mumbai</h4>
                               <div class="price"><span><b>Price-</b></span><span>₹320</span></div>
                                </div>
                            </div>
                          
                        </div>
                    </div>

                </div>
                <!-- Age Group: (25-30) END -->

            </div>
        </section>






    </main>
    @include("includes/footer")
    @include("includes/bottom")

    <script src="/assets/js/owl.carousel.min.js"></script>
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
                    '<img src="/assets/images/a1.svg" alt="Previous" style="width: 30px; height: 30px;">',
                    '<img src="/assets/images/a2.svg" alt="Next" style="width: 30px; height: 30px;">'
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
                    '<img src="/assets/images/a1.svg" alt="Previous" style="width: 30px; height: 30px;">',
                    '<img src="/assets/images/a2.svg" alt="Next" style="width: 30px; height: 30px;">'
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