<!DOCTYPE html>
<html lang="en">

<head>
    @include("includes/top")
    <link rel="stylesheet" type="text/css" href="assets/css/homepage-style.css">
</head>

<body>
    @include("includes/header")
    <main>
        <section class="signup-main login-main">
            <div class="container-fluid mt-0">         
                <div class="row">
                    <!-- Left Column: Form -->
                    <div class="col-md-6 ver-center">
                        <div class="formleftmain">
                            <h2>Welcome Back !</h2>
                            @if(count($errors) > 0)
            @foreach( $errors->all() as $message )
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="alert alert-danger display-hide" style="text-align:center;">
                        <button class="close" data-close="alert"></button>
                        <span>{{ $message }}</span>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
                            <p class="plz-login">Please login to your account</p>
                            <form class="form-main" action="{{ route('loginPost') }}" method="post" >
                            @csrf
                            <div class="mt-3 social-btns">
                                <a href="{{URL::to('/signup-details')}}" class="btn mb-4 btn-outline"><img src="{{asset('assets/images/logos_facebook.svg')}}" /> Login  with Facebook</a>
                                <a href="{{URL::to('/signup-details')}}" class="btn mb-4 btn-outline"><img src="{{asset('assets/images/insta.svg')}}" style="width: 24px;height: 24px;" /> Login with Instagram</a>
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
                            <div class="mb-5 bb-1">
                                    <div class="input-group">
                                        <span class="input-group-text"><img src="assets/images/ion_mail-outline.svg" /></span>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                                    </div>
                                </div>

                                <div class="mb-5 bb-1">
                                    <div class="input-group">
                                        <span class="input-group-text"><img src="assets/images/mynaui_lock-password.svg" /></span>
                                        <input type="password" name="password" class="form-control pass" id="password" placeholder="Enter your password">
                                        <span class="input-group-text toggle-password" id="togglePassword1" onclick="togglePassword('password',this)"><img src="assets/images/mage_eye-off.svg" /></span>
                                    </div>
                                </div>

                                <div class="mb-4 form-check-main">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="rememberMe">
                                        <label class="form-check-label remember-me" for="rememberMe">Remember Me</label>
                                    </div>
                                    <div class="mb-4">
                                        <a href="#" class="forget-password">Forgot Password?</a>
                                    </div>
                                </div>
                                <!-- <a href="#" class="btn btn-primary0 btn-geen">Login</a> -->
                                <button type="submit" class="btn btn-primary0 btn-geen">Login</button>

                                <p class="mt-3"><span>Don't have an account?</span><span class="blue"><a href="/signup.php"> Sign up</a></span></p>
                            </form>
                        </div>
                    </div>

                    <!-- Right Column: Image -->

                    <div class="col-md-6">
                        <img src="assets/images/signup-banner.jpg" class="img-fluid fh" alt="Placeholder Image">
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include("includes/footer")
    @include("includes/bottom")

    <script src="assets/js/homepage-script.js"></script>
</body>

</html>