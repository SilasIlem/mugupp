<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Hall</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hall.css') }}">
    @yield('styles')
</head>
<body>
    <div id="preloader">
        <h1>Mugupp</h1>
        <div id="progress"></div>
    </div>
    <nav>
        <i id = "side-burger" class = "bi bi-list-ul"></i>
        <h1>Mugupp</h1>
        <ul id = "navlinks">
            <a href="{{ route('hall') }}">
                <li>
                    Hall
                </li>
            </a>

            <a href="{{ route('courses') }}">
                <li>
                    Courses
                </li>
            </a>

            <a href="{{ route('workspaces') }}">
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
            <i class = "bi bi-search" onclick = "document.getElementById('media-search-input').classList.toggle('show');"></i>
            <input type="search" name="" id="media-search-input" placeholder = "Search for Artisans, Workspaces, keywords...">
        </label>

        <ul>
            <a href="{{ route('study') }}">
                <li>
                    <i class = "bi bi-journal-text"></i>
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
            <a href = "{{ route('workspace', ['space' => 'some space']) }}">
                <li>
                    <img src="storage/prof-pics/{{ Auth::user()->user_pic }}" alt="">
                </li>
            </a>
        </ul>
        <button id = "nav-burger" onclick = "document.getElementById('navlinks').classList.toggle('show');">
            <i class="bi bi-list"></i>
        </button>
    </nav>

    <main>
            
        <div id="side-links" class = "shrink">

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
        <div id = "before" class = "shrink"></div>

        <div id="content" class = "shrink">
            {{$slot}}
        </div>

        <div id = "content-before"></div>

    </main>

    <script>
        sideBar = document.getElementById('side-links');
        content = document.getElementById('content');
        before = document.getElementById('before');

        document.querySelector('#side-burger').addEventListener('click', () => {
            sideBar.classList.toggle('shrink');
            content.classList.toggle('shrink');
            before.classList.toggle('shrink');
        });
    </script>
    @yield('scripts')
</body>
</html>