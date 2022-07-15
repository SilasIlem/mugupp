<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $district->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/district.css') }}">
    <style>
        :root {
            --bg : var(--color-{{ $district->profile->color_preference }});
            --bg-img : url({{ asset('storage/districts/large_picture/' . $district->profile->large_picture) }});
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="district-sidebar">
            <h1>All Districts</h1>
            <ul>
                <a href="{{ route('district', ['slug' => 'central']) }}">
                    <li>
                        Central District
                    </li>
                </a>
                @foreach($districts as $list_item)
                <a href="{{ route('district', ['slug' => $list_item->slug])}}">
                    <li class = {{ $list_item->name == $district->name ? 'active' : ''}}>
                        {{ $list_item->name }}
                    </li>
                </a>
                @endforeach
            </ul>
        </div>
        <div id="content">

            <div id="district-content">
                <div id="district-top">

                    <div id = "district--summary">
                        <h1>Welcome to the <br> <span>{{ $district->name }} district</span></h1>
                        <p>
                            {{ $district->profile->excerpt }}
                        </p>
                    </div>
                        
                </div>

                <nav>
                    <ul>
                        <a href = "#district--artisans"><li>Artisans</li></a>
                        <a href = "#district--events"><li>Events</li></a>
                        <a href = "#district--about"><li>About</li></a>
                        <a href="{{ route('academe') }}"><li>Academe</li></a>
                        <a href="{{ route('study') }}"><li>Dashboard</li></a>
                    </ul>
                </nav>

                <section id="district--events">
                    <h1>Events</h1>

                    @foreach($district->events as $event)
                    <div class="event">
                        <img src="{{ asset('images/exam kids.jpg') }}" alt="">
                        <div>
                            {{ $event->description }}
                        </div>
                    </div>
                    @endforeach
                </section>

                <section id="district--artisans">
                    <h1>Top Artisans in the {{ $district->name }} district</h1>
                    @foreach($district->artisans as $artisan)
                    <div class="artisan">
                        <img src="{{ asset('storage/prof-pics/' . $artisan->user->user_pic) }}" alt="">
                        
                        <div>
                            {{ $artisan->user->name }}
                        </div>
                    </div>
              
                    @endforeach
                </section>

                <section id = "district--about">
                    <div id = "about--top">
                        <div id = "top--left">
                            
                            <img src="{{ asset('storage/districts/small_picture/' . $district->profile->small_picture) }}" alt="">
                            
                            <h1>About the {{ $district->name }} District</h1>

                            <p>{{ $district->profile->description }}</p>

                        </div>
                   
                        <div id = "top--right">
                            <div>
                                <p>
                                    <span>Revenue: </span><span>7.6k</span>
                                </p>

                                <p>
                                    <span>Visits: </span><span>2k</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    

                    <div id="about--bottom">
                       
                        <p>
                            <span>{{ sizeof($district->events) }}</span>
                            <span>Upcoming Events</span>
                        </p>
                      
                        <p>
                            <span>1000+</span>
                            <span>Artisans</span>
                        </p>
                    </div>
                    
                </section>

            </div>
        </div>
    </div>

    @component('components.footer')
        
    @endcomponent
</body>
</html>