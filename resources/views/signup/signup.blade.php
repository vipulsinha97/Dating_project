<!DOCTYPE html>
<html lang="en">
<head>
    @include("includes/top")
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/homepage-style.css')}}">
</head>
<body>
    @include("includes/header")
    <main>
        <section class="signup-main">
            <div class="container-fluid mt-0">
                <div class="row">
                    <!-- Left Column: Form -->
                    <div class="col-md-6 ver-center">
                        <div class="formleftmain">
                            <h2>Welcome</h2>
                            <div class="para">
                                <p>For your safety and to maintain the authenticity of our community, we require users to sign in via their social media profiles. This helps us verify identities and ensure that only genuine profiles are allowed to participate in our events. This information is kept private and your social media details are not shared.</p>
                            </div>
                            <div class="mt-3 social-btns">
                                <a href="{{URL::to('/signup-details')}}" class="btn mb-4 btn-outline"><img src="{{asset('assets/images/logos_facebook.svg')}}" /> Sign up with Facebook</a>
                            </div>
                            <div class="mt-3 social-btns">
                                <a href="{{URL::to('/signup-details')}}" class="btn mb-4 btn-outline"><img src="{{asset('assets/images/insta.svg')}}" style="width: 24px;height: 24px;" /> Sign up with Instagram</a>
                            </div>
                            <div class="group-66">
                                <div class="line-13">
                                </div>
                                <span class="or">
                                    OR
                                </span>
                                <div class="line-14">
                                </div>
                            </div>
                            <div class="form-main mb-3">
                                <a href="{{URL::to('/signup-details')}}" class="btn btn-primary0 btn-geen">Already have an account</a>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column: Image -->
                    <div class="col-md-6">
                        <img src="{{asset('assets/images/signup-banner.jpg')}}" class="img-fluid fh" alt="Placeholder Image">
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include("includes/footer")
    @include("includes/bottom")
    <script src="{{asset('assets/js/homepage-script.js')}}"></script>
</body>
</html>