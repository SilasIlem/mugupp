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
                z-index : -1;
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
                left : 0px;
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
            }
        </style>
    </head>
    <body>
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
                <li>Home</li>
                <li>Training</li>
                <li>Syllabus</li>
                <li>Classroom</li>
                <li>About</li>
                <a href = "{{ route('dashboard') }}"><li>mugupp</li></a>
            </ul>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </body>
    
</html>

