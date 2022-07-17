<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ Auth::user()->name }}</title>

        <link rel="short icon" href="{{ asset('images/Mugupp ordinary.png')}}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/DocReset.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}">

        @yield('imports')
        <style>
            body {
                background : var(--color-light);
            }

            #preloader {
                height : 100vh;
                width : 100vw;
                background : var(--color-light);
                color : var(--color-dark);
                position : fixed;
                top : 0px;
                left : 0px;
                z-index : 9999;
                animation : opac 4.4s forwards;
                display : flex;
                justify-content : center;
                align-items : center;
                pointer-events : none;
            }

            #preloader #progress {
                animation : grow 3.4s ease-in-out forwards;
                position : absolute;
                top : 0px;
                left : 0px;
                height : 2px;
            }

            @keyframes grow {
                0% {
                    width : 0px;
                    background : var(--color-orange);
                }
                
                50% {
                    width : 60vw;
                    background : var(--color-orange);
                }

                100% {
                    width : 100vw;
                    background : var(--color-red);
                }
            }

            @keyframes opac {
                90% {
                    opacity : 1;
                }
                
                100% {
                    opacity : 0;
                }
            }

            #preloader h1 {
                width : 320px;
                margin-left : -1.2rem;
                text-align : center;
                color : var(--color-primary-main);
                font-family :'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                margin-top : -100px;
                font-size : 3rem;
                letter-spacing : 2px;
            }

            nav {
                position : fixed;
                left : 0px;
                padding-top : 88px;
                top : 0px;
                width : 280px;
                background : url("{{ asset('images/margarita-zueva-vfcTND7lWLU-unsplash - Copy.jpg') }}"), var(--color-primary-main);
                background-size : cover;
                background-repeat: no-repeat;
                background-position : left center;
                background-blend-mode:multiply;
                display : flex;
                color : var(--color-white);
                flex-direction : column;
                box-shadow : inset 0px 0px 8px black, inset 0px 0px 10px var(--color-purple);
                height : 100vh;
                padding-bottom : 80px;
                transition : .1s;
                z-index : 999;
                overflow-y : scroll;
                overflow-x : hidden;
                overscroll-behaviour : 
                animation : pointable 2s forwards;
            }

            nav::-webkit-scrollbar {
                display : none;
            }

            nav + #nav-expand {
                display : none;
            }

            nav > i {
                position : absolute;
                right : 4px;
                top : 8px;
                border-radius : 50%;
                height : 40px;
                width : 50px;
                padding : 8px 14px;
                font-size : 1.6rem;
            }

            nav ul {
                display : flex;
                flex-direction : column;
                width : 100%;
                gap : .4rem;
                min-height : max-content;
                margin : .8rem 0px 1.2rem;
            }

            nav ul li {
                width : 100%;
                display : flex;
                gap : 1rem;
                position : relative;
                font-size : 1rem;
                height : 48px;
                transition : .4s linear;
            }

            nav ul li h4 {
                width : 100%;
                padding-top : 14px;
                height : 100%;
                padding-left : 46px;
            }

            nav ul li i {
                position : absolute;
                left : 28px;
                padding-top : 16px;
                font-weight : 250;
            }

            nav ul [class*=" bi-"]::before {
                font-weight : 300 !important;
            }

            nav > h5 {
                text-align : center;
                font-size : 1.4rem;
                letter-spacing : 6px;
                font-weight : 400;
                font-family : 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                position : absolute;
                top : 12px;
                right : 90px;
            }

            nav > h6 {
                padding-left : 1.5rem;
                font-size : 1.2rem;
                font-weight : 400;
            }

            nav ul li:hover, #navlinks li.active {
                background : var(--color-light);
                color : var(--color-gray);
            }

            #navlinks li.active {
                display : none;
            }

            nav ul li:hover::before {
                content: "";
                left: 0px;
                position: absolute;
                height: 100%;
                width: 4px;
                background: var(--color-primary-main);
            }

            #profile_img {
                padding: 6px 8px;
                border-radius: 6px;
                box-shadow: 0px 0px 6px var(--color-dark);
                margin: 12px auto;
                background-color: var(--color-light);
                align-items: center;
                max-width: 260px;
                display: flex;
                justify-content : center;
                flex-wrap : wrap;
                gap: 10px;
                position: relative;
            }

            #prof_img--main {
                height: 40px;
                width: 40px;
                border-radius: 50%;
            }

            #me {
                text-align: left;
                width : 160px;
                color: var(--color-dark);
            }

            #me h1 {
                font-weight: 400;
                font-size: 1.4rem;
            }

            #me p {
                font-weight : 300;
                font-size : .8rem;
            }

            nav.shrink {
                width : 56px;
                height : 98%;
                top : 1%;
                padding : 0px;
                padding-top : 50px;
                overflow : initial;
                left : 10px;
                border-radius : 8px;
                background : var(--color-white);
                box-shadow : 0px 0px 6px var(--color-gray);
                gap : 1rem;
                justify-content : flex-start;
                animation : pointable 2s forwards;
            }

            @keyframes pointable {
                from {
                    pointer-events : none;
                }

                to {
                    pointer-events : initial;
                }
            }

            #nav.shrink > i {
                font-size : 1.45rem;
                position : absolute;
                top : 12px;
                left : 16px;
                width : max-content;
                height : max-content;
                border-radius : 0px;
                background : none;
                padding : 0px;
                color : var(--color-gray);
            }

            nav.shrink > ul {
                gap : 10px;
                height : max-content;
                margin-bottom : 8px;
            }

            nav.shrink ul h4 {
                display : none;
            }

            nav.shrink li {
                display : flex;
                justify-content: center;
                align-items : center;
            }

            nav.shrink #navlinks li.active, nav.shrink ul li:hover {
                background : var(--color-lemon);
                border-radius : 4px;
                width : 38px;
                height : 38px;
                margin : auto;
            }

            nav.shrink #navlinks li.active::after, nav.shrink ul li:hover::after {
                content : '';
                background : var(--color-lemon);
                height : 48px;
                position : absolute;
                right : -10px;
                top : -6px;
                width : 3px;
            }

            nav.shrink ul li:hover h4 {
                display : block;
                position : absolute;
                left : 140%;
                min-width : 180px;
                text-align : center;
                border-radius : 3px;
                padding : 8px 16px;
                box-shadow : 0px 0px 4px var(--color-dark);
                background : var(--color-white);
                color : var(--color-primary-main);
            }

            nav.shrink ul li i {
                position : static;
                color : var(--color-gray);
            }

            nav.shrink ul li.active i, nav.shrink ul li:hover i {
                color : var(--color-white);
            }

            nav.shrink a#logout {
                display : flex;
                justify-content: center;
                align-items : center;
                padding : 0px;
            }

            nav.shrink > h5, nav.shrink > h6 {
                display : none;
            }

            nav.shrink ul li:hover::before {
                display : none;
            }

            nav.shrink #profile_img {
                padding : 0px;
                border-radius: 24px;
                box-shadow: none;
                margin: 6px auto;
                background: none;
                align-items: center;
                display: flex;
                justify-content : center;
                gap : 0px;
                position: relative;
            }

            nav.shrink #prof_img--main {
                height: 40px;
                width: 40px;
                border-radius: 50%;
            }

            nav.shrink #me {
                display : none;
            }

            .studying {
                height : 2.5rem;
                width : 2.5rem;
                border-radius : 0px;
                background : none;
                padding : 0px;
            }

            main {
                position : absolute;
                left : 280px;
                min-height: 100vh;
                width : calc(100vw - 280px);
            }

            #notification-box {
                position : fixed;
                z-index : 9999999;
                font-size : 1.2rem;
                display : flex;
                gap : 1rem;
                justify-content: flex-end;
                right : 2rem;
                top : 2rem;
                display : none;
                transition : .4s;
                transform : translateX(-150%);
            }

            #notification-box > div {
                width : 280px;
                position : relative;
                border-radius : 3px;
                font-size : .86rem;
                padding : 16px 2.2rem;
                border-radius : 6px;
                background : var(--color-dark);
                color : var(--color-white);
            }

            #notification-box .bi-x {
                position : absolute;
                right : .7rem;
                top : .7rem;
            }

            #notification-box.show {
                transform : translateX(0%);
                display : flex;
            }

            #main.stretch {
                min-width : calc(100vw - 76px);
                left : 76px;
            }

            #float {
                position : fixed;
                right : 1.1rem;
                bottom : 1.1rem;
                z-index : 9999;
            }

            #float > button {
                height : 50px;
                width : 50px;
                box-shadow : 0px 0px 8px var(--color-light-blue);
                display : flex;
                justify-content : center;
                align-items : center;
                padding-top : 4px;
                color : var(--color-primary-main);
                border-radius : 40%;
                background : var(--color-white);
            }

            #float > div {
                position : absolute;
                box-shadow : 0px 0px 8px var(--color-light-blue);
                bottom : 56px;
                right : 6px;
                min-height : 250px;
                min-width : 200px;
                display : none;
                flex-direction : column;
                padding : .7rem;
                gap : 1rem;
                width : max-content;
                background : var(--color-white);
            }

            #float.show > div {
                display : flex;
            }

            #float > div div {
                display : flex;
                width : 100%;
                gap : 1rem;
                align-items : center;
            }
                        
            #cabinet {
                position : fixed;
                top : 0px;
                right : 0px;
                background : var(--color-white);
                height : 100vh;
                padding : 1rem;
                display : flex;
                z-index : 999;
                width : 300px;
                flex-direction : column;
                opacity : 0;
                transition : .4s;
                pointer-events : none;
            }

            #cabinet.show {
                opacity : 1;
                pointer-events : initial;
            }

            #cabinet > h2 {
                font-size : 1.1rem;
                font-weight : 300;
            }

            #cabinet > ul {
                display : flex;
                gap : 1rem;
                margin : 1.8rem 0px;
                flex-wrap : wrap;
            }

            #cabinet li {
                min-height : 70px;
                width : 70px;
                position : relative;
                cursor : pointer;
            }

            #cabinet img {
                height : 60px;
                border-radius : 4px;
                width : 50px;
                margin : auto;
            }

            #cabinet ul i {
                float : left;
                margin : 0px 4px 4px;
                cursor : pointer;
            }

            #cabinet ul span {
                width : 100%;
                font-size : .6rem;
                text-transform : uppercase;
                text-align : start;
            }

            #cabinet ul#mug-books span {
                position : absolute;
                top : 74px;
                background : rgba(20, 8, 8, 0.615);
                left : 0px;
                display : none;
                padding : 4px;
            }

            #cabinet #mug-books li:hover span {
                display : inline;
                z-index : 9;
            }

            @media screen and (max-width : 564px) {
                nav, nav.shrink {
                    transform : translateX(-100%);
                    transition : all .4s;
                    position : fixed;
                    left : 0px;
                    height : 100vh;
                    padding : 8px;
                    padding-top : 50px;
                    top : 0px;
                    width : 270px;
                    background : var(--color-primary-main);
                    display : flex;
                    color : var(--color-white);
                    flex-direction : column;
                    height : 100vh;
                    padding-bottom : 80px;
                    transition : .1s;
                    border-radius : 0px;
                    z-index : 999;
                    overflow-y : scroll;
                    overflow-x : hidden;
                    overscroll-behaviour : contain;
                    animation : pointable 2s forwards;
                }

                nav.nav-out {
                    transform : translateX(0%);
                }

                nav > i, nav.shrink > i {
                    display : none;
                }

                nav + #nav-expand {
                    position : fixed;
                    display : flex;
                    justify-content: center;
                    align-items : center;
                    height : 48px;
                    width : 48px;
                    background : var(--color-white);
                    box-shadow : 0px 0px 4px var(--color-light);
                    border-radius : 10%;
                    padding-top : 10px;
                    font-size : 1.5rem;
                    z-index : 999;
                    right : 1rem;
                    top : 1rem;
                }

                nav ul, nav.shrink ul {
                    display : flex;
                    flex-direction : column;
                    width : 100%;
                    gap : .4rem;
                    min-height : max-content;
                    margin : .8rem 0px 1.2rem;
                }

                nav ul li, nav.shrink ul li {
                    width : 100%;
                    display : flex;
                    gap : 1rem;
                    position : relative;
                    font-size : 1rem;
                    height : 48px;
                    transition : .4s linear;
                }

                nav ul li h4, nav.shrink ul li h4 {
                    width : 100%;
                    padding-top : 14px;
                    display : block;
                    height : 100%;
                    padding-left : 46px;
                }

                nav ul li i, nav.shrink ul li i {
                    position : absolute;
                    left : 28px;
                    padding-top : 16px;
                    font-weight : 250;
                }

                nav ul [class*=" bi-"]::before, nav.shrink ul [class*=" bi-"]::before {
                    font-weight : 300 !important;
                }

                nav > h5, nav.shrink > h5 {
                    text-align : center;
                    font-size : 1.4rem;
                    letter-spacing : 6px;
                    font-weight : 400;
                    font-family :'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                    position : absolute;
                    top : 12px;
                    right : 90px;
                }

                nav > h6, nav.shrink > h6 {
                    padding-left : 1.5rem;
                    font-size : 1.2rem;
                    font-weight : 400;
                }

                nav ul li:hover, #navlinks li.active {
                    background : var(--color-light);
                    color : var(--color-gray);
                }

                #navlinks li.active {
                    display : none;
                }

                nav ul li:hover::before, nav.shrink ul li:hover::before {
                    content: "";
                    left: 0px;
                    position: absolute;
                    height: 100%;
                    width: 4px;
                    background: var(--color-primary-main);
                }

                #profile_img {
                    padding: 6px 8px;
                    border-radius: 6px;
                    box-shadow: 0px 0px 6px var(--color-dark);
                    margin: 12px auto;
                    background-color: var(--color-light);
                    align-items: center;
                    max-width: 260px;
                    display: flex;
                    justify-content : center;
                    flex-wrap : wrap;
                    gap: 10px;
                    position: relative;
                }

                #prof_img--main {
                    height: 40px;
                    width: 40px;
                    border-radius: 50%;
                    background : var(--color-light);
                }

                #me {
                    text-align: left;
                    width : 160px;
                    color: var(--color-dark);
                }

                #me h1 {
                    font-weight: 400;
                    font-size: 1.4rem;
                    display : block;
                }

                #me p {
                    font-weight : 300;
                    font-size : .8rem;
                    display : flex;
                }


                #main, #main.stretch {
                    width : 100vw;
                    left : 0px;
                    padding : 0px;
                    margin : 0px;
                }

                #container {

                }
            }
        </style>

        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

        <nav id = "nav" class = "scrolless">
            <i id = "nav-expand" class = "bi bi-list"></i>
        
            <h5>Mugupp</h5>

            <h6>Me</h6>
            <ul id = "navlinks">
                
                <a href="{{ route('study') }}" onclick = "{{ Route::current()->getName() == 'study' ? 'javascript:void(0);' : '' }}">
                    <li class = "{{ Route::current()->getName() == 'study' ? 'active' : ''}}">
                        <span>
                            <i class = "bi bi-journal-text"></i>
                        </span>
                        <h4>Study</h4>
                    
                    </li>
                </a>
               
                <a href = "{{ route('contacts') }}">
                    <li class = "{{ Route::current()->getName() == 'contacts' ? 'active' : ''}}">
                        <span>
                            <i class = "bi bi-telephone"></i>
                        </span>
                        <h4>Contacts</h4>
                    </li>
                
                </a>
              
                <a href="{{ route('notifications') }}">
                    <li class = "{{ Route::current()->getName() == 'notifications' ? 'active' : ''}}">

                        <span><i class ="bi bi-bell"></i></span>
                        <h4>Notifications</h4>
                        
                    </li>
                </a>
                
                <a href="{{ route('mail') }}">
                    <li class = "{{ Route::current()->getName() == 'mail' ? 'active' : ''}}">

                        <span><i class ="bi bi-envelope-open"></i></span>
                        <h4>Mailbox</h4>
            
                    </li>
                </a>
               
                <a href="{{ route('create-book') }}">
                    <li class = "{{ Route::current()->getName() == 'create-book' ? 'active' : ''}}">

                        <span><i class ="bi bi-brush"></i></span>
                        <h4>My Books</h4>
            
                    </li>
                </a>

            </ul>

            <h6>Academia</h6>

            <ul>
         
                <a href="{{ route('academe') }}">
                    <li>
                        <span>
                            <i class = "bi bi-globe2"></i>
                        </span>
                        <h4>The Academe</h4>
            
                    </li>    
                </a>

                <a href = "{{ route('districts') }}">
                    <li class = "{{ Route::current()->getName() == 'districts' ? 'active' : ''}}">
                        <span><i class ="bi bi-geo"></i></span>
                        <h4>Academia Districts</h4>
                    </li>
                </a>
            
                <a href = "{{ route('booths') }}">
                    <li class = "{{ Route::current()->getName() == 'booths' ? 'active' : ''}}">
                        <span><i class ="bi bi-chat-dots"></i></span>
                        <h4>Chat Booths</h4>
                    </li>
                </a>
                <a href = "{{ route('hall') }}">
                    <li>
                        <span><i class ="bi bi-building"></i></span>
                        <h4>The Hall</h4>
                    </li>
                </a>
                
                <a href = "{{ route('library') }}">
                    <li class = "{{ Route::current()->getName() == 'library' ? 'active' : ''}}">
                        <span><i class ="bi bi-book"></i></span>
                        <h4>The Library</h4>
                    </li>
                </a>
                
                <a href="{{ route('mast') }}">
                    <li class = "{{ Route::current()->getName() == 'mast' ? 'active' : ''}}">
                        <span><i class ="bi bi-broadcast-pin"></i></span>
                        <h4>The Mast</h4>
                    </li>
                </a>

                <a href="{{ route('settings') }}">
                    <li>
                        <span><i class = "bi bi-gear"></i></span>
                        <h4>Settings</h4>
                    </li>
                </a>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a id = "logout" onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <li>
                            
                            <span><i class = "bi bi-power"></i> </span><h4>Log Out</h4>
                    
                        </li>
                    </a>
                </form>
                
            </ul>

            <a href="{{ route('profile') }}">
                <div id = "profile_img">

                    <img src="{{ asset('storage/prof-pics/' . Auth::user()->user_pic) }}" alt="" id = "prof_img--main">
                
                    <div id = me>
                        
                        <h1>{{ Auth::user()->name }}</h1>
                        <p>{{ Auth::user()->email }}</p>

                    </div>
                </div>
            </a>

        </nav>

        <button id = "nav-expand" onclick = "document.getElementById('nav').classList.toggle('nav-out'); document.getElementById('nav').classList.remove('shrink'); document.getElementById('main').classList.remove('stretch');">
            <i class = "bi bi-list"></i>
        </button>

        <div id="notification-box">
        </div>

        <div id="preloader">
            <div id="progress"></div>
            <h1>Mugupp</h1>
        </div>

        <div id="float">
            <button onclick="document.getElementById('cabinet').classList.toggle('show');">
                <i class = "bi bi-diamond-fill"></i>
            </button>
            <div>

            </div>
        </div>        

        
        <div id="cabinet">
            <h2>Books</h2>
            <ul id="mug-books">
                <li>
                    <img src="{{ asset('images/faces/1.jpg') }}" />
                    <span>Life of the hunter's hunted.</span>
                </li>
                <li>
                    <img src="{{ asset('images/faces/2.jpg') }}" />
                    <span>Life of the hunter's hunted.</span>
                </li>
                <li>
                    <img src="{{ asset('images/faces/3.jpg') }}" />
                    <span>Life of the hunter's hunted.</span>
                </li>
                <li>
                    <img src="{{ asset('images/faces/4.jpg') }}" />
                    <span>Life of the hunter's hunted.</span>
                </li>
                <li>
                    <img src="{{ asset('images/faces/5.jpg') }}" />
                    <span>Life of the hunter's hunted.</span>
                </li>
                <li>
                    <img src="{{ asset('images/faces/6.jpg') }}" />
                    <span>Life of the hunter's hunted.</span>
                </li>
            </ul>

            <h2>Other Documents</h2>
            <ul>
                <li>
                    <i class="bi bi-file-earmark-font-fill"></i>
                    <span>mts 101 Handouts</span>
                </li>
                <li>
                    <span>MTS 10 Handouts</span>
                </li>
                <li>
                    <span>MTS 01 Handouts</span>
                </li>
                <li>
                    <span>MTS 201 Handouts</span>
                </li>
                <li>
                    <span>MTS 301 Handouts</span>
                </li>
                <li>
                    <span>MTS 401 Handouts</span>
                </li>
            </ul>
        </div>



        <!-- Page Content -->
        <main id = "main" class = "">
            {{ $slot }}
        </main>
        <script src = "{{ asset('js/jquery.min.js') }}"></script>
        <script>
            const navExpand = document.getElementById('nav-expand');
            const nav = document.getElementById('nav');
            const main = document.getElementById('main');
            const float = document.getElementById('float');

            // float.querySelector('button').addEventListener('click', () => {
            //     float.classList.toggle('show');
            // })

            navExpand.addEventListener('click', () => {
                nav.classList.toggle('shrink');
                main.classList.toggle('stretch');
            });

            notifier = document.getElementById('notification-box');

            function closeNotification(icon) {
                notifier.removeChild(icon.closest('div'));
            }

            $.ajax({
                url : '/unseen-notifications/' + {{Auth::user()->id}},
                method : 'GET',
                success : (data) => {
                    data.data.forEach( e => {
                        notifier.innerHTML += `
                            <div>
                                <i class = "bi bi-x" onclick = "closeNotification(this);"></i>
                                <p>${e.text}</p>
                            </div>
                        `;
                        notifier.classList.add('show');
                    })
                }
            })

            setInterval(() => {
                $.ajax({
                    url : '/unseen-notifications/' + {{Auth::user()->id}},
                    method : 'GET',
                    success : (data) => {
                        data.data.forEach( e => {
                            setTimeout(() => {
                                notifier.innerHTML += `
                                    <div>
                                        <i class = "bi bi-x" onclick = "closeNotification(this);"></i>
                                        <p>${e.text}</p>
                                    </div>
                                `;
                                notifier.classList.add('show');
                            }, 4000);
                        })
                    }
                })
            }, 40000);
        </script>
        @yield('scripts')
    </body>
</html>
