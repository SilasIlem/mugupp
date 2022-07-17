<x-hall-blueprint>
    @section('styles')
    <style>
        #container > h1 {
            font-size : 1.1rem;
            margin-left : 40px;
            margin-bottom : 1.2rem;
            width : 180px;
            font-style : italic;
            position : relative;
            height : 24px;
            padding : 6px;
            text-align : center;
            word-wrap : none;
            white-space: none;
        }

        #container > h1::before {
            content : '';
            width : 40px;
            height : 1px;
            background : var(--color-orange);
            position : absolute;
            left : -40px;
            transform : translateY(8px);
        }

        #container > h1::after {
            content : '';
            width : calc(100vw - (2rem + 580px));
            height : 1px;
            background : var(--color-orange);
            position : absolute;
            left : 180px;
            transform : translateY(8px);
        }

        #top {
            background-size: cover;
            background-position : center center;
            min-height : 600px;
            width : 100%;
            margin-bottom : 2rem;
        }

        #top ul, #container ul {
            display : grid;
            grid-template-columns: repeat(5, 1fr);
            gap : 2rem;
        }

        #content.shrink ul {
            grid-template-columns : repeat(6, 1fr);
        }

        .video {
            height : 100%;
            display : flex;
            flex-direction : column;
            background : var(--color-white);
        }

        .video > img {
            margin-bottom : 20px;
            width : 100%;
            aspect-ratio: 1 / .6;
            object-fit : cover;
            object-position : center center;
        }

        .video-details {
            display : flex;
            padding : 1rem .6rem;
            gap : .8rem;
        }

        .video-details > img {
            height : 38px;
            width : 38px;
            border-radius : 50%;
        }

        .video-details > div {
            display : flex;
            flex-direction : column;
            gap : .6rem;
        }
        .video-details h2 {
            font-size : 1.05rem;
        }
    </style>
    @endsection
    <div id="container">
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

    @section('scripts')
    <script>
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
    @endsection

</x-hall-blueprint>