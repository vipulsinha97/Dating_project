<!DOCTYPE html>
<html lang="en">
<head>
    @include("includes/top")
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/homepage-style.css')}}">
</head>
<body>
    @include("includes/header")
    <main>

    <!-- Button to Open the Modal START -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#yourTrust">
        Your Trust Our Priority
        </button>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#receivedModal">
        receivedModal
        </button> -->
     <!-- Button to Open the Modal END -->

        <section class="signup-details-main">
            <div class="container-fluid mt-0">
                <div class="row justify-content-center">
                    <div id="error" class="error-message" style="display: none;">
                        <center>Please fill all the fields for registration</center>
                    </div>
                    <div class="col-md-8">
                        <form class="form-main" id="multiStepForm" enctype="multipart/form-data">
                            <!-- Step 1 -->
                            <div class="form-step" id="step1">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/intr-iconpp1.svg')}}" />
                                    <h2>Professional profiles</h2>
                                    <p class="weensure">We ensure genuineness by verifying social and professional profiles. Connect your LinkedIn for verification.</p>
                                </div>
                                <div class="mt-3 mb-5 social-btns w-40">
                                    <button class="btn mb-4 btn-outline"><img class="cw" src="{{asset('assets/images/logos_linkdin.svg')}}" /> Connect with Linkedin</button>
                                </div>
                                <div class="mb-4">
                                    <label for="comment">Don’t have LinkedIn? Leave a comment for profile assessment:</label>
                                    <div class="input-group bb-1-light0 bbr">
                                        <textarea id="comment" class="form-control" placeholder="Comment" aria-label="Comment" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" class="arrow-icon" onclick="nextStep(2)">
                                </div>
                            </div>
                            <!-- Step 2 -->
                            <div class="form-step" id="step2" style="display: none;">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/intr-icon1.svg')}}" />
                                    <h2>Introduce yourself</h2>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="text" class="form-control firstName" id="firstName" name="firstName" placeholder="First Name">
                                    </div>
                                    <div id="error-firstName" class="error-message"></div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="text" class="form-control lastName" id="lastName" name="lastName" placeholder="Last Name">
                                    </div>
                                    <div id="error-lastName" class="error-message"></div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="email" class="form-control email" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div id="error-email" class="error-message"></div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="text" class="form-control phone" id="phone" name="phone" placeholder="Phone No.">
                                    </div>
                                    <div id="error-phone" class="error-message"></div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="date" class="form-control dob" id="dob" name="dob" placeholder="Date of Birth">
                                    </div>
                                    <div id="error-dob" class="error-message"></div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="password" class="form-control createpass" id="createpass" name="createpass" placeholder="Create password">
                                    </div>
                                    <div id="error-createpass" class="error-message"></div>
                                </div>
                                <div id="pswd_info">
                                    <h6>Password must meet the following requirements:</h6>
                                    <ul>
                                        <li id="letter" class="invalid">At least <strong>one small letter</strong></li>
                                        <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                                        <li id="number" class="invalid">At least <strong>one number</strong></li>
                                        <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
                                        <li id="special" class="invalid">At least <strong>one special characters</strong></li>
                                    </ul>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="password" class="form-control confirmpass" id="confirmpass" name="confirmpass" placeholder="Confirm password">
                                    </div>
                                    <lable id="message"></lable>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(1)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" id="next" class="arrow-icon" onclick="nextStep(3)">
                                </div>
                            </div>
                            <!-- Step 3  - GENDER-->
                            <div class="form-step" id="step3" style="display: none;">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/gender.svg')}}" />
                                    <h2>Gender</h2>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="male" class="gender" name="gender" value="male">
                                        <label for="male" class="option-button">Male</label>
                                        <input type="radio" id="female" class="gender" name="gender" value="female">
                                        <label for="female" class="option-button">Female</label>
                                    </div>
                                    <div id="error-gender" class="error-message"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(2)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" class="arrow-icon" onclick="nextStep(4)">
                                </div>
                            </div>
                            <!-- Step 4 - Location-->
                            <div class="form-step" id="step4" style="display: none;">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/location.svg')}}" />
                                    <h2>Location</h2>
                                </div>
                                <div class="mb-4">
                                    <label for="plocation">Which state do you live in?</label>
                                    <div class="input-group0 bb-1-light0 bbr0">
                                        <div class="mb-4">
                                            <div class="select-container">
                                                <select id="height-select" class="state" name="state">
                                                <option value="">Select a state</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Ladakh">Ladakh</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Puducherry">Puducherry</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                            <div id="error-state" class="error-message"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="plocation">Which city do you live in?</label>
                                    <div class="input-group0 bb-1-light bbr0">
                                        <input type="text" class="form-control plocation" id="plocation" name="city" placeholder="Enter your permanent location">
                                    </div>
                                    <div id="error-plocation" class="error-message"></div>
                                </div>
                                <div class="mb-4">
                                    <label for="clocation">Where are you originally from (City / State) </label>
                                    <div class="input-group0 bb-1-light bbr0">
                                        <input type="text" class="form-control address" id="address" name="address" placeholder="Enter your current location">
                                    </div>
                                    <div id="error-address" class="error-message"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(3)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" class="arrow-icon" onclick="nextStep(5)">
                                </div>
                            </div>
                            <!-- Step 5  Height-->
                            <div class="form-step" id="step5" style="display: none;">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/height.svg')}}" />
                                    <h2>What’s your Height?</h2>
                                </div>
                                <div class="mb-4">
                                    <div class="select-container">
                                        <select id="height-select" class="height" name="height">
                                            <option value="5ft">5 feet</option>
                                            <option value="5ft1in">5 feet 1 inch</option>
                                            <option value="5ft2in">5 feet 2 inches</option>
                                            <option value="5ft3in">5 feet 3 inches</option>
                                            <option value="5ft4in">5 feet 4 inches</option>
                                            <option value="5ft5in">5 feet 5 inches</option>
                                            <option value="5ft6in">5 feet 6 inches</option>
                                            <option value="5ft7in">5 feet 7 inches</option>
                                            <option value="5ft8in">5 feet 8 inches</option>
                                            <option value="5ft9in">5 feet 9 inches</option>
                                            <option value="5ft10in">5 feet 10 inches</option>
                                            <option value="5ft11in">5 feet 11 inches</option>
                                            <option value="6ft0in">6 feet 0 inches</option>
                                            <option value="6ft1in">6 feet 1 inch</option>
                                            <option value="6ft2in">6 feet 2 inches</option>
                                            <option value="6ft3in">6 feet 3 inches</option>
                                            <option value="6ft4in">6 feet 4 inches</option>
                                            <option value="6ft5in">6 feet 5 inches</option>
                                            <option value="6ft6in">6 feet 6 inches</option>
                                        </select>
                                    </div>
                                    <div id="error-height" class="error-message"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(4)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" class="arrow-icon" onclick="nextStep(6)">
                                </div>
                            </div>
                            <!-- Step 6 - Professional Details  -->
                            <div class="form-step" id="step6" style="display: none;">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/professional-details.svg')}}" />
                                    <h2>Professional Details</h2>
                                </div>
                                <div class="mb-4">
                                    <div class="select-container">
                                        <select id="pd-select" class="profession" name="profession">
                                            <optgroup class="optlabel" label="Choose Your Profession">
                                                <option class="dnone" value="" disabled selected>Choose Your Profession</option> 
                                                <option value="Finance">Finance</option>
                                                <option value="Sales">Sales</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="Information technology">Information technology</option>
                                                <option value="Human resources">Human resources</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Operations">Operations</option>
                                                <option class="more" value="">Others..</option>
                                                <!-- Add more options as needed -->
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div id="error-profession" class="error-message"></div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="text" class="form-control" id="education" name="education" placeholder="Education">
                                    </div>
                                    <div id="error-education" class="error-message"></div>
                                </div>
                                <div class="mb-4">
                                    <div class="select-container">
                                        <select id="sal-select" class="salary" name="salary">
                                            <optgroup class="optlabel" label="Chose Your Salary  Package">
                                                <option class="dnone" value="" disabled selected>Salary</option>
                                                <option value="< 5 lacs"> < 5 lacs </option>
                                                <option value="5 lacs - 10 lacs">5 lacs - 10 lacs</option>
                                                <option value="10 lacs - 15 lacs">10 lacs - 15 lacs</option>
                                                <option value="15 lacs - 20 lacs">15 lacs - 20 lacs</option>
                                                <option value="20 lacs - 25 lacs">20 lacs - 25 lacs</option>
                                                <option value="25 lacs - 50 lacs">25 lacs - 50 lacs</option>
                                                <option value="> 50 lacs"> > 50 lacs </option>
                                                <!-- Add more options as needed -->
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div id="error-salary" class="error-message"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(5)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" class="arrow-icon" onclick="nextStep(7)">
                                </div>
                            </div>
                            <!-- Step 7  - Do you Drink?-->
                            <div class="form-step" id="step7" style="display: none;">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/drinks.svg')}}" />
                                    <h2>Do you Drink?</h2>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" class="drink" id="yes" name="drink" value="yes">
                                        <label for="yes" class="option-button">Yes</label>
                                        <input type="radio" class="drink" id="no" name="drink" value="no">
                                        <label for="no" class="option-button">No</label>
                                        <input type="radio" class="drink" id="occasionally" name="drink" value="occasionally">
                                        <label for="occasionally" class="option-button">Occasionally</label>
                                    </div>
                                    <div id="error-drink" class="error-message"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(6)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" class="arrow-icon" onclick="nextStep(8)">
                                </div>
                            </div>

                            <!-- Step 8  -Do you Smoke? -->
                            <div class="form-step" id="step8" style="display: none;">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/smoke.svg')}}" />
                                    <h2>Do you Smoke?</h2>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="smoke_yes" class="smoke" name="smoke" value="smoke_yes">
                                        <label for="smoke_yes" class="option-button">Yes</label>
                                        <input type="radio" id="smoke_no" class="smoke" name="smoke" value="smoke_no">
                                        <label for="smoke_no" class="option-button">No</label>
                                        <input type="radio" id="smoke_occasionally" class="smoke" name="smoke" value="smoke_occasionally">
                                        <label for="smoke_occasionally" class="option-button">Occasionally</label>
                                    </div>
                                    <div id="error-smoke" class="error-message"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(7)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" class="arrow-icon" onclick="nextStep(9)">
                                </div>
                            </div>

                            <!-- Step 9  -->
                            <div class="form-step" id="step9" style="display: none;">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/hc.svg')}}" />
                                    <h2>Marital status</h2>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="nm" class="relation_status" name="relation_status" value="nm">
                                        <label for="nm" class="option-button">Never married</label>
                                        <input type="radio" id="widow" class="relation_status" name="relation_status" value="widow">
                                        <label for="widow" class="option-button">Widow</label>
                                        <input type="radio" id="divorced" class="relation_status" name="relation_status" value="divorced">
                                        <label for="divorced" class="option-button">Divorced</label>
                                        <input type="radio" id="ad" class="relation_status" name="relation_status" value="awaiting_divorce">
                                        <label for="ad" class="option-button">Awaiting Divorce</label>
                                    </div>
                                    <div id="error-relation_status" class="error-message"></div>
                                </div>
                                <div class="mb-4 mt-5">
                                    <h4 class="redcl-black mb-4">Do you have children?</h4>
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="hc-no" class="hc" name="hc" value="hc-no">
                                        <label for="hc-no" class="option-button">No</label>
                                        <input type="radio" id="hc-yes" class="hc" name="hc" value="hc-yes">
                                        <label for="hc-yes" class="option-button">Yes</label>
                                        <input type="radio" id="hc-ss" class="hc" name="hc" value="hc-ss">
                                        <label for="hc-ss" class="option-button">Yes but staying separately</label>
                                    </div>
                                    <div id="error-hc" class="error-message"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(8)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" class="arrow-icon" onclick="nextStep(10)">
                                </div>
                            </div>

                           <!-- Step 10  -->
                            <div class="form-step" id="step10" style="display: none;">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/yr.svg')}}" />
                                    <h2>Your Religion</h2>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <!-- <input type="radio" id="nm" classs="religion-hinduism" name="religion" value="nm">
                                        <label for="nm" class="option-button">Hinduism</label> -->

                                        <input type="radio" id="religion-hinduism" classs="religion" name="religion" value="religion-hinduism">
                                        <label for="religion-hinduism" class="option-button">Hindu</label>

                                        <input type="radio" id="religion-sikh" classs="religion" name="religion" value="religion-sikh">
                                        <label for="religion-sikh" class="option-button">Sikh</label>

                                        <input type="radio" id="religion-jain" classs="religion" name="religion" value="religion-jain">
                                        <label for="religion-jain" class="option-button">Jain</label>
                                        <input type="radio" id="religion-christian" classs="religion" name="religion" value="religion-christian">
                                        <label for="religion-christian" class="option-button"> Christian</label>
                                        <input type="radio" id="religion-muslim" classs="religion" name="religion" value="religion-muslim">
                                        <label for="religion-muslim" class="option-button"> Muslim</label>
                                        <input type="radio" id="religion-budh" classs="religion" name="religion" value="religion-budh">
                                        <label for="religion-budh" class="option-button"> Buddhist</label>
                                        <input type="radio" id="religion-spritual" classs="religion" name="religion" value="religion-spritual">
                                        <label for="religion-spritual" class="option-button"> Spiritual</label>
                                        <input type="radio" id="religion-others" classs="religion" name="religion" value="religion-others">
                                        <label for="religion-others" class="option-button"> Others</label>
                                    </div>
                                    <div id="error-religion" class="error-message"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(9)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" class="arrow-icon" onclick="nextStep(11)">
                                </div>
                            </div>

                            <!-- Step 11  -->
                            <div class="form-step" id="step11" style="display: none;">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/qa.svg')}}" />
                                    <h2>Let’s get some fun facts for your event</h2>
                                </div>
                                <div class="mb-4">
                                    <label for="qa1">1.	If you were a character in a movie/series, which one would it be and why?</label>
                                    <div class="input-group bb-1-light0 bbr">
                                        <textarea id="qa1-ans" name="qa1" class="form-control qa1" placeholder="Answer" aria-label="qa1-ans" rows="2"></textarea>
                                    </div>
                                    <div id="error-qa1" class="error-message"></div>
                                </div>
                                <div class="mb-4">
                                    <label for="qa2">2.	What is the one quality that really attracts you to someone?</label>
                                    <div class="input-group bb-1-light0 bbr">
                                        <textarea id="qa2-ans" name="qa2" class="form-control qa2" placeholder="Answer" aria-label="qa2-ans" rows="2"></textarea>
                                    </div>
                                    <div id="error-qa2" class="error-message"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(10)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" class="arrow-icon" onclick="nextStep(12)">
                                </div>
                            </div>

                            <!-- Step 12  -->
                            <div class="form-step" id="step12" style="display: none;">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/mynaui_image.svg')}}" />
                                    <h2>Please upload photos.</h2>
                                    <p class="para">Please upload at least two photos from your LinkedIn or Facebook profile. Additionally, take and upload one selfie to verify that your photos are genuine. This helps us maintain a safe and trustworthy community for everyone.</p>
                                </div>
                                <div class="mb-4 mb-5">
                                    <div class="container mt-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="upload-box">
                                                    <label for="file-upload1" class="upload-trigger">
                                                        <div class="upload-icon">+</div>
                                                        <div class="upload-text">Add Image</div>
                                                    </label>
                                                    <input id="file-upload1" type="file" class="image1" name="image[]" accept="image/*" />
                                                    <img id="image-preview1" src="#" alt="Image preview" style="display: none;" />
                                                </div>
                                                <div id="error-image1" class="error-message"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="upload-box">
                                                    <label for="file-upload2" class="upload-trigger">
                                                        <div class="upload-icon">+</div>
                                                        <div class="upload-text">Add Image</div>
                                                    </label>
                                                    <input id="file-upload2" type="file" class="image2" name="image[]" accept="image/*" />
                                                    <img id="image-preview2" src="#" alt="Image preview" style="display: none;" />
                                                </div>
                                                <div id="error-image2" class="error-message"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="upload-box">
                                                    <label for="file-upload3" class="upload-trigger">
                                                        <div class="upload-icon">+</div>
                                                        <div class="upload-text">Add selfie</div>
                                                    </label>
                                                    <input id="file-upload3" type="file" class="image3" name="image[]" accept="image/*" />
                                                    <img id="image-preview3" src="#" alt="Image preview" style="display: none;" />
                                                </div>
                                                <div id="error-image3" class="error-message"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">Note</h4>
                                    <ul class="bullets">
                                        <li>Stay clear of inappropriate content</li>
                                        <li>No nudity. </li>
                                        <li>No fake & Celebrity photo</li>
                                        <li>No information on photo</li>
                                        <li>Stay clear of inappropriate content, else your profile will be rejected.  </li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(11)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" class="arrow-icon" onclick="nextStep(13)">
                                </div>
                            </div>

                           <!-- Step 13  -->
                            <div class="form-step" id="step13" style="display: none;">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/preferences.svg')}}" />
                                    <h2>Partner preference</h2>
                                    <p class="spara">Please enter your key partner preferences which will be used to find the right matches for your event</p>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">Smoke</h4>
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="dmsmoke" class="preferences_smoke" name="preferences_smoke" value="dmsmoke">
                                        <label for="dmsmoke" class="option-button">Doesn’t matter</label>
                                        <input type="radio" id="prefrence-notok" class="preferences_smoke" name="preferences-smoke" value="prefrence-notok">
                                        <label for="prefrence-notok" class="option-button">Not Ok</label>
                                    </div>
                                    <div id="error-preferences_smoke" class="error-message"></div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">Drink</h4>
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="drink-doesnot" class="preferences_drink" name="preferences_drink" value="drink-doesnot">
                                        <label for="drink-doesnot" class="option-button">Doesn’t matter</label>
                                        <input type="radio" id="drink-occasionally" class="preferences_drink" name="preferences_drink" value="drink-occasionally">
                                        <label for="drink-occasionally" class="option-button">Occasionally</label>
                                        <input type="radio" id="drink-notok" class="preferences_drink" name="preferences_drink" value="drink-notok">
                                        <label for="drink-notok" class="option-button">Not Ok</label>
                                    </div>
                                    <div id="error-preferences_drink" class="error-message"></div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">Marital Status</h4>
                                    <div class="input-group bb-1-light0 checkbtn">
                                        <div class="form-check">
                                            <input class="form-check-input preferences_marital_status" type="checkbox" id="status-doesnt-matter" name="preferences_marital_status" value="doesnt-matter">
                                            <label class="form-check-label" for="status-doesnt-matter">
                                                Doesn’t matter
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input preferences_marital_status" type="checkbox" id="status-never-married" name="preferences_marital_status" value="never-married">
                                            <label class="form-check-label" for="status-never-married">
                                                Never Married
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input preferences_marital_status" type="checkbox" id="status-divorced" name="preferences_marital_status" value="divorced">
                                            <label class="form-check-label" for="status-divorced">
                                                Divorced
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input preferences_marital_status" type="checkbox" id="status-awaiting-divorce" name="preferences_marital_status" value="awaiting-divorce">
                                            <label class="form-check-label" for="status-awaiting-divorce">
                                                Awaiting Divorce
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input preferences_marital_status" type="checkbox" id="status-widow" name="preferences_marital_status" value="widow">
                                            <label class="form-check-label" for="status-widow">
                                                Widow
                                            </label>
                                        </div>
                                    </div>
                                    <div id="error-preferences_marital_status" class="error-message"></div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">Profile with children</h4>
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="pwc-doesnot" class="pwc" name="pwc" value="pwc-doesnot">
                                        <label for="pwc-doesnot" class="option-button">Doesn’t matter</label>
                                        <input type="radio" id="pwc-notok" class="pwc" name="pwc" value="pwc-notok">
                                        <label for="pwc-notok" class="option-button">Not Ok</label>
                                        <input type="radio" id="pwc-occasionally" class="pwc" name="pwc" value="pwc-occasionally">
                                        <label for="pwc-occasionally" class="option-button"> If not living together</label>
                                    </div>
                                    <div id="error-pwc" class="error-message"></div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">Religion</h4>
                                    <div class="input-group bb-1-light0 checkbtn">
                                        <div class="form-check">
                                            <input class="form-check-input pref_religion" type="checkbox" id="pr-doesntmatter" name="pref_religion" value="pr-doesntmatter">
                                            <label class="form-check-label" for="pr-doesntmatter">
                                                Doesn’t matter
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input pref_religion" type="checkbox" id="pr-hinduism" name="pref_religion" value="pr-hinduism">
                                            <label class="form-check-label" for="pr-hinduism">
                                            Hindu 
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input pref_religion" type="checkbox" id="pr-sikh" name="pref_religion" value="pr-sikh">
                                            <label class="form-check-label" for="pr-sikh">
                                                Sikh
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input pref_religion" type="checkbox" id="pr-jain" name="pref_religion" value="pr-jain">
                                            <label class="form-check-label" for="pr-jain">
                                                Jain
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input pref_religion" type="checkbox" id="pr-christ" name="pref_religion" value="pr-christ">
                                            <label class="form-check-label" for="pr-christ">
                                            Christian
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input pref_religion" type="checkbox" id="pr-muslim" name="pref_religion" value="pr-muslim">
                                            <label class="form-check-label" for="pr-muslim">
                                                Muslim
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input pref_religion" type="checkbox" id="pr-budh" name="pref_religion" value="pr-budh">
                                            <label class="form-check-label" for="pr-budh">
                                                Buddhist
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input pref_religion" type="checkbox" id="pr-spiritual" name="pref_religion" value="pr-spiritual">
                                            <label class="form-check-label" for="pr-spiritual">
                                                Spiritual
                                            </label>
                                        </div>
                                    </div>
                                    <div id="error-pref_religion" class="error-message"></div>
                                </div>
                                <!-- <div class="mb-4">
                                    <h4 class="redcl">what are you looking for ?</h4>
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="lookingfor-casual" class="lookingfor" name="lookingfor" value="lookingfor-casual">
                                        <label for="lookingfor-casual" class="option-button">Casual</label>
                                        <input type="radio" id="lookingfor-longterm" class="lookingfor" name="lookingfor" value="lookingfor-longterm">
                                        <label for="lookingfor-longterm" class="option-button"> long term relationship</label>
                                    </div>
                                    <div id="error-lookingfor" class="error-message"></div>
                                </div> -->
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(12)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" class="arrow-icon" onclick="nextStep(14)">
                                </div>
                            </div>

                            <!-- Step 14  Final-->
                            <div class="form-step" id="step14" style="display: none;">
                                <div class="mb-5 tifle-box">
                                    <img class="mb-2" src="{{asset('assets/images/callu.svg')}}" />
                                    <h2>What is best time to call you?</h2>
                                    <p class="para">To ensure only genuine profiles are admitted to events, we will give you a quick call as part of the screening process</p>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">Choose date</h4>
                                    <div class="input-group bb-1-light">
                                        <input type="date" id="date-picker" name="preferable_date" class="form-control preferable_date">
                                    </div>
                                    <div id="error-preferable_date" class="error-message"></div>
                                </div>
                                <div class="mb-4 mt-5">
                                    <h4 class="redcl">Choose time</h4>
                                    <div class="select-container">
                                        <select id="pd-select" name="preferable_time" class="preferable_time">
                                            <optgroup class="optlabel" label="Choose time">                                            
                                                <option value="08:00 - 09:00">08:00 - 09:00</option>
                                                <option value="09:00 - 10:0">09:00 - 10:00</option>
                                                <option value="10:00 - 11:00">10:00 - 11:00</option>
                                                <option value="11:00 - 12:00">11:00 - 12:00</option>                                   
                                                <!-- Add more options as needed -->
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div id="error-preferable_time" class="error-message"></div>
                                </div>                              
                                <div class="d-flex justify-content-between mt-5">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(13)">
                                    <button type="button" id="submitRegistration" class="btn btn-info0 reg-btnn">Submit</button>
                                    <!-- <img src="{{asset('assets/images/next-blue.svg')}}" id="submitRegistration" alt="Submit" class="arrow-icon" onclick="submitForm(14)"> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
   <!-- @include("includes/footer") -->
    @include("includes/bottom")
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            showStep(1); // Show the first step on page load
        });
        function showStep(step) {
            const steps = document.querySelectorAll('.form-step');
            steps.forEach((element) => {
                element.style.display = 'none';
            });
            document.getElementById(`step${step}`).style.display = 'block';
        }
        function nextStep(step) {
            showStep(step);
        }
        function previousStep(step) {
            showStep(step);
        }

       // Preview upload File
        document.addEventListener('DOMContentLoaded', () => {
            const fileInputs = [{
                    inputId: 'file-upload1',
                    previewId: 'image-preview1'
                },
                {
                    inputId: 'file-upload2',
                    previewId: 'image-preview2'
                },
                {
                    inputId: 'file-upload3',
                    previewId: 'image-preview3'
                }
            ];
            fileInputs.forEach(({
                inputId,
                previewId
            }) => {
                document.getElementById(inputId).addEventListener('change', function(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const img = document.getElementById(previewId);
                            img.src = e.target.result;
                            img.style.display = 'block';
                        }
                        reader.readAsDataURL(file);
                    } else {
                        document.getElementById(previewId).style.display = 'none';
                    }
                });
            });
        });

        $("#submitRegistration").click(function(e) {
            $('#yourTrust').modal('show');
        });

        $("#submitData1").click(function(e) {
            $('#receivedModal').modal('show');
        });
        
        //form action
        $('#submitData2').click(function(e) {
    e.preventDefault();  // Prevent default form submission behavior

    // Collect form data
    var comment = $('#comment').val();
    var firstName = $('.firstName').val();
    var lastName = $('.lastName').val();
    var email = $('.email').val();
    var phone = $('.phone').val();
    var dob = $('.dob').val();
    var createpass = $('.createpass').val();
    var confirmpass = $('.confirmpass').val();
    var gender = $('.gender').val();
    var state = $('.state').val();
    var plocation = $('.plocation').val();
    var address = $('.address').val();
    var height = $('.height').val();
    var profession = $('.profession').val();
    var salary = $('.salary').val();
    var education = $('#education').val();
    var drink = $('.drink').val();
    var smoke = $('.smoke').val();
    var relation_status = $('.relation_status').val();
    var hc = $('.hc').val();
    var religion = $('.religion').val();
    var qa1 = $('.qa1').val();
    var qa2 = $('.qa2').val();
    var preferences_smoke = $('.preferences_smoke').val();
    var preferences_drink = $('.preferences_drink').val();
    var preferences_marital_status = $('.preferences_marital_status').val();
    var pwc = $('.pwc').val();
    var pref_religion = $('.pref_religion').val();
    var lookingfor = $('.lookingfor').val();
    var preferable_date = $('.preferable_date').val();
    var preferable_time = $('.preferable_time').val();

    // Create FormData object
    var formData = new FormData();
    formData.append('comment', comment);
    formData.append('firstName', firstName);
    formData.append('lastName', lastName);
    formData.append('email', email);
    formData.append('phone', phone);
    formData.append('dob', dob);
    formData.append('createpass', createpass);
    formData.append('confirmpass', confirmpass);
    formData.append('gender', gender);
    formData.append('state', state);
    formData.append('plocation', plocation);
    formData.append('address', address);
    formData.append('height', height);
    formData.append('profession', profession);
    formData.append('salary', salary);
    formData.append('education', education);
    formData.append('drink', drink);
    formData.append('smoke', smoke);
    formData.append('relation_status', relation_status);
    formData.append('hc', hc);
    formData.append('religion', religion);
    formData.append('qa1', qa1);
    formData.append('qa2', qa2);
    formData.append('preferences_smoke', preferences_smoke);
    formData.append('preferences_drink', preferences_drink);
    formData.append('preferences_marital_status', preferences_marital_status);
    formData.append('pwc', pwc);
    formData.append('pref_religion', pref_religion);
    formData.append('lookingfor', lookingfor);
    formData.append('preferable_date', preferable_date);
    formData.append('preferable_time', preferable_time);

    // Append files
    formData.append('image1', $('.image1')[0].files[0]); // Append first file
    formData.append('image2', $('.image2')[0].files[0]); // Append second file
    formData.append('image3', $('.image3')[0].files[0]); // Append third file

    // Add CSRF token
    formData.append('_token', '{{ csrf_token() }}');

    // AJAX request
    $.ajax({
        type: "POST",
        url: "{{ URL::to('/saveRegistration') }}",  // Your Laravel route
        data: formData,  // Send the FormData object
        contentType: false,  // Required for FormData
        processData: false,  // Prevent jQuery from processing the data
        success: function(response) {
            window.location.replace("{{URL::to('/login')}}");
        },
        error: function(xhr, status, error) {
                $('#yourTrust').modal('hide');
                $('#receivedModal').modal('hide');
            var response = xhr.responseJSON; // Get the JSON response object
            if (!response.success) {
                console.log('Validation errors:', response.message);
                
                // Loop through the data object and print the validation errors
                $.each(response.data, function(field, errors) {
                    console.log(field + ': ' + errors.join(', '));

                    // Optionally, display the error messages on the page
                    var errorMessage = errors.join(', ');
                    // Assume you have a div to show errors for each field, e.g. <div id="error-firstName"></div>
                    $('#error-' + field).text(errorMessage);
                });
                $('#error').show();
            }
        }
    });
});

        
//Flash data
setTimeout(function() {
    $('#success').fadeOut('fast');
    $('#fail').fadeOut('fast');
}, 4000);

