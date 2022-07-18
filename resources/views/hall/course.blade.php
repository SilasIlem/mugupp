<x-hall-blueprint>
    @section('styles')
    <link rel="stylesheet" href="{{ asset('css/course.css') }}">
    @endsection
    <div id="container">
        <div id="course-sidebar">

        </div>

        <div id="course-top">
            <h1>{{$course->title}}</h1>

            <h2>{{$course->description}}</h2>

            <div id = "stats">
                <p id="rating-tag">
                    BESTSELLER
                </p>

                <div id="rating">
                    <i class = "bi bi-star-fill" style = "color : var(--color-yellow);"></i>
                    <span>4.7</span>
                    <span>(300 ratings)</span>
                    <span>247 attendees</span>
                </div>

                <div id = "creator">
                    Created By: <a href="">{{Auth::user()->name}}</a>, <a href="">{{Auth::user()->name}}</a>
                </div>

                <div id = "time">
                    <i class = "bi bi-clock"></i>
                    <h4>Last updated by: {{$course->updated_at}}</h4>
                    <i class = "bi bi-globe"></i>
                    <h4>English</h4>
                </div>
            </div>
        </div>

        <div id="course-desc">
            <h1>What you'll learn</h1>
            <ul id = "what-to-learn">
                <li>Use of numbers and their classifications</li>
                <li>Use of numbers and their classifications</li>
                <li>Use of numbers and their classifications</li>
                <li>Use of numbers and their classifications</li>
                <li>Use of numbers and their classifications</li>
            </ul>

            <div id = "prerequisites">
                <h1>Pre-requisites</h1>
                <small>Stuff you should already know</small>
                <ul>
                    <li>
                        <p>English</p>
                        <small>Learn this skill first</small>
                    </li>
                    <li>
                        <p>English</p>
                        <small>Learn this skill first</small>
                    </li>
                    <li>
                        <p>English</p>
                        <small>Learn this skill first</small>
                    </li>
                    <li>
                        <p>English</p>
                        <small>Learn this skill first</small>
                    </li>
                </ul>
            </div>

            <h1>Description</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, inventore vel? Culpa in a autem esse provident voluptates voluptatibus impedit, rerum quaerat modi similique nemo ab velit repellendus facilis sequi?</p>
        </div>
        
        <div id = "recommendations">
            <h1>Recommendations by Artisans of a similar Craft</h1>
            <ul>
                <li>Trashy nonsense</li>
            </ul>
        </div>

        <div id="similars">
            Similar courses
            <ul>
                <li>Maths is fun</li>
                <li>Maths does it</li>
            </ul>
        </div>

        <div id="course-content">
            <h1>Course Content</h1>
        </div>

        <div id="course-instructor">
            <h1>Instructing Personnel</h1>

            <div>
                {{Auth::user()->name}}

                describe the artisan here
            </div>
        </div>
    </div>
</x-hall-blueprint>