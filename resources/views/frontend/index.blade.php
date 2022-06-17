<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- x-icon -->
    <link rel="shortcut icon" href="{{ url('css/assets/images/x-icon.png') }}" type="image/x-icon">

    <!-- Other css -->
    <link rel="stylesheet" href="{{ url('css/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('css/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/assets/css/style.css') }}">

    <title>Couple Tuple</title>
</head>

<body>
<!-- preloader start here -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- preloader ending here -->




<!-- ==========Header Section Starts Here========== -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="header-top-area">

                <ul class="social-icons d-flex justify-content-end align-items-center">
                    <li>
                        <p>
                            Find us on :
                        </p>
                    </li>
                    <li>
                        <a href="#" class="fb"><i class="icofont-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#" class="twitter"><i class="icofont-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="#">
                        <img src="{{ url('public/css/assets/images/logo/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div class="menu-area">
                    <a href="{{ url('match-making') }}" class="login" style="margin-right: 10px"><span>Matchmaking Service</span> </a>
                    <a href="{{ url('login') }}" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                    <a href="{{ url('register') }}" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a>

                    <!-- toggle icons -->
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="icofont-info-square"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header Section Ends Here========== -->


<!-- ================ Banner Section start Here =============== -->
<section class="banner-section">
    <div class="container">
        <div class="section-wrapper">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <div class="intro-form">
                            <div class="intro-form-inner">
                                <h3>Introducing CoupleTuple</h3>
                                Your Perfect
                                    Match is Just a Click Away.</p>
                                <div class="banner-form">
                                    <div class="gender">
                                        <label for="gender" class="left">I am a </label>
                                        <div class="custom-select right">
                                            <select name="gender" id="gender" class="">
                                                <option value="0">Select Gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="person">
                                        <label for="gender-two" class="left">Looking for</label>
                                        <div class="custom-select right">
                                            <select name="gender" id="gender-two" class="">
                                                <option value="0">Select Gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="age">
                                        <label for="age" class="left">Age</label>
                                        <div class="right d-flex justify-content-between">
                                            <div class="custom-select">
                                                <select name="age-start" id="age">
                                                    <option value="1">18</option>
                                                    <option value="2">19</option>
                                                    <option value="3">20</option>
                                                    <option value="4">21</option>
                                                    <option value="5">22</option>
                                                    <option value="6">23</option>
                                                    <option value="7">24</option>
                                                    <option value="8">25</option>
                                                    <option value="9">26</option>
                                                    <option value="10">27</option>
                                                    <option value="11">28</option>
                                                    <option value="13">29</option>
                                                    <option value="14">30</option>
                                                    <option value="14">31</option>
                                                    <option value="14">32</option>
                                                    <option value="14">33</option>
                                                    <option value="14">34</option>
                                                    <option value="14">35</option>
                                                    <option value="14">36</option>
                                                    <option value="14">37</option>
                                                    <option value="14">38</option>
                                                    <option value="14">39</option> <option value="14">30</option>
                                                    <option value="14">40</option>
                                                    <option value="14">41</option>
                                                    <option value="14">42</option>
                                                    <option value="14">43</option>
                                                    <option value="14">44</option>
                                                    <option value="14">45</option>
                                                    <option value="14">46</option>
                                                    <option value="14">47</option>
                                                    <option value="14">48</option>
                                                    <option value="14">49+</option>

                                                </select>
                                            </div>

                                            <div class="custom-select">
                                                <select name="age-end" id="age-two">
                                                    <option value="1">18+</option>
                                                    <option value="2">19</option>
                                                    <option value="3">20</option>
                                                    <option value="4">21</option>
                                                    <option value="5">22</option>
                                                    <option value="6">23</option>
                                                    <option value="7">24</option>
                                                    <option value="8">25</option>
                                                    <option value="9">26</option>
                                                    <option value="10">27</option>
                                                    <option value="11">28</option>
                                                    <option value="13">29</option>
                                                    <option value="14">30</option>
                                                    <option value="14">31</option>
                                                    <option value="14">32</option>
                                                    <option value="14">33</option>
                                                    <option value="14">34</option>
                                                    <option value="14">35</option>
                                                    <option value="14">36</option>
                                                    <option value="14">37</option>
                                                    <option value="14">38</option>
                                                    <option value="14">39</option> <option value="14">30</option>
                                                    <option value="14">40</option>
                                                    <option value="14">41</option>
                                                    <option value="14">42</option>
                                                    <option value="14">43</option>
                                                    <option value="14">44</option>
                                                    <option value="14">45</option>
                                                    <option value="14">46</option>
                                                    <option value="14">47</option>
                                                    <option value="14">48</option>
                                                    <option value="14">49+</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="city">
                                        <label for="city" class="left">City</label>
                                        <input class="right" type="text" id="city" placeholder="Your City Name..">
                                    </div>
                                    <a href="{{ url('/login') }}"><button class="">Let's Begin</button></a>

                                </div>
                                {{--                                <ul class="social-list">--}}
                                {{--                                    <li class="google"><a href="#">--}}
                                {{--                                            <img src="assets/images/banner/google.png" alt="img">--}}
                                {{--                                            <span>Continue with google</span>--}}
                                {{--                                        </a></li>--}}
                                {{--                                    <li class="facebook"><a href="index-2.html#">--}}
                                {{--                                            <i class="icofont-facebook"></i>--}}
                                {{--                                        </a></li>--}}
                                {{--                                    <li class="twitter"><a href="index-2.html#">--}}
                                {{--                                            <i class="icofont-twitter"></i>--}}
                                {{--                                        </a></li>--}}
                                {{--                                </ul>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumb">
                        <img src="{{ url('public/css/assets/images/banner/01.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="all-shapes">
        <img src="{{ url('public/css/assets/images/banner/banner-shapes/01.png') }}" alt="shape" class="banner-shape shape-1">
        <img src="{{ url('public/css/assets/images/banner/banner-shapes/02.png') }}" alt="shape" class="banner-shape shape-2">
        <img src="{{ url('public/css/assets/images/banner/banner-shapes/03.png') }}" alt="shape" class="banner-shape shape-3">
        <img src="{{ url('public/css/assets/images/banner/banner-shapes/04.png') }}" alt="shape" class="banner-shape shape-4">
        <img src="{{ url('public/css/assets/images/banner/banner-shapes/05.png') }}" alt="shape" class="banner-shape shape-5">
        <img src="{{ url('public/css/assets/images/banner/banner-shapes/06.png') }}" alt="shape" class="banner-shape shape-6">
        <img src="{{ url('public/css/assets/images/banner/banner-shapes/07.png') }}" alt="shape" class="banner-shape shape-7">
        <img src="{{ url('public/css/assets/images/banner/banner-shapes/08.png') }}" alt="shape" class="banner-shape shape-8">
    </div>
</section>
<!-- ================ Banner Section end Here =============== -->


<!-- ================ Member Section Start Here =============== -->
<section class="member-section padding-tb">
    <div class="container">
        <div class="section-header">
            <h4 class="theme-color">Meet New People Today!</h4>
            <h2>New Members in Today</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center g-3 g-md-4">
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{ url('public/css/assets/images/member/01.jpg') }}" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Andrea Guido</a> </h6>
                                <p>Active 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{ url('public/css/assets/images/member/02.jpg') }}" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Gihan-Fernando</a></h6>
                                <p>Active 2 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{ url('public/css/assets/images/member/03.jpg') }}" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Sweet Admin</a></h6>
                                <p>Active 3 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{ url('public/css/assets/images/member/04.jpg') }}" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Gyan-Baffour</a></h6>
                                <p>Active 5 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{ url('public/css/assets/images/member/05.jpg') }}" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Teszt Eleking</a></h6>
                                <p>Active 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{ url('public/css/assets/images/member/06.jpg') }}" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Zeahra Guido</a>
                                </h6>
                                <p>Active 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ Member Section end Here =============== -->


