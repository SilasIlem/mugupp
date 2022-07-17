<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <style>
        nav {
            position : fixed;
            top : 0px;
            width : 100vw;
            height : 3rem;
            display : flex;
            z-index : 99999;
            justify-content : space-between;
            align-items : center;
            background : var(--color-white);
            color : var(--color-dark);
            box-shadow : 0px 0px 6px var(--color-dark);
            padding : 0px 1.2rem;
        }

        nav ul {
            display : flex;
            justify-content : space-around;
            align-items : center;
            gap : 1rem;
        }

        nav h1 {
            width : 320px;
            margin-left : -1.2rem;
            text-align : center;
            font-size : 1.8rem;
            color : var(--color-primary-main);
            letter-spacing : -4.8px;
            font-family :Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
        }

        #tray {
            display : flex;
            justify-content : space-between;
            gap : 1.2rem;
            align-items : center;
            height : 100%;
            padding : 12px;
        }

        #tray > ul {
            display : flex;
            gap : .8rem;
            align-items : center;
            border-radius : 6px;
            padding : 4px 12px;
            box-shadow : inset 0px 0px 4px var(--color-primary-main);
        }

        #tray > ul > i {
            color : var(--color-gra);
            font-size : 1rem;
        }

        #tray button {
            height : 30px;
            width : 60px;
            border-radius : 4px;
            color : white;
            background : var(--color-primary-main);
            margin : 0px 12px;
        }

        #tray input {
            width : 300px;
            height : 30px;
            padding-bottom : 2px;
        }

        #tray > div {
            display : flex;
            gap : .8rem;
        }

        #tray > img {
            height : 40px;
            width : 40px;
            border-radius : 50%;
        }

        main {
            padding-top : 3rem;
        }
        
    </style>
    @yield('styles')
</head>
<body>
    <nav>

        <h1>Mugupp</h1>

        <ul>
            <a href="{{ route('library') }}">
                <li>LIBRARY</li>
            </a>
            <a href="">
                <li>BLOG</li>
            </a>
            <li>GALLERY</li>
            <li>SHOP</li>
        </ul>

        <div id="tray">
            
            <ul>
                <i class="bi bi-search"></i>
                <form action="">
                    <input type="text" name="search" id="search" placeholder = "search...">
                </form>
            </ul>

            <a href="{{ route('study') }}">
                <i class = "bi bi-journal-text"></i>
            </a>

            <a href="{{ route('academe') }}">
                <i class = "bi bi-globe"></i>
            </a>
            <div>
                <a href="{{ route('create-book') }}"><button>Create</button></a>    
                <a href="{{ route('study') }}"><button>Study</button></a>
            </div>
            <img src="{{ asset('storage/prof-pics/' . Auth::user()->user_pic) }}" alt="">
        </div>

    </nav>
 
    <main>
        {{$slot}}
    </main>

    <footer>

    </footer>
    @yield('scripts')
</body>
</html>