<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Keywords" content="Mugupp Online Test/Exam, Profile, Class Room, Exam Room, Scholar Progression, Active Score, Scholarships, Admission, Tutorial Papers, Exam Papers, Test">
        <meta name="Description" content="Join AScholar Learn Apply for STAS admissions exams secure funding support Join reality TV show, The Student, become AScholar education ambassador.">
        <title>Mugupp</title>
        <link rel="icon" href="{{ asset('images/Mathematics-amico.svg')}}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/mugupp.css')}}">
        <link rel="stylesheet" href = "{{asset('css/bootstrap-icons/bootstrap-icons.css')}}" />
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">

        <!--scripts-->
        <script src="{{asset('js/app.js')}}" defer></script>
        <script src="{{asset('js/mugupp.js')}}" defer></script>

    </head>

    <body>
        
        @guest()
            <div id = "preloader">
                {{-- <img src = "{{asset('images/mugupp.png')}}" /> --}}
                <h1>Mugupp</h1>
                <div>
                    <div style = "animation-delay : -0.16s" class = "loading"></div>
                    <div style = "animation-delay : -0.32s" class = "loading"></div>
                    <div class = "loading"></div>
                </div>
            </div>
        @endguest
        <div id = "content">
            
            <button id="navopener"><i class = "bi bi-justify-right"></i></button>
           
            @guest()
            
            <div id = "landing-bin">
              
                <div id=landing>
   
                    <div style = "min-height : 30vh; padding : 5px 0px;" class="font-sans login-container text-gray-900 antialiased">
                        
                        <div class="mt-6 flex login-box flex-col sm:justify-center items-center sm:pt-0">
                        
                            <h1 id = "m-name">
                                <img src="{{ asset('images/mugupp.png')}}" alt="">
                            </h1>

                            

                            <div class="login card mt-2 px-2 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                                
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                        
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        
                                <form id = login method="POST" action="{{ route('login') }}">
                                    @csrf
                        
                                    <h1>Log in to Mugupp</h1>
                                    <!-- Email Address -->
                                    <div>
                                        <x-input id="email" class="block mt-1 w-full" placeholder="email" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>
                        
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-input id="password" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password"
                                                        placeholder="password"
                                                        required autocomplete="current-password" />
                                    </div>
                        
                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                        
                                    <div class="flex flex-column items-center justify-end mt-4">

                                        <button class="login-button">
                                            LOG IN
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
    
                                    </div>

                                    <br>
                                    <hr />
                                    <br>

                                    <div id = sign>
                                        <a href="{{ route('register') }}">
                                            <button id = registral class = registral type = "button">Create New Account</button>
                                        </a>
                                    </div>

                                    <p style = "text-align : center; margin-top : 16px;"><a href="/terms">Terms and Conditions</a> Apply. <br /> Mugupp &copy; 2022</p>
                                </form>
                            </div>
                            
                           
                            
                        </div>
                    
                    </div>

                    <p style = "margin-top : 60px; font-size : .8rem; text-align : center;"> 
                        <span style = "width : 50%; color : grey;">
                            "...Of the greatest opportunities to mankind includes that which enables him go to school and be trained to become useful to himself and his country."
                        </span> Harry Nwa 
                    </p>

                    <div class = foot>
                        <a href = "javascript:void(0); openRegister()">Sign up<a/>
                        <a href = "#Academe">Academe</a>
                        <a href = "#Academe">Sponsors</a>
                        <a href = "#Academe">Groups</a>
                        <a href = "#Academe">Services</a>
                        <a href = "#Academe">Careers</a>
                        <a href = "#Academe">Create Ads</a>
                        <a href = "#Academe">Fundraisers</a>
                        <a href="">Create Class</a>
                        <a href="">Portal</a>
                        <a href = "#Academe">Classes</a>
                        <a href = "">Teaching Jobs</a>
                        <a href = "#FAQ">FAQ</a>
                    </div>
                    
                </div>

            </div>

            <button id="login-opener">Log In</button>

            @endguest


            <div id = "container">


                <nav id = "nav">
                    <ul id = navlinks>
                    
                        <li>
                            <a href='#about'>About Us</a>
                        </li>
           
                        <li>
                            <a href='#team'>Meet the Team</a>
                        </li>
    
                        <li>
                            <a href='#contact'>Contact Us</a>
                        </li>
                        
                        <li>
                            <a href='#faq'>FAQ</a>
                        </li>  

                        <li>
                            <a href="route to blog">News</a>
                        </li>

                        <li>
                            <a href="{{ route('ast') }}">AST</a>
                        </li>
                       
                    </ul> 

                    <div class="language-bar">
                        <div class="language-option">
                            <img src="img/flag.png" alt="">
                            <span>English</span>
                            <i class="fa fa-angle-down"></i>
                            <div class="flag-dropdown">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Germany</a></li>
                                    <li><a href="#">China</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </nav>

                <section id = "top">
                                                
                    <div>
                        <h1>Learn the world of Learning</h1>
                        <p>Learn to create stunning movies, games, projects and more with professional video tutorials.</p>
                        <p>
                            Find your study partners and instructors amongst the best
                        </p>
                        
                        @guest()
                        <a href = "{{ route('register') }}">
                            <button>Join Us</button>
                        </a>

                        @else
                        
                        <a href="{{ route('dashboard') }}">
                            <button>Academe</button>
                        </a>
                        @endguest

                    </div>
                        
                    <div class="nav-bottom">
                        <ul>
                            <li>
                                <i class="bi bi-phone"></i>
                                <div class="info-text">
                                    <span>Phone:</span>
                                    <p>(+12) 345 6789</p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-map"></i>
                                <div class="info-text">
                                    <span>Address:</span>
                                    <p>01 Naija, <span>NIG</span></p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-envelope"></i>
                                <div class="info-text">
                                    <span>Email:</span>
                                    <p>Info.cololib@gmail.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                
                </section>
                            
                <!-- Search Form Section Begin -->
                <div class="search-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="search-form-text">
                                    <div class="search-text">
                                        <i class="bi bi-search"></i>
                                        <span>
                                            Find A Friend
                                        </span>
                                    </div>
                                    <div class="home-text">
                                        <a href="">
                                            Academia
                                        </a>
                                        <i class="bi bi-house"></i>
                                    </div>
                                </div>
                                <form action="#" class="filter-form">
                                    <div class="first-row">
                                        <select>
                                            <option selected value="">Friend</option>
                                            <option value="">Trend</option>
                                            <option value="">Course</option>
                                        </select>
                                        <select>
                                            <option selected value="">By Name</option>
                                            <option value="">By Age</option>
                                        </select>
                                    </div>
                                    <div class="second-row">
                                        <div class="name-wrap">
                                            <div class="name-text">
                                                <label for="name">Name</label>
                                                <input type="text" id="name">
                                            </div>
                                        </div>
                                        <div class="age-range">
                                            <div class="age-text">
                                                <input type="text" id="ageRange" readonly>
                                                <label for="ageRange">Age</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="search-btn">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Search Form Section End -->

                <!-- Hero Section Begin -->
                <section id = "about" class="hero-section">
                    <div class="hero-items owl-carousel">
                        <div class="single-hero-item set-bg" data-setbg="{{ asset('images/landing1.jpg')}}">
                            <div>
                                <img src="{{ asset('images/Studying-rafiki.svg') }}" alt="">
                                <h2>Get Right Into The Study Community.</h2>
                            </div>
                           
                        </div>

                        <div class="single-hero-item set-bg" data-setbg="{{ asset('images/landing2.jpg')}}">
                                
                            <div>

                                <img src="{{ asset('images/Mathematics-amico.svg') }}" alt="">
                                <h2>Get discovered by university admissions officers on Mugupp</h2>
                                
                            </div>

                        </div>

                        <div class="single-hero-item set-bg" data-setbg="{{ asset('images/landing3.jpg')}}">
                                
                            <div>

                                <img src="{{ asset('images/istockphoto-680412874-612x612.jpg') }}" alt="">
                                <h2>Get discovered by university admissions officers on Mugupp</h2>
                                
                            </div>

                        </div>
                    </div>

                    <div class="thumbnail-pic">
                        <div class="thumbs owl-carousel">
                            <div class="item">
                                <img src="{{ asset('images/landing1.jpg')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/landing2.jpg')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/landing3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Hero Section End -->
                       
                <!-- How It Works Section Begin -->
                <section class="howit-works spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <span>Find Your Dream</span>
                                    <h2>How We Work</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="single-howit-works">
                                    <img src="img/howit-works/howit-works-1.png" alt="">
                                    <h4>Search & Find An Artisan</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-howit-works">
                                    <img src="img/howit-works/howit-works-2.png" alt="">
                                    <h4>Find Your Place</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-howit-works">
                                    <img src="img/howit-works/howit-works-3.png" alt="">
                                    <h4>Talk To Us</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- How It Works Section End -->

                   <!-- Video Section Begin -->
                   <div class="video-section set-bg" data-setbg="{{ asset('images/david-rodrigo-Fr6zexbmjmc-unsplash.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="video-text">
                                    <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><i class="bi bi-play"></i></a>
                                    <h4>Find The Perfect Course for You</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Video Section End -->
             
                
                <section id = "team">
                    <h1>Founders</h1>
                    <div id = "founders">
                        <div class = "founder-card">
                            <img src="{{asset('images/faces/1.jpg')}}" alt="" />
    
                            <div class = "founder-description">
    
                                <h2>Harrison NWAOGWUGWU</h2>
                                <small>CEO and Co-Founder, Mugupp</small>
                                <p> He is a Nigerian and a final year student of Geography Education at Obafemi Awolowo University, Nigeria.</p>
                       
                            </div>

                            <div class="founder-social-links">
                                <i class = "bi bi-facebook" style = "--i-color : var(--color-orange);"></i>
                                <i class = "bi bi-twitter" style = "--i-color : var(--color-green);"></i>
                                <i class = "bi bi-whatsapp" style = "--i-color : var(--color-yellow);"></i>
                            </div>
                        </div>
                     
                        <div class = "founder-card">
                            <img src="{{asset('images/faces/2.jpg')}}" alt="" />
                            <div class = "founder-description">
                                <h2>Silas ILEMOBAYO</h2>
                                <h4>CTO and Co-Founder, Mugupp</h4>
                                <p>Silas is a Nigerian, studying Computer Science at Federal University of Technology, Akure, Nigeria. A full stack developer.</p>
                            </div>

                            <div class="founder-social-links">
                                <i class = "bi bi-facebook" style = "--i-color : var(--color-orange);"></i>
                                <i class = "bi bi-twitter" style = "--i-color : var(--color-green);"></i>
                                <i class = "bi bi-whatsapp" style = "--i-color : var(--color-yellow);"></i>
                            </div>
                        </div>
    
                    </div>
                  
                    <div id = "meet-team">
                        <a href="{{ route('team') }}"><button>Meet The Team</button></a>
                    </div>
                 
                </section>

                <!-- Feature Section Begin -->
                <section class="feature-section spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <span>Listing From Top Districts</span>
                                    <h2>Featured Districts</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="feature-carousel owl-carousel">
                                <div class="feature-item">
                                    <div class="fi-pic set-bg" data-setbg="{{ asset('storage/districts/large_picture/@mugdistcen.jpg')}}">
                                        <div class="pic-tag">
                                            <div class="f-text">Basic Level</div>
                                            <div class="s-text">Free for All</div>
                                        </div>
                                        <div class="feature-author">
                                            <div class="fa-pic">
                                                <img src="{{ asset('storage/districts/small_picture/@mugdistcen.jpg')}}" alt="">
                                            </div>
                                            <div class="fa-text">
                                                <span>The central.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fi-text">
                                        <div class="inside-text">
                                            <h4>The Central District</h4>
                                            <ul>
                                                <li><i class="bi bi-house"></i> Naija </li>
                                            </ul>
                                            <h5 class="price">* Free</h5>
                                        </div>
                                        <ul class="room-features">
                                            <li>
                                                <i class="bi bi-people"></i>
                                                <p>All</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @foreach($districts as $district)
                                <div class="feature-item">
                                    <div class="fi-pic set-bg" data-setbg="{{ asset('storage/districts/large_picture/' . $district->profile->large_picture)}}">
                                        <div class="pic-tag">
                                            <div class="f-text">Basic Level</div>
                                            <div class="s-text">Free for All</div>
                                        </div>
                                        <div class="feature-author">
                                            <div class="fa-pic">
                                                <img src="{{ asset('storage/districts/small_picture/' . $district->profile->small_picture)}}" alt="">
                                            </div>
                                            <div class="fa-text">
                                                <span>{{ $district->profile->description }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fi-text">
                                        <div class="inside-text">
                                            <h4>{{ $district->name }}</h4>
                                            <ul>
                                                <li><i class="bi bi-house"></i> Naija </li>
                                                <li><i class="bi bi-brush"></i> {{ $district->created_by }}</li>
                                            </ul>
                                            <h5 class="price">* Free</h5>
                                        </div>
                                        <ul class="room-features">
                                            <li>
                                                <i class="bi bi-people"></i>
                                                <p>{{ sizeof($district->artisans)}} Artisans</p>
                                            </li>
                                            <li>
                                                <i class="bi bi-award"></i>
                                                <p>4 Awards</p>
                                            </li>
                                            <li>
                                                <i class="bi bi-heart"></i>
                                                <p>3</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Feature Section End -->
                <!-- Top Courses Section Begin -->
                <div class="top-courses-section spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="courses-title">
                                    <div class="section-title">
                                        <span>Top Courses For You</span>
                                        <h2>Top Courses</h2>
                                    </div>
                                    <a href="#" class="top-course-all">View All Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-courses-carousel owl-carousel">
                        @foreach($courses as $course)
                        <div class="single-top-courses">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="stp-pic">
                                        <img src="{{ asset('images/booksimages/blog-4.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="stp-text">
                                        <div class="s-text">For Sale</div>
                                        <h2>Villa 9721 Glen Creek</h2>
                                        <div class="room-price">
                                            <span>Start From:</span>
                                            <h4>$3.000.000</h4>
                                        </div>
                                        <div class="courses-location"><i class="icon_pin"></i> 9721 Glen Creek Ave. Ballston Spa, NY</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <ul class="room-features">
                                            <li>
                                                <i class="fa fa-arrows"></i>
                                                <p>5201 sqft</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bed"></i>
                                                <p>8 Bed Room</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath"></i>
                                                <p>7 Baths Bed</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-car"></i>
                                                <p>1 Garage</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Top courses Section End -->

                <!-- Admins Section Begin -->
                <section class="admin-section spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <span>We Are To Help You</span>
                                    <h2>Our admins</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="admin-carousel owl-carousel">
                                <div class="col-lg-3">
                                    <div class="single-admin">
                                        <div class="sa-pic">
                                            <img src="{{ asset('images/faces/5.jpg')}}" alt="">
                                            <div class="hover-social">
                                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                            </div>
                                        </div>
                                        <h5>Harry Nwa <span>Founder & Ceo</span></h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single-admin">
                                        <div class="sa-pic">
                                            <img src="{{ asset('images/faces/2.jpg') }}" alt="">
                                            <div class="hover-social">
                                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                            </div>
                                        </div>
                                        <h5>Silas Ilem <span>CTO & Co-Founder</span></h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single-admin">
                                        <div class="sa-pic">
                                            <img src="img/admin/admin-3.jpg" alt="">
                                            <div class="hover-social">
                                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                            </div>
                                        </div>
                                        <h5>Derrick Lawson <span>Company admins</span></h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single-admin">
                                        <div class="sa-pic">
                                            <img src="img/admin/admin-4.jpg" alt="">
                                            <div class="hover-social">
                                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                            </div>
                                        </div>
                                        <h5>Clifford Colon <span>Saler Manager</span></h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single-admin">
                                        <div class="sa-pic">
                                            <img src="img/admin/admin-5.jpg" alt="">
                                            <div class="hover-social">
                                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                            </div>
                                        </div>
                                        <h5>Clifford Colon <span>Saler Manager</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- admin Section End -->

                <!-- Latest Blog Section Begin -->
                <section class="blog-section latest-blog spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <span>Blog & Events</span>
                                    <h2>News Latest</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="single-blog-item">
                                    <div class="sb-pic">
                                        <img src="{{ asset('images/booksimages/blog-1.jpg')}}" alt="">
                                    </div>
                                    <div class="sb-text">
                                        <ul>
                                            <li><i class="fa fa-user"></i> Adam Smith</li>
                                            <li><i class="fa fa-clock-o"></i> 18th Jan, 2019</li>
                                        </ul>
                                        <h4><a href="#">Enhance Your Brand Potential With Giant.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-blog-item">
                                    <div class="sb-pic">
                                        <img src="{{ asset('images/booksimages/blog-3.jpg')}}" alt="">
                                    </div>
                                    <div class="sb-text">
                                        <ul>
                                            <li><i class="fa fa-user"></i> Adam Smith</li>
                                            <li><i class="fa fa-clock-o"></i> 18th Jan, 2019</li>
                                        </ul>
                                        <h4><a href="#">Illustration In Marketing Materials</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-blog-item">
                                    <div class="sb-pic">
                                        <img src="{{ asset('images/booksimages/blog-2.jpg')}}" alt="">
                                    </div>
                                    <div class="sb-text">
                                        <ul>
                                            <li><i class="fa fa-user"></i> Adam Smith</li>
                                            <li><i class="fa fa-clock-o"></i> 18th Jan, 2019</li>
                                        </ul>
                                        <h4><a href="#">Branding Do You Know Who You Are</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Latest Blog Section End -->

                <!-- Partner Carousel Section Begin -->
                <section class="partner-section">
                    <h1>Our Partners</h1>
                    <div class="container">
                        <div class="partner-carousel owl-carousel">
                            <a href="#" class="partner-logo">
                                <div class="partner-logo-tablecell">
                                    <img src="{{ asset('images/faces/3.jpg')}}" alt="">
                                </div>
                            </a>
                            <a href="#" class="partner-logo">
                                <div class="partner-logo-tablecell">
                                    <img src="{{ asset('images/faces/4.jpg')}}" alt="">
                                </div>
                            </a>
                            <a href="#" class="partner-logo">
                                <div class="partner-logo-tablecell">
                                    <img src="{{ asset('images/faces/5.jpg')}}" alt="">
                                </div>
                            </a>
                            <a href="#" class="partner-logo">
                                <div class="partner-logo-tablecell">
                                    <img src="{{ asset('images/faces/6.jpg')}}" alt="">
                                </div>
                            </a>
                            <a href="#" class="partner-logo">
                                <div class="partner-logo-tablecell">
                                    <img src="{{ asset('images/faces/7.jpg')}}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                <!-- Partner Carousel Section End -->
                <section id = "contact">
                    <h1>Contact Us</h1>
                    <form action="">
                        <input type="text" placeholder = "Email Address" />
                        <textarea placeholder = "Comment"></textarea>
                        <button type="submit">Send</button>

                        <div id = contact-links>
                            <i class = "bi bi-facebook"></i>
                            <i class = "bi bi-whatsapp"></i>
                            <i class = "bi bi-twitter"></i>
                            <i class = "bi bi-instagram"></i>
                            <i class = "bi bi-youtube"></i>
                        </div>
                    </form>
                </section>

                <section id = "faq">
                    <h1>Frequestly asked questions</h1>

                    <div>
                        <h2>What is the Academe?</h2>
                        <p>
                            The Academe is Mugupp's own Academic world. All things to be learnt exist in it. <a href = "{{ route('register') }}">Join it now</a>
                        </p>
                    </div>
                    <div>
                        <h2>Why Do We Conduct Admission Tests?</h2>
                        <p>
                            We want to know how much our applicants know about the courses they want to study at the university or college in order to provide them with 
                            necessary admissions service.
                        </p>
                    </div>
                   
                    <div>
                        <h2>How, as a Teacher, do I create my own classrooms?</h2>
                        <p>
                            Sign up, pay for a class space, and <a href = "{{ route('register') }}">get started</a>.
                        </p>
                    </div>
                   
                    <div>
                        <h2>
                            Who is eligible for the program?
                        </h2>
                        <p>
                            Everyone hoping to get funded through the University experiences.
                        </p>
                    </div>
                   
                    <div>
                        <h2>
                            What are the terms of service for the program?
                        </h2>
                        <p>
                            Everyone hoping to get funded through the University experiences would have to comply with the regulations stated <a href = "{{ route('terms') }}"> here</a>.
                        </p>
                    </div>
                   
                    <div>
                        <h2>
                            What are the limitations with the free use?
                        </h2>
                        <p>
                            Everyone hoping to get funded through the University experiences would have to access to many academic resources.
                        </p>
                    </div>
                   
                </section>

                            
                <!-- Footer Section Begin -->
                <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
                    <div class="container">
                        <div class="footer-text">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="footer-logo">
                                        <div class="logo">
                                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                                        </div>
                                        <p>Subscribe our newsletter gor get notification about new updates.</p>
                                        <form action="#" class="newslatter-form">
                                            <input type="text" placeholder="Enter your email...">
                                            <button type="submit"><i class="fa fa-location-arrow"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-3 offset-lg-1">
                                    <div class="footer-widget">
                                        <h2>Quick Links</h2>

                                        <ul>
                                            <li>
                                                <a href="{{ route('terms') }}">Terms of Use</a>
                                            </li>
                                        
                                            <li>
                                                <a href=" {{ route('policy') }} ">Privacy Policy</a>
                                            </li>
                                            
                                            <li>
                                                <a href="{{ route('about') }}"">About Us</a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li><i class="bi bi-caret-right"></i> <a href="#">Ask Questions</a></li>
                                            <li><i class="bi bi-caret-right"></i> <a href="#">About Admissions</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="footer-widget">
                                        <h4>Social</h4>
                                        <ul class="social">
                                            <li><i class="ti-facebook"></i> <a href="#">Facebook</a></li>
                                            <li><i class="ti-instagram"></i> <a href="#">Instagram</a></li>
                                            <li><i class="ti-twitter-alt"></i> <a href="#">Twitter</a></li>
                                            <li><i class="ti-google"></i> <a href="#">Google+</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="footer-widget">
                                        <h4>Contact Us</h4>
                                        <ul class="contact-option">
                                            <li><i class="fa fa-map-marker"></i> 16 Creek Ave. Farming, NY</li>
                                            <li><i class="fa fa-phone"></i> (+88) 666 121 4321</li>
                                            <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
                                            <li><i class="fa fa-clock-o"></i> Mon - Sat, 08 AM - 06 PM</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Footer Section End -->

                <p id = "downer">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Mugupp Services. All Names, Acronyms and Trademarks displayed on this website are those of their respective owners.</p>
            </div>
         
        </div>

          
        @guest()
        
        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        {{-- 
            <script src="js/jquery.slicknav.js"></script>--}}
        <script src="js/jquery.nice-select.min.js"></script> 
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            window.addEventListener('load', () => {
                setTimeout(() => {
                    document.getElementById('preloader').classList.toggle('hide-preloader');
                    document.getElementById('content').classList.toggle('unhide-content'); 
                }, 6000)}  
            );
        </script>
        @else

        <script>
            document.getElementById('content').classList.toggle('unhide-content');
        </script>
        @endguest
        
    </body>
</html>