<!-- ================ About Section start Here =============== -->
{{--<section class="about-section padding-tb bg-img">--}}
{{--    <div class="container">--}}
{{--        <div class="section-header">--}}
{{--            <h4>About Our CoupleTuple</h4>--}}
{{--            <h2>It All Starts With A Date</h2>--}}
{{--        </div>--}}
{{--        <div class="section-wrapper">--}}
{{--            <div class="row justify-content-center g-4">--}}
{{--                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">--}}
{{--                    <div class="lab-item about-item">--}}
{{--                        <div class="lab-inner text-center">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/about/01.png') }}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h2 class="counter">29,991</h2>--}}
{{--                                <p>Members in Total</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">--}}
{{--                    <div class="lab-item about-item">--}}
{{--                        <div class="lab-inner text-center">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/about/02.png') }}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h2 class="counter">29,960</h2>--}}
{{--                                <p>Members Online</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">--}}
{{--                    <div class="lab-item about-item">--}}
{{--                        <div class="lab-inner text-center">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/about/03.png') }}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h2 class="counter">29,960</h2>--}}
{{--                                <p>Men Online</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">--}}
{{--                    <div class="lab-item about-item">--}}
{{--                        <div class="lab-inner text-center">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/about/03.png') }}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h2 class="counter">28,960</h2>--}}
{{--                                <p>Women Online</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- ================ About Section end Here =============== -->


<!-- ================ Work Section start Here =============== -->
<section class="work-section padding-tb">
    <div class="container">
        <div class="section-header">
            <h4 class="theme-color">How Does It Work?</h4>
            <h2>You’re Just 3 Steps Away From A Great Match</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center g-5">
                <div class="col-lg-4 col-sm-6 col-12 px-4">
                    <div class="lab-item work-item">
                        <div class="lab-inner text-center">
                            <div class="lab-thumb">
                                <div class="thumb-inner">
                                    <img src="{{ url('public/css/assets/images/work/01.png')  }}" alt="work-img">
                                    <div class="step">
                                        <span>step</span>
                                        <p>01</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lab-content">
                                <a href="{{ url('/register') }}">
                                    <h4>Create A Profile</h4>
                                </a>
                                <p>Register for Free and Create a Profile .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 px-4">
                    <div class="lab-item work-item">
                        <div class="lab-inner text-center">
                            <div class="lab-thumb">
                                <div class="thumb-inner">
                                    <img src="{{ url('public/css/assets/images/work/02.png') }}" alt="work-img">
                                    <div class="step">
                                        <span>step</span>
                                        <p>02</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lab-content">
                                <a href="{{ url('/register') }}">
                                    <h4>Find Matches</h4>
                                </a>
                                <p>Connect With Your Preferred Match.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 px-4">
                    <div class="lab-item work-item">
                        <div class="lab-inner text-center">
                            <div class="lab-thumb">
                                <div class="thumb-inner">
                                    <img src="{{ url('public/css/assets/images/work/03.png') }}" alt="work-img">
                                    <div class="step">
                                        <span>step</span>
                                        <p>03</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lab-content">
                                <a href="{{ url('/register') }}">
                                    <h4>Start Matching</h4>
                                </a>
                                <p>Start Chatting a way With Your Preferred Match.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ Work Section end Here =============== -->



<!-- ================ Success Story Section start Here =============== -->
{{--<section class="story-section padding-tb bg-img">--}}
{{--    <div class=" container">--}}
{{--        <div class="section-header">--}}
{{--            <h4>Love in Faith Success Stories</h4>--}}
{{--            <h2>Sweet Stories From Our Lovers</h2>--}}
{{--        </div>--}}
{{--        <div class="section-wrapper">--}}
{{--            <div class="row justify-content-center g-4">--}}
{{--                <div class="col-lg-4 col-md-6 col-12">--}}
{{--                    <div class="story-item lab-item">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/story/01.jpg') }}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h4><a href="blog-single.html">Image Post Formate</a></h4>--}}
{{--                                <p>Seamlesly evolve unique web-readiness with--}}
{{--                                    Collabors atively fabricate best of breed and--}}
{{--                                    apcations through </p>--}}
{{--                                <a href="blog-single.html" class="lab-btn"><i class="icofont-circled-right"></i>--}}
{{--                                    Read More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-12">--}}
{{--                    <div class="story-item lab-item">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/story/02.jpg') }}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h4><a href="blog-single.html">Couple Of Month</a></h4>--}}
{{--                                <p>Seamlesly evolve unique web-readiness with--}}
{{--                                    Collabors atively fabricate best of breed and--}}
{{--                                    apcations through </p>--}}
{{--                                <a href="blog-single.html" class="lab-btn"><i class="icofont-circled-right"></i>--}}
{{--                                    Read More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-12">--}}
{{--                    <div class="story-item lab-item">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/story/03.jpg') }}" alt="img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h4><a href="blog-single.html">Media For Blog Article</a></h4>--}}
{{--                                <p>Seamlesly evolve unique web-readiness with--}}
{{--                                    Collabors atively fabricate best of breed and--}}
{{--                                    apcations through </p>--}}
{{--                                <a href="blog-single.html" class="lab-btn"><i class="icofont-circled-right"></i>--}}
{{--                                    Read More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- ================ Success Story Section end Here =============== -->


<!-- ================ Top Member Section start Here =============== -->
{{--<section class="top-member-section padding-tb">--}}
{{--    <div class="container">--}}
{{--        <div class="section-header">--}}
{{--            <h4 class="theme-color">Top Members</h4>--}}
{{--            <h2>CoupleTuple Members Online Now</h2>--}}
{{--        </div>--}}
{{--        <div class="section-wrapper">--}}
{{--            <ul class="button-group filters-button-group w-100 d-flex flex-wrap justify-content-center">--}}
{{--                <li class="button is-checked filter-btn" data-filter="*"><i class="icofont-heart-alt"></i> Show all--}}
{{--                </li>--}}
{{--                <li class="button filter-btn" data-filter=".girl"><i class="icofont-girl"></i> new girl--}}
{{--                    member</li>--}}
{{--                <li class="button filter-btn" data-filter=".boy"><i class="icofont-hotel-boy"></i> New--}}
{{--                    Boy Member</li>--}}
{{--            </ul>--}}

{{--            <div class="grid-memberlist">--}}
{{--                <div class="grid-member filter-item girl">--}}
{{--                    <div class="lab-item member-item style-1 style-2">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/member/01.jpg') }}" alt="member-img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h6><a href="profile.html">Johanna</a> </h6>--}}
{{--                                <p>Active 1 Day</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="grid-member filter-item girl">--}}
{{--                    <div class="lab-item member-item style-1 style-2">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/member/03.jpg') }}" alt="member-img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h6><a href="profile.html">Selinae</a> </h6>--}}
{{--                                <p>Active 1 Day</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="grid-member filter-item boy">--}}
{{--                    <div class="lab-item member-item style-1 style-2">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/member/02.jpg') }}" alt="member-img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h6><a href="profile.html">Andrea Guido</a> </h6>--}}
{{--                                <p>Active 1 Day</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="grid-member filter-item boy">--}}
{{--                    <div class="lab-item member-item style-1 style-2">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/member/04.jpg') }}" alt="member-img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h6><a href="profile.html">Rocky deo</a> </h6>--}}
{{--                                <p>Active 1 Day</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="grid-member filter-item girl">--}}
{{--                    <div class="lab-item member-item style-1 style-2">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/member/05.jpg') }}" alt="member-img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h6><a href="profile.html">Jhon doe</a> </h6>--}}
{{--                                <p>Active 5 Day</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="grid-member filter-item boy">--}}
{{--                    <div class="lab-item member-item style-1 style-2">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/member/06.jpg') }}" alt="member-img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h6><a href="profile.html">Angelina</a> </h6>--}}
{{--                                <p>Active 1 Day</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="grid-member filter-item girl">--}}
{{--                    <div class="lab-item member-item style-1 style-2">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/member/07.jpg') }}" alt="member-img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h6><a href="profile.html">Andrea Guido</a> </h6>--}}
{{--                                <p>Active 1 Day</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="grid-member filter-item boy">--}}
{{--                    <div class="lab-item member-item style-1 style-2">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/member/08.jpg') }}" alt="member-img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h6><a href="profile.html">Jene Aiko</a> </h6>--}}
{{--                                <p>Active 1 Day</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="grid-member filter-item girl">--}}
{{--                    <div class="lab-item member-item style-1 style-2">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/member/09.jpg') }}" alt="member-img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h6><a href="profile.html">Anna haek</a> </h6>--}}
{{--                                <p>Active 1 Day</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="grid-member filter-item boy">--}}
{{--                    <div class="lab-item member-item style-1 style-2">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/css/assets/images/member/10.jpg') }}" alt="member-img">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h6><a href="profile.html">Andrean Puido</a> </h6>--}}
{{--                                <p>Active 1 Day</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- ================ Top Member Section end Here ====  =========== -->





<!-- ================ Review Section start Here =============== -->
{{--<section class="clints-section padding-tb">--}}
{{--    <div class="container">--}}
{{--        <div class="section-header">--}}
{{--            <h4 class="theme-color">What our Customers Say</h4>--}}
{{--            <h2>Client’s Feed back Latest Reviews--}}
{{--                From My Clients</h2>--}}
{{--        </div>--}}
{{--        <div class="section-wrapper">--}}
{{--            <div class="clients">--}}
{{--                <div class="client-list">--}}
{{--                    <div class="client-content">--}}
{{--                        <p>Drama enable wordwide action team whereProcedu Aran Manu Produc Raher ConveneMotin Was--}}
{{--                            Procedur Arramin</p>--}}
{{--                        <div class="client-info">--}}
{{--                            <div class="name-desi">--}}
{{--                                <h6>Marin Chapla</h6>--}}
{{--                                <span>UI Designer</span>--}}
{{--                            </div>--}}
{{--                            <div class="rating">--}}
{{--                                <ul>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="client-thumb">--}}
{{--                        <img src="assets/images/group/group-mem/02.png" alt="lab-clients">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="client-list">--}}
{{--                    <div class="client-content">--}}
{{--                        <p>Drama enable wordwide action team whereProcedu Aran Manu Produc Raher ConveneMotin Was--}}
{{--                            Procedur Arramin</p>--}}
{{--                        <div class="client-info">--}}
{{--                            <div class="name-desi">--}}
{{--                                <h6>Nandita Rani</h6>--}}
{{--                                <span>Digital Marketor</span>--}}
{{--                            </div>--}}
{{--                            <div class="rating">--}}
{{--                                <ul>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="client-thumb">--}}
{{--                        <img src="assets/images/group/group-mem/01.png" alt="lab-clients">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="client-list">--}}
{{--                    <div class="client-content">--}}
{{--                        <p>Drama enable wordwide action team whereProcedu Aran Manu Produc Raher ConveneMotin Was--}}
{{--                            Procedur Arramin</p>--}}
{{--                        <div class="client-info">--}}
{{--                            <div class="name-desi">--}}
{{--                                <h6>Sunil Borua</h6>--}}
{{--                                <span>UX Designer</span>--}}
{{--                            </div>--}}
{{--                            <div class="rating">--}}
{{--                                <ul>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="client-thumb">--}}
{{--                        <img src="assets/images/group/group-mem/03.png" alt="lab-clients">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="client-list">--}}
{{--                    <div class="client-content">--}}
{{--                        <p>Drama enable wordwide action team whereProcedu Aran Manu Produc Raher ConveneMotin Was--}}
{{--                            Procedur Arramin</p>--}}
{{--                        <div class="client-info">--}}
{{--                            <div class="name-desi">--}}
{{--                                <h6>Zinat Zaara</h6>--}}
{{--                                <span>Web Designer</span>--}}
{{--                            </div>--}}
{{--                            <div class="rating">--}}
{{--                                <ul>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="client-thumb">--}}
{{--                        <img src="assets/images/group/group-mem/04.png" alt="lab-clients">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="client-list">--}}
{{--                    <div class="client-content">--}}
{{--                        <p>Drama enable wordwide action team whereProcedu Aran Manu Produc Raher ConveneMotin Was--}}
{{--                            Procedur Arramin</p>--}}
{{--                        <div class="client-info">--}}
{{--                            <div class="name-desi">--}}
{{--                                <h6><a href="profile.html">Somrat Islam </a></h6>--}}
{{--                                <span>UI Designer</span>--}}
{{--                            </div>--}}
{{--                            <div class="rating">--}}
{{--                                <ul>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="client-thumb">--}}
{{--                        <img src="assets/images/group/group-mem/05.png" alt="lab-clients">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="client-list">--}}
{{--                    <div class="client-content">--}}
{{--                        <p>Drama enable wordwide action team whereProcedu Aran Manu Produc Raher ConveneMotin Was--}}
{{--                            Procedur Arramin</p>--}}
{{--                        <div class="client-info">--}}
{{--                            <div class="name-desi">--}}
{{--                                <h6>Junaid Khan</h6>--}}
{{--                                <span>Devoloper</span>--}}
{{--                            </div>--}}
{{--                            <div class="rating">--}}
{{--                                <ul>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                    <li><i class="icofont-star"></i></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="client-thumb">--}}
{{--                        <img src="assets/images/group/group-mem/06.png" alt="lab-clients">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- ================ Review Section end Here =============== -->


<!-- ================ App Section start Here =============== -->
<section class="app-section bg-pink">
    <div class="container">
        <div class="section-wrapper padding-tb">
            <div class="app-content">
                <h4>App write Coming Soon the CoupleTuple App</h4>
{{--                <h2>Easy Connect to Everyone</h2>--}}
{{--                <p>You find us, finally, and you are already in love. More than 5.000.000 around--}}
{{--                    the world already shared the same experience andng ares uses our system--}}
{{--                    Joining us today just got easier!</p>--}}
                <ul class="app-download d-flex flex-wrap">
                    <li><a href="#" class="d-flex flex-wrap align-items-center">
                            <div class="app-thumb">
                                <img src="assets/images/app/apple.png" alt="apple">
                            </div>
                            <div class="app-content">
                                <p>Available on the</p>
                                <h4>App Store</h4>
                            </div>
                        </a></li>
                    <li class="d-inline-block"><a href="#" class="d-flex flex-wrap align-items-center">
                            <div class="app-thumb">
                                <img src="assets/images/app/playstore.png" alt="playstore">
                            </div>
                            <div class="app-content">
                                <p>Available on the</p>
                                <h4>Google Play</h4>
                            </div>
                        </a></li>
                </ul>

            </div>
            <div class="mobile-app">
                <img src="assets/images/app/mobile-view.png" alt="mbl-view">
            </div>
        </div>
    </div>
</section>
<!-- ================ App Section end Here =============== -->


<!-- ================ footer Section start Here =============== -->
<footer class="footer-section">
    <div class="footer-middle padding-tb" style="background-image: url(assets/images/footer/bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item mb-lg-0">
                            <div class="fm-item-title">
                                <h4>About CoupleTuple</h4>
                            </div>
                            <div class="fm-item-content">
                                <p class="mb-4">Energistically coordinate highly efficient procesr
                                    partnerships befor revolutionar growth strategie
                                    improvement viaing awesome</p>
                                <img src="assets/images/footer/about.jpg" alt="about-image" class="footer-abt-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item mb-lg-0">
                            <div class="fm-item-title">
                                <h4>our Recent news</h4>
                            </div>
                            <div class="fm-item-content">
                                <div class="fm-item-widget lab-item">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <a href="#"> <img src="assets/images/footer/01.jpg"
                                                              alt="footer-widget-img"></a>
                                        </div>
                                        <div class="lab-content">
                                            <h6><a href="blog-single.html">Enable Seamin Matera Forin And Our
                                                    Orthonal Create Vortals.</a></h6>
                                            <p>July 23, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fm-item-widget lab-item">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <a href="#"><img src="assets/images/footer/02.jpg"
                                                             alt="footer-widget-img"></a>
                                        </div>
                                        <div class="lab-content">
                                            <h6><a href="blog-single.html">Dynamca Network Otuitive Catays For
                                                    Plagiarize Mindshare After</a></h6>
                                            <p>July 23, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fm-item-widget lab-item">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <a href="#"><img src="assets/images/footer/03.jpg"
                                                             alt="footer-widget-img"></a>
                                        </div>
                                        <div class="lab-content">
                                            <h6><a href="blog-single.html">Dynamca Network Otuitive Catays For
                                                    Plagiarize Mindshare After</a></h6>
                                            <p>July 23, 2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom-content text-center">
                        <p>&copy; 2022 <a href="#">CoupleTuple</a> -Best Matrimonial Site </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ================ footer Section end Here =============== -->



<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
<!-- scrollToTop ending here -->




<!-- All Scripts -->
<script src="{{ url('css/assets/js/jquery.js') }}"></script>
<script src="{{ url('css/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('css/assets/js/waypoints.min.js') }}"></script>
<script src="{{ url('css/assets/js/swiper.min.js') }}"></script>
<script src="{{ url('css/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ url('css/assets/js/wow.min.js') }}"></script>
<script src="{{ url('css/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('css/assets/js/functions.js') }}"></script>
</body>


</html>
