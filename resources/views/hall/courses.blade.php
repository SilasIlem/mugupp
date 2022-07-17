<x-hall-blueprint>
    @section('styles')
    <link rel="stylesheet" href="{{ asset('css/courses.css') }}">
    @endsection
    <div id="container">
        <div id="intro">
            <h1>Mugupp Courses</h1>
            
            <p>
                The Mugupp platform provides a learning experience. Most Artisans will step you through the process of understanding their craft and engulfing yourself in their arts for your own purposes, or gaining more knowledge on already learnt crafts. The courses cover a wide range of lectures for people of all ages, genders and cultures alike. Nothing is beyond reach here at Mugupp.
            </p>
        </div>
        <div id="courses">
            <ul>
                @foreach($courses as $course)
                <li class = "course">
                    <div>
                        <p class="price-tag">FREE</p>
                        <h2>
                            {{$course->title}}
                        </h2>
                        <div class = "time-desc">
                            {{-- <p>{{$course->profile->length}}</p> --}}
                            <p>1 hour 30 minutes</p>
                            <p>{{$course->created_at}}</p>
                        </div>

                        <h4>{{ $course->description }}</h4>

                        {{-- <div class = "artisan-details">
                            <img src="" alt="">
                            {{$course->artisan->name}}
                        </div> --}}

                        <div class = "course-bottom">
                            <div class = "artisan">
                                <img src="storage/prof-pics/{{ Auth::user()->user_pic }}" alt="">
                                <h5>{{ Auth::user()->name }}</h5>
                            </div>
                            
                            <div class="course-link">
                                <a href="{{ route('course', ['slug' => $course->id]) }}">
                                    <button>Begin</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class = "course">
                    <div>
                        <p class="price-tag">FREE</p>
                        <h2>
                            {{$course->title}}
                        </h2>
                        <div class = "time-desc">
                            {{-- <p>{{$course->profile->length}}</p> --}}
                            <p>1 hour 30 minutes</p>
                            <p>{{$course->created_at}}</p>
                        </div>

                        <h4>{{ $course->description }}</h4>

                        {{-- <div class = "artisan-details">
                            <img src="" alt="">
                            {{$course->artisan->name}}
                        </div> --}}

                        <div class = "course-bottom">
                            <div class = "artisan">
                                <img src="storage/prof-pics/{{ Auth::user()->user_pic }}" alt="">
                                <h5>{{ Auth::user()->name }}</h5>
                            </div>
                            
                            <div class="course-link">
                                <a href="{{ route('course', ['slug' => $course->id]) }}">
                                    <button>Begin</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class = "course">
                    <div>
                        <p class="price-tag">FREE</p>
                        <h2>
                            {{$course->title}}
                        </h2>
                        <div class = "time-desc">
                            {{-- <p>{{$course->profile->length}}</p> --}}
                            <p>1 hour 30 minutes</p>
                            <p>{{$course->created_at}}</p>
                        </div>

                        <h4>{{ $course->description }}</h4>

                        {{-- <div class = "artisan-details">
                            <img src="" alt="">
                            {{$course->artisan->name}}
                        </div> --}}

                        <div class = "course-bottom">
                            <div class = "artisan">
                                <img src="storage/prof-pics/{{ Auth::user()->user_pic }}" alt="">
                                <h5>{{ Auth::user()->name }}</h5>
                            </div>
                            
                            <div class="course-link">
                                <a href="{{ route('course', ['slug' => $course->id]) }}">
                                    <button>Begin</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class = "course">
                    <div>
                        <p class="price-tag">FREE</p>
                        <h2>
                            {{$course->title}}
                        </h2>
                        <div class = "time-desc">
                            {{-- <p>{{$course->profile->length}}</p> --}}
                            <p>1 hour 30 minutes</p>
                            <p>{{$course->created_at}}</p>
                        </div>

                        <h4>{{ $course->description }}</h4>

                        {{-- <div class = "artisan-details">
                            <img src="" alt="">
                            {{$course->artisan->name}}
                        </div> --}}

                        <div class = "course-bottom">
                            <div class = "artisan">
                                <img src="storage/prof-pics/{{ Auth::user()->user_pic }}" alt="">
                                <h5>{{ Auth::user()->name }}</h5>
                            </div>
                            
                            <div class="course-link">
                                <a href="{{ route('course', ['slug' => $course->id]) }}">
                                    <button>Begin</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class = "course">
                    <div>
                        <p class="price-tag">FREE</p>
                        <h2>
                            {{$course->title}}
                        </h2>
                        <div class = "time-desc">
                            {{-- <p>{{$course->profile->length}}</p> --}}
                            <p>1 hour 30 minutes</p>
                            <p>{{$course->created_at}}</p>
                        </div>

                        <h4>{{ $course->description }}</h4>

                        {{-- <div class = "artisan-details">
                            <img src="" alt="">
                            {{$course->artisan->name}}
                        </div> --}}

                        <div class = "course-bottom">
                            <div class = "artisan">
                                <img src="storage/prof-pics/{{ Auth::user()->user_pic }}" alt="">
                                <h5>{{ Auth::user()->name }}</h5>
                            </div>
                            
                            <div class="course-link">
                                <a href="{{ route('course', ['slug' => $course->id]) }}">
                                    <button>Begin</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class = "course">
                    <div>
                        <p class="price-tag">FREE</p>
                        <h2>
                            {{$course->title}}
                        </h2>
                        <div class = "time-desc">
                            {{-- <p>{{$course->profile->length}}</p> --}}
                            <p>1 hour 30 minutes</p>
                            <p>{{$course->created_at}}</p>
                        </div>

                        <h4>{{ $course->description }}</h4>

                        {{-- <div class = "artisan-details">
                            <img src="" alt="">
                            {{$course->artisan->name}}
                        </div> --}}

                        <div class = "course-bottom">
                            <div class = "artisan">
                                <img src="storage/prof-pics/{{ Auth::user()->user_pic }}" alt="">
                                <h5>{{ Auth::user()->name }}</h5>
                            </div>
                            
                            <div class="course-link">
                                <a href="{{ route('course', ['slug' => $course->id]) }}">
                                    <button>Begin</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            {{ $courses->links() }}
        </div>
    </div>
</x-hall-blueprint>