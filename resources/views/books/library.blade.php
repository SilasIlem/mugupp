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
</head>
<body>
    <nav>

        <h1>Mugupp</h1>

        <ul>
            <li>FEATURES</li>
            <li>BLOG</li>
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

            <a href="{{ route('dashboard') }}">
                <i class = "bi bi-command"></i>
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
 
    <div id="container">

        
        <div id="welcome">
            <div>

                <div id = topboard>

                    <h1>The Library</h1>
                    <ul>
                        <li>Novels</li>
                        <li>Science</li>
                        <li>Arts</li>
                        <li>Finance</li>
                    </ul>
                    
                </div>

        
                <div id="ads">
        
                    <ul>
                        <li>
                            <img src="{{ asset('images/booksimages/blog-1.jpg')}}" alt="">

                            <p>Learn professional skills for over 70 leading creative applications</p>
                        </li>
                        <li>
                            <img src="{{ asset('images/booksimages/blog-2.jpg')}}" alt="">

                            <p>Pick from a library of thousands of tutorials and books and new training every day</p>
                        </li>
                        <li>
                            <img src="{{ asset('images/booksimages/blog-3.jpg')}}" alt="">

                            <p>Guided training to become a valuable creative professional.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <h1>Read up on stuff you like, {{ Auth::user()->name }}</h1>
        <div id="topshelf" class = "swiper">
            <div class="swiper-wrapper">
                @foreach($books as $book)
   
                <div onclick = "mob(this);" class="swiper-slide" data-slug = "slug">
                    <a href="{{ route('view-book', ['slug' => $book->slug ]) }}">
                        <img src="{{ asset('images/booksimages/book-1.png') }}" alt="">
                    </a>
                    <div>
                        <b>{{ $book->title }}</b>
                    </div>
                </div>
   
                @endforeach
   
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          
        </div>

        <div class = "stand">
            <img src="{{ asset('images/booksimages/stand.png') }}" alt="">
        </div>

        <div id="bookshelf">
            <div class="categories">
                <h1>Categories</h1>
                <ul>
                    <li>
                        <details>
                            <summary>Novels</summary>
                            
                                <ul>
                                    <li>Religious</li>        
                                    <li>Romantic</li>        
                                </ul>
                
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Science</summary>
                            
                                <ul>
                                    <li>Mathematics</li>        
                                    <li>Chemistry</li>        
                                </ul>
                
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Languages</summary>
                            
                                <ul>
                                    <li>English</li>        
                                    <li>Chinese</li>        
                                </ul>
                
                        </details>
                    </li>
                </ul>

                </fieldset>

                <fieldset id = "top-authors">
                    <legend>Top Authors</legend>
                    <ul>
                        <li>Alibaba</li>
                        <li>Daniel Ryan</li>
                        <li>Innocenty</li>
                        <li>Man o' Match</li>
                    </ul>
            </div>

            <div id = "shelf">
                <ul>
                    <li id = "best-sellers">
                        <h1>MUGUPP BESTSELLERS</h1>
                        <ul>
                            @foreach($books as $book)
                            <a href="{{ route('view-book', ['slug' => $book->slug])}}">
                                <li class="best-cards">
                                    <div class = "desc">
                                        <img src="{{ asset('images/booksimages/book-1.png')}}" alt="">

                                        <div>
                                            <h2>{{ $book->title }}</h2>
                                            <p>by {{ $book->user->name }}</p>
                                        </div>
                                    </div>
                                </li>
                            </a>
                            <a href="{{ route('view-book', ['slug' => $book->slug])}}">
                                <li class="best-cards">
                                    <div class = "desc">
                                        <img src="{{ asset('images/booksimages/book-2.png')}}" alt="">

                                        <div>
                                            <h2>{{ $book->title }}</h2>
                                            <p>by {{ $book->user->name }}</p>
                                        </div>
                                    </div>
                                </li>
                            </a>
                            @endforeach
                        </ul>
                    </li>
                    <li id = "top-picks">
                        <h1>top picks for you</h1>
                        <div class="swiper2">
                                <ul class = "swiper-wrapper">
                                    @foreach($books as $book)
                                    <a href="{{ route('view-book', ['slug' => $book->slug])}}">
                                        <li class="shelfed swiper-slide">
                                            <div class = "desc">
                                                <img src="{{ asset('images/booksimages/book-5.png')}}" alt="">

                                                <div>
                                                    <h2>{{ $book->title }}</h2>
                                                    <p>by {{ $book->user->name }}</p>
                                                </div>
                                            </div>
                                            <div class = "more">
                                                <div>
                                                    <a href="{{ route('profile', ['slug' => $book->user->uid ])}}">
                                                        <img src="storage/prof-pics/{{ $book->user->user_pic }}" alt="">
                                                    </a>
                                                    <h2>{{ $book->user->name }}</h2>
                                                </div>

                                                <p>{{ $book->user->bio }}</p>
                                            </div>
                                        </li>
                                    </a>
                                    <a href="{{ route('view-book', ['slug' => $book->slug])}}">
                                        <li class="shelfed swiper-slide">
                                            <div class = "desc">
                                                <img src="{{ asset('images/booksimages/book-4.png')}}" alt="">

                                                <div>
                                                    <h2>{{ $book->title }}</h2>
                                                    <p>by {{ $book->user->name }}</p>
                                                </div>
                                            </div>
                                            <div class = "more">
                                                <div>
                                                    <a href="{{ route('profile', ['slug' => $book->user->uid ])}}">
                                                        <img src="storage/prof-pics/{{ $book->user->user_pic }}" alt="">
                                                    </a>
                                                    <h2>{{ $book->user->name }}</h2>
                                                </div>

                                                <p>{{ $book->user->bio }}</p>
                                            </div>
                                        </li>
                                    </a>
                                    <a href="{{ route('view-book', ['slug' => $book->slug])}}">
                                        <li class="shelfed swiper-slide">
                                            <div class = "desc">
                                                <img src="{{ asset('images/booksimages/book-7.png')}}" alt="">

                                                <div>
                                                    <h2>{{ $book->title }}</h2>
                                                    <p>by {{ $book->user->name }}</p>
                                                </div>
                                            </div>
                                            <div class = "more">
                                                <div>
                                                    <a href="{{ route('profile', ['slug' => $book->user->uid ])}}">
                                                        <img src="storage/prof-pics/{{ $book->user->user_pic }}" alt="">
                                                    </a>
                                                    <h2>{{ $book->user->name }}</h2>
                                                </div>

                                                <p>{{ $book->user->bio }}</p>
                                            </div>
                                        </li>
                                    </a>
                                    <a href="{{ route('view-book', ['slug' => $book->slug])}}">
                                        <li class="shelfed swiper-slide">
                                            <div class = "desc">
                                                <img src="{{ asset('images/booksimages/book-3.png')}}" alt="">

                                                <div>
                                                    <h2>{{ $book->title }}</h2>
                                                    <p>by {{ $book->user->name }}</p>
                                                </div>
                                            </div>
                                            <div class = "more">
                                                <div>
                                                    <a href="{{ route('profile', ['slug' => $book->user->uid ])}}">
                                                        <img src="storage/prof-pics/{{ $book->user->user_pic }}" alt="">
                                                    </a>
                                                    <h2>{{ $book->user->name }}</h2>
                                                </div>

                                                <p>{{ $book->user->bio }}</p>
                                            </div>
                                        </li>
                                    </a>
                                    @endforeach
                                </ul>
                        </div>   
                        <div class="swiper2-nav">
                            <button class="button-prev"><i class = "bi bi-arrow-left-square-fill"></i></button>
                            <button class="button-next"><i class = "bi bi-arrow-right-square-fill"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <script>

        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            spaceBetween : 8,
            slidesPerView : 3,
            effect : 'flip',
            620: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // If we need pagination
            // pagination: {
            //     el: '.swiper-pagination',
            // },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // // And if we need scrollbar
            // scrollbar: {
            //     el: '.swiper-scrollbar',
            // },
        })
   
        const swiper2 = new Swiper('.swiper2', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            spaceBetween : 30,
            slidesPerView : 6,
            effect : 'slide',
            620: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // If we need pagination
            // pagination: {
            //     el: '.swiper-pagination',
            // },

            // Navigation arrows
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },

            // // And if we need scrollbar
            // scrollbar: {
            //     el: '.swiper-scrollbar',
            // },
        })
    </script>
</body>
</html>