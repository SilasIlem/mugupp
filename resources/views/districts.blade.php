<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Districts</title>
    <link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/districts.css') }}">
</head>
<body>
    <nav>
        
        <h1>Mugupp</h1>

        <ul>

            <a href="{{ route('study') }}">
                <li>My Study</li>
            </a>
     
            <a href="{{ route('academe') }}">
                <li>
                    Academe
                </li>
            </a>

            <a href="{{ route('library') }}">
                <li>
                    Library               
                </li>
            </a>

        </ul>
        <div id = "district-filter">
            <button>All Districts</button>
            <button>My Favorite Districts</button>
        </div>

    </nav>
    <div id="container">
        <div id = "content">
            <div id = "districts-container">
                <div id = "sort-and-search">
                    <input type="search" placeholder = "Search for a district">
                    <select name="" id="">
                        <option value="" selected>Last Active</option>
                        <option value="">Most Popular</option>
                        <option value="">alphabetical order(ascending)</option>
                        <option value="">alphabetical order(descending)</option>
                    </select>
                </div>
    
                <ul>
                    <a href = "{{ route('district', ['slug' => 'central']) }}">
                        <li class = "district">
                            <img src="{{ asset('storage/districts/small_picture/@mugdistcen.jpg') }}" alt="">
                            <div>
                                <h1>Central District</h1>
                                <h5>Always active</h5>
                                <p>Wisdom Mine</p>
                            </div>
                            <button>Academia Central</button>
                        </li>
                    </a>
                    @foreach($districts as $district)
                    <a href = "{{ route('district', ['slug' => $district->slug]) }}">
                        <li class = "district">
                            <img src="{{ asset('storage/districts/small_picture/' . $district->profile->small_picture) }}" alt="">
                            <div>
                                <h1>{{ $district->name }} District</h1>
                                <h5>Always active</h5>
                                <p>{{ sizeof($district->artisans) }} Artisans</p>
                            </div>
                            <button>Visit District</button>
                        </li>
                    </a>
                    @endforeach
                
                    @foreach($districts as $district)
                    <a href = "{{ route('district', ['slug' => $district->slug]) }}">
                        <li class = "district">
                            <img src="{{ asset('storage/districts/small_picture/' . $district->profile->small_picture) }}" alt="">
                            <div>
                                <h1>{{ $district->name }} District</h1>
                                <h5>Always active</h5>
                                <p>{{ sizeof($district->artisans) }} Artisans</p>
                            </div>
                            <button>Visit District</button>
                        </li>
                    </a>
                    @endforeach
                
                    @foreach($districts as $district)
                    <a href = "{{ route('district', ['slug' => $district->slug]) }}">
                        <li class = "district">
                            <img src="{{ asset('storage/districts/small_picture/' . $district->profile->small_picture) }}" alt="">
                            <div>
                                <h1>{{ $district->name }} District</h1>
                                <h5>Always active</h5>
                                <p>{{ sizeof($district->artisans) }} Artisans</p>
                            </div>
                            <button>Visit District</button>
                        </li>
                    </a>
                    @endforeach
                
                    @foreach($districts as $district)
                    <a href = "{{ route('district', ['slug' => $district->slug]) }}">
                        <li class = "district">
                            <img src="{{ asset('storage/districts/small_picture/' . $district->profile->small_picture) }}" alt="">
                            <div>
                                <h1>{{ $district->name }} District</h1>
                                <h5>Always active</h5>
                                <p>{{ sizeof($district->artisans) }} Artisans</p>
                            </div>
                            <button>Visit District</button>
                        </li>
                    </a>
                    @endforeach
                
                    @foreach($districts as $district)
                    <a href = "{{ route('district', ['slug' => $district->slug]) }}">
                        <li class = "district">
                            <img src="{{ asset('storage/districts/small_picture/' . $district->profile->small_picture) }}" alt="">
                            <div>
                                <h1>{{ $district->name }} District</h1>
                                <h5>Always active</h5>
                                <p>{{ sizeof($district->artisans) }} Artisans</p>
                            </div>
                            <button>Visit District</button>
                        </li>
                    </a>
                    @endforeach
                
                </ul>
            </div>
    
            <div id = "intro">
                <div>
                    <h2>Create Topics</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint fugit iste eos esse debitis! Quisquam, minima eligendi. Exercitationem, consectetur provident?</p>
                </div>
    
                <div>
                    <h2>Interact in Communities</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, sit.</p>
                </div>
    
                <div>
                    <h2>Send in Posts</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates nulla adipisci, magni error rerum facere excepturi?</p>
                </div>
    
                <div>
                    <h2>Share Multimedia Files</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod molestias inventore mollitia sit dolore!</p>
                </div>
            </div>
    
        </div>
    
    </div>

</body>
</html>