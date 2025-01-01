<!doctype html>
<html lang="en">

<head>
    @include("includes/top")
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/homepage-style.css')}}">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}" />


    <style>
        .home_slider {
            width: 100%;
            margin: 0 auto;
        }

        .slick-slide img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease, opacity 0.3s ease, box-shadow 0.3s ease;
        }

        .slick-slide img {
            transform: scale(0.7);
            opacity: 0.7;
        }

        /* Custom Arrow Styles */
        .slick-prev,
        .slick-next {
            font-size: 0;
            background: transparent;
            border: none;
            z-index: 1;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .slick-prev {
            left: 50px;
            background-image: url('assets/images/slider-arrow-left.svg');
            background-size: cover;
            width: 120px;
            height: 120px;
        }

        .slick-next {
            right: 50px;
            background-image: url('assets/images/slider-arrow-right.svg');
            background-size: cover;
            width: 120px;
            height: 120px;
        }

        .slick-prev:hover,
        .slick-prev:focus {
            background-image: url('assets/images/slider-arrow-left.svg');
            background-size: cover;
            width: 120px;
            height: 120px;
        }

        .slick-next:hover,
        .slick-next:focus {
            background-image: url('assets/images/slider-arrow-right.svg');
            background-size: cover;
            width: 120px;
            height: 120px;
        }

        /* Additional Customization for Center Slide */
        .home_slider .slick-center img {
            transform: scale(0.9);
            opacity: 1;
        }

        .slick-prev:before,
        .slick-next:before {
            content: "";
        }
    </style>
</head>

<body>
    @include("includes/header")
    <main>
        <section class="container-fluid">
            <div class="row mt-5 mb-5">
                <!-- Column for content -->
                <div class="col-md-6">
                    <div class="pinkbtn mb-4"><a href="#">Unlock the door to your heart !</a></div>
                    <h2 class="h2-head">See the Chemistry, Feel the Connection</h2>
                    <p class="nutino-font mt-5">Fed up with endless swiping and chatting, only to discover fake profiles or a lack of connection when you finally meet? Try a new way to find genuine connections.</p>
                </div>
                <!-- Column for image -->
                <div class="col-md-6  align-right">
                    <img src="{{asset('assets/images/home-img1.png')}}" class="img-fluid" alt="Description of Image">
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-md-8">
                    <div class="bluebg">
                        <p>Introducing NJS – An exclusive, application-only network for professionals where you can make virtual face-to-face connections. We're bringing authenticity back to dating</p>
                        <p class="d-inline"><span><a href="#">Know More</a></span><span><img class="cusimg" src="{{asset('assets/images/knowmore.png')}}" /></span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="yellowbg">
                        <p>No more swiping, Explore connections beyond the apps.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bgimg0">
            <div class="container-fluid py-5">
                <div class="center-slider">
                    <div class="home_slider">
                        <div><img src="{{asset('assets/images/f1.png')}}" alt=""></div>
                        <div><img src="{{asset('assets/images/f2.png')}}" alt=""></div>
                        <div><img src="{{asset('assets/images/f3.png')}}" alt=""></div>
                        <div><img src="{{asset('assets/images/f4.png')}}" alt=""></div>
                        <!-- Add more images as needed -->
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="bgimg">
            <div class="container-fluid py-5">

                <div class="center-slider">
                    <div id="center" class="sliderwrapper">
                        <div class="item i1"><img src="{{asset('assets/images/f1.png')}}" alt=""></div>
                        <div class="item i2"><img src="{{asset('assets/images/f2.png')}}" alt=""></div>
                        <div class="item i3"><img src="{{asset('assets/images/f3.png')}}" alt=""></div>
                        <div class="item i4 active"><img src="{{asset('assets/images/f4.png')}}" alt=""></div>
                    </div>

                    <div class="controls selection-off">
                        <div class="left selection-off arrr-left" onclick="turnLeft()"><img src="{{asset('assets/images/slider-arrow-left.svg')}}" alt=""></div>
                        <div class="right selection-off arrr-right" onclick="turnRight()"><img src="{{asset('assets/images/slider-arrow-right.svg')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="njs-speeddate pt-5 mb-5">
            <div class="container">
                <h2 class="align-center mt-4 mb-4">Not Just Swipe Speed Dating</h2>
                <p class="p-desc mb-5">Settle into a comfortable spot at home, launch NotJustSwipe, join the online dating events and instantly connect with someone who truly gets you.</p>
                <ul class="list">
                    <li><b>Genuine profiles:</b> Our stringent screening process ensures you connect with only the most genuine individuals. With fewer than 30% of applicants approved for events, you can be confident in the quality of our premium profiles. Quality over quantity.</li>
                    <li><b>Fun and Exciting Experience:</b> Dive into the adventure of blind dates with genuine profiles, sparking curiosity and excitement. Enjoy the fun of discovering new connections in a lively and engaging setting, not the usual scripted chats</li>
                    <li><b>Take Back Your Time:</b> Unlike dating apps where you chat for days, only to find no chemistry, NJS dating events let you meet and interact with 5 genuine profiles in one event. Quickly discover who you truly connect with, saving you valuable time.</li>
                    <li><b>Enhanced Security and Privacy:</b> Enjoy a safe dating environment with advanced security features that protect your interactions and ensure your privacy.</li>
                </ul>
            </div>
            <div class="outerbarr">
                <div class="barcont">
                    <img class="m-4" src="{{asset('assets/images/bar-img1.png')}}" />
                    <h2>Now its the time to get together</h2>
                    <img class="mt-75" src="{{asset('assets/images/barr-arw.png')}}" />
                </div>
            </div>
        </section>

        <section class="eventsnearme mt-5 mb-5">
            <div class="container-fluid py-5">
                <h2 class="align-center mt-4 mb-4">NotJustSwipe Dating <br>events near me</h2>
                <p class="p-desc mb-5">Register for events closest to your city. More cities will be added soon.</p>
                <div id="cardCarousel" class="carousel slide my-5" data-ride="carousel" data-interval="3000" data-pause="hover">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{asset('assets/images/punjab.png')}}" class="card-img-top" alt="...">
                                        <div class="card-body card-img-overlayed">
                                            <h5 class="card-title">Chandigarh</h5>
                                            <a href="#" class="btn btn-primary0 event-btn">Book Event <img src="{{asset('assets/images/arrow-diag.svg')}}" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{asset('assets/images/bangalore.png')}}" class="card-img-top" alt="...">
                                        <div class="card-body card-img-overlayed">
                                            <h5 class="card-title">Banglore</h5>
                                            <a href="#" class="btn btn-primary0 event-btn">Book Event <img src="{{asset('assets/images/arrow-diag.svg')}}" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{asset('assets/images/mumbai.png')}}" class="card-img-top" alt="...">
                                        <div class="card-body card-img-overlayed">
                                            <h5 class="card-title">Mumbai</h5>
                                            <a href="#" class="btn btn-primary0 event-btn">Book Event <img src="{{asset('assets/images/arrow-diag.svg')}}" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{asset('assets/images/delhi.png')}}" class="card-img-top" alt="...">
                                        <div class="card-body card-img-overlayed">
                                            <h5 class="card-title">Delhi</h5>
                                            <a href="#" class="btn btn-primary0 event-btn">Book Event <img src="{{asset('assets/images/arrow-diag.svg')}}" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{asset('assets/images/kalkata.png')}}" class="card-img-top" alt="...">
                                        <div class="card-body card-img-overlayed">
                                            <h5 class="card-title">Kolkata</h5>
                                            <a href="#" class="btn btn-primary0 event-btn">Book Event <img src="{{asset('assets/images/arrow-diag.svg')}}" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{asset('assets/images/punjab.png')}}" class="card-img-top" alt="...">
                                        <div class="card-body card-img-overlayed">
                                            <h5 class="card-title">Punjab</h5>
                                            <a href="#" class="btn btn-primary0 event-btn">Book Event <img src="{{asset('assets/images/arrow-diag.svg')}}" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="howitworks mt-5 mb-5">
            <div class="container py-5">
                <h2 class="align-center mt-4 mb-4">How It Works</h2>
                <ul class="center">
                    <li>Each online speed dating event lasts approximately 45 minutes.</li>
                    <li>Rigorous profile screening and a phone call ensure only a select few are approved for each dating event.</li>
                    <li>Following the hosts' introduction, engage in a series of five-minute one-on-one dates.</li>
                    <li>Rate each date and indicate your interest by liking or disliking profiles after each interaction.</li>
                    <li>After all dates, connect via NJS chat with those you clicked with.</li>
                </ul>
                <!-- <p class="success-rate mt-5 mb-2">Success Rate</p>
                <p class="p-desc mb-5">On average, 95% of people find someone they are interested in, significantly increasing your<br>
                    chances of finding a meaningful connection.</p> -->
            </div>
        </section>

        <section class="security-feat mt-5 mb-5">
            <div class="container-fluid py-5">
                <h2 class="align-center my-4">Security Features</h2>
                <p class="p-desc mt-5 mb-2">At NotJustSwipe, we prioritize your safety with robust security measures:</p>
            </div>
            <div class="container-fluid py-5">
                <div class="row vp-center">
                    <div class="col-md-6"><img src="{{asset('assets/images/sf-1.png')}}" alt=""></div>
                    <div class="col-md-6">
                        <div class="hcenter">
                            <h2 class="h2heading">Verified Profiles:</h2>
                            <p class="sub-head">No fake Profile</p>
                            <p class="p-para">Each profile is verified through LinkedIn and further screened via phone calls to ensure authenticity and quality.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid py-5">
                <div class="row vp-center">
                    <div class="col-md-6">
                        <div class="hcenter">
                            <h2 class="h2heading">Secure Environment:</h2>
                            <p class="sub-head">Safety For Woman</p>
                            <p class="p-para">Our platform prohibits screenshots during events, ensuring a respectful and secure experience.</p>
                            <p class="p-para">Eliminate the risk of unwanted attention and stalking in physical events.</p>
                        </div>
                    </div>
                    <div class="col-md-6 justify-end"><img src="{{asset('assets/images/sf-2.png')}}" alt=""></div>
                </div>
            </div>
            <!-- <div class="container-fluid py-5">
                <div class="row vp-center">
                    <div class="col-md-6"><img src="{{asset('assets/images/sf-3.png')}}" alt=""></div>
                    <div class="col-md-6">
                        <div class="hcenter">
                            <h2 class="h2heading">Virtual Safety:</h2>
                            <p class="sub-head">Protecting Your Virtual Space</p>
                            <p class="p-para">Eliminate the risk of unwanted attention and stalking in physical events.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-5">
                <div class="row vp-center">
                    <div class="col-md-6">
                        <div class="hcenter">
                            <h2 class="h2heading">Real-time Support:</h2>
                            <p class="sub-head">Instant Assistance</p>
                            <p class="p-para">Access to immediate assistance and reporting options ensures a swift response to any concerns.</p>
                        </div>
                    </div>
                    <div class="col-md-6 justify-end"><img src="{{asset('assets/images/sf-4.png')}}" alt=""></div>
                </div>
            </div> -->
        </section>

        <section class="testimonial-main">
            <div class="container my-5">
                <h2 class="align-center my-4">Testimonials</h2>
                <div id="testimonialID" class="carousel carousel-dark slide carousel-fade0" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#testimonialID" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#testimonialID" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#testimonialID" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval0="10000">
                            <img src="{{asset('assets/images/testi-1.png')}}" class="d-block w-30 testi-img" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="image-quote"> <img src="{{asset('assets/images/carbon_quotes.svg')}}" /></div>
                                <h5>Mahima Malhotra, 29</h5>
                                <p class="city">Mumbai</p>
                                <p class="starrating"><img src="{{asset('assets/images/stars.svg')}}" alt="" /></p>
                                <p>"Just Not Swipe revolutionized my online dating experience! No more mindless swiping - just genuine connections based on shared interests. User-friendly interface, diverse community, and meaningful matches. Highly recommend!"</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{asset('assets/images/testi-1.png')}}" class="d-block w-30 testi-img" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="image-quote"> <img src="{{asset('assets/images/carbon_quotes.svg')}}" /></div>
                                <h5>Title 2, 30</h5>
                                <p class="city">Mumbai</p>
                                <p class="starrating"><img src="{{asset('assets/images/stars.svg')}}" alt="" /></p>
                                <p>"Just Not Swipe revolutionized my online dating experience! No more mindless swiping - just genuine connections based on shared interests. User-friendly interface, diverse community, and meaningful matches. Highly recommend!"</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/images/testi-1.png')}}" class="d-block w-30 testi-img" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="image-quote"> <img src="{{asset('assets/images/carbon_quotes.svg')}}" /></div>
                                <h5>Title 3, 31</h5>
                                <p class="city">Mumbai</p>
                                <p class="starrating"><img src="{{asset('assets/images/stars.svg')}}" alt="" /></p>
                                <p>"Just Not Swipe revolutionized my online dating experience! No more mindless swiping - just genuine connections based on shared interests. User-friendly interface, diverse community, and meaningful matches. Highly recommend!"</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialID" data-bs-slide="prev">
                        <img src="{{asset('assets/images/testi-arw-left.svg')}}" />
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialID" data-bs-slide="next">
                        <img src="{{asset('assets/images/testi-arw-right.svg')}}" />
                    </button>
                </div>
            </div>
        </section>

        <section class="faq-main py-5">
            <div class="container">
                <h2 class="align-center my-4">Frequently asked questions</h2>
                <p class="p-desc mt-0 mb-4">Hear from our delight users</p>
                <div class="accordion faq-inner my-5" id="faq">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Q 1. What makes NotJustSwipe different from other dating platforms?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq">
                            <div class="accordion-body">
                                <p>Unlike traditional apps, we eliminate endless swiping by letting you meet hand-picked matches in virtual speed dating events. We combine the best of dating/matrimonial sites and traditional matchmaking service (Rem Seema Aunty’s matchmaking) . Our focus on authenticity, premium profiles, and meaningful connections sets us apart.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q 2. How does NotJustSwipe ensure the authenticity of its members?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq">
                            <div class="accordion-body">
                                <p>We prioritize quality and authenticity. Each profile is carefully verified through professional and social media links, and further screened through a phone call. Only approved members gain access to our events, ensuring you connect with genuine individuals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q 3. How are matches decided during the events?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq">
                            <div class="accordion-body">
                                <p>As part of user registration, we call you and understand your requirements. Based on mutual interest, we offer you hand-picked matches to meet and connect. After each virtual speed date, both participants can indicate interest, and can chat with mutual matches. </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Q 4. What happens if I don’t connect with anyone during the event?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq">
                            <div class="accordion-body">
                                <p>Our goal is to facilitate meaningful connections. If you don’t find a match and want to delete your profile, we will offer you 100% refund. </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Q 5. Can I attend events for cities other than my own?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq">
                            <div class="accordion-body">
                                <p>Yes, you can attend events in other cities if you’re open to long-distance connections. However, we recommend starting with your local city for convenience and nearby matches.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Q 6. What if I feel uncomfortable during an event?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faq">
                            <div class="accordion-body">
                                <p>Your comfort is our priority. Each event is monitored to ensure a safe and respectful environment. If you face any issues, our support team is readily available to assist.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>



    @include("includes/footer")

    @include("includes/bottom")
    <!-- jQuery and Slick JS -->
    <script type="text/javascript" src="{{asset('assets/js/slick.min.js')}}"></script>


    <script>
        $(document).ready(function() {
            $('#cardCarousel').carousel({
                interval: 3000,
                pause: 'hover'
            });
        });
    </script>
   <!-- <script>
        $(document).ready(function() {
            $('.home_slider').slick({
                centerMode: true, // Enable center mode
                centerPadding: '60px', // Padding around the center slide
                slidesToShow: 3, // Show 3 slides at a time
                arrows: true, // Enable arrows
                autoplay: false, // Autoplay the slides
                autoplaySpeed: 2000, // Autoplay speed in milliseconds
                speed: 500, // Smooth slide transition speed
                responsive: [{
                        breakpoint: 768, // For screens <= 768px
                        settings: {
                            arrows: true, // Hide arrows on small screens
                            centerMode: true,
                            centerPadding: '40px', // Reduce padding for smaller screens
                            slidesToShow: 3 // Show 3 slides on smaller screens
                        }
                    },
                    {
                        breakpoint: 480, // For screens <= 480px
                        settings: {
                            arrows: true, // Hide arrows on very small screens
                            centerMode: true,
                            centerPadding: '40px', // Reduce padding
                            slidesToShow: 1 // Show 1 slide on very small screens
                        }
                    }
                ]
            });
        });
    </script> -->

