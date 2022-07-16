<x-hall-blueprint>
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