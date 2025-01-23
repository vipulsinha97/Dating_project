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
                <!-- <div class="row">
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
                </div> -->
                <!-- <div class="row">
                    <div class="col-md-6">
                        <h3 id="city-heading">Mumbai Events:</h3>
                    </div>
                    <div class="col-md-6 align-right mob-center">
                        <span class="city-drpdwn dropdown">
                            <button type="button" class="btn btn-citydrpdwn dropdown-toggle" data-bs-toggle="dropdown">
                                See All Cities
                            </button>
                            <ul class="dropdown-menu" id="city-dropdown">
                                <li><a class="dropdown-item" href="javascript:;" onclick="changeHeading('Mumbai')">Mumbai</a></li>
                                <li><a class="dropdown-item" href="javascript:;" onclick="changeHeading('Delhi')">Delhi</a></li>
                                <li><a class="dropdown-item" href="javascript:;" onclick="changeHeading('Banglore')">Banglore</a></li>
                            </ul>
                        </span>
                    </div>
                </div> -->


            </div>
        </section>

        <!-- NOTE THIS IS SAMPLE Design for VIPUL-->
        <section>
            <div class="container-fluid py-5">
                <div class="row">
                    <div class="col-md-6">
                        <h3>{{ $currentLocation->location_name ?? '' }} Events:</h3>
                    </div>
                    <div class="col-md-6 align-right mob-center">
                        <!-- <span class="seeall">See All</span> -->
                        <span class="city-drpdwn dropdown">
                            <button type="button" class="btn btn-citydrpdwn dropdown-toggle" data-bs-toggle="dropdown">
                            See All Cities
                            </button>
                            <ul class="dropdown-menu">
                                @foreach ($location as $loc)
                                    <li><a class="dropdown-item" href="{{ URL::to('/event') }}/{{$loc->id}}" data-target="{{ $loc->location_name }}">{{ $loc->location_name }}</a></li>
                                @endforeach
                            </ul>
                        </span>
                    </div>
                </div>

                <div id="{{ $currentLocation->location_name ?? '' }}" class="event-div" style="">
                    <div class="mumbai">
                        @php $i = 0; @endphp
                
                        @if(!empty($ageGroup) && !empty($event))
                            @foreach ($ageGroup as $group)
                                <!-- Age Group: (25-30) START -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Age Group: ({{ $group->starting_age }}-{{ $group->ending_age }})</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="events-carsouel-main">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="events-slider" class="owl-carousel events-slider">
                                                            @foreach ($event as $singleEvent)
                                                                @if(isset($singleEvent->starting_age, $group->starting_age) && $singleEvent->starting_age === $group->starting_age)
                                                                    <div class="post-slide">
                                                                        <div class="post-img">
                                                                            @if(!empty($singleEvent->featured_image))
                                                                            <img src="{{ asset('storage/uploads/event_feature_image/' . $singleEvent->featured_image) }}" 
                                                                            alt="Featured Image for {{ $singleEvent->featured_image }}" 
                                                                            style="max-width: 100%; height: auto;">
                                                                            @else
                                                                            <img src="{{ asset('assets/images/me1.png') }}" alt="me1.png">
                                                                            @endif
                                                                            <div class="eventtime">
                                                                                <span class="session">{{ $singleEvent->event_duration }} min</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <h3 class="post-title">
                                                                                <a href="#">{{ $singleEvent->title }}</a>
                                                                            </h3>
                                                                            <p class="post-description">{{ substr($singleEvent->description, 10) }}</p>
                                                                            @php
                                                                                $timestamp = strtotime($singleEvent->event_date);
                                                                                $formattedDate = date("F j", $timestamp);
                                                                                $dayOfWeek = date("D", $timestamp);
                                                                            @endphp
                                                                            <div class="date-time-main">
                                                                                <span class="post-date">
                                                                                    <img src="{{ asset('assets/images/edate.svg') }}" alt="">{{ $formattedDate }}
                                                                                </span>
                                                                                <span class="post-time">
                                                                                    <img src="{{ asset('assets/images/etime.svg') }}" alt="">{{ $dayOfWeek }} - {{ $singleEvent->event_start_time }}
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="buytkt">
                                                                            <span class="bt">
                                                                                <a href="{{URL::to('/event/details/'. $singleEvent->id)}}" class="book-ticket">Book Ticket</a>
                                                                            </span>
                                                                            <span class="bb">
                                                                                <a href="{{URL::to('/event/details/'. $singleEvent->id)}}" class="book-btn">
                                                                                    <img src="{{ asset('assets/images/arw-diag.svg') }}" alt="">
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Age Group: (25-30) END -->
                            @endforeach
                        @else
                            <p>No events or age groups available.</p>
                        @endif
                    </div>
                </div>                
            </div>
        </section>

    </main>
    @include("includes/footer")
    @include("includes/bottom")

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>

        $(document).ready(function() {
            $(".events-slider").owlCarousel({
                items: 3,
                responsive: {
                    0: {
                        items: 1 // 1 item on screens smaller than 768px
                    },
                    768: {
                        items: 2 // 2 items on screens from 768px to 979px
                    },
                    980: {
                        items: 3 // 3 items on screens from 980px to 1199px
                    },
                    1200: {
                        items: 3 // 3 items on screens larger than 1199px
                    }
                },
                navigation: true,
                nav: true,
                navigationText: ["Next", "Prev"],
                // navText: ["‹", "›"],
                // navText: [
                //     '<img src="assets/images/a1.svg" alt="Previous" style="width: 30px; height: 30px;">',
                //     '<img src="assets/images/a2.svg" alt="Next" style="width: 30px; height: 30px;">'
                // ],
                navText: [
                    '<img src="{{ asset('assets/images/a1.svg') }}" alt="Previous" style="width: 30px; height: 30px;">',
                    '<img src="{{ asset('assets/images/a2.svg') }}" alt="Next" style="width: 30px; height: 30px;">'
                ], 
                pagination: true,
                loop: false,
                dots: true,
                autoPlay: true
            });

            $("#events-slider2").owlCarousel({
                items: 3,
                responsive: {
                    0: {
                        items: 1 // 1 item on screens smaller than 768px
                    },
                    768: {
                        items: 2 // 2 items on screens from 768px to 979px
                    },
                    980: {
                        items: 3 // 3 items on screens from 980px to 1199px
                    },
                    1200: {
                        items: 3 // 3 items on screens larger than 1199px
                    }
                },
                navigation: true,
                nav: true,
                navigationText: ["Next", "Prev"],
                // navText: ["‹", "›"],
                navText: [
                    '<img src="assets/images/a1.svg" alt="Previous" style="width: 30px; height: 30px;">',
                    '<img src="assets/images/a2.svg" alt="Next" style="width: 30px; height: 30px;">'
                ],
                pagination: true,
                loop: false,
                dots: true,
                autoPlay: true
            });
        });
        // Change the Event City heading text dynamically.
        function changeHeading(cityName) {
            var heading = document.getElementById("city-heading");
            heading.textContent = cityName + " Events:";
        }
    </script>

    <script>
        // jQuery to show and hide the divs based on dropdown selection
        $(document).ready(function() {
            $('.dropdown-item').click(function() {
                var target = $(this).data('target');
                $('.event-div').hide();
                $('#' + target).show();
            });
        });
    </script>
</body>



</html>