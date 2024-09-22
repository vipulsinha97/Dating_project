<!DOCTYPE html>
<html lang="en">
<head>
    @include("includes/top")
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/homepage-style.css')}}">
</head>
<body>
    @include("includes/header")
    <main>
        <section class="signup-details-main">
            <div class="container-fluid mt-0">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="" class="form-main" id="multiStepForm">
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
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone No.">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="password" class="form-control" id="createpass" name="createpass" placeholder="Create password">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="password" class="form-control" id="confirmpass" name="confirmpass" placeholder="Confirm password">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(1)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Next" class="arrow-icon" onclick="nextStep(3)">
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
                                        <input type="radio" id="male" name="gender" value="male">
                                        <label for="male" class="option-button">Male</label>
                                        <input type="radio" id="female" name="gender" value="female">
                                        <label for="female" class="option-button">Female</label>
                                    </div>
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
                                    <label for="plocation">Enter your city</label>
                                    <div class="input-group bb-1-light0 bbr">
                                        <div class="mb-4">
                                            <div class="select-container">
                                                <select id="height-select" name="state">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="plocation">Enter your city</label>
                                    <div class="input-group bb-1-light0 bbr">
                                        <input type="text" class="form-control" id="plocation" name="city" placeholder="Enter your permanent location">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="clocation">Enter your Address</label>
                                    <div class="input-group bb-1-light0 bbr">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter your current location">
                                    </div>
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
                                        <select id="height-select" name="height">
                                            <option value="5ft">5 feet</option>
                                            <option value="5ft1in">5 feet 1 inch</option>
                                            <option value="5ft2in">5 feet 2 inches</option>
                                            <option value="5ft3in">5 feet 3 inches</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
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
                                        <select id="pd-select" name="profession">
                                            <optgroup class="optlabel" label="Choose Your Profession">
                                                <option value="" disabled selected>Profession</option> 
                                                <option value="">Finance</option>
                                                <option value="">Sales</option>
                                                <option value="">Marketing</option>
                                                <option value="">Information technology</option>
                                                <option value="">Human resources</option>
                                                <option value="">Admin</option>
                                                <option value="">Operations</option>
                                                <option class="more" value="">More..</option>
                                                <!-- Add more options as needed -->
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light">
                                        <input type="text" class="form-control" id="education" name="education" placeholder="Education">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="select-container">
                                        <select id="sal-select" name="salary">
                                            <optgroup class="optlabel" label="Chose Your Salary  Package">
                                                <option value="" disabled selected>Salary</option>
                                                <option value="">
                                                    < 5 lacs </option>
                                                <option value="">5 lacs - 10 lacs</option>
                                                <option value="">10 lacs - 15 lacs</option>
                                                <option value="">15 lacs - 20 lacs</option>
                                                <option value="">20 lacs - 25 lacs</option>
                                                <option value="">25 lacs - 50 lacs</option>
                                                <option value="">
                                                    > 50 lacs </option>
                                                <option class="more" value="">More..</option>
                                                <!-- Add more options as needed -->
                                            </optgroup>
                                        </select>
                                    </div>
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
                                        <input type="radio" id="yes" name="drink" value="yes">
                                        <label for="yes" class="option-button">Yes</label>
                                        <input type="radio" id="no" name="drink" value="no">
                                        <label for="no" class="option-button">No</label>
                                        <input type="radio" id="occasionally" name="drink" value="occasionally">
                                        <label for="occasionally" class="option-button">Occasionally</label>
                                    </div>
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
                                        <input type="radio" id="smoke_yes" name="smoke" value="smoke_yes">
                                        <label for="smoke_yes" class="option-button">Yes</label>
                                        <input type="radio" id="smoke_no" name="smoke" value="smoke_no">
                                        <label for="smoke_no" class="option-button">No</label>
                                        <input type="radio" id="smoke_occasionally" name="smoke" value="smoke_occasionally">
                                        <label for="smoke_occasionally" class="option-button">Occasionally</label>
                                    </div>
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
                                    <h2>Relationship Status</h2>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="nm" name="relation_status" value="nm">
                                        <label for="nm" class="option-button">Never married</label>
                                        <input type="radio" id="widow" name="relation_status" value="widow">
                                        <label for="widow" class="option-button">Widow</label>
                                        <input type="radio" id="divorced" name="relation_status" value="divorced">
                                        <label for="divorced" class="option-button">Divorced</label>
                                        <input type="radio" id="ad" name="relation_status" value="awaiting_divorce">
                                        <label for="ad" class="option-button">Awaiting Divorce</label>
                                    </div>
                                </div>
                                <div class="mb-4 mt-5">
                                    <h4 class="redcl mb-4">Have children</h4>
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="hc-no" name="hc" value="hc-no">
                                        <label for="hc-no" class="option-button">No</label>
                                        <input type="radio" id="hc-yes" name="hc" value="hc-yes">
                                        <label for="hc-yes" class="option-button">Yes</label>
                                        <input type="radio" id="hc-ss" name="hc" value="hc-ss">
                                        <label for="hc-ss" class="option-button">Yes but staying separately</label>
                                    </div>
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
                                        <input type="radio" id="nm" name="religion" value="nm">
                                        <label for="nm" class="option-button">Hinduism</label>
                                        <input type="radio" id="religion-sikh" name="religion" value="religion-sikh">
                                        <label for="religion-sikh" class="option-button">Sikh</label>
                                        <input type="radio" id="religion-jain" name="religion" value="religion-jain">
                                        <label for="religion-jain" class="option-button">Jain</label>
                                        <input type="radio" id="religion-christian" name="religion" value="religion-christian">
                                        <label for="religion-christian" class="option-button"> Christianity</label>
                                        <input type="radio" id="religion-muslim" name="religion" value="religion-muslim">
                                        <label for="religion-muslim" class="option-button"> Muslim</label>
                                        <input type="radio" id="religion-budh" name="religion" value="religion-budh">
                                        <label for="religion-budh" class="option-button"> Buddhist</label>
                                        <input type="radio" id="religion-spritual" name="religion" value="religion-spritual">
                                        <label for="religion-spritual" class="option-button"> Spiritual</label>
                                        <input type="radio" id="religion-others" name="religion" value="religion-others">
                                        <label for="religion-others" class="option-button"> Others</label>
                                    </div>
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
                                    <h2>Questions & Answer</h2>
                                </div>
                                <div class="mb-4">
                                    <label for="qa1">Q.1 2 questions and small space for free text wherein people can answer.</label>
                                    <div class="input-group bb-1-light0 bbr">
                                        <textarea id="qa1-ans" name="qa1" class="form-control" placeholder="Answer" aria-label="qa1-ans" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="qa2">Q.2 2 questions and small space for free text wherein people can answer.</label>
                                    <div class="input-group bb-1-light0 bbr">
                                        <textarea id="qa2-ans" name="qa1" class="form-control" placeholder="Answer" aria-label="qa2-ans" rows="2"></textarea>
                                    </div>
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
                                    <h2>Add your Pics</h2>
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
                                                    <input id="file-upload1" type="file" name="image[]" accept="image/*" />
                                                    <img id="image-preview1" src="#" alt="Image preview" style="display: none;" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="upload-box">
                                                    <label for="file-upload2" class="upload-trigger">
                                                        <div class="upload-icon">+</div>
                                                        <div class="upload-text">Add Image</div>
                                                    </label>
                                                    <input id="file-upload2" type="file" name="image[]" accept="image/*" />
                                                    <img id="image-preview2" src="#" alt="Image preview" style="display: none;" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="upload-box">
                                                    <label for="file-upload3" class="upload-trigger">
                                                        <div class="upload-icon">+</div>
                                                        <div class="upload-text">Add Image</div>
                                                    </label>
                                                    <input id="file-upload3" type="file" name="image[]" accept="image/*" />
                                                    <img id="image-preview3" src="#" alt="Image preview" style="display: none;" />
                                                </div>
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
                                    <h2>Preferences for ideal date</h2>
                                    <p class="spara">We believe chemistry goes beyond questionnaires and algorithms. That's why a 5-minute conversation can help you identify if there is some vibe rather than algorithms. </p>
                                    <p class="para">However, to ensure the best matches, we also consider your key preferences such as:</p>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">Smoke</h4>
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="dmsmoke" name="preferences_smoke" value="dmsmoke">
                                        <label for="dmsmoke" class="option-button">Doesn’t matter</label>
                                        <input type="radio" id="prefrence-notok" name="preferences-smoke" value="prefrence-notok">
                                        <label for="prefrence-notok" class="option-button">Not Ok</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">Drink</h4>
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="drink-doesnot" name="preferences_drink" value="drink-doesnot">
                                        <label for="drink-doesnot" class="option-button">Doesn’t matter</label>
                                        <input type="radio" id="drink-occasionally" name="drink" value="drink-occasionally">
                                        <label for="drink-occasionally" class="option-button">Occasionally</label>
                                        <input type="radio" id="drink-notok" name="drink" value="drink-notok">
                                        <label for="drink-notok" class="option-button">Not Ok</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">Marital Status</h4>
                                    <div class="input-group bb-1-light0 checkbtn">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="status-doesnt-matter" name="preferences_marital_status" value="doesnt-matter">
                                            <label class="form-check-label" for="status-doesnt-matter">
                                                Doesn’t matter
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="status-never-married" name="preferences_marital_status" value="never-married">
                                            <label class="form-check-label" for="status-never-married">
                                                Never Married
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="status-divorced" name="preferences_marital_status" value="divorced">
                                            <label class="form-check-label" for="status-divorced">
                                                Divorced
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="status-awaiting-divorce" name="preferences_marital_status" value="awaiting-divorce">
                                            <label class="form-check-label" for="status-awaiting-divorce">
                                                Awaiting Divorce
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="status-widow" name="preferences_marital_status" value="widow">
                                            <label class="form-check-label" for="status-widow">
                                                Widow
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">Profile with children</h4>
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="pwc-doesnot" name="pwc" value="pwc-doesnot">
                                        <label for="pwc-doesnot" class="option-button">Doesn’t matter</label>
                                        <input type="radio" id="pwc-notok" name="pwc" value="pwc-notok">
                                        <label for="pwc-notok" class="option-button">Not Ok</label>
                                        <input type="radio" id="pwc-occasionally" name="pwc" value="pwc-occasionally">
                                        <label for="pwc-occasionally" class="option-button"> If not living together</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">Religion</h4>
                                    <div class="input-group bb-1-light0 checkbtn">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="pr-doesntmatter" name="pref_religion" value="pr-doesntmatter">
                                            <label class="form-check-label" for="pr-doesntmatter">
                                                Doesn’t matter
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="pr-hinduism" name="pref_religion" value="pr-hinduism">
                                            <label class="form-check-label" for="pr-hinduism">
                                                Hinduism
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="pr-sikh" name="pref_religion" value="pr-sikh">
                                            <label class="form-check-label" for="pr-sikh">
                                                Sikh
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="pr-jain" name="pref_religion" value="pr-jain">
                                            <label class="form-check-label" for="pr-jain">
                                                Jain
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="pr-christ" name="pref_religion" value="pr-christ">
                                            <label class="form-check-label" for="pr-christ">
                                                Christianity
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="pr-muslim" name="pref_religion" value="pr-muslim">
                                            <label class="form-check-label" for="pr-muslim">
                                                Muslim
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="pr-budh" name="pref_religion" value="pr-budh">
                                            <label class="form-check-label" for="pr-budh">
                                                Buddhist
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="pr-spiritual" name="pref_religion" value="pr-spiritual">
                                            <label class="form-check-label" for="pr-spiritual">
                                                Spiritual
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">what are you looking for ?</h4>
                                    <div class="input-group bb-1-light0 radiobtn">
                                        <input type="radio" id="lookingfor-casual" name="lookingfor" value="lookingfor-casual">
                                        <label for="lookingfor-casual" class="option-button">Casual</label>
                                        <input type="radio" id="lookingfor-longterm" name="lookingfor" value="lookingfor-longterm">
                                        <label for="lookingfor-longterm" class="option-button"> long term relationship</label>
                                    </div>
                                </div>
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
                                    <p class="para">What’s your contact number and best time to call you? We will give you a quick call as part of screening process.</p>
                                </div>
                                <div class="mb-4">
                                    <h4 class="redcl">Choose date</h4>
                                    <div class="input-group bb-1-light">
                                        <input type="date" id="date-picker" name="date-picker" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-4 mt-5">
                                    <h4 class="redcl">Choose time</h4>
                                    <div class="select-container">
                                        <select id="pd-select">
                                            <optgroup class="optlabel" label="Choose time">                                            
                                                <option value="08:00 - 09:00">08:00 - 09:00</option>
                                                <option value="09:00 - 10:0">09:00 - 10:00</option>
                                                <option value="10:00 - 11:00">10:00 - 11:00</option>
                                                <option value="11:00 - 12:00">11:00 - 12:00</option>                                   
                                                <!-- Add more options as needed -->
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>                              
                                <div class="d-flex justify-content-between mt-5">
                                    <img src="{{asset('assets/images/prev.svg')}}" alt="Previous" class="arrow-icon" onclick="previousStep(13)">
                                    <img src="{{asset('assets/images/next-blue.svg')}}" alt="Submit" class="arrow-icon" onclick="submitForm(14)">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include("includes/footer")
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
    </script>
</body>
</html>