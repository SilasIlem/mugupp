<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>AST</title>

        <link rel="short icon" href="{{ asset('images/Mugupp ordinary.png')}}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/DocReset.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}">

        <style>
            body {
                font-family :Verdana, Geneva, Tahoma, sans-serif;
            }
            
            #nav-opener {
                display : none;
                position : fixed;
                background : var(--color-dark);
                bottom : 40px;
                right : 24px;
                padding-top : 10px;
                z-index : 9999;
                font-size : 1.4rem;
                color : var(--color-white);
                justify-content : center;
                align-items : center;
                border-radius : 10%;
                height : 48px;
                width : 48px;
                box-shadow : 0px 0px 3px var(--color-gray);
            }

            header #socials {
                display : flex;
                padding : 0px 20px;
                align-items : center;
                z-index : 9;
                width : 100vw;
                top : 0px;
                height : 30px;
                justify-content : flex-end;
                gap : 12px;
                background : var(--color-dark);
                color : var(--color-white);
                position : fixed;
                box-shadow : 0px 0px 12px 4px var(--color-dark);
            }

            header #contact {
                height : 70px;
                width : 100vw;
                background : var(--color-green);
                color : var(--color-white);
                display : flex;
                z-index : -9;
                align-items : center;
                justify-content : space-around;
                position : fixed;
                top : 30px;
            }

            nav {
                height : 6vh;
                width : 100vw;
                background : var(--color-white);
                color : var(--color-dark);
                position : sticky;
                top : 0px;
                margin-top : 100px;
                z-index : 999;
                display : flex;
                justify-content: space-between;
                box-shadow : 0px 0px 6px var(--color-dark);
            }

            nav > h1 {
                padding-bottom : 8px;
                font-size : 1.7rem;
                color : var(--color-primary-main);
                margin : auto 12px;
            }

            nav ul {
                display : flex;
                width : 70vw;
                height : 100%;
                align-items : center;
                justify-content : space-around;
            }

            main {
                z-index : 99;
                background : var(--color-white);
                min-height : 40vh;
            }
                        
            footer {
                background-color: #010e28;
                color: white;
                text-align: center;
                padding: 16px;
                min-height: 26vh;
                width: 100vw;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                align-items: center;
                gap : 30px;
            }

            footer > div {
                gap : 12px;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
                width: 280px;
            }

            footer h2 {
                font-size: 1.4rem;
                font-weight: 300;
            }

            /*---------------------
            Footer
            -----------------------*/

            .footer-text {
                padding-top: 70px;
                padding-bottom: 35px;
            }
            .footer-text .footer-logo {
                margin-bottom: 30px;
            }
            .footer-text .footer-logo .logo {
                margin-bottom: 34px;
            }
            .footer-text .footer-logo .logo a {
                display: inline-block;
            }
            .footer-text .footer-logo p {
                margin-bottom: 25px;
            }
            .footer-text .footer-logo .newslatter-form {
                position: relative;
            }
            .footer-text .footer-logo .newslatter-form input {
                width: 100%;
                height: 46px;
                border: none;
                font-size: 16px;
                color: #aaaab3;
                background: rgba(255, 255, 255, 0.2);
                padding-left: 20px;
            }
            .footer-text .footer-logo .newslatter-form input::-webkit-input-placeholder {
                color: #aaaab3;
            }
            .footer-text .footer-logo .newslatter-form input::-moz-placeholder {
                color: #aaaab3;
            }
            .footer-text .footer-logo .newslatter-form input:-ms-input-placeholder {
                color: #aaaab3;
            }
            .footer-text .footer-logo .newslatter-form input::-ms-input-placeholder {
                color: #aaaab3;
            }
            .footer-text .footer-logo .newslatter-form input::placeholder {
                color: #aaaab3;
            }
            .footer-text .footer-logo .newslatter-form button {
                background: var(--color-primary-main);
                border: 1px solid var(--color-primary-main);
                height: 40px;
                width: 40px;
                line-height: 40px;
                position: absolute;
                right: 3px;
                top: 3px;
                display: inline-block;
            }
            .footer-text .footer-logo .newslatter-form button i {
                font-size: 18px;
                color: #ffffff;
            }
            .footer-text .footer-widget {
                margin-bottom: 30px;
                overflow: hidden;
            }
            .footer-text .footer-widget h4 {
                font-size: 22px;
                color: #ffffff;
                font-weight: 600;
                margin-bottom: 20px;
            }
            .footer-text .footer-widget ul {
                width: 100%;
                float: left;
            }
            .footer-text .footer-widget ul li {
                list-style: none;
            }
            .footer-text .footer-widget ul li i {
                color: var(--color-primary-main);
            }
            .footer-text .footer-widget ul li a {
                font-size: 14px;
                color: #aaaab3;
                line-height: 36px;
            }
            .footer-text .footer-widget ul.social {
                width: 100%;
            }
            .footer-text .footer-widget ul.social li {
                position: relative;
                padding-left: 28px;
            }
            .footer-text .footer-widget ul.social li i {
                color: #aaaab3;
                font-size: 18px;
                position: absolute;
                left: 0;
                top: 10px;
            }
            .footer-text .footer-widget ul.social li a {
                line-height: 40px;
            }
            .footer-text .footer-widget ul.contact-option {
                width: 100%;
            }
            .footer-text .footer-widget ul.contact-option li {
                font-size: 14px;
                color: #aaaab3;
                line-height: 36px;
            }
            .footer-text .footer-widget ul.contact-option li i {
                margin-right: 4px;
            }

            #downer {
                text-align : center;
                color : var(--color-gray);
                font-weight : 200;
                background : white;
                height : 40px;
                font-size : .8rem;
                padding-top : 14px;
            }

            @media screen and (max-width : 600px) {
                #nav-opener {
                    display : flex;
                }

                nav {
                    position : fixed;
                    margin : 0px;
                    height : 100vh;
                    width : 300px;
                    right : 0px;
                    top : 0px;
                    transform : translateX(120%);
                    transition : all .3s linear;
                    flex-direction : column;
                    text-align : center;
                    padding : 1rem;
                }

                nav ul {
                    display : flex;
                    flex-direction : column;
                    gap : 2rem;
                    padding-bottom: 100px;
                }

                nav.nav-out {
                    transform : translateX(0%);
                }

                main {
                    margin-top : 100px;
                }
            }
        </style>
    </head>
    <body>
        <button id = "nav-opener" onclick = "document.querySelector('nav').classList.toggle('nav-out');">
            <i class = "bi bi-list"></i>
        </button>
        <header>
            <div id = "socials">
                <i class = "bi bi-instagram"></i>
                <i class = "bi bi-whatsapp"></i>
                <i class = "bi bi-twitter"></i>
                <i class = "bi bi-facebook"></i>
            </div>

            <div id = "contact">
                Get in contact with us for online tests.

            </div>
        </header>
        <nav>
            <h1>MAST</h1>
            <ul>
                <a href="{{ route('mast') }}">
                    <li>Mast</li>
                </a>

                <a href="">
                    <li>Contact Us</li>
                </a>

                <a href="">
                    <li>About</li>
                </a>

                <a href = "{{ route('study') }}">
                    <li>My Study</li>
                </a>
            </ul>
        </nav>
        <main>
            {{ $slot }}
        </main>
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
                                <p>Subscribe our newsletter to get notifications about new updates.</p>
                                <form action="#" class="newslatter-form">
                                    <input type="text" placeholder="Enter your email...">
                                    <button type="submit"><i class="bi bi-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-1">
                            <div class="footer-widget">
                                <h2>Quick Links</h2>

                                <ul>
                                    <li>
                                        <i class="bi bi-caret-right"></i> 
                                        <a href="{{ route('terms') }}">Terms of Use</a>
                                    </li>
                                
                                    <li>
                                        <i class="bi bi-caret-right"></i> 
                                        <a href=" {{ route('policy') }} ">Privacy Policy</a>
                                    </li>
                                    
                                    <li>
                                        <i class="bi bi-caret-right"></i> 
                                        <a href="{{ route('about') }}"">About Us</a>
                                    </li>
                                    <li>
                                        <i class="bi bi-caret-right"></i>
                                        <a href="#">Ask Questions</a>
                                    </li>
                                    <li>
                                        <i class="bi bi-caret-right"></i>
                                        <a href="#">Admissions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="footer-widget">
                                <h4>Social</h4>
                                <ul class="social">
                                    <li><i class="bi bi-facebook"></i> <a href="#">Facebook</a></li>
                                    <li><i class="bi bi-instagram"></i> <a href="#">Instagram</a></li>
                                    <li><i class="bi bi-twitter"></i> <a href="#">Twitter</a></li>
                                    <li><i class="bi bi-google"></i> <a href="#">Google+</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-widget">
                                <h4>Contact Us</h4>
                                <ul class="contact-option">
                                    <li><i class="bi bi-map"></i> Naija, NIG</li>
                                    <li><i class="bi bi-phone"></i> +234 2121 4321</li>
                                    <li><i class="bi bi-envelope"></i> mugupp@gmail.com</li>
                                    <li><i class="bi bi-clock"></i> Mon - Sat, 08 AM - 06 PM</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <p id = "downer">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Mugupp Services. All Names, Acronyms and Trademarks displayed on this website are those of their respective owners.</p>

    </body>
    
</html>

