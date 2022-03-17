<x-app-layout>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <div id = poster>
        <button onclick = "document.getElementById('poster').classList.remove('show');">Cancel</button>
        <form method = POST action="{{ route('post') }}">
            @csrf
            <input name = "head" type="text" placeholder = "Topic">
            <textarea name = "body" placeholder="What's on your mind?"></textarea>
            <button>Post</button>
        </form>
    </div>
    <div id = container class="py-12">

            <div id="m-all">
                <div id="m-me">
              
                    <div class="m-tray">
                        
                        <h1>AST Performance Table</h1>
                        <ul>
                            <li>
                                <div>
                                    <img src="{{asset('images/friend.png')}}" alt="">
                                    <span>ask-102</span>
                                </div>
                               
                                <p>1911</p>
                            </li>
                            <li>
                                <div>
                                    <img src="{{asset('images/friend.png')}}" alt="">
                                    <span>jks-167</span>
                                </div>
                               
                                <p>1832</p>
                            </li>
                            <li>
                                <div>
                                    <img src="{{asset('images/friend.png')}}" alt="">
                                    <span>ljs-878</span>
                                </div>
                               
                                <p>1782</p>
                            </li>
                            <li>
                                <div>
                                    <img src="{{asset('images/friend.png')}}" alt="">
                                    <span>gjk-981</span>
                                </div>
                               
                                <p>1602</p>
                            </li>
                            <li>
                                <div>
                                    <img src="{{asset('images/friend.png')}}" alt="">
                                    <span>skj-892</span>
                                </div>
                               
                                <p>1558</p>
                            </li>
                            <li>
                                <div>
                                    <img src="{{asset('images/friend.png')}}" alt="">
                                    <span>kls-819</span>
                                </div>
                               
                                <p>1529</p>
                            </li>
                            <li>
                                <div>
                                    <img src="{{asset('images/friend.png')}}" alt="">
                                    <span>lsi-981</span>
                                </div>
                               
                                <p>1480</p>
                            </li>
                           
                        </ul>

                        <a href="{{ route('performance') }}"><button>AST Board</button></a>
                    </div>
                </div>

                <div id = "m-we" class="sm:px-6 lg:px-8 p-6 shadow-sm sm:rounded-lg">
                    <h1 style = "font-size : 30px; margin : 16px; text-align : center; color : #07649f">Learn At The Academe</h1>
                    <div id = m-menu-tray>
                        <ul>
                            <li onclick = "slide('one')">Verbose</li>
                            <li onclick = "slide('two')">Image</li>
                            <li onclick = "slide('three')">Videos</li>
                            <li onclick = "slide('four')">Live Sessions</li>
                        </ul>
                    </div>
                    <div class="m-box-top">
                        <div>
                            <img src = "{{ asset('images/friend.png')}}" />
                            <h4>{{Auth::user()->name}}</h4>
                        </div>
                        <button onclick = "postable()">Educate Others with your Opinions...</button>
                    </div>

                    <style>
                        .container {
                            height : max-content;
                            width : 
                        }
                    </style>
                    <div class="container">
                        <div class="wrapper">

                        </div>
                    </div>

                    @foreach( $posts as $post )
                        <div class = "m-box">
                            <div class="m-box-head">
                                <div class = "head-0">
                                    <img src="{{asset('images/friend.png')}}" alt="" />
                                </div>

                                <div class = "head-1">
                                    <h1><span>{{ $post->genius }}</span> <span style = "padding-bottom : 2px;">.</span> <a href="">follow</a></h1>
                                    <p>Just love to live it as it comes.</p>
                                </div>

                                <div class = "head-2">
                                    <i class = "bi bi-x"></i>
                                </div>
                            </div>

                            <div class="m-box-content">
                                <a href=""><h2>{{ $post->head }}</h2></a>
                                
                                <br />
                                <p>
                                    {{ $post->body }}
                                </p>

                                <div class = "m-media">
                                    <img src="{{asset('images/landing.jpg')}}" alt="">
                                </div>
                            </div>

                            <div class="interests">
                                <div>
                                    <p>
                                        Likes <span>123</span>
                                    </p>
                                    <p>
                                        <span>13</span> Comments
                                    </p>
                                </div>
                            </div>

                            <div class="m-box-foot">
                                <div class="m-clickables">
                                    <div id = start>
                                        <div>
                                            <i class="bi bi-arrow-up"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-arrow-down"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-share"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-chat-left"></i>
                                        </div>
                                    </div>
                                
                                    <div id = end>
                                        <div>
                                            <i class = "bi bi-bucket"></i>
                                        </div>
                                        <div>
                                            <i class = "bi bi-menu-button"></i>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            
                            </div>
                        </div>                    
                    @endforeach
                 
                 {{ $posts->links() }}

            </div>
            <div id="m-them">
                <div id = app>
                    <ul>
                        <example-component image = "{{asset('images/mugupp.png')}}" suggestion = "Silas"></example-component>
                        <example-component image = "{{asset('images/Mugupp font.png')}}"suggestion = "Paul"></example-component>
                    </ul>
                </div>
            </div>
        </div>

        <script src = "{{asset('js/winbox.min.js')}}"></script>
        <script>
            function slide(num) {
                if( num == "one") {

                }
            }
            function showbox() {
                var winbox = new WinBox('box', {
                    background : "rbg(0, 219, 0)",
                    border : "0 1px black",
                    minWidth : 200,
                    class : "modern",
                    html : `
                        welcome
                    `
                });

                winbox.width = 200;
                winbox.height = 200;
                
            }
            
            function postable() {
                document.getElementById('poster').classList.add('show');
            }
        </script>
    
</x-app-layout>