<script>
$(document).ready(function() {
    var $slider = $('.home_slider');

    // Initialize the slick slider
    $slider.slick({
        centerMode: true, // Enable center mode
        centerPadding: '60px', // Padding around the center slide
        slidesToShow: 3, // Show 3 slides at a time
        arrows: true, // Enable arrows
        autoplay: false, // Autoplay the slides
        autoplaySpeed: 2000, // Autoplay speed in milliseconds
        speed: 500, // Smooth slide transition speed
        responsive: [{
                breakpoint: 768, // For screens <= 768px
                settings: {
                    arrows: true, // Enable arrows on smaller screens
                    centerMode: true,
                    centerPadding: '40px', // Reduce padding for smaller screens
                    slidesToShow: 3 // Show 3 slides on smaller screens
                }
            },
            {
                breakpoint: 480, // For screens <= 480px
                settings: {
                    arrows: true, // Enable arrows on very small screens
                    centerMode: true,
                    centerPadding: '40px', // Reduce padding
                    slidesToShow: 1 // Show 1 slide on very small screens
                }
            }
        ]
    });

    // Hide the previous arrow by default
    $('.slick-prev').hide();

    // Hide arrows when at the first or last slide
    $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        // Check if we are at the first slide
        if (nextSlide === 0) {
            $('.slick-prev').hide(); // Hide the 'previous' arrow
        } else {
            $('.slick-prev').show(); // Show the 'previous' arrow
        }

        // Check if we are at the last slide
        if (nextSlide === slick.slideCount - 1) {
            $('.slick-next').hide(); // Hide the 'next' arrow
        } else {
            $('.slick-next').show(); // Show the 'next' arrow
        }
    });

    // Initialize by hiding the previous arrow if on the first slide
    $slider.on('init', function(event, slick) {
        if (slick.currentSlide === 0) {
            $('.slick-prev').hide(); // Hide the 'previous' arrow on the first slide
        } else {
            $('.slick-prev').show(); // Show the 'previous' arrow if not on the first slide
        }

        // Ensure the next arrow visibility is set correctly
        if (slick.currentSlide === slick.slideCount - 1) {
            $('.slick-next').hide(); // Hide the 'next' arrow on the last slide
        } else {
            $('.slick-next').show(); // Show the 'next' arrow if not on the last slide
        }
    });
});


</script>
</body>



</html>