<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/central.css') }}">
</head>
<body>
    <nav>
        <img src="{{ asset('images/MUGUP.png') }}" alt="" id="logo">
        <ul>
            <li class = "nav-item">
                <a href = "#welcome">central</a>
            </li>
            <li class = "nav-item">
                <a href = "#news">news</a>
            
                <ul class = "nav-item--extra">
                    <li>All News</li>
                    <li>Trending News</li>
                    <li>local news</li>
                    <li>International news</li>
                    <li>Worldwide news</li>
                </ul>
            
            </li>
            <li class = "nav-item">
                <a href = "#communities">Communities</a>
                <div class="nav-item--extra">
                    @foreach($communities as $community)
                    <a href = "{{ route('community', ['slug' => $community->slug]) }}">{{ $community->name }}</a>
                    @endforeach
                </div>

            </li>
            <li class = "nav-item">
                <a href = "#events">Events</a>

                <ul class="nav-item--extra">
                    <li>Go home</li>
                    <li>Go home</li>
                    <li>Go home</li>
                    <li>Go home</li>
                </ul>
            </li>
        </ul>
        <div id = "extra-links" class="nav-item">
            <p><i class = "bi bi-three-dots-vertical"></i></p>
            <ul class="nav-item--extra">
                <li>
                    <a href="{{ route('study') }}">My Study</a>
                </li>
                <li>    
                    <a href="{{ route('academe') }}">Academe</a>
                </li>
                <li>
                    <a href="{{ route('districts') }}">Districts</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="welcome">
        <h1>Welcome to the Central District</h1>
        
    </div>
    
    <div>
        @foreach($communities as $community)
        All Communities
        @endforeach
    </div>
</body>
</html>