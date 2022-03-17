<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Keywords" content="AScholar, Online Test/Exam, Profile, Class Room, Exam Room, Scholar Progression, Active Score, Scholarships, Admission, Tutorial Papers, Exam Papers, Test">
        <meta name="Description" content="Join AScholar Learn Apply for STAS admissions exams secure funding support Join reality TV show, The Student, become AScholar education ambassador.">
        <title>Mugupp</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/ascholar.css')}}">
        <script src="{{asset('js/app.js')}}" defer></script>
        <script src="{{asset('js/ascholar.js')}}" defer></script>
        <link rel = stylesheet href = "{{asset('css/bootstrap-icons/bootstrap-icons.css')}}" />
        </head>

        <body>

        <header id = header>
            <nav> 
                @if(Route::currentRouteName() != 'land')
                    <div class="links">
                        <a title = Register href="{{route('register')}}"><button>Register</button></a>
                        <a title = Login href="{{route('login')}}"><button>Login</button></a>
                    </div>
                @endif
                <form>
                    <input type="text" name="search" placeholder="Search mugupp...">
                </form>    
            </nav> 
            
            <ul id = navlinks>
            
                <img width = 80px height = 60px src="{{asset('images/mugupp.png')}}">

                <li>
                    <a href='syllabus.html' class='topnav-loclicons ascholar-hide-large ascholar-right'onclick='open_menu()' title='Syllabus Guide'>Syllabus</a>
                </li>
                <li>
                    <a href='classroom.html'  class='topnav-loclicons ascholar-hide-large ascholar-right'onclick='open_menu()' title='Class Room'>ClassRoom</a>
                </li>
                <li>
                    <a href='stas.html' class='topnav-loclicons ascholar-hide-large ascholar-right'onclick='open_menu()' title='SOTAS Application'>SOTAS</a>
                </li>
                <li>
                    <a href='stas.html' class='topnav-loclicons ascholar-hide-large ascholar-right'onclick='open_menu()' title='SOTAS Application'>Blog</a>
                </li>
                <li>
                    <a href='stas.html' class='topnav-loclicons ascholar-hide-large ascholar-right'onclick='open_menu()' title='SOTAS Application'>Contact Us</a>
                </li>
                <li>
                    <a href={{route('about')}} class='topnav-loclicons ascholar-hide-large ascholar-right'onclick='open_menu()' title='Know About Us'>About</a>
                </li>
            </ul>

            

            
            
        </header>
        
        <button id="navopener"><i class = "bi bi-menu-button-wide"></i></button>
   
        <div style = "min-height : 70vh;" class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
            
    <footer>

        <div>
            <div id=img-container>
                <img src="{{asset('images/mugupp.png')}}" width='100' height='30'>
            </div>
            <form>
                <input type="text" name="search" placeholder="Search mugupp..">
            </form>

            <a href='login.html'>Logout</a>

        </div>

        <div>
            <a href="terms.html">Terms of Use</a>

            <a href="privacy.html">Privacy Policy</a>

            <a href="contact.html">Contact Us</a>
    
            <a href='about.html'>About Us</a>

        </div>

        <div>
            <span>Powered by: </span>

            <span><strong> Harry Nwa Organization.</strong></span>

            <span>Nigeria.</span>

            
        </div>

    </footer>
    </body>
</html>
