<!doctype html>
<html lang="en">

<head>
    @include("includes/top")
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/homepage-style.css')}}">
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

        <section class="bgimg">
            <div class="container">
                <h1>Carousel Testing</h1>
                <div class="wrapper">
                    <div class="center-slider">
                        <div>Slide 1</div>
                        <div>Slide 2</div>
                        <div>Slide 3</div>
                        <div>Slide 4</div>
                        <div>Slide 5</div>
                        <div>Slide 6</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="njs-speeddate mt-5 mb-5">
            <div class="container">
                <h2 class="align-center mt-4 mb-4">NJS Speed Dating</h2>
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
                                            <h5 class="card-title">Panjab</h5>
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
            <div class="container-fluid py-5">
                <h2 class="align-center mt-4 mb-4">How It Works</h2>
                <ul class="center">
                    <li>Each online speed dating event lasts approximately 45 minutes.</li>
                    <li>Rigorous profile screening and a phone call ensure only a select few are approved for each dating event.</li>
                    <li>Following the hosts' introduction, engage in a series of five-minute one-on-one dates.</li>
                    <li>Rate each date and indicate your interest by liking or disliking profiles after each interaction.</li>
                    <li>After all dates, connect via NJS chat with those you clicked with.</li>
                </ul>
                <p class="success-rate mt-5 mb-2">Success Rate</p>
                <p class="p-desc mb-5">On average, 95% of people find someone they are interested in, significantly increasing your<br>
                    chances of finding a meaningful connection.</p>
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
                            <p class="p-para">Our platform prohibits screenshots, downloads, and nudity during events, ensuring a respectful and secure experience.</p>
                        </div>
                    </div>
                    <div class="col-md-6 justify-end"><img src="{{asset('assets/images/sf-2.png')}}" alt=""></div>
                </div>
            </div>
            <div class="container-fluid py-5">
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
            </div>
        </section>

        <section class="testimonial-main">
            <div class="container my-5">
            <div id="testimonialID" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialID" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialID" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonialID" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{asset('assets/images/testi-1.png')}}" class="d-block w-30" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Mahima Malhotra, 29</h5>
                            <p class="city">Mumbai</p>
                            <p class="starrating"><img src="#" alt="" /></p>
                            <p>"Just Not Swipe revolutionized my online dating experience! No more mindless swiping - just genuine connections based on shared interests. User-friendly interface, diverse community, and meaningful matches. Highly recommend!"</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{asset('assets/images/testi-1.png')}}" class="d-block w-30" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/images/testi-1.png')}}" class="d-block w-30" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialID" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialID" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            </div>
        </section>
    </main>

    @include("includes/footer")
    @include("includes/bottom")
    <script>
        $(document).ready(function() {
            $('#cardCarousel').carousel({
                interval: 3000,
                pause: 'hover'
            });
        });
    </script>
</body>

</html>