// password validation
$('#createpass').keyup(function() {
    var pswd = $(this).val();
    if ( pswd.length < 8 ) {
        $('#length').removeClass('valid').addClass('invalid')
    } else {
        $('#length').removeClass('invalid').addClass('valid');
        $('#next').prop('disabled', true);
    }
    //validate letter
    if ( pswd.match(/[a-z]/) ) {
        $('#letter').removeClass('invalid').addClass('valid');

    } else {
        $('#letter').removeClass('valid').addClass('invalid');
        $('#next').prop('disabled', true);
    }
    //validate capital letter
    if ( pswd.match(/[A-Z]/) ) {
        $('#capital').removeClass('invalid').addClass('valid');

    } else {
        $('#capital').removeClass('valid').addClass('invalid');
        $('#next').prop('disabled', true);
    }
    //validate number
    if ( pswd.match(/\d/) ) {
        $('#number').removeClass('invalid').addClass('valid');

    } else {
        $('#number').removeClass('valid').addClass('invalid');
        $('#next').prop('disabled', true);
    }
    //validate number
    if ( pswd.match(/[@#/.!'$)]/) ) {
        $('#special').removeClass('invalid').addClass('valid');
    } else {
        $('#special').removeClass('valid').addClass('invalid');
        $('#next').prop('disabled', true);
    }
    }).focus(function() {
        $('#pswd_info').show();
    }).blur(function() {
        $('#pswd_info').hide();
    });
// password validation end

// password Confirmation
$('#confirmpass').on('keyup',function(){
    if($('#createpass').val() != $('#confirmpass').val())
    {
        $('#message').html('Not Matching').css('color', 'red');
        $('#next').prop('disabled', true);
    }
    else
    {
        $('#message').html('');
        $('#next').prop('disabled', false);
    }
});
// Password Confirmation end

//Flash data
setTimeout(function() {
    $('#error').fadeOut('fast');
}, 4000);
    </script>
</body>
</html>