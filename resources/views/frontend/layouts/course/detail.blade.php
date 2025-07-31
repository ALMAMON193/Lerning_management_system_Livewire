@extends('frontend.app')
@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Course Details</h2>
                            <p>Home<span>/</span>Course Details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <iframe width="100%" height="450"
                                src="https://www.youtube.com/embed/kSgsnUlg4cU"
                                frameborder="0"
                                allowfullscreen>
                        </iframe>
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">Objectives</h4>
                        <div class="content">
                            When you enter into any new area of science, you almost always find yourself with a
                            baffling new language of
                            technical terms to learn before you can converse with the experts. This is certainly
                            true in astronomy both in
                            terms of terms that refer to the cosmos and terms that describe the tools of the trade,
                            the most prevalent
                            being the telescope.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                        </div>

                        <h4 class="title">Eligibility</h4>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                        </div>
                        <h4 class="title">This course includes:</h4>
                        <div class="card p-3">
                            <div class="row"> <!-- Added row to wrap columns -->
                                <div class="col-md-6">
                                    <ul style="margin-left: 50px;">
                                        <li>
                                            <input type="checkbox" id="video1" disabled>
                                            <label for="video1">14.5 hours on-demand video</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="practiceTest1" checked disabled>
                                            <label for="practiceTest1">1 practice test</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="video2" disabled>
                                            <label for="video2">14.5 hours on-demand video</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="practiceTest2" checked disabled>
                                            <label for="practiceTest2">1 practice test</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul style="margin-left: 50px;">
                                        <li>
                                            <input type="checkbox" id="articles1" disabled>
                                            <label for="articles1">5 articles</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="access1" disabled>
                                            <label for="access1">Access on mobile and TV</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="articles2" disabled>
                                            <label for="articles2">5 articles</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="access2" disabled>
                                            <label for="access2">Access on mobile and TV</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h4 class="title">Course Outline</h4>
                        <p class="p-2">23 sections • 284 lectures • 14h 47m total length
                        </p>
                        <div class="content">
                            <div class="accordion" id="courseAccordion">
                                <!-- Item 1 -->
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link d-flex justify-content-between w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-chevron-down ml-2"></i>
                                                    <span class="ml-2">Introduction Lesson</span>
                                                </div>
                                                <p class="m-0 d-flex justify-content-between align-items-center">
                                                    12 modules 120 min
                                                    <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                </p>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#courseAccordion">
                                        <div style="padding: 40px">
                                            <ul>
                                                <li class="d-flex justify-content-between align-items-center" style="padding-bottom: 10px;">
                                                    <!-- Left Side: Video Title -->
                                                    <div>
                                                        <i class="fas fa-video" style="margin-right: 10px;"></i> <a href="https://www.youtube.com/embed/kSgsnUlg4cU" target="_blank">Install Vs Code</a>
                                                    </div>
                                                    <!-- Right Side: Video Duration, Total Hours, and Lock Icon -->
                                                    <div class="d-flex align-items-center">
                                                        12 modules 120 min
                                                        <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                    </div>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center" style="padding-bottom: 10px;">
                                                    <div>
                                                        <i class="fas fa-video" style="margin-right: 10px;"></i> Set Up all Extention
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        12 modules 120 min
                                                        <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                    </div>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center" style="padding-bottom: 10px;">
                                                    <div>
                                                        <i class="fas fa-video" style="margin-right: 10px;"></i> Overview All function
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        12 modules 120 min
                                                        <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                    </div>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center" style="padding-bottom: 10px;">
                                                    <div>
                                                        <i class="fas fa-video" style="margin-right: 10px;"></i> Best Of LUck
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        12 modules 120 min
                                                        <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>

                                <!-- Item 2 -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link d-flex justify-content-between w-100" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-chevron-down ml-2"></i>
                                                    <span class="ml-2">Creating an AWS Account</span>
                                                </div>
                                                <p class="m-0 d-flex justify-content-between align-items-center">
                                                    8 modules 90 min
                                                    <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                </p>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#courseAccordion">
                                        <p style="padding-left: 20px;padding-top:20px">Instructions on how to create an AWS account.</p>
                                    </div>
                                </div>

                                <!-- Item 3 -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link d-flex justify-content-between w-100" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-chevron-down ml-2"></i>
                                                    <span class="ml-2">AWS Account Activation Troubleshooting</span>
                                                </div>
                                                <p class="m-0 d-flex justify-content-between align-items-center">
                                                    5 modules 60 min
                                                    <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                </p>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#courseAccordion">
                                        <p style="padding-left: 20px;padding-top:20px">Troubleshooting steps for AWS account activation.</p>
                                    </div>
                                </div>

                                <!-- Item 4 -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link d-flex justify-content-between w-100" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-chevron-down ml-2"></i>
                                                    <span class="ml-2">Important Message</span>
                                                </div>
                                                <p class="m-0 d-flex justify-content-between align-items-center">
                                                    3 modules 30 min
                                                    <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                </p>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#courseAccordion">
                                        <p style="padding-left: 20px;padding-top:20px">Important message content goes here.</p>
                                    </div>
                                </div>

                                <!-- Item 5 -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link d-flex justify-content-between w-100" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-chevron-down ml-2"></i>
                                                    <span class="ml-2">About Your Instructor</span>
                                                </div>
                                                <p class="m-0 d-flex justify-content-between align-items-center">
                                                    2 modules 20 min
                                                    <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                </p>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#courseAccordion">
                                        <p style="padding-left: 20px;padding-top:20px">Information about the instructor.</p>
                                    </div>
                                </div>

                                <!-- Item 6 -->
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link d-flex justify-content-between w-100" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-chevron-down ml-2"></i>
                                                    <span class="ml-2">AWS Services Overview</span>
                                                </div>
                                                <p class="m-0 d-flex justify-content-between align-items-center">
                                                    10 modules 100 min
                                                    <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                </p>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#courseAccordion">
                                        <p style="padding-left: 20px;padding-top:20px">Overview of AWS services.</p>
                                    </div>
                                </div>

                                <!-- Item 7 -->
                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link d-flex justify-content-between w-100" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-chevron-down ml-2"></i>
                                                    <span class="ml-2">EC2 Instances</span>
                                                </div>
                                                <p class="m-0 d-flex justify-content-between align-items-center">
                                                    7 modules 70 min
                                                    <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                </p>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#courseAccordion">
                                        <p style="padding-left: 20px;padding-top:20px">Introduction to EC2 instances.</p>
                                    </div>
                                </div>

                                <!-- Item 8 -->
                                <div class="card">
                                    <div class="card-header" id="headingEight">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link d-flex justify-content-between w-100" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-chevron-down ml-2"></i>
                                                    <span class="ml-2">S3 Storage</span>
                                                </div>
                                                <p class="m-0 d-flex justify-content-between align-items-center">
                                                    6 modules 60 min
                                                    <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                </p>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#courseAccordion">
                                        <p style="padding-left: 20px;padding-top:20px">Introduction to S3 storage.</p>
                                    </div>
                                </div>

                                <!-- Item 9 -->
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link d-flex justify-content-between w-100" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-chevron-down ml-2"></i>
                                                    <span class="ml-2">RDS Databases</span>
                                                </div>
                                                <p class="m-0 d-flex justify-content-between align-items-center">
                                                    5 modules 50 min
                                                    <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                </p>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#courseAccordion">
                                        <p style="padding-left: 20px;padding-top:20px">Introduction to RDS databases.</p>
                                    </div>
                                </div>

                                <!-- Item 10 -->
                                <div class="card">
                                    <div class="card-header" id="headingTen">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link d-flex justify-content-between w-100" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-chevron-down ml-2"></i>
                                                    <span class="ml-2">Lambda Functions</span>
                                                </div>
                                                <p class="m-0 d-flex justify-content-between align-items-center">
                                                    4 modules 40 min
                                                    <i class="fas fa-lock" style="margin-left: 30px;"></i>
                                                </p>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#courseAccordion">
                                        <p style="padding-left: 20px;padding-top:20px">Introduction to Lambda functions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Trainer’s Name</p>
                                    <span class="color">George Mathews</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Course Fee </p>
                                    <span>$230</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Available Seats </p>
                                    <span>15</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Schedule </p>
                                    <span>2.00 pm to 4.00 pm</span>
                                </a>
                            </li>

                        </ul>
                        <div class="d-flex flex-column">
                            <a href="#" class="btn_1 d-block mb-3">Enroll the course</a>
                            <a href="#" class="btn_1 d-block">Add to Cart</a>
                        </div>

                    </div>

                    <h4 class="title">Reviews</h4>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                                <h6 class="mb-15">Provide Your Rating</h6>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Puncuality</span>
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <span>Outstanding</span>
                                </div>

                            </div>
                        </div>
                        <div class="feedeback">
                            <h6>Your Feedback</h6>
                            <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                            <div class="mt-10 text-right">
                                <a href="#" class="btn_1">Read more</a>
                            </div>
                        </div>
                        <div class="comments-area mb-30">
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/cource/cource_1.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Emilly Blunt</a>
                                            </h5>
                                            <div class="rating">
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                            </div>
                                            <p class="comment">
                                                Blessed made of meat doesn't lights doesn't was dominion and sea earth
                                                form
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/cource/cource_2.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Elsie Cunningham</a>
                                            </h5>
                                            <div class="rating">
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                            </div>
                                            <p class="comment">
                                                Blessed made of meat doesn't lights doesn't was dominion and sea earth
                                                form
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/cource/cource_3.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Maria Luna</a>
                                            </h5>
                                            <div class="rating">
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                            </div>
                                            <p class="comment">
                                                Blessed made of meat doesn't lights doesn't was dominion and sea earth
                                                form
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->
@endsection
