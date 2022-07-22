<x-app-layout>

    <link rel="stylesheet" href="{{ asset('css/study.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('iconly/bold.css') }}">
    <div id="container">
        <div id="study-left">
    
            <div id="study-nav">
                <h1>My Study</h1>
                
                <div>
                    <i class = "bi bi-grid"></i>
                    <i class = "bi bi-bell"></i>
                </div>
            </div>
        
            <div id="welcome">
                <h1>Choose a plan for your ride with mugupp</h1>
            </div>

            <section id = "courses">
                <h1>Courses</h1>
                <div id="live_lectures">
                    <h2>Live Cubicles</h2>
                    <h3>Join some ongoing Lectures</h3>
                    <div class  = "owl-carousel owl-carousel1">
                        <div class = "live-lecture item">
                            <div class = "live-lecture-top">
                                <div>
                                    <h4>Mathematics Learning</h4>
                                    <p>by Denvor Winner</p>
                                </div>
                                    
                                <button><i class = "bi bi-play"></i><span>Join</span></button>
                            </div>
                            
                            <hr>
                            
                            <div class="timestamp">
                                <div>
                                    <p>Introduction</p>
                                    <span>00 : 00</span>
                                </div>
                                <div class = "current-timestamp">
                                    <p>Numbers and their counterparts</p>
                                    <span>01 : 46</span>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class = "live-lecture item">
                            <div class = "live-lecture-top">
                                <div>
                                    <h4>Mathematics Learning</h4>
                                    <p>by Denvor Winner</p>
                                </div>
                                
                                <button><i class = "bi bi-play"></i><span>Join</span></button>
                            </div>
                            
                            <hr>
                            
                            <div class="timestamp">
                                <div>
                                    <p>Introduction</p>
                                    <span>00 : 00</span>
                                </div>
                                <div class = "current-timestamp">
                                    <p>Numbers and their counterparts</p>
                                    <span>01 : 46</span>
                                </div>
                            </div>
                        </div>
                        <div class = "live-lecture item">
                            <div class = "live-lecture-top">
                                <div>
                                    <h4>Mathematics Learning</h4>
                                    <p>by Denvor Winner</p>
                                </div>
                                
                                <button><i class = "bi bi-play"></i><span>Join</span></button>
                            </div>
                            
                            <hr>
                            
                            <div class="timestamp">
                                <div>
                                    <p>Introduction</p>
                                    <span>00 : 00</span>
                                </div>
                                <div class = "current-timestamp">
                                    <p>Numbers and their counterparts</p>
                                    <span>01 : 46</span>
                                </div>
                            </div>
                        </div>
                        <div class = "live-lecture item">
                            <div class = "live-lecture-top">
                                <div>
                                    <h4>Mathematics Learning</h4>
                                    <p>by Denvor Winner</p>
                                </div>
                                
                                <button><i class = "bi bi-play"></i><span>Join</span></button>
                            </div>
                            
                            <hr>
                            
                            <div class="timestamp">
                                <div>
                                    <p>Introduction</p>
                                    <span>00 : 00</span>
                                </div>
                                <div class = "current-timestamp">
                                    <p>Numbers and their counterparts</p>
                                    <span>01 : 46</span>
                                </div>
                            </div>
                        </div>
                        <div class = "live-lecture item">
                            <div class = "live-lecture-top">
                                <div>
                                    <h4>Mathematics Learning</h4>
                                    <p>by Denvor Winner</p>
                                </div>
                                
                                <button><i class = "bi bi-play"></i><span>Join</span></button>
                            </div>
                            
                            <hr>
                            
                            <div class="timestamp">
                                <div>
                                    <p>Introduction</p>
                                    <span>00 : 00</span>
                                </div>
                                <div class = "current-timestamp">
                                    <p>Numbers and their counterparts</p>
                                    <span>01 : 46</span>
                                </div>
                            </div>
                        </div>
                        <div class = "live-lecture">
                            <div class = "live-lecture-top">
                                <div>
                                    <h4>Mathematics Learning</h4>
                                    <p>by Denvor Winner</p>
                                </div>
                                
                                <button><i class = "bi bi-play"></i><span>Join</span></button>
                            </div>
                            
                            <hr>
                            
                            <div class="timestamp">
                                <div>
                                    <p>Introduction</p>
                                    <span>00 : 00</span>
                                </div>
                                <div class = "current-timestamp">
                                    <p>Numbers and their counterparts</p>
                                    <span>01 : 46</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id = "my_courses">
                    <h2>My courses</h2>
    
                    <select name="" id="">
                        <option selected value="">My Courses</option>
                        <option value="">Saved Courses</option>
                        <option value="">My Collections</option>
                    </select>

                    <div>
                        <ul>
                            <li class = "course">
                                <div class="course-img">
                                    <img src="{{ asset('images/Mathematics-amico.svg')}}" alt="">
                                </div>
                                <div class = "details">
                                    <h4>Learn Mathematics</h4>
                                    <p>by {{Auth::user()->name}}</p>
                                </div>
                                <p>1hr 30min</p>
                                <div class = "course-btn">
                                    <button>Continue</button>
                                </div>
                            </li>
                            <li class = "course">
                                <div class="course-img">
                                    <img src="{{ asset('images/Mathematics-amico.svg')}}" alt="">
                                </div>
                                <div class = "details">
                                    <h4>Learn Mathematics</h4>
                                    <p>by {{Auth::user()->name}}</p>
                                </div>
                                <p>1hr 30min</p>
                                <div class = "course-btn">
                                    <button>Continue</button>
                                </div>
                            </li>
                            <li class = "course">
                                <div class="course-img">
                                    <img src="{{ asset('images/Mathematics-amico.svg')}}" alt="">
                                </div>
                                <div class = "details">
                                    <h4>Learn Mathematics and other things you might have skipped in school</h4>
                                    <p>by {{Auth::user()->name}}</p>
                                </div>
                                <p>1hr 30min</p>
                                <div class = "course-btn">
                                    <button>Continue</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href = "{{ route('courses') }}">
                        <button class = "show-all-btn">Show All</button>
                    </a>
                </div>

                <div id="courses-top-picks" class="courses-top-picks">
                    <div class = "top-pick">
                        <div class="top-pick_top">
                            <p class="tag">Popular</p>
                            <a href="">
                                <img src="{{ asset('images/booksimages/blog-1.jpg') }}" alt="">
                            </a>
                            <p class="length">1hr 20mins</p>
                        </div>

                        <div class="top-pick_bottom">
                            <h4>Mathematics Learning</h4>
                            <p>by Denvors Winner</p>
                        </div>
                    </div>
                    
                    
                    <div class = "top-pick">
                        <div class="top-pick_top">
                            <p class="tag">Popular</p>
                            <a href="">
                                <img src="{{ asset('images/booksimages/blog-1.jpg') }}" alt="">
                            </a>
                            <p class="length">1hr 20mins</p>
                        </div>

                        <div class="top-pick_bottom">
                            <h4>Mathematics Learning for beginners</h4>
                            <p>by Denvors Winner</p>
                        </div>
                    </div>
                    <div class = "top-pick">
                        <div class="top-pick_top">
                            <p class="tag">Popular</p>
                            <a href="">
                                <img src="{{ asset('images/booksimages/blog-1.jpg') }}" alt="">
                            </a>
                            <p class="length">1hr 20mins</p>
                        </div>

                        <div class="top-pick_bottom">
                            <h4>Mathematics Learning</h4>
                            <p>by Denvors Winner</p>
                        </div>
                    </div>
                    <div class = "top-pick">
                        <div class="top-pick_top">
                            <p class="tag">Popular</p>
                            <a href="">
                                <img src="{{ asset('images/booksimages/blog-1.jpg') }}" alt="">
                            </a>
                            <p class="length">1hr 20mins</p>
                        </div>

                        <div class="top-pick_bottom">
                            <h4>Mathematics Learning</h4>
                            <p>by Denvors Winner</p>
                        </div>
                    </div>
                    <div class = "top-pick">
                        <div class="top-pick_top">
                            <p class="tag">Popular</p>
                            <a href="">
                                <img src="{{ asset('images/booksimages/blog-1.jpg') }}" alt="">
                            </a>
                            <p class="length">1hr 20mins</p>
                        </div>

                        <div class="top-pick_bottom">
                            <h4>Mathematics Learning</h4>
                            <p>by Denvors Winner</p>
                        </div>
                    </div>
                    <div class = "top-pick">
                        <div class="top-pick_top">
                            <p class="tag">Popular</p>
                            <a href="">
                                <img src="{{ asset('images/booksimages/blog-1.jpg') }}" alt="">
                            </a>
                            <p class="length">1hr 20mins</p>
                        </div>

                        <div class="top-pick_bottom">
                            <h4>Mathematics Learning</h4>
                            <p>by Denvors Winner</p>
                        </div>
                    </div>



                </div>
                
            </section>

            <section>
                <h1 class="div-header"><span>Contacts</span><a href="{{ route('contacts') }}"><i class="bi bi-arrow-right"></i></a></h1>

                <div id="contacts">
                    <div id="admins">
                        <h5>Admins</h5>
                        <div>
                            <div class="admin">
                                <img src="{{ asset('images/faces/1.jpg')}}" alt="">
                                <div>
                                    <p>Fadrig Madmon</p>
                                    <small>@Mug-district10</small>
                                </div>
                            </div>

                            <div class="admin">
                                <img src="{{ asset('images/faces/2.jpg')}}" alt="">
                                <div>
                                    <p>Fadrig Madmon</p>
                                    <small>@Mug-district10</small>
                                </div>
                            </div>

                            <div class="admin">
                                <img src="{{ asset('images/faces/3.jpg')}}" alt="">
                                <div>
                                    <p>Fadrig Madmon</p>
                                    <small>@Mug-district_1896</small>
                                </div>
                            </div>

                            <div class="admin">
                                <img src="{{ asset('images/faces/4.jpg')}}" alt="">
                                <div>
                                    <p>Fadrig Madmon</p>
                                    <small>@Mug-district10</small>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="artisans">
                        <h5>Artisans</h5>

                        <div class = "owl-carousel owl-carousel2">
                            <div class="artisan item">
                                <img src="{{ asset('images/faces/6.jpg')}}" alt="">
                                <div class="artisan--desc">
                                    <div>
                                        <p>Danielle Hangerman</p>
                                        <small>@mug-10893ks</small>
                                    </div>
                                    <a href="{{ route('contacts') }}"><button>Visit</button></a>

                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et sit voluptate soluta esse eligendi quam ex.</p>
                                <div class="artisan--links">
                                    <i style="--i-color : var(--color-lemon);" class="bi bi-heart-fill"></i>
                                    <i style="--i-color : pink;" class="bi bi-telephone-fill"></i>
                                    <i style="--i-color : purple;" class="bi bi-moon"></i>
                                </div>
                            </div>

                            <div class="artisan item">
                                <img src="{{ asset('images/faces/6.jpg')}}" alt="">
                                <div class="artisan--desc">
                                    <div>
                                        <p>Danielle Hangerman</p>
                                        <small>@mug-10893ks</small>
                                    </div>
                                    <a href="{{ route('contacts') }}"><button>Visit</button></a>

                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et sit voluptate soluta esse eligendi quam ex.</p>
                                <div class="artisan--links">
                                    <i style="--i-color : var(--color-lemon);" class="bi bi-heart-fill"></i>
                                    <i style="--i-color : pink;" class="bi bi-telephone-fill"></i>
                                    <i style="--i-color : purple;" class="bi bi-moon"></i>
                                </div>
                            </div>

                            <div class="artisan item">
                                <img src="{{ asset('images/faces/6.jpg')}}" alt="">
                                <div class="artisan--desc">
                                    <div>
                                        <p>Danielle Hangerman</p>
                                        <small>@mug-10893ks</small>
                                    </div>
                                    <a href="{{ route('contacts') }}"><button>Visit</button></a>

                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et sit voluptate soluta esse eligendi quam ex.</p>
                                <div class="artisan--links">
                                    <i style="--i-color : var(--color-lemon);" class="bi bi-heart-fill"></i>
                                    <i style="--i-color : pink;" class="bi bi-telephone-fill"></i>
                                    <i style="--i-color : purple;" class="bi bi-moon"></i>
                                </div>
                            </div>

                            <div class="artisan item">
                                <img src="{{ asset('images/faces/6.jpg')}}" alt="">
                                <div class="artisan--desc">
                                    <div>
                                        <p>Danielle Hangerman</p>
                                        <small>@mug-10893ks</small>
                                    </div>
                                    <a href="{{ route('contacts') }}"><button>Visit</button></a>

                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et sit voluptate soluta esse eligendi quam ex.</p>
                                <div class="artisan--links">
                                    <i style="--i-color : var(--color-lemon);" class="bi bi-heart-fill"></i>
                                    <i style="--i-color : pink;" class="bi bi-telephone-fill"></i>
                                    <i style="--i-color : purple;" class="bi bi-moon"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

        </div>

        <div id="study-right">

            <div id="study-goal-info">
                <p id="study-date-data"></p>
                
                <h2>Welcome</h2>
                <img src="{{ asset('storage/prof-pics/' . Auth::user()->user_pic) }}" alt="">
                <h2>{{ Auth::user()->name }}</h2>
                <p>{{ Auth::user()->email }}</p>
                    
                <div id="dash-stats">

                    <div>
                        <div class="stats-icon" style="--icon-color : var(--color-purple);">
                            <i class="bi bi-person-fill"></i>
                        </div>

                        <div>
                            {{ sizeof(Auth::user()->following) }} following
                        </div>
                    </div>
                    
                    <div>
                        <div class="stats-icon" style="--icon-color : var(--color-orange)">
                            <i class="bi bi-bookmark-fill"></i>
                        </div>

                        <div>
                            67 courses
                        </div>
                    </div>

                    <div>
                        <div class="stats-icon" style="--icon-color : var(--color-green);">
                            <i class="bi bi-person-plus-fill"></i>
                        </div>

                        <div>
                            @if(sizeof(Auth::user()->followers) != 1)
                            {{ sizeof(Auth::user()->followers) }} Followers
                            @elseif(sizeof(Auth::user()->followers) == 1)
                            {{ sizeof(Auth::user()->followers) }} Follower
                            @endif
                        </div>
                    </div>
                </div>
                
            </div>

              
            <div id="events">
                <h1 class="div-header"><span>Upcoming Events</span><a href="{{ route('events') }}"><i class="bi bi-arrow-right"></i></a></h1>

                <div id="calendar">
                    <div id="calendar-head">
                        <i class="bi bi-caret-left-fill"></i>
                        <h4>June</h4>
                        <i class="bi bi-caret-right-fill"></i>
                    </div>

                    <div id="calendar-body">
                        <div id="days">
                            <span>Mon</span>
                            <span>Tue</span>
                            <span>wed</span>
                            <span>Thurs</span>
                            <span>Fri</span>
                            <span>Sat</span>
                            <span>Sun</span>
                        </div>

                        <div id="dates">
                            <span class="spill-over">30</span>
                            <span class="spill-over">31</span>
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span data-event="ride the roller coaster" class="event">4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                            <span>10</span>
                            <span>11</span>
                            <span>12</span>
                            <span>13</span>
                            <span>14</span>
                            <span>15</span>
                            <span>16</span>
                            <span>17</span>
                            <span>18</span>
                            <span>19</span>
                            <span data-event="wish Silas Ilemobayo a happy birthday" class="event">20</span>
                            <span>21</span>
                            <span>22</span>
                            <span>23</span>
                            <span>24</span>
                            <span>25</span>
                            <span>26</span>
                            <span>27</span>
                            <span>28</span>
                            <span>29</span>
                            <span>30</span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="todo">
                <h1>Todo</h1>
                
                {{-- @if($todos->isEmpty()) --}}
                {{-- <h2>You have no todo item on your list</h2> --}}
                {{-- @else --}}
                <ul>
                    {{-- @foreach($todos as $todo) --}}
                    {{-- <li>
                        <span>S</span>
                        <div>
                            <p>{{ $todo->title }}</p>
                            <small>{{ $todo->created_at }}</small>
                        </div>
                        <input type="checkbox" name="todo-{{$todo->id}}" />
                        <i class="bi bi-three-dots-vertical"></i>
                    </li> --}}
                    <li>
                        <span>S</span>
                        <div>
                            <p>Find a new course</p>
                            <small>5th june, 2022</small>
                        </div>
                        <input type="checkbox" name="" />
                        <i class="bi bi-three-dots-vertical"></i>
                    </li>
                    <li>
                        <span>S</span>
                        <div>
                            <p>Find a new course</p>
                            <small>5th june, 2022</small>
                        </div>
                        <input type="checkbox" name="" />
                        <i class="bi bi-three-dots-vertical"></i>
                    </li>
                    <li>
                        <span>S</span>
                        <div>
                            <p>Find a new course</p>
                            <small>5th june, 2022</small>
                        </div>
                        <input type="checkbox" name="" />
                        <i class="bi bi-three-dots-vertical"></i>
                    </li>
                    <li>
                        <span>S</span>
                        <div>
                            <p>Find a new course</p>
                            <small>5th june, 2022</small>
                        </div>
                        <input type="checkbox" name="" />
                        <i class="bi bi-three-dots-vertical"></i>
                    </li>
                    <li>
                        <span>S</span>
                        <div>
                            <p>Find a new course</p>
                            <small>5th june, 2022</small>
                        </div>
                        <input type="checkbox" name="" />
                        <i class="bi bi-three-dots-vertical"></i>
                    </li>
                    <li>
                        <span>S</span>
                        <div>
                            <p>Find a new course</p>
                            <small>5th june, 2022</small>
                        </div>
                        <input type="checkbox" name="" />
                        <i class="bi bi-three-dots-vertical"></i>
                    </li>
                    <li>
                        <span>S</span>
                        <div>
                            <p>Find a new course</p>
                            <small>5th june, 2022</small>
                        </div>
                        <input type="checkbox" name="" />
                        <i class="bi bi-three-dots-vertical"></i>
                    </li>
                    <li>
                        <span>S</span>
                        <div>
                            <p>Find a new course</p>
                            <small>5th june, 2022</small>
                        </div>
                        <input type="checkbox" name="" />
                        <i class="bi bi-three-dots-vertical"></i>
                    </li>
                    <li>
                        <span>S</span>
                        <div>
                            <p>Find a new course</p>
                            <small>5th june, 2022</small>
                        </div>
                        <input type="checkbox" name="" />
                        <i class="bi bi-three-dots-vertical"></i>
                    </li>
                    {{-- @endforeach --}}
                </ul>
                {{-- @endif --}}

                <div id="progresses">
                    <p>Completed</p>
                    <span>2</span>
                </div>

            </div>

            <div id="notice-board">
                <h1 class="div-header"><span>Notice Board</span><a href="{{ route('notifications') }}"><i class="bi bi-arrow-right"></i></a></h1>
                @if($notes->isEmpty())
                <p>No Notices as of now.</p>
                @endif
                @foreach($notes as $note)
                <div>
                    <div class="notice-head">
                        <p>Mugupp Team</p>
                        <div class="notice-head--right">
                            <span>{{ date('F j, Y - g:i a', strtotime(Auth::user()->created_at) ) }}</span>
                            <img src="{{ asset('images/Mugupp ordinary.png') }}" alt="">
                        </div>
                    </div>

                    <div class="notice-body">
                        {{ $note->note }}
                    </div>
                </div>
                @endforeach
            </div>
{{-- 
            <div id="recent_activity" class="oner">
                <h3 class="div-header"><span>My Recent Activity</span><a href="{{ route('activity') }}"><i class="bi bi-arrow-right"></i></a></h3>
                <ul>
                    <li>Changed your profile picture</li>
                    <li>Changed your profile picture</li>
                    <li>Updated 8 profile details</li>
                    <li>Deleted 2 files from favorites</li>
                </ul>
            </div> --}}

            <div id="study-right-sticky">

                <div id="messages">
                    <h1 class="div-header"><span>Messages</span><a href="{{ route('booths') }}"><i class="bi bi-arrow-right"></i></a></h1>
                    <ul>
                        @foreach(Auth::user()->contacts as $contact)
                        <li>
                            <img src="{{ asset('storage/prof-pics/' . $contact->user_pic ) }}" alt="">
                            <div>
                                <p>{{ $contact->name }}</p>
                                <small>{{ $contact->uid }}</small>
                            </div>
                        </li>
                        @endforeach
                        @foreach(Auth::user()->contacted_by as $contact)
                        <li>
                            <img src="{{ asset('storage/prof-pics/' . $contact->user_pic ) }}" alt="">
                            <div>
                                <p>{{ $contact->name }}</p>
                                <small>{{ $contact->uid }}</small>
                            </div>
                        </li>
                        @endforeach
                        <li>
                            <img src="{{ asset('storage/prof-pics/' . Auth::user()->user_pic ) }}" alt="">
                            <div>
                                <p>{{ Auth::user()->name }}</p>
                                <small>{{ Auth::user()->uid }}</small>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('storage/prof-pics/' . Auth::user()->user_pic ) }}" alt="">
                            <div>
                                <p>{{ Auth::user()->name }}</p>
                                <small>{{ Auth::user()->uid }}</small>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('storage/prof-pics/' . Auth::user()->user_pic ) }}" alt="">
                            <div>
                                <p>{{ Auth::user()->name }}</p>
                                <small>{{ Auth::user()->uid }}</small>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('storage/prof-pics/' . Auth::user()->user_pic ) }}" alt="">
                            <div>
                                <p>{{ Auth::user()->name }}</p>
                                <small>{{ Auth::user()->uid }}</small>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('storage/prof-pics/' . Auth::user()->user_pic ) }}" alt="">
                            <div>
                                <p>{{ Auth::user()->name }}</p>
                                <small>{{ Auth::user()->uid }}</small>
                            </div>
                        </li>
                    </ul>

                    <button>Start Conversation</button>
                </div>

                <div id="legal">
                    <h1>Legal</h1>
                    <a href="">
                        <p>Privacy Policy</p>
                    </a>
                    <a href="">
                        <p>Terms & conditions</p>
                    </a>
                    <a href="">
                        <p>Advertising Preferences</p>
                    </a>
                    <a href="">
                        <p>Cookies</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel1').owlCarousel({
            loop:true,
            navText: ['<i class="bi bi-caret-left-fill owl-city-nav"></i>', '<i class="bi bi-caret-right-fill owl-city-nav"></i>'],
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:2
                }
            }
        })

        $('.owl-carousel2').owlCarousel({
            loop:true,
            navText: ['<i class="bi bi-caret-left-fill owl-city-nav"></i>', '<i class="bi bi-caret-right-fill owl-city-nav"></i>'],
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                764 : {
                    items : 2
                },
                1000:{
                    items:3
                }
            }
        })

        document.body.onload = () => {
            setTimeout(() => {
                document.body.requestFullscreen();
            }, 4000);
        }

        const dateDisplay = document.getElementById('study-date-data');
        setInterval(() => {
            dateDisplay.innerHTML = Date();
        }, 1000);
    </script>
    @endsection
</x-app-layout>