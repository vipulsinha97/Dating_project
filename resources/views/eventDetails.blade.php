<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                    <div class="col-md-7 pt-5">
                        <div class="event-details-left">
                            <img src="{{asset('/assets/images/d1.png')}}" class="" alt="">
                            <div class="single-date my-4">Saturday, 31st May - Mumbai</div>
                            <div class="ed-title">
                                <h3>Saturday Night Virtual Matched Speed Dating Mumbai</h3>
                            </div>
                            <div class="ed-subtitle">
                                <h4>Saturday Night Virtual Dating - Start the weekend in style</h4>
                            </div>
                            <ul class="ed-list my-5">
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
                    <div class="col-md-5 pt-5">
                        <div class="ticket-bg">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="{{asset('/assets/images/ticket-bg.svg')}}" alt="">
                                </div>
                            </div>
                            <div class="event-details-right">
                                <div class="row top-row">
                                    <div class="colmd-12">
                                        <div class="ed-tickettitle mb-5">
                                            <h2>Ticket</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ticket-main">
                                            <div class="ticket-left">
                                                <img src="{{asset('/assets/images/d1.png')}}" class="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ticket-right">
                                            <h4>Saturday Date Night in Mumbai</h4>
                                            <div class="price"><span><b>Price-</b></span><span class="amount">₹320</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row bottom-row">
                                    <div class="col-md-6">
                                        <div class="ed-ticket-details mb-5">
                                            <span class="ed-ticket-data"><img src="{{asset('/assets/images/solar_calendar-outline.svg')}}" class="" alt="">Calendar</span> <br>
                                            <span>Thu, May 31</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ed-ticket-details mb-5">
                                            <span class="ed-ticket-data"><img src="{{asset('/assets/images/pepicons-pencil_rewind-time.svg')}}" class="" alt="">Time</span> <br>
                                            <span>7:30pm</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ed-ticket-details mb-5">
                                            <span class="ed-ticket-data"><img src="{{asset('/assets/images/fluent_location-48-regular.svg')}}" class="" alt="">Location</span> <br>
                                            <span>Online</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ed-ticket-details mb-5">
                                            <span class="ed-ticket-data"><img src="{{asset('/assets/images/carbon_user-multiple.svg')}}" class="" alt="">Age Group</span> <br>
                                            <span>25-30</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="buy-ticket-btn">
                                            <a href="#" class="buy-ticket" data-bs-toggle="modal" data-bs-target="#ticketCheckout">Buy Ticket</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Age Group: (25-30) END -->

                </div>
        </section>

        <section class="theevent mt-5 mb-5">
            <div class="container-fluid py-0">
                <div class="ed-title">
                    <h3>The Event </h3>
                </div>
                <ul class="ed-list my-5">
                    <li>Discover new connections in a lively setting, not the usual scripted chats.</li>
                    <li>Go on a series of 5 matched video dates for 5 minutes each and find the one that you truly connect.</li>
                    <li>Freely contact mutual matches via chat immediately after the event.</li>
                    <li>Privacy is totally over to you - we never release your email or phone numbers.</li>
                </ul>
                <p class="ed-para">There is also NO SOFTWARE TO DOWNLOAD! The event is run entirely on your browser (mobile or laptop) via <b>Not Just Swipe</b> website.</p>
                <p class="ed-para align-left"><b>Spaces are highly limited</b> due to our rigorous screening process designed to ensure you connect with only the most genuine individuals. We review your social profiles (please connect your LinkedIn profile during registration) and conduct a verification call at your preferred time to confirm authenticity. After passing the screening, you have a 24-hour window to pay and secure your spot for the event.</p>
                <p class="ed-para align-left">To ensure enough time for screening process, please sign up well in advance for events.</p>
            </div>
        </section>

        <section>
            <div class="outerbarr">
                <div class="barcont">
                    <img class="m-4" src="{{asset('assets/images/bar-img1.png')}}" />
                    <h2>Love the experience,<br>
                    or your money back.</h2>
                    <img class="mt-75" src="{{asset('assets/images/barr-arw.png')}}" />
                </div>
            </div>
        </section>

        <section class="theevent mt-5 mb-5">
            <div class="container-fluid py-0">
                <div class="ed-title">
                    <h3>Refund T&Cs</h3>
                </div>
                <p class="ed-para align-left">If you attend the event, and are not happy with NotJustSwipe, you can claim full refund. Contact us from your registered email id asking to remove your profile and we will pay 100% refund.</p>
            </div>
        </section>

    </main>
    @include("includes/footer")
    @include("includes/bottom")

    <!-- <script src="../assets/js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#related-event-slider").owlCarousel({
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [980, 2],
                itemsMobile: [600, 1],
                navigation: true,
                nav: true,
                navigationText: ["Next", "Prev"],
                navText: [
                    '<img src="../assets/images/a1.svg" alt="Previous" style="width: 30px; height: 30px;">',
                    '<img src="../assets/images/a2.svg" alt="Next" style="width: 30px; height: 30px;">'
                ],
                pagination: true,
                loop: true,
                dots: true,
                autoPlay: true
            });
        });
    </script> -->
</body>



</html>