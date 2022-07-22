<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Mugupp</title>

        <link rel="short icon" href="{{ asset('images/Mugupp ordinary.png')}}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
        <link rel="stylesheet" href="{{asset('css/academe.css')}}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen" style = "background : var(--color-light);">
            <!-- Page Content -->
            <main>
                <div id = poster>
                    <button onclick = "document.getElementById('poster').classList.remove('show');">Cancel</button>
                    <form method = POST action="{{ route('post') }}" enctype = "multipart/form-data">
                        @csrf
                        <div>
                            <label for="c_pic">Pick a cover picture for your post</label>
                            <input type="file" name="cover_pic" id="c_pic">
                        </div>
                        
                        <input name = "head" type="text" placeholder = "Topic">
                        <textarea name = "body" placeholder="What's on your mind?" id = "mytextarea"></textarea>
                        <button id = "postbtn">Post</button>
                    </form>
                </div>

                <div id = "academe-board">
                    <div id = "search-form">
                        <form action="" method="post">
                            <i class = "bi bi-search"></i>
                            <input type="search" placeholder = "Search for creators, friends, Geniuses...">
                        </form>
                    </div>
                    
                    <ul>
                        <li><a href="{{ route('study') }}"><i class="bi bi-journal-text"></i></a></li>
                        <li><a href="{{ route('questions') }}"><i class = "bi bi-question-octagon"></i></a></li>
                        <li title = "The Hall"><a href="{{ route('hall') }}"><i class = "bi bi-shop"></i></a></li>
                    </ul>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <i class = "bi bi-power"></i>
                        </x-responsive-nav-link>
                    </form>
                </div>    

                <div id = "music-player">

                </div>
                
                <div id="messages">
                    <h2>Messages</h2>
                    <form action="">
                        <input type="text" placeholder = "Find a friend">
                    </form>

                    <ul id = "message--nav">
                        <li>Primary</li>
                        <li>General</li>
                        <li>Request(8)</li>
                    </ul>

                    <ul id="messages--friends">
                        <li>
                            <img src="storage/prof-pics/{{ Auth::user()->user_pic }}" alt="" class = "messages--pic">
                            <div>
                                <p>Mary Slessor</p>
                            <span>[uniqueid]</span>
                            </div>
                            
                            <button>
                                <i class = "bi bi-chat"></i>
                            </button>
                        </li>
                        <li>
                            <img src="storage/prof-pics/{{ Auth::user()->user_pic }}" alt="" class = "messages--pic">
                            <div>
                                <p>Mary Slessor</p>
                            <span>[uniqueid]</span>
                            </div>
                            
                            <button>
                                <i class = "bi bi-chat"></i>
                            </button>
                        </li>
                        <li>
                            <img src="storage/prof-pics/{{ Auth::user()->user_pic }}" alt="" class = "messages--pic">
                            <div>
                                <p>Mary Slessor</p>
                            <span>[uniqueid]</span>
                            </div>
                            
                            <button>
                                <i class = "bi bi-chat"></i>
                            </button>
                        </li>
                        <li>
                            <img src="storage/prof-pics/{{ Auth::user()->user_pic }}" alt="" class = "messages--pic">
                            <div>
                                <p>Mary Slessor</p>
                            <span>[uniqueid]</span>
                            </div>
                            
                            <button>
                                <i class = "bi bi-chat"></i>
                            </button>
                        </li>
                        <li>
                            <img src="storage/prof-pics/{{ Auth::user()->user_pic }}" alt="" class = "messages--pic">
                            <div>
                                <p>Mary Slessor</p>
                            <span>[uniqueid]</span>
                            </div>
                            
                            <button>
                                <i class = "bi bi-chat"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                    
                <div id = "container">

                    <div id="academe-sidebar">

                        <h1>Mugupp</h1>
                        <div id = "side-links" class = "accordion">
    
                            <ul>
                                <li>
                                    <a href="{{ route('study') }}">
                                        <span>
                                            <i class = "bi bi-columns-gap"></i>
                                        </span>
                                        <h4>My Study</h4>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('explorer') }}">
                                        <span>
                                            <i class = "bi bi-folder"></i>
                                        </span>
                                        <h4>Explore</h4>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                        <span>
                                            <i class = "bi bi-bookmark"></i>
                                        </span>
                                        <h4>Bookmarks</h4>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                        <span>
                                            <i class = "bi bi-people"></i>
                                        </span>
                                        <h4>Contacts</h4>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('profile') }}">
                                        <span>
                                            <i class = "bi bi-person"></i>
                                        </span>
                                        <h4>Profile</h4>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('settings') }}">
                                        <span><i class = "bi bi-gear"></i></span>
                                        <h4>Settings</h4>
                                    </a>
                                </li>

                                <li class="extra">
                                    <a href="">
                                        <h4>Booths</h4>
                                    </a>
                                </li>
                                <li class="extra">
                                    <a href="">
                                        <h4>Mailbox</h4>
                                    </a>
                                </li>
                                <li class="extra">
                                    <a href="">
                                        <h4>Notifications</h4>
                                    </a>
                                </li>
                                <li class="extra">
                                    <a href="">
                                        <h4>Topics</h4>
                                    </a>
                                </li>

                            </ul>

                            <div id = "more-section">
                                <button id = "more-btn">
                                    <span><i class = "bi bi-three-dots"></i></span>
                                    <h4 class = "more">More</h4>
                                    <h4 class="less">Less</h4>
                                </button>  
                            </div>
                            
                        </div>
                        
                        {{-- <div>
                            <h2>shortcuts</h2>
                        </div> --}}
                        
                        <div id = "recents"  class = "accordion">
                            <h2>Recent Activities</h2>
                            <ul>
                                <li>
                                    <span>20 minutes ago</span>
                                    <p>Commented on Video</p>
                                    <small>By <b>John Snow</b></small>
                                </li>
                                
                                <li>
                                    <span>20 minutes ago</span>
                                    <p>Commented on Video</p>
                                    <small>By <b>John Snow</b></small>
                                </li>
                                
                                <li>
                                    <span>20 minutes ago</span>
                                    <p>Commented on Video</p>
                                    <small>By <b>John Snow</b></small>
                                </li>
                            </ul>
                        </div>
                        
                    </div>

                    
                    <div id="app">

                        <div id = "my_mind">

                            <div id="share" class = "tabcontent">
                                <div>
                                    <a href="{{ route('profile') }}"><img src = "{{ asset('storage/prof-pics/' . Auth::user()->user_pic) }}" /></a>
                                    <button onclick = "postable();">What's on your mind?</button>
                                    <i class = "bi bi-image-alt"></i>
                                </div>
                            </div>

                            <div id="upload" class="tabcontent">
                                uploader
                            </div>

                            <div id="article" class="tabcontent">
                                article
                            </div>

                            <div id="question" class="tabcontent">
                                question
                            </div>
                            
                            <div id="create-story" class="tabcontent">
                                <form action="/story" method = "POST" enctype = "multipart/form-data">
                                    @csrf
                                    <input type="file" name = "story_img" />
                                    <button type="submit">Submit</button>
                                </form>
                            </div>

                            <div class = "tab">
                                <button id = "defaultOpen" class = "tablinks" onclick = "openTab(event, 'share')">
                                    <i class = "bi bi-pencil-square"></i>
                                    <span>post</span>
                                </button>
                                <button class = "tablinks" onclick = "openTab(event, 'upload')">
                                    <i class = "bi bi-images"></i>
                                    <span>
                                        Photo(s)
                                    </span>
                                </button>
                                <button class = "tablinks" onclick = "openTab(event, 'article')">
                                    <i class = "bi bi-card-text"></i>
                                    <span>Article</span>
                                </button>
                                <button class = "tablinks" onclick = "openTab(event, 'question')">
                                    <i class = "bi bi-question-octagon"></i>
                                    <span>Question</span>
                                </button>
                
                            </div>

                        </div>

                        <h1 id = "learn-sign">Learn At The Academe</h1>

                        <div id="posts">
                            <img id = "post-shall-load" src="{{ asset('images/9.gif') }}" alt="">

                            <div id="trendings-today">
                                <div class="trending-today">
                                    
                                </div>
                                <div class="trending-today">

                                </div>
                                <div class="trending-today">

                                </div>
                                <div class="trending-today">

                                </div>
                            </div>
                            {{--<div class = "post">
                                    <div class="post-head">
                                        <div class = "head-0">
                                            <i class = "bi bi-chat-left-quote-fill"></i>
                                        </div>

                                        <div class = "head-1">
                                            <h1><span>{{ $thread->topic->title }}</span> . <a href = "{{ route('topic', ['slug' => $thread->topic->slug ]) }}">explore</a></h1>
                                        </div>
                                        
                                        <br>

                                        <div class = "head-1">
                                            <h1><span>{{ $thread->user->name }}</span> {{ $thread->user->uid }} . {{ date('H', $thread->created_at) }}h ago</h1>
                                        </div>

                                        <div class = "head-2">
                                            <div class = "post-menu">
                                                ${saveStatus}
                                                <i class = "bi bi-x"></i>
                                            </div>
                                           
                                            <i onclick = "showPostMenu(this)" class = "bi bi-three-dots"></i>

                                        </div>
                                    </div>

                                    <div class="post-content">
                                        <div class = "post-excerpt">
                                            {{ $thread->content }}
                                        </div>
                                        
                                        <br/>
                                
                                        <div class = "post-media">
                                            {{ $thread->media }}
                                        </div>
                                    </div>

                                    <div class="post-foot">
                               
                                        <div class="m-clickables">
                                            
                                            <div onclick = "">
                                                <i style = "--i-color : var(--color-gray);" class = "bi bi-heart"></i>
                                                <p> 1 <span>Impressed</span></p>
                                            </div>   
                                        
                                            <div>
                                                <i class="bi bi-chat-text"></i>

                                                <p><label for = "comment-input-${data.id}"> 2 <span> comments</span><label></p>

                                            </div>
                                        
                                            <div>
                                                <i class="bi bi-share"></i>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="interests interests-${data.id}">
                                        <p>This impressed You.</p>
                                    </div>

                                    <div class = "comment-box">
                                        <div id = "post-comments" class = "post-comment-container">
                                            <p>0 Replies</p>
                                        </div>
                                        <div class = "make-a-comment">
                                            <img src = "{{ asset('storage/prof-pics/' . Auth::user()->user_pic) }}" />
                                            <input id = "comment-input-${data.id}" type = "text" placeholder = "Reply..."/>
                                            <button onclick = "submitComment(${data.id});"><i class = "bi bi-upload"></i></button>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr> --}}

                        </div>
                            
                    </div>

                    <div id="misc">
                        <div>
                        <div id="workspaces">
                            <h2>Your workspaces</h2>
                            <div>
                                <div id = "workspace_details">
                                    <div>
                                        <p><span>Workspaces</span></p>
                                    </div>
                                </div>
                                
                                <div id="create-workspace">
                                    <img src="{{ asset('images/Mugupp ordinary.png') }}" alt="">
                                    <h4>CREATE YOUR OWN MUGUPP workspace AT THE ACADEME</h4>
                                    <a href="/create-workspace"><button>Start Now</button></a>
                                </div>
                            </div>
                        </div>

                        <div id="books">
                            <h2>Your Books</h2>
                            <div>
                                <ul>
                                    @foreach($books as $book)
                                    <li>
                                        <a href = "{{ route('view-book', ["slug" => $book->slug]) }}">
                                            {{ $book->title }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <button>See all Books</button>
                        </div>

                        <div id="requests">
                            <h2>Requests</h2>

                            <ul id = "requests__ul">

                                @foreach( Auth::user()->contacts as $contact )
                                @if ( $contact->pivot->status == 0)
                                <li>
                                    <div class = "requests_first__div">
                                        <img src="storage/prof-pics/{{ $contact->user_pic }}" alt="" class = "messages--pic">
                                        <div>
                                            <p>{{ $contact->name }}</p>
                                        <span>{{ $contact->uid }}</span>
                                        </div>
                                    </div>
                                    <div class = "btns">
                                        <button class = "accept">Accept</button>
                                        <button class = "decline">Decline</button>
                                    </div>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>



                        <div id="suggestions">
                            <h2>Trending Topics for You</h2>
                            <div id="trends">
                                @foreach($topics as $topic)
                                <div class = "trend">
                                    <a href = "">{{ $topic->community->name }}</a>
                                    <div>
                                        <i class = "bi bi-newspaper"></i>
                                        <p>
                                            <a href = "{{ route('topic', ['slug' => $topic->slug ])}}"><span>{{ $topic->title }}</span></a>
                                            <small> {{ sizeof($topic->threads) }} threads</small>
                                        </p>
                                    </div>
                                </div>
                                @endforeach

                                <h3>Trending Tags</h3>

                                <div class="tags">
                                    
                                    <a href = ""><span>#</span>RideTheWorld</a>
                                    <a href = ""><span>#</span>ReadREDBooks</a>
                                    <a href = ""><span>#</span>RuleMugWorld</a>
                                    <a href = ""><span>#</span>RideTheWaves</a>
                                    
                                </div>
                            </div>

                            <h2>People you may know</h2>
                            <div id = "suggested-contacts">

                                <h3>Who To Follow</h3>
                                <ul>
                                    @foreach($suggestions as $suggestion)
                                    <li class="follow-suggestion">
                                        <img src="storage/prof-pics/{{ $suggestion->user_pic }}" alt="">
                                        <p>
                                            <span>{{ $suggestion->name }}</span>
                                            <a href = "">{{ $suggestion->uid }}</a>

                                            <button>Follow</button>
                                        </p>
                                    </li>
                                    @endforeach
                                </ul>

                                <h3>Who You May Know</h3>
                                <ul>

                                    @foreach($suggestions as $suggestion)
                                    <li class = "contact-suggestion">
                                        <img src="storage/prof-pics/{{ $suggestion->user_pic }}" alt="">
                                        <div>
                                            <p>{{ $suggestion->name }}</p>
                                        <span>{{ $suggestion->uid }}</span>
                                        </div>
                                        
                                        <button>
                                            <i class = "bi bi-plus"></i>
                                        </button>
                                    </li>
                                    @endforeach

                                </ul>

                                <button>See all <i class = "arrow-left"></i></button>

                            </div>
                            
                        </div>
                    </div>

                    <div class="misc-footer">
                        <a href="">privacy policy</a>
                        <a href="">T & C</a>
                        <a href="">About Mugupp</a>
                    </div>

                    </div>       
                
                </div>
            </main>
        </div>
        <script src = "{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('tinymce/tinymce.min.js')}}"></script>

        <script>
            tinymce.init({
                selector: '#mytextarea',
                plugins: [
                'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
                'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
                'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
                ],
                toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
            });

            moreBtn = document.getElementById('more-btn');
            sideLinks = document.getElementById('side-links');

            moreBtn.addEventListener('click', () => {
                sideLinks.classList.toggle('show-more');
                moreBtn.classList.toggle('less');
            })
        

            function slide(num) {
                if( num == "one") {

                }
            }

            function showTable() {
                document.getElementById('ast-scores').classList.add('show');
            }

            document.getElementById('defaultOpen').click();

            function impressed(div, id, impressions) {
                $.ajax({
                    type : "GET",
                    url : "/impressed/" + id,
                    success : function(data) {
                        if(data[0] == 1) {
                            interests = checkInterests(data[2], data[1]);
                            document.querySelector(`.interests-${id}`).innerHTML = interests;
                            div.outerHTML = `<div onclick = "unimpressed(this, ${id}, ${data[2]})">
                                    <i class = "bi bi-heart-fill" style = "--i-color : red;"></i>
                                    <p> ${data[2]} <span>Impressed</span></p>
                                </div>`;
                        }
                    }
                })
            }
         
            function unimpressed(div, id, impressions) {
                $.ajax({
                    type : "GET",
                    url : "/unimpressed/" + id,
                    success : function(data) {
                        if(data[0] == 1) {
                            interests = checkInterests(data[2], data[1]);
                            document.querySelector(`.interests-${id}`).innerHTML = interests;
                            div.outerHTML = `<div onclick = "impressed(this, ${id}, ${data[2]}, ${name})">
                                    <i class = "bi bi-heart" style = "--i-color : var(--color-gray);"></i>
                                    <p> ${data[2]} <span>Impressed</span></p>
                                </div>`;
                        }
                    }
                })
            }

            function savePost(icon, id) {
                $.ajax({
                    type : "GET",
                    url : "/save-post/" + id,
                    success : function(data) {
                        icon.outerHTML = `<i class = "bi bi-bookmark-x-fill" onclick = "unsavePost(this, ${id})" style = "font-size : 1.4rem; padding-top : 4px;" ></i>`;
                    }
                })
            }
           
            function unsavePost(icon, id) {
                $.ajax({
                    type : "GET",
                    url : "/unsave-post/" + id,
                    success : function(data) {
                        icon.outerHTML = `<i class = "bi bi-bookmark" onclick = "savePost(this, ${id})" style = "font-size : 1.4rem; padding-top : 4px;" ></i>`;
                    }
                })
            }

            function showPostMenu(icon) {
                icon.closest('.head-2').querySelector('.post-menu').classList.toggle('show');
            }

            function follow(icon, id, name) {
                $.ajax({
                    url : '/follow/' + id,
                    method : "GET",
                    success : (data) => {
                        console.log(data);
                        if(data == 1) {
                            document.querySelectorAll('follow-' + id).forEach(e => {
                                e.closest('h1').outerHTML = `
                                    <h1>
                                        <span>${name}</span>
                                        <span style = "padding-bottom : 2px;">.</span>
                                        <span class = "follow follow-${id}" onclick = "unfollow(this, ${id}, '${name}')" style = "--span-color : var(--color-yellow);">unfollow</span>
                                    </h1>
                                `;
                            })
                        }
                    }
                })
            }
          
            function unfollow(icon, id, name) {
                $.ajax({
                    url : '/unfollow/' + id,
                    method : "GET",
                    success : (data) => {
                        if(data == 1) {
                            document.querySelectorAll('follow-' + id).forEach(e => {
                                console.log(e);
                                e.closest('h1').outerHTML = `
                                    <h1>
                                        <span>${name}</span>
                                        <span style = "padding-bottom : 2px;">.</span>
                                        <span class = "follow follow-${id}" onclick = "follow(this, ${id}, '${name}')" style = "--span-color : var(--color-green);">follow</span>
                                    </h1>
                                `;
                            }
                            )
                        }
                    }
                })
            }

            function submitComment(id) {
                comment = document.getElementById(`comment-input-${id}`).value;
                if(comment != ''){
                    $.ajax({
                        url : 'submit-comment/' + id,
                        data : {
                            comment : comment
                        },
                        contentType : "application/json; charset=utf-8",
                        dataType : "json",
                        success : (data) => {
                            console.log(data);
                            document.getElementById(`comment-input-${id}`).value = '';
                            post_box = document.querySelector(`#post-comments-${id}`);
                            
                            if(document.querySelector(`#post-comments-${id}`).innerHTML == `
                                <h2 class = 'no-comment'><label for = "comment-input-${data.id}">Be the first to make a comment</label></h2>
                            `) {
                                post_box.innerHTML = /*htmL*/`
                                    <div class = "post-comment">
                                        <img src = "{{ asset('storage/prof-pics')}}/${e.user.user_pic}"/>
                                        <div>
                                            <span class = "commentator">${e.user.name} says </span> 
                                            <br>
                                            <p>
                                                ${e.body}
                                            </p>
                                        </div>
                                    </div>`                               
                            }
                        }
                    })
                }
         
            }

            
            function checkInterests(impressions, name){
                interests = '';
                if(impressions > 2) {
                    interests = `<p>This impressed <span> ${name == '{{Auth::user()->name}}' ? 'You' : name} </span> and <span> ${impressions - 1} others</span></p>`;
                } else if(impressions <= 2 && impressions > 0) {
                    interests = `<p> This impressed <span>${name == '{{Auth::user()->name}}' ? 'You' : name}</span> ${impressions - 1 ? ' and <span> one </span> other.' : ''}</p>`;
                } else if(impressions == 0) {
                    interests = `<p>Aren't you impressed?</p>`;
                }
                return interests;
            }

            document.body.onload = () => {
                $.ajax({
                    type : "GET",
                    url : "/post",
                    success : function(dataset) {
                        current_uid = {{ Auth::user()->id }};
                        console.log(dataset);
                        dataset[0]['data'].forEach(data => {
                                                     
                            savedByUser = false;
                            impressedUser = false;
                            followingUser = false;
                        
                            data.savedby.forEach(e => {
                                if (e.id == current_uid) {
                                   savedByUser = true;
                                }
                            })
                            
                            data.impressed.forEach(e => {
                                if(e.user_id == current_uid) {
                                    impressedUser = true;
                                }
                            })

                            data.user.followers.forEach(e => {
                                if(e.id == current_uid) {
                                    followingUser = true;
                                }
                            })

                            interests = checkInterests(data.impressed.length, data.impressed[0]?.user.name);

                            saveStatus = savedByUser == false ? `<i onclick = "savePost(this, ${data.id})" style = "font-size : 1.4rem; padding-top : 4px;" class = "bi bi-bookmark"></i>` : `<i class = "bi bi-bookmark-x-fill" onclick = "unsavePost(this, ${data.id})" style = "font-size : 1.4rem; padding-top : 4px;" ></i>`;
                            followStatus = followingUser == false ? `<span style = "padding-bottom : 2px;">.</span><span style = "--span-color : var(--color-green);" class = "follow follow-${data.user.id}" onclick = "follow(this, ` + data.user.id + `, '` + data.user.name + `')">follow</span>` : `<span style = "padding-bottom : 2px;">.</span><span class = "follow follow-${data.user.id}" onclick = "unfollow(this, ` + data.user.id + `, '` + data.user.name + `')" style = "--span-color : var(--color-yellow);">unfollow</span>`;
                            postImageSet = data.img_name ?  /*html*/`
                            <a href="">
                                <img src="storage/images/posts_cover/${data.img_name}" alt="">
                            </a>
                            ` : '';
                            impressedStatus = impressedUser == false ? `
                                <div onclick = "impressed(this, ${data.id}, ${data.impressed.length})">
                                    <i style = "--i-color : var(--color-gray);" class = "bi bi-heart"></i>
                                    <p> ${data.impressed.length} <span>Impressed</span></p>
                                </div>` :  `<div onclick = "unimpressed(this, ${data.id}, ${data.impressed.length})">
                                    <i class = "bi bi-heart-fill" style = "--i-color : red;"></i>
                                    <p> ${data.impressed.length} <span>Impressed</span></p>
                                </div>`;
                            $('#posts').append(/*html*/`
                                <div class = "post">
                                    <div class="post-head">
                                        <div class = "head-0">
                                            <img src="storage/prof-pics/${data.user.user_pic}" alt="" />
                                        </div>

                                        <div class = "head-1">
                                            <h1><span>${data.user.name}</span> ${data.user.id !== {{Auth::user()->id}} ? followStatus : ''}</h1>
                                            <p>${data.user.bio}</p>
                                        </div>

                                        <div class = "head-2">
                                            <div class = "post-menu">
                                                ${saveStatus}
                                                <i class = "bi bi-x"></i>
                                            </div>
                                           
                                            <i onclick = "showPostMenu(this)" class = "bi bi-three-dots"></i>

                                        </div>
                                    </div>

                                    <div class="post-content">
                                        <div class = "post-excerpt">
                                            ${data.body}
                                        </div>
                                        
                                        <br/>
                                
                                        <div class = "post-media">
                                            ${postImageSet}
                                        </div>
                                    </div>

                                    <div class="post-foot">
                               
                                        <div class="m-clickables">
                                            
                                            ${impressedStatus}
                                        
                                            <div>
                                                <i class="bi bi-chat-text"></i>

                                                <p><label for = "comment-input-${data.id}">${data.comments.length} <span> comments</span><label></p>

                                            </div>
                                        
                                            <div>
                                                <i class="bi bi-share"></i>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="interests interests-${data.id}">
                                        ${interests}                                            
                                    </div>

                                    <div class = "comment-box">
                                        <div id = "post-comments-${data.id}" class = "post-comment-container">
                                        </div>
                                        <div class = "make-a-comment">
                                            <img src = "{{ asset('storage/prof-pics/' . Auth::user()->user_pic) }}" />
                                            <input id = "comment-input-${data.id}" type = "text" placeholder = "Make a comment..."/>
                                            <button onclick = "submitComment(${data.id});"><i class = "bi bi-upload"></i></button>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr>`);

                                container = document.querySelector(`#post-comments-${data.id}`);
                                
                                if(data.comments.length > 0) {
                                    e = data.comments[0];
                                    container.innerHTML = /*htmL*/`
                                        <div class = "post-comment">
                                            <img src = "{{ asset('storage/prof-pics')}}/${e.user.user_pic}"/>
                                            <div>
                                                <span class = "commentator">${e.user.name} says </span> 
                                                <br>
                                                <p>
                                                    ${e.body}
                                                </p>
                                            </div>
                                        </div>
                                    `;
                                } else {
                                    container.innerHTML = `<h2 class = 'no-comment'><label for = "comment-input-${data.id}">Be the first to make a comment</label></h2>`
                                }
                         
                            });
                    }
                });
            }

            document.body.onscroll = () => {
                if ($(window).scrollTop() >= $('#app').height() - $(window).height()) {
                    document.querySelector('#posts').classList.add('loading');
                    $.ajax({
                    type : "GET",
                    url : "/post",
                    success : function(dataset) {
                        current_uid = {{ Auth::user()->id }};
                        console.log(dataset);
                        dataset[0]['data'].forEach(data => {
                                                     
                            savedByUser = false;
                            impressedUser = false;
                            followingUser = false;
                        
                            data.savedby.forEach(e => {
                                if (e.id == current_uid) {
                                   savedByUser = true;
                                }
                            })
                            
                            data.impressed.forEach(e => {
                                if(e.user_id == current_uid) {
                                    impressedUser = true;
                                }
                            })

                            data.user.followers.forEach(e => {
                                if(e.id == current_uid) {
                                    followingUser = true;
                                }
                            })

                            interests = checkInterests(data.impressed.length, data.impressed[0]?.user.name);

                            saveStatus = savedByUser == false ? `<i onclick = "savePost(this, ${data.id})" style = "font-size : 1.4rem; padding-top : 4px;" class = "bi bi-bookmark"></i>` : `<i class = "bi bi-bookmark-x-fill" onclick = "unsavePost(this, ${data.id})" style = "font-size : 1.4rem; padding-top : 4px;" ></i>`;
                            followStatus = followingUser == false ? `<span style = "padding-bottom : 2px;">.</span><span style = "--span-color : var(--color-green);" class = "follow follow-${data.user.id}" onclick = "follow(this, ` + data.user.id + `, '` + data.user.name + `')">follow</span>` : `<span style = "padding-bottom : 2px;">.</span><span class = "follow follow-${data.user.id}" onclick = "unfollow(this, ` + data.user.id + `, '` + data.user.name + `')" style = "--span-color : var(--color-yellow);">unfollow</span>`;
                            postImageSet = data.img_name ?  /*html*/`
                            <a href="">
                                <img src="storage/images/posts_cover/${data.img_name}" alt="">
                            </a>
                            ` : '';
                            impressedStatus = impressedUser == false ? `
                                <div onclick = "impressed(this, ${data.id}, ${data.impressed.length})">
                                    <i style = "--i-color : var(--color-gray);" class = "bi bi-heart"></i>
                                    <p> ${data.impressed.length} <span>Impressed</span></p>
                                </div>` :  `<div onclick = "unimpressed(this, ${data.id}, ${data.impressed.length})">
                                    <i class = "bi bi-heart-fill" style = "--i-color : red;"></i>
                                    <p> ${data.impressed.length} <span>Impressed</span></p>
                                </div>`;
                            $('#posts').append(/*html*/`
                                <div class = "post">
                                    <div class="post-head">
                                        <div class = "head-0">
                                            <img src="storage/prof-pics/${data.user.user_pic}" alt="" />
                                        </div>

                                        <div class = "head-1">
                                            <h1><span>${data.user.name}</span> ${data.user.id !== {{Auth::user()->id}} ? followStatus : ''}</h1>
                                            <p>${data.user.bio}</p>
                                        </div>

                                        <div class = "head-2">
                                            <div class = "post-menu">
                                                ${saveStatus}
                                                <i class = "bi bi-x"></i>
                                            </div>
                                           
                                            <i onclick = "showPostMenu(this)" class = "bi bi-three-dots"></i>

                                        </div>
                                    </div>

                                    <div class="post-content">
                                        <div class = "post-excerpt">
                                            ${data.body}
                                        </div>
                                        
                                        <br/>
                                
                                        <div class = "post-media">
                                            ${postImageSet}
                                        </div>
                                    </div>

                                    <div class="post-foot">
                               
                                        <div class="m-clickables">
                                            
                                            ${impressedStatus}
                                        
                                            <div>
                                                <i class="bi bi-chat-text"></i>

                                                <p><label for = "comment-input-${data.id}">${data.comments.length} <span> comments</span><label></p>

                                            </div>
                                        
                                            <div>
                                                <i class="bi bi-share"></i>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="interests interests-${data.id}">
                                        ${interests}                                            
                                    </div>

                                    <div class = "comment-box">
                                        <div id = "post-comments-${data.id}" class = "post-comment-container">
                                        </div>
                                        <div class = "make-a-comment">
                                            <img src = "{{ asset('storage/prof-pics/' . Auth::user()->user_pic) }}" />
                                            <input id = "comment-input-${data.id}" type = "text" placeholder = "Make a comment..."/>
                                            <button onclick = "submitComment(${data.id});"><i class = "bi bi-upload"></i></button>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr>`);

                                container = document.querySelector(`#post-comments-${data.id}`);
                                
                                if(data.comments.length > 0) {
                                    e = data.comments[0];
                                    container.innerHTML += /*htmL*/`
                                        <div class = "post-comment">
                                            <img src = "{{ asset('storage/prof-pics')}}/${e.user.user_pic}"/>
                                            <div>
                                                <span class = "commentator">${e.user.name} says </span> 
                                                <br>
                                                <p>
                                                    ${e.body}
                                                </p>
                                            </div>
                                        </div>
                                    `;
                                } else {
                                    container.innerHTML = `<h2 class = 'no-comment'><label for = "comment-input-${data.id}">Be the first to make a comment</label></h2>`
                                }
                         
                            });
                    }
                });
                }
            }

            function openTab(evt, tabname) {
                var i, tabcontent, tablinks;

                tabcontent = document.getElementsByClassName('tabcontent');

                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                tablinks = document.getElementsByClassName('tablinks');

                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].classList.remove('active');
                }

                document.getElementById(tabname).style.display = "block";
                evt.currentTarget.classList.add('active');
            }
  
            function postable() {
                document.getElementById('poster').classList.add('show');
            }

            // document.querySelectorAll('.toggles').forEach(e => e.addEventListener('click', () => {
            //     console.log(e);
            //     e.classList.toggle('bi-toggle2-off');
            // }));
        </script>
    </body>
</html>
