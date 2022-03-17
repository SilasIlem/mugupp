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
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/ascholar.css')}}">
        <link rel="icon" href="{{ asset('images/Mugupp ordinary.png')}}">
        <script src="{{asset('js/app.js')}}" defer></script>
        <script src="{{asset('js/ascholar.js')}}" defer></script>
        <link rel = stylesheet href = "{{asset('css/bootstrap-icons/bootstrap-icons.css')}}" />
        <style>
            .loading {
                background-color: rgb(99, 100, 102);
                border-radius: 100%;
                display: inline-block;
                margin-left: 2px;
                margin-right: 2px;
                min-width: 30px;
                max-height: 30px;
                animation : running 1.4s ease-in-out infinite normal both running;
            }

            @keyframes running {
                    0%, 80%, 100% {
                    transform: scale(0.3);
                    opacity: 0;
                }
                40% {
                    transform: scale(1);
                    opacity: 0.5;
                }
            }

            #preloader {
                background : rgb(243, 244, 246);
                position : fixed;
                height : 100vh;
                width : 100vw;
                display : flex;
                flex-direction : column;
                justify-content : center;
                align-items : center;
            }

            #preloader img {
                width : 50%;
                height : 40vh;
            }

            #preloader div {
                margin-top : 20px;
                height : 60px;
                width : 60px;
                display : flex;
            }

            #preloader.hide-preloader {
                animation : disload .3s linear;
            }

            #preloader.hide-preloader i {
                display : none;
            }

            #preloader.hide-preloader div {
                display : none;
            }

            @keyframes disload {
                to {
                    opacity : 0;
                    z-index : -100;
                }
            }

            #content {
                display : none;
            }

            #content.unhide-content {
                display : block;
            }

            #m-name {
                margin-top : -20px;
                letter-spacing : 4px;
                font-size: 3em;
                color: #07649f;
                text-align : center;
            }

            #m-name img {
                width : 200px;
                height : 80px;
            }

            nav form, nav input[name="search"] {
                min-width : 60%;
                margin-top : 20px;
                text-align : center;
            }

            nav input[name="search"]::placeholder {
                text-align : center;
            }

            #header {
                min-height: 100px;
                max-height: 100px;
                min-width: 90vw;
                max-width: 90vw;
                z-index: 99;
                position: absolute;
                margin : 0px 1vw;
                padding-top : 30px;
                display : none;
            }

            #header ul li {
                background : none;
                border : none;
                outline : none;
            }

            #header.header #navlinks li {
                padding : 0px 8px;
                max-width: 100%;
                min-height: 26px;
                max-height: 28px;
                vertical-align: center;
                text-align: center;
                color: white;
                background-color: #07649f;
                border-radius: 8px;
                border: 2px solid white;
                outline: 1px solid #07649f;
                padding-top: 1px;
            }

            ul#navlinks {
                max-width : 72vw;
                padding-left : 20px;
                margin-top : 20px;
            }

            #landing-bin {
                background : rgb(243, 244, 246);
                min-width : 100vw;
                max-width : 100vw;
                display : flex;
                position : fixed;
                top : 0px;
                left : 0px;
                min-height: 100vh;
                max-height: 100vh;
                overflow-x : hidden;
                overflow-y : scroll;
            }
                    
            #landing {
                min-height: 100vh;
                max-height: 100vh;
                min-width: 72vw;
                max-width: 72vw;
                position : relative;
                top : 0px;
                left : 0px;
                padding : 20px;
                padding-top : 50px;
                z-index : 1;
                color: white;
            }

            #landing-bin.notlanding #landing {
                position : relative;
                min-width: 100vw;
                max-width: 100vw;
                min-height : 86vh;
            }

            #landing-bin.notlanding #register {
                position : relative;
                min-width: 0vw;
                max-width: 0vw;
                min-height : 86vh;
            }

            #header.header {
                position : fixed;
                background : white;
                transition : all .3s linear;
                min-height : 130px;
                max-height : 130px;
                min-width: 100vw;
                max-width: 100vw;
                margin : 0px;
                display : block;
                padding-top : 4px;
                border-bottom : 1px solid #07649f;
            }

            #header ul {
                position : fixed;
            }

            #header.header ul {
                position : fixed;
                min-width : 100vw;
                max-width : 100vw;
                margin : 0px;
                margin-bottom : 30px;
                height : 50px;
            }

            #header.header nav {
                max-height : 70px;
                margin-left : 0px;
            }

            #register {
                padding : 30px;
                background : white;
                overflow-y : scroll;
            }

            #header.header nav form, #header.header nav input[name="search"] {
                min-width : 90vw;
                max-width : 90vw;
                text-align : center;
            }

            #header.header nav form {
                margin-left : 0vw;
                margin-top : 4px;
                margin-bottom : 30px;
            }

            *::-webkit-scrollbar-thumb {
                background : #07649f;
            }
        
            *::-webkit-scrollbar {
                width : 4px;
            }

            .login {
                min-width : 400px;
                max-width : 400px;
                padding : 28px;
                box-shadow : 0px 0px 8px black;
            }

            .login h1 {
                margin : 8px;
                font-size : 18px;
                font-weight : bold;
            }

            .login-button {
                margin : 20px;
                height : 30px;
                text-align : center;
                width : 80%;
                background : rgb(0, 219, 0);
                color : white;
                padding-top : 6px;
                border-radius : 4px;
                font-size : .8rem;
            }

            #social-loggers {
                margin-top : 20px;
                display : flex;
                flex-wrap : wrap;
                max-width : 100%;
                justify-content : center;
                align-items : center;
                min-width : 100%;
            }

            #social-loggers > * {
                margin : 20px auto;
                padding : 8px 12px;
                border-radius : 16px;
                min-height : 30px;
                min-width : 80%;
                max-width : 100%;
                background : var(--background);
            }

            .flex-column {
                flex-direction : column;
            }

            #landing-bin .foot {
                height : 140px;
                margin-top : 30px;
                box-shadow : inset 0px 0px 8px #d8d8d8;
                padding : 20px;
                color : rgb(70, 70, 70);
                font-size : 0.875rem;
                background : white;
                position : sticky;
                display : flex;
                flex-wrap : wrap;
                width : 100%;
            }

            .foot a {
                margin : 8px 8px;
            }

            #services ul {
                display : flex;
                flex-direction : column;
                height : 60vh;
                justify-content : space-around;
                align-items : center;
                font-size : 20px;
                font-weight : 600;
            }

            #pricing {
                display : flex;
                flex-wrap : wrap;
                justify-content: center;
                align-items : center;
            }

            #pricing h2 {
                margin-top : 20px;
                font-size : 28px;
                font-weight : bold;
            }

            #pricing > *:not(h1) {
                height : 500px;
                margin : 20px;
                width : 320px;
                background : white;
                color : #120038;
            }

            #pricing > *:not(h1):hover {
                background : #120038;
                color : white;
                transition : all .4s linear;
            }

            #pricing div p {
                margin : 20px 0px;
                color : white;
                background : #120038;
                height : 50px;
                text-transform : uppercase;
                font-size : 22px;
                padding-top : 10px;
            }

            #pricing ul {
                text-align : right;
                padding : 8px;
            }

            #team {
                background-image : linear-gradient(-45deg,#000,#212181,#120038);
                color : white;
            }

            #team h1, #contact h1, #pricing h1, #services h1, #quick-links h1 {
                color : white;
                letter-spacing : 8px;
                text-shadow : 0px 0px 8px #07649f;
                font-size : 40px;
                text-transform : uppercase;
                font-weight : 800;
                margin-bottom : 50px;
                width : 100%;
            }

            #team h2 {
                font-size : 30px;
                margin : 12px 8px 40px;
            }

            #team div {
                display : flex;
                flex-direction : column;
                align-items : center;
                justify-content: space-around;
                min-height : 300px;
                max-height : 300px;
                margin-bottom : 80px;
            }

            #team div img {
                height : 180px;
                width : 180px;
                border-radius : 50%;
            }

            #meet-team {
                height : 40px;
                width : 180px;
                border-radius : 8px;
                background :rgb(41, 226, 41);
                color : white;
                font-size : 1.2rem;
            }

            #contact {
                border-bottom : none;
            }

            #contact form {
                display : flex;
                flex-direction : column;
                align-items : center;
                justify-content : space-around;
                width : 400px;
                margin : auto;
                height : 400px;
                box-shadow : inset 0px 0px 8px #07649f;
            }

            #contact form button {
                height : 60px;
                width : 60px;
                background : #07649f;
                border : none;
                outline : none;
                border-radius : 4px;
                box-shadow : 0px 0px 8px #07649f;
                color : white;
            }

            #contact form > *:not(button) {
                width : 70%;
                border-radius : 4px;
                border : none;
                outline : none;
                box-shadow : 0px 0px 8px #07649f;
                height : 60px;
            }

            #howto > div {
                min-height : 80vh;
                min-width : 90vw;
                max-width : 90vw;
                margin-left : auto;
                margin-right : auto;
                background : #efefef;
                box-shadow : 0px 0px 8px #120038;
                border-bottom : none;
                margin-bottom : 20px;
            }

            #howto h1 {
                color : white;
                font-weight : 800;
                font-size : 32px;
                margin-bottom : 40px;
            }

            #howto h2 {
                font-size : 28px;
                font-weight : 700;
                margin-bottom : 16px;
            }

            #howto p {
                font-size : 20px;
            }

            #howto ul {
                list-style : disc;
                margin-left : 20px;
            }

            #start-from-how button {
                height : 60px;
                width : 120px;
                background :rgb(0, 219, 0);
                color : white;
            }

            #start-from-how button:hover {
                background : white;
                box-shadow : inset 0px 0px 4px rgb(0, 219, 0);
                color :rgb(0, 219, 0);
                transition : all .4s linear;
            }

            #howto > div > div {
                border : 1px solid #120038;
                min-height : 20vh;
                padding : 16px;
                text-align : left;
            }

            #start-from-how {    
                position : absolute;
                bottom : 20px;
                display : flex;
                justify-content: center;
                width : 100%;
                left : 0px;
            }
        
            #faq {
                padding-left : 80px;
                text-align : left;
                min-width : 70%;
                max-width : 80%;
                border-bottom : none;
            }

            #faq h1 {
                font-size : 30px;
                font-weight : 800;
            }

            #faq h2 {
                font-size : 22px;
                font-weight : 600;
                margin-top : 60px;
            }

            #faq a {
                color :rgb(0, 219, 0);
            }

            #quick-links {
                min-height : 70vh;
                display : flex;
                flex-direction : column;
                justify-content : space-around;
                align-items : center;
                text-align : center;
            }

            #quick-links h1 {
                font-size : 30px;
                color : #120038;
                text-shadow : none;
            }

            @media screen and (max-width : 764px) {
                .card {
                    max-width : 80vw;
                    margin : auto;
                }  
            }
        
            @media screen and (min-width : 764px) {
                .card {
                    max-width : 600px;
                }
            }

            #sign {
                display : none;
                justify-content : center;
                margin-top : 40px;
            }

            .registral {
                width : 180px;
                height : 50px;
                background : #07649f;
                border-radius : 2px;
                color : white;
            }

            #close-registry {
                position : absolute;
                top : 5px;
                right : 5px;
                height : 50px;
                font-size : 30px;
                width : 50px;
                display : none;
            }

            #sign > * {
                margin : 8px;
                border-radius : 12px;
            }


            @media screen and (max-width : 1264px) {
                #sign {
                    display : flex;
                    flex-direction : column;
                    align-items : center;
                }


                #landing {
                    min-width : 100vw;
                    max-width : 100vw;
                    position : relative;
                }

                #header {
                    z-index : 990;
                }
                #header ul {
                    position : fixed;
                    min-width : 100vw;
                    margin : 0px;
                    margin-bottom : 30px;
                    height : 50px;
                }

                #header nav {
                    max-height : 70px;
                    margin-left : 0px;
                }

                #header nav form, #header.header nav input[name="search"] {
                    min-width : 90vw;
                    max-width : 90vw;
                    text-align : center;
                }

                #header nav form {
                    margin-left : 0vw;
                    margin-top : 4px;
                    margin-bottom : 30px;
                }

                #header.under, #navopener.under {
                    z-index : 0;
                }

                #header.header.under {
                    z-index : 999;
                }

                div#register {
                    position : fixed;
                    min-width : 70vw;
                    max-width : 70vw;
                    min-height : 98vh;
                    max-height : 98vh;
                    left : 15vw;
                    overflow-y : scroll;
                    top : 1vh;
                    background : white;
                    border-radius : 8px;
                    padding : 40px;
                    z-index : 9999;
                    box-shadow : 0px 0px 8px #07649f;
                    display : none;
                }

                #landing-bin.notlanding div#register.register, #landing-bin.notlanding #register.register {
                    display : block;
                    position : fixed;
                    min-width : 96vw;
                    max-width : 96vw;
                    top : 7vh;
                    left : 2vw;
                }

                #register.register {
                    display : block;
                    animation : on .2s linear forwards;
                }

                @keyframes on {
                    from {
                        opacity : 0;
                    }

                    to {
                        opacity : 1;
                    }
                }

                #close-registry {
                    display : block;
                }

            }

            @media screen and (max-width : 764px) {
                #header.header {
                    padding-top : 30px;
                }

                #header.header #navlinks li {
                    background : none;
                    border : none;
                    outline : none;
                    color : #07649f;
                }

                #navopener.under {
                    z-index : 0;
                }
            }

            @media screen and (max-width : 600px) {
                
                #landing {
                    padding-top : 120px;
                }

                #header {
                    padding-top : 30px;
                }

                div#register {
                    position : fixed;
                    min-width : 96vw;
                    max-width : 96vw;
                    z-index : 999;
                    left : 2vw;
                }

                .card.login {
                    padding : 30px;
                    margin : 0px;
                    margin-left : 2vw;
                    max-width : 96vw;
                }
            }
        </style>    
    </head>

        <body>
        
        @guest()
            <div id = preloader>
                <img src = "{{asset('images/Mugupp.png')}}" />
                <div>
                    <div style = "animation-delay : -0.16s" class = "loading"></div>
                    <div style = "animation-delay : -0.32s" class = "loading"></div>
                    <div class = "loading"></div>
                </div>
            </div>
        @endguest
        <div id = content>

            <header id = header>
                <nav> 
                    <form>
                        <input type="text" name="search" placeholder="Search mugupp...">
                    </form>    
                </nav> 
                
                <ul id = navlinks>
                
                    <li>
                        <a href='#about'>About Us</a>
                    </li>
                   
                    <li>
                        <a href='#services'>Our Services</a>
                    </li>
                   
                    <li>
                        <a href='#pricing'>Pricing</a>
                    </li>
                   
                    <li>
                        <a href='#team'>Meet the Team</a>
                    </li>

                    <li>
                        <a href='#howto'>HowTo</a>
                    </li>
                 
                    <li>
                        <a href='#faq'>FAQ</a>
                    </li>

                      
                    <li>
                        <a href='#contact'>Contact Us</a>
                    </li>
                   
                </ul> 
                
            </header>
            
            <button id="navopener"><i class = "bi bi-menu-button-wide"></i></button>
           
            <div style = "min-height : 70vh;" class="font-sans text-gray-900 antialiased">
            <div id = landing-bin>
                <div id=landing>
   
                    <div style = "min-height : 30vh; padding : 5px 0px;" class="font-sans text-gray-900 antialiased">
                        
                        <div class="mt-6 flex flex-col sm:justify-center items-center sm:pt-0">
                        
                            <h1 id = m-name>
                                <img src="{{ asset('images/mugupp.png')}}" alt="">
                            </h1>

                            @auth()
                                <a href="/dashboard"><button style = "margin : 20vh auto;" class = registral>Dashboard</button></a>
                            @endauth

                            @guest()

                            <div class="login animated slideInLeft card mt-2 px-2 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                                
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                        
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        
                                <form id = login method="POST" action="{{ route('login') }}">
                                    @csrf
                        
                                    <h1>Log in to Mugupp</h1>
                                    <!-- Email Address -->
                                    <div>
                                        <x-label for="email" :value="__('Email')" />
                        
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>
                        
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-label for="password" :value="__('Password')" />
                        
                                        <x-input id="password" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password"
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
                                        <button id = registral class = registral type = "button">Create New Account</button>
                                    </div>

                                    <p style = "text-align : center; margin-top : 16px;"><a href="/terms">Terms and Conditions</a> Apply. <br /> Mugupp &copy; 2022</p>
                                </form>
                            </div>
                            
                            @endguest
                            
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

                @guest()

                <div id="register" class = "animated slideInRight">
                    <button id = close-registry><i class = "bi bi-x"></i></button>
                    <div class="font-sans text-gray-900 antialiased">

                            <link rel="stylesheet" href="{{asset('css/register.css')}}">
                            
                            <img src="{{asset('images/SOTAS new.png')}}" width='400' height '100'>
                        
                    
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <fieldset>
                                    <!-- Name -->
                                    <div class = mt-4>
                                        <x-label for="name" :value="__('Name')" />
                        
                                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                    </div>
                                    <div class = mt-1>
                                        <x-label for="username" :value="__('Username')" />
                        
                                        <x-input id="username" class="block  w-full" type="text" name="username" :value="old('username')" required autofocus />
                                    </div>
                                    <div class = mt-1>
                                        <x-label for="date" :value="__('Date')" />
                                        
                                        <x-input type="date" :value="old('Date Of Birth')" class="block  w-full" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" placeholder="yyyy-mm-dd" id="date-of-birth" name="dateOfBirth" class="form-control ng-pristine ng-invalid ng-touched" max="2006-01-03" min="1919-01-03" required autofocus />

                                    </div>


                                    
                                    <!-- Email Address -->
                                    <div class="mt-1">
                                        <x-label for="email" :value="__('Email')" />
                        
                                        <x-input id="email" class="block  w-full" type="email" name="email" :value="old('email')" required />
                                    </div>
                        
                                    <!-- Password -->
                                    <div class="mt-1">
                                        <x-label for="password" :value="__('Password')" />
                        
                                        <x-input id="password" class="block  w-full"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="new-password" />
                                    </div>
                        
                                    <!-- Confirm Password -->
                                    <div class="mt-1">
                                        <x-label for="password_confirmation" :value="__('Confirm Password')" />
                        
                                        <x-input id="password_confirmation" class="block  w-full"
                                                        type="password"
                                                        name="password_confirmation" required />
                                    </div>
                            
                                </fieldset> 
                
                                <br />
                    
                                <fieldset> 
                                    <legend> Your Review: </legend>
                                        <label for="hear-about">How did you hear about us?</label>   
                                        <select name="referrer" id="hear-about">      
                                            <option value="google">Google</option>      
                                            <option value="friend">Friend</option>      
                                            <option value="advert">Advert</option>      
                                            <option value="others">Others</option>     
                                        </select>
                    
                                        <br />
                                        <br />
                    
                                        <p>We care about your privacy. By sharing your personal data you will be able to get research opportunities targeted to your interests, help to improve products and services and earn rewards for participation... You understand we will manage your admission service if successful at the end? </p>   
                    
                                        <div class = mt-4>
                                            <label for="t&c">Do You?</label>       
                                            <input id = t&c type="radio" name="rating" value="yes" /> 
                    
                                        </div>
                                
                                        <div class = mt-4>
                                            <label for="comments">Got any comments on us?</label>
                                            <br />
                                            <textarea id="comments"></textarea> 
                                        </div>
                                        
                                        
                                        <div class = "mt-4">
                                            <label for="subscribe">Sign me up for emails</label>     
                                            <input id = subscribe type="checkbox" name="subscribe" checked="checked" /> 
                                        </div>
                                
                                </fieldset>
                    
                                <a href="{{ Storage::url('docs/instructions.txt') }}" download>Instructions</a>
                    
                                <div class="flex items-center justify-end ">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                    
                                    <x-button class="ml-4">
                                        {{ __('Register') }}
                                    </x-button>
                                </div>
                            </form>

                            <div id = social-loggers>
                                <button style = "--background : rgb(250, 25, 81); display : flex; align-items : center;" class = registral type = "button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" aria-hidden="true"><title>Google</title><g fill="none" fill-rule="evenodd"><path fill="#4285F4" d="M17.64 9.2045c0-.6381-.0573-1.2518-.1636-1.8409H9v3.4814h4.8436c-.2086 1.125-.8427 2.0782-1.7959 2.7164v2.2581h2.9087c1.7018-1.5668 2.6836-3.874 2.6836-6.615z"></path><path fill="#34A853" d="M9 18c2.43 0 4.4673-.806 5.9564-2.1805l-2.9087-2.2581c-.8059.54-1.8368.859-3.0477.859-2.344 0-4.3282-1.5831-5.036-3.7104H.9574v2.3318C2.4382 15.9832 5.4818 18 9 18z"></path><path fill="#FBBC05" d="M3.964 10.71c-.18-.54-.2822-1.1168-.2822-1.71s.1023-1.17.2823-1.71V4.9582H.9573A8.9965 8.9965 0 0 0 0 9c0 1.4523.3477 2.8268.9573 4.0418L3.964 10.71z"></path><path fill="#EA4335" d="M9 3.5795c1.3214 0 2.5077.4541 3.4405 1.346l2.5813-2.5814C13.4632.8918 11.426 0 9 0 5.4818 0 2.4382 2.0168.9573 4.9582L3.964 7.29C4.6718 5.1627 6.6559 3.5795 93.5795z"></path></g></svg>
                                    <span style = "width : 100%;">Create With Google</span>
                                </button>
                                
                                <button style = "--background : rgb(41, 226, 41); display : flex; align-items : center;" class = registral type = "button">
                                    <i style = "color : #07649f;" class = "bi bi-facebook"></i>
                                    <span style = "width : 100%;">Create With Facebook</span>
                                </button>
                                
                                <button style = "--background : rgb(243, 97, 146); display : flex; align-items : center;" class = registral type = "button">
                                    <i style = "color : #74079f;" class = "bi bi-instagram"></i>
                                    <span style = "width : 100%">Create With Instagram</span>
                                </button>
                            </div>
                        </div>

                </div>

                @endguest

            </div>
            <div class = container>

                <div id = mini-container>

                    <div class="mini-header">
                        <div>

                        <h1 style = "font-size : 40px; font-weight : 1000; text-align : left; margin : -16px auto 26px;">Get Right Into The Study Community.</h1>
                        
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta, molestias officia architecto id cupiditate molestiae pariatur ipsum? Delectus quia fuga quisquam amet tempora, vitae porro recusandae neque, ratione esse possimus nam doloribus expedita, necessitatibus architecto molestias! Corporis eos aut atque ipsum non aliquid, nobis et, exercitationem est necessitatibus assumenda fugiat, omnis veniam facilis odio explicabo placeat! Adipisci facere facilis aliquam vero itaque. Explicabo neque nostrum reiciendis a nihil magni recusandae tempora doloribus mollitia praesentium, harum eos repudiandae optio dolor numquam, dignissimos repellat ratione dolorum veritatis labore tenetur, dolorem debitis? Blanditiis, ad recusandae! Quaerat aspernatur illo sit expedita, delectus sint ducimus neque qui rerum deleniti at molestias vero ea.
                        </div>
                        <img style = "float : right;" src="{{ asset('images/friends.png')}}" alt="">    
                    </div>
                    
                    <div class="mini-header" style = "text-align : center; --header-color : rgb(239, 239, 239);">
                        <div>

                        <h1 style = "font-size : 40px; font-weight : 1000; text-align : left; margin : -16px auto 26px;">Get discovered by university admissions officers on Mugupp</h1>
                        
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta, molestias officia architecto id cupiditate molestiae pariatur ipsum? Delectus quia fuga quisquam amet tempora, vitae porro recusandae neque, ratione esse possimus nam doloribus expedita, necessitatibus architecto molestias! Corporis eos aut atque ipsum non aliquid, nobis et, exercitationem est necessitatibus assumenda fugiat, omnis veniam facilis odio explicabo placeat! Adipisci facere facilis aliquam vero itaque. 
                        </div>
                       
                    </div>
                    
                    <div class="mini-header">
                        <div>

                        <h1 style = "font-size : 40px; font-weight : 1000; text-align : left; margin : -16px auto 26px;">Meet and chat with your favourite study mate</h1>
                        
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta, molestias officia architecto id cupiditate molestiae pariatur ipsum? Delectus quia fuga quisquam amet tempora, vitae porro recusandae neque, ratione esse possimus nam doloribus expedita, necessitatibus architecto molestias! Corporis eos aut atque ipsum non aliquid, nobis et, exercitationem est necessitatibus assumenda fugiat, omnis veniam facilis odio explicabo placeat! Adipisci facere facilis aliquam vero itaque. Explicabo neque nostrum reiciendis a nihil magni recusandae tempora doloribus mollitia praesentium, harum eos repudiandae optio dolor numquam, dignissimos repellat ratione dolorum veritatis labore tenetur, dolorem debitis? Blanditiis, ad recusandae! Quaerat aspernatur illo sit expedita, delectus sint ducimus neque qui rerum deleniti at molestias vero ea. Velit totam sint deleniti neque delectus adipisci, temporibus sed. Provident quas unde voluptates! Corrupti impedit officiis voluptatum consequatur dolor asperiores deleniti aperiam. Recusandae consectetur facilis adipisci cum, nisi quisquam corrupti voluptas tenetur fuga possimus quo itaque ad quam rem earum quae, soluta molestias sunt nihil id enim beatae sit? Cum, deserunt consectetur? Error modi quos sed eos temporibus soluta voluptates odit ullam unde consequuntur tempore dicta architecto, rem a aliquid? Fugiat illo consectetur animi perferendis deserunt, in nam dignissimos corporis modi obcaecati ea quam aperiam beatae eaque architecto at quo minus perspiciatis!
                        </div>
                        <img style = "float : right;" src="{{ asset('images/friend.png')}}" alt="">    
                    </div>
                   
                    <div class = "contained first">

                        <div id = links>
                            <h1>Gain Access To The Academe.</h1>
                            <ul>
                                <li>
                                    <h2>Archives</h2>    
                                    <div>
                                        <i class = "bi bi-archive-fill"></i>
                                    </div>
                                    <div>
                                        <p>Gain access to archived posts in the Academe.</p>
                                    </div>
                                </li>
                            
                                <li>
                                    <h2>Show us what you can do.</h2>    
                                    <div>
                                        <i class = "bi bi-archive-fill"></i>
                                    </div>
                                    <div>
                                        <p>Gain access to a world that will show you to the world.</p>
                                    </div>
                                </li>
                            
                                <li>
                                    <h2>Classes</h2>    
                                    <div>
                                        <i class = "bi bi-archive-fill"></i>
                                    </div>
                                    <div>
                                        <p>Gain access to classes with highly qualified teachers.</p>
                                    </div>
                                </li>
                            
                                <li>
                                    <h2>Scholarship</h2>    
                                    <div>
                                        <i class = "bi bi-archive-fill"></i>
                                    </div>
                                    <div>
                                        <p>Gain access to unlimited possibilities.</p>
                                    </div>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
            
                    <div class="aside contained second">
                        
                        <h2>WHO WE ARE</h2>
                        Mugupp is a project founded by three Nigerians with the purpose of conducting an online standardized test for students aspiring for university and college admissions. We are headquartered in Nigeria and are reaching to other parts of Africa. 

                        <h2 style = "margin : 20px;">For Students & Everyone...</h2>

                        <p>
                            We ensure that applicants who turn out successful in our series of online tests and with qualified documents gain admission into a local or 
                            international university with tuition funds covered. 
                            Our registration fee is affordable and open to students and aspiring students.
                            
                            <br />

                            Click <a onclick = "javascript:void(0); scrollToTopRegister()">here </a>to apply. If already applied, 
                            you can log in <a onclick = "javascript:void(0); scrollToTop()">here</a>.

                            <br />

                            If you are logging in as a foreign applicant, ensure that you follow the <a href="curriculum.html">Curriculum Guide</a> as our questions are based on each 
                            country's curriculum.
                        </p>  
                        <h2>What We Are Doing.</h2>

                        <p>
                            The Mugupp project is targeted at students in Africa and aims to conduct a biannual test for thousands of candidates in Africa. The test is meant to confirm the academic potentials of these students in their diverse disciplines. 
                            <br>
                            Mugupp conducts admissions tests for applicants around the globe.
                        </p>

                    
                        <h2>After That?</h2>
                        <p>
                            The best students get automatic enrollment into our admissions support service programmes.
                        </p>

                        <h2>Our Funding Support Programmes?</h2>
                        <p>
                            We have created a meritorious funding and scholarship platforms as the mechanisms with which we open access to global education for every deserving aspiring 
                            student.
                        </p>

                    </div>
                </div>

                <div id = about>
                    <h1 id = about-head>About Us</h1>
                  
                    <p>
                        Mugupp is a test and assessment website. It helps students secure admissions into the university quicker after writing the online Mugupp test. It 
                        also allows you to find, watch and share videos of study materials and other content, offers a platform to connect and teach students taking the online 
                        test across the globe. <br>There is a Performance Table (PT) where talented students are quickly discovered and offered admissions by university and 
                        college officers from around the world who visit our website regularly. Mugupp also recommends peak performers to universities around the globe when
                        they are not very lucky to be discovered in time. All interested candidates enroll into the Scholars Online Testing & Admissions Systems
                        <acronym title="Scholars Online Testing & Admissions Systems"> (SOTAS)</acronym>, the exam portal of Mugupp.<br> Candidates with top grades 
                        become visible on the PT, admittable by universities, and qualified for the Mugupp's Funding Support Programmes (FSP). However, Mugupp welcomes 
                        partnerships with scholarship organizations, government grants, and corporate & private sponsors from around the world.<br> Our Class Room page 
                        will be open to freelance tutors, teachers and lecturers around the world to upload and share video, audio, and text lectures or classes covering all 
                        topics in all subjects or courses. But specifically, all topics MUST align with the curriculum of the tutor's country. Mugupp test takers will be able to see 
                        the shared lectures in their respective formats on their Academe Social Feeds. Other programmes organised by Mugupp Inc. includes a live TV series 
                        for students with great academic potentials. These students are selected at the end of each <acronym title="Scholars Online Testing & Admissions 
                        Systems">SOTAS</acronym> programme.<br> At Mugupp, we believe that one's interest to go to school qualifies one for it. This is why we work to help 
                        those who seek education to find it. It is our biggest passion, however, to give students a reason to be happy with the present and optimistic about their
                        future.</a>
                    </p>

                    <h1>Our Vision</h1>
                    <p>
                        To open access to global education. We aim to help talented students in Africa achieve their academic dreams. We aim to become a reliable platform where students can connect with universities around the world. To this end, we aim to be principal partners of universities and scholarship organizations/private sponsors who will use the Mugupp platform to discover and offer admissions and scholarships to candidates as the case may be. 
                    </p>

                    <h1>Our Mission</h1>
                    <p>
                        To remain Africa's foremost examining body, providing qualitative and reliable educational assessment, encouraging academic and moral excellence and promoting sustainable human resource development and international co-operation.
                    </p>

                    <a href="{{ route('about')}}"><button>Read More</button></a>
                </div>

                <div id = services>
                    <h1>Our Services</h1>
                    <ul>
                        <li>Awarding Scholarships to deserving Candidates.</li>
                        <li>We connect Aspiring Students with Eager sponsors.</li>
                        <li>We provide a platform for you to be as opinionated as you can be.</li>
                        <li>learn at your own pace.</li>
                        <li>Prove you can... And you'll be Granted a platform to teach the masses for profit</li>
                    </ul>
                </div>

                <div id = pricing>
                    <h1>Our Price Plans</h1>

                    <div>
                        <h2>Free For All</h2>

                        <p>Free</p>

                        <ul>
                            <li>Access to the Academe.</li>
                            <li>Access to the Basic Learning Materials.</li>
                            <li>Voicing your thoughts to all others.</li>
                        </ul>
                    </div>
                    
                    <div>

                        <h2>Golden Opportunity</h2>
                        <p>Gold</p>
                        <ul>
                            <li>Access to the Academe.</li>
                            <li>Access to the Basic Learning Materials.</li>
                            <li>Voicing your thoughts to all others.</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h2>Silverine</h2
                            >
                        <p>Silver</p>
                        <ul>
                            <li>Access to the Academe.</li>
                            <li>Access to the Basic Learning Materials.</li>
                            <li>Voicing your thoughts to all others.</li>
                        </ul>
                    </div>

                    <div>
                        <h2>Ultimate</h2>
                        <p>Premium</p>
                        <ul>
                            <li>Access to the Academe.</li>
                            <li>Access to the Basic Learning Materials.</li>
                            <li>Voicing your thoughts to all others.</li>
                        </ul>
                    </div>

                   
                </div>

                <div id = team>
                    <h1>Founders</h1>
                    <div>
                        <img src="{{asset('images/Paris.jpg')}}" alt="" />
                        <h2>Harrison NWAOGWUGWU</h2>
                        <h4>CEO and Co-Founder, Mugupp</h4>
                        <p> He is a Nigerian and a final year student of Geography Education at Obafemi Awolowo University, Nigeria.</p>
                    </div>
                   
                    <div>
                        <img src="{{asset('images/landing.jpg')}}" alt="" />
                        <h2>Daniel NMECHA</h2>
                        <h4>COO and Co-Founder, Mugupp</h4>
                        <p> Daniel is a Nigerian, studying Computer Science at Ashesi University, Ghana. He is also the Project Manager in Ghana.</p>
                    </div>
                 
                    <div>
                        <img src="{{asset('images/Paris.jpg')}}" alt="" />
                        <h2>Silas ILEMOBAYO</h2>
                        <h4>CTO and Co-Founder, Mugupp</h4>
                        <p>Silas is a Nigerian, studying Computer Science at Federal University of Technology, Akure, Nigeria. A full stack developer.</p>
                    </div>

                    <a href="{{ route('team') }}"><button id = meet-team>Meet The Team</button></a>
                 
                </div>

                <div id = howto>
                    <div>
                
                    <h1>HowTo</h1>
                    
                    <div style = "position : relative;">
                        <h2>Get Started</h2>
                        <div id = start-from-how>
                            <a onclick = "javascript:void(0); scrollToTop()"><button>Get Started</button></a>
                        </div>
                    </div>

                    <div>
                        <h2>Join as a student</h2>
                        <p>
                            Joining as a student is simple.
                            <ul>
                                <li>Click on <a href = "login">create an account</a></li>
                                <li>At the Tier Field, be sure to select "Student".</li>
                            </ul>
                        </p>
                    </div>
                    
                    <div>
                        <h2>Join as a teacher</h2>
                        <p>
                            Joining as a teacher is simple.
                            <ul>
                                <li>Click on <a href = "#" nclick = "javascript:void(0); scrollToTopRegister()">create an account</a></li>
                                <li>At the Tier Field, be sure to select "Teacher".</li>
                            </ul>
                        </p>
                    </div>
                   
                    <div>
                        <h2>Just here to gain knowledge?</h2>
                        <p>
                            Got you covered
                            <ul>
                                <li>Click on <a href = "#" onclick = "javascript:void(0); scrollToTopRegister()">create an account</a></li>
                                <li>At the Tier Field, be sure to select "Undecided"... Trust us, you will decide soon enough.</li>
                            </ul>
                        </p>
                    </div>

                            
                    </div>
                </div>

                <div id = faq>
                    <h1>Frequestly asked questions</h1>

                    <div>
                        <h2>What is the Academe?</h2>
                        <p>
                            The Academe is Mugupp's own Academic world. All things to be learnt exist in it. <a href = "#" onclick = "javascript:void(0); scrollToTopRegister()">Join it now</a>
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
                            Sign up, pay for a class space, and <a href = "#" onclick = "javascript:void(0); scrollToTop()">get started</a>.
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
                   
                </div>

                
                <div id = contact>
                    <h1>Contact Us</h1>
                    <form action="">
                        <input type="text" placeholder = "Email Address" />
                        <textarea placeholder = "Comment"></textarea>
                        <button type="submit">Send</button>

                        <style>
                            #contact-links {
                                align-items : center;
                                justify-content: space-around;
                                display : flex;
                                flex-direction : row;
                            }

                            #contact-links i {
                                color : rgb(0, 219, 0);
                            }

                            #contact-links i:hover {
                                color : rgb(7, 100, 159);
                            }
                        </style>
                        <div id = contact-links>
                            <i class = "bi bi-facebook"></i>
                            <i class = "bi bi-whatsapp"></i>
                            <i class = "bi bi-twitter"></i>
                            <i class = "bi bi-instagram"></i>
                            <i class = "bi bi-youtube"></i>
                        </div>
                    </form>
                </div>

                <div id = quick-links>
                    <h1>Here are some quick links for you.</h1>
                    <a href="">Waec registration form</a>
                    <a href="">SATS</a>
                    <a href="">Neco registration commencement</a>
                    <a href="">Jamb admission</a>
                    <a href="">Bece and others</a>
                </div>
        
                <footer>

                    <div>
                        <div id=img-container>
                            <img src="{{asset('images/mugupp.png')}}" width='100' height='30' />
                        </div>
                    </div>

                    <div>
                        <a href="{{ route('terms') }}">Terms of Use</a>

                        <a href=" {{ route('policy') }} ">Privacy Policy</a>

                        <a href="{{ route('about') }}"">About Us</a>

                    </div>

                    <div>
                        <h2>Help</h2>
                        <a href="#">Ask Questions</a>
                        <a href="#">About Admissions</a>
                    </div>

                    <div>
                        <a href="#"><h2>Sponsors</h2></a>
                        <a href="#">L.A.S.U</a>
                    </div>

                    <div>
                        <h2>Powered by: </h2>

                        <span><strong> Harry Nwa Organization.</strong></span>

                        <span>Nigeria.</span>

                    </div>

                    </footer>
                </div>
            </div>

        @guest()
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