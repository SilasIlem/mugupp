<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videos</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/videos.css') }}">
</head>
<body>
    <div id="preloader">
        <h1>Mugupp</h1>
        <div id="progress"></div>
    </div>
    <nav>
        <i id = "burger" class = "bi bi-list-ul"></i>
        <h1>Mugupp</h1>
        <ul>
            <a href="">
                <li>
                    Home
                </li>
            </a>

            <a href="">
                <li>
                    Workspaces
                </li>
            </a>
            
            <a href="">
                <li>
                    Favorites
                </li>
            </a>
            
            <a href="">
                <li>
                    History
                </li>
            </a>
            
            <a href="">
                <li>
                    subscriptions
                </li>
            </a>
        </ul>

        <label for = "media-search-input">
            <i class = "bi bi-search"></i>
            <input type="search" name="" id="media-search-input" placeholder = "Search for Artisans, Workspaces, keywords...">
        </label>

        <ul>
            <a href="{{ route('study') }}">
                <li>
                    <i class = "bi bi-command"></i>
                </li>
            </a>
            <a href = "{{ route('academe') }}">
                <li>
                    <i class = "bi bi-globe"></i>
                </li>
            </a>
            <a href = "{{ route('settings') }}">
                <li>
                    <i class="bi bi-gear"></i>
                </li>
            </a>
            <a href = "">
                <li>
                    <img src="storage/prof-pics/{{ Auth::user()->user_pic }}" alt="">
                </li>
            </a>
        </ul>
    </nav>

    <main>
        <div id="side-links">

            <ul id = "category-tags">
                <a href="">
                    <li>
                        <i class = "bi bi-asterisk"></i>
                        <span>All</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class = "bi bi-binoculars-fill"></i>
                        <span>Science</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class = "bi bi-easel-fill"></i>
                        <span>Arts</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class = "bi bi-briefcase-fill"></i>
                        <span>Business</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class="bi bi-cash-stack"></i>
                        <span>Finance</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class = "bi bi-calculator-fill"></i>
                        <span>Maths World</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class = "bi bi-cpu-fill"></i>
                        <span>Programming</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class = "bi bi-spellcheck"></i>
                        <span>Languages</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class = "bi bi-gear-wide-connected"></i>
                        <span>Physics</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class="bi bi-funnel-fill"></i>
                        <span>Chemistry</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class="bi bi-calendar-month-fill"></i>
                        <span>June</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class="bi bi-music-note-beamed"></i>
                        <span>Music</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class="bi bi-newspaper"></i>
                        <span>News</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class="bi bi-keyboard"></i>
                        <span>Gaming</span>
                    </li>
                </a>
                <a href="">
                    <li>
                        <i class="bi bi-trophy-fill"></i>
                        <span>Sports</span>
                    </li>
                </a>
            </ul>
            
        </div>
        <div id = "before"></div>
        <div id="content">
            <h1>You May Like</h1>
            <div id="top">
                <ul>
                    <li class = "video" onclick="mov()">
                        <img src="{{ asset('images/istockphoto-1311508468-170667a.jpg')}}" alt="">

                        <div class = "video-details">
                            <img src="{{ asset('images/faces/1.jpg')}}" alt="">
                            <div>
                                <h2>How to design a mugupp clone with html/css</h2>
                                <p>@danryan01</p>
                                <small><span>14k views</span> . <span>1 year ago</span></small>
                            </div>
                        </div>
                    </li>
                    
                    <li class = "video">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id deserunt fugiat quod illum laborum rem quo.</p>
                        <div class = "video-details">
                            <img src="{{ asset('images/faces/1.jpg')}}" alt="">
                            <div>
                                <h2>How to design a mugupp clone with html/css</h2>
                                <p>@danryan01</p>
                                <small><span>14k views</span> . <span>1 year ago</span></small>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>

            <h1>From Recent Activity</h1>
            <div>
                <ul>
                    <li class = "video">
                        <img src="{{ asset('images/istockphoto-680412874-612x612.jpg')}}" alt="">

                        <div class = "video-details">
                            <img src="{{ asset('images/faces/1.jpg')}}" alt="">
                            <div>
                                <h2>How to design a mugupp clone with html/css</h2>
                                <p>@danryan01</p>
                                <small><span>14k views</span> . <span>1 year ago</span></small>
                            </div>
                        </div>
                    </li>
                    
                    <li class = "video">
                        <img src="{{ asset('images/istockphoto-1311508468-170667a.jpg')}}" alt="">

                        <div class = "video-details">
                            <img src="{{ asset('images/faces/1.jpg')}}" alt="">
                            <div>
                                <h2>How to design a mugupp clone with html/css</h2>
                                <p>@danryan01</p>
                                <small><span>14k views</span> . <span>1 year ago</span></small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id = "content-before"></div>
    </main>

    <script>
        sideBar = document.getElementById('side-links');
        content = document.getElementById('content');
        before = document.getElementById('before');

        document.querySelector('#burger').addEventListener('click', () => {
            sideBar.classList.toggle('shrink');
            content.classList.toggle('shrink');
            before.classList.toggle('shrink');
        });
        function mov(video) {
            view = document.getElementById('content-before');
            view.classList.add('content');
            content.classList.add('scrolless');
            document.body.classList.add('scrolless');
            view.innerHTML = /*html*/`
                <style>
                    #main-video--container {
                        height : 500px;
                        width : 100%;
                    }

                    #main-video--container video {
                        height : 100%;
                        aspect-ratio : 1.2 / 1;
                        object-fit : cover;
                    }
                </style>
                <i class = "bi bi-x" onclick = "this.closest('#content-before').classList.remove('content'); this.closest('#content-before').innerHTML = ''; document.body.classList.remove('scrolless');"></i>
                <div id = "main-video--container">
                    <video src = "{{ asset('storage/videos/anim.mp4')}}" controls></video>    
                </div>
                <div id = "main-video--container">
                    <video src = "{{ asset('storage/videos/anim.mp4')}}" controls></video>    
                </div>
            `;
        }
    </script>
</body>
</html>