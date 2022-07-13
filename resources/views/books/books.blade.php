<x-app-layout>
   
        <style>
            .container {
                width : 96%;
                min-height : 96vh;
                margin : 16px auto 8px;
                background : white;
            }
    
            #topshelf {
                width : 100%;
                position : relative;
                background-image : url("{{ asset('images/landing1.jpg') }}");
                margin : 0px auto 40px;
                height : 600px;
                background-attachment : fixed;
                background-size : cover;
                overflow : hidden;
            }
    
            #topshelf > div {
                height : 500px;
                width : 100%;
                position : relative;
            }
    
            #topshelf div h5 {
                height : 50px;
                width : 100%;
                margin : auto;
                position : absolute;
                top : 175px;
                text-align : center;
                color : white;
                text-shadow : 0px 0px 4px #07649f;
                font-size : 26px; 
            }
    
            #topshelf div img {
                min-height : 100%;
                position : absolute;
                min-width : 100%;
            }
    
            #ads {
                height : 220px;
                width : 80%;
                margin : 16px 10%;
            }
            
            #bookshelf {
                min-width : 98%;
                display : flex;
                justify-content: space-between;
                margin : 16px;
                margin-right : 1%;
            }
    
            #bookshelf .categories {
                margin-left : 10%;
            }
    
            #bookshelf .categories ul {
                display : flex;
                flex-direction : column;
            }
    
            #bookshelf > ul {
                display : flex;
                float : right;
                max-width : 100%;
                flex-wrap : wrap;
                justify-content: space-between;
                padding : 20px;
                box-shadow : inset 0px 0px 4px grey;
            }
    
            #bookshelf ul li {
                margin : 12px 30px;
                width : 100%;
            }
    
            #bookshelf ul li .book {
                width : 140px;
                height : 180px;
                box-shadow : 0px 0px 4px #07649f
            }
    
            .book img {
                width : 100%;
                height : 100%;
            }
    
            #bookshelf > ul li p {
                max-height : 80px;
                max-width : 100%;
                text-overflow : ellipsis;
                overflow : hidden;
            }
    
            #bookshelf ul li h2 {
                margin : 8px auto;
                height : 30px;
                padding-top : 4px;
                text-align : center;
                background : black;
                color : white;
            }
    
            #tray {
                max-height : 70px;
                display : flex;
                justify-content : space-between;
                min-width : 100%;
                padding : 12px;
            }
    
            #tray button {
                float : right;
                height : 40px;
                width : 60px;
                border-radius : 4px;
                color : white;
                background : #07649f;
                margin : 0px 12px;
            }
    
            #tray input {
                border-radius : 8px;
                width : 300px;
                height : 30px;
                padding-top : 2px;
            }
        </style>
        <div class="container">
          
            <div id="topshelf">
                <div>
    
                    <div id="tray">
    
                        <ul>
                            <form action="">
                                <input type="text" name="search" id="search" placeholder = "search...">
                            </form>
                        </ul>
                        <div>
                            <a href="{{ route('library') }}"><button>Library</button></a>
                            <a href="{{ route('create-book') }}"><button>Create</button></a>    
                        </div>
                    </div>
    
                    <div id = topboard>
    
                        <style>
                            #topboard {
                                max-height : 120px;
                                max-width : 80%;
                                margin : 0px auto;
                                border-bottom : 3px solid white;
                                padding : 16px;
                                display : flex;
                                justify-content : space-around;
                                align-items : center;
                            }
    
                            #topboard h1 {
                                font-size : 60px;
                                color : white;
                                font-weight : bolder;
                            }
    
                            #topboard ul {
                                display : flex;
                                color : white;
                                justify-content : space-around;
                                align-items : center;
                                width : 300px;
                            }
                        </style>
                        <h1>Bookshelf</h1>
                        <ul>
                            <li>FEATURES</li>
                            <li>BLOG</li>
                            <li>GALLERY</li>
                            <li>SHOP</li>
                        </ul>
                        
                    </div>
    
                    <h5>Days of our Lives</>
                    <p>Learn to create stunning movies, games, projects and more with professional video tutorials.</p>
    
                    <div style = "padding : auto; margin-top : 120px; display : flex; justify-content : center;">
                        <button style = "margin : 0px auto; height : 70px; width : 200px; border-radius : 8px; background : white; color : orange; ">Start Learning Now</button>
                    </div>
                </div>
            </div>
    
            <div id="ads">
    
                <style>
                    #ads {
                        margin : 16px;
                    }
                    #ads ul {
                        display : flex;
                        flex-wrap : wrap;
                        width : 100%;
                        justify-content : center;
                        align-items : center;
                        height : 100%;
                        margin-bottom : 8px;
                    }
    
                    #ads li {
                        width : 150px;
                        border-radius : 4px;
                        border : 1px solid black;
                        height : 100%;
                        padding : 12px;
                        margin : 16px;
                    }
                </style>
                <ul>
                    <li><img src="{{ asset('images/')}}" alt=""></li>
                    <li>second ad</li>
                    <li>third ad</li>
                </ul>
            </div>
            <div id="bookshelf">
                {{-- <div class="categories">
                    <fieldset>
                    <legend>Categories</legend>
                    <ul>
                        <li>
                            <details>
                                <summary>Novels</summary>
                                
                                    <ul>
                                        <li>Religious</li>        
                                        <li>Romantic</li>        
                                    </ul>
                    
                            </details>
                        <li>
                            <details>
                                <summary>Novels</summary>
                                
                                    <ul>
                                        <li>Religious</li>        
                                        <li>Romantic</li>        
                                    </ul>
                    
                            </details>
                        <li>
                            <details>
                                <summary>Novels</summary>
                                
                                    <ul>
                                        <li>Religious</li>        
                                        <li>Romantic</li>        
                                    </ul>
                    
                            </details>
                        <li>
                            <details>
                                <summary>Novels</summary>
                                
                                    <ul>
                                        <li>Religious</li>        
                                        <li>Romantic</li>        
                                    </ul>
                    
                            </details>
                        <li>
                            <details>
                                <summary>Novels</summary>
                                
                                    <ul>
                                        <li>Religious</li>        
                                        <li>Romantic</li>        
                                    </ul>
                    
                            </details>
                        </li>
                    </ul>
    
                    </fieldset>
    
                    <fieldset>
                        <legend>Top Authors</legend>
                        <ul>
                            <li>Alibaba</li>
                            <li>Daniel Ryan</li>
                            <li>Innocenty</li>
                            <li>Man o' Match</li>
                        </ul>
                    </fieldset>
                </div> --}}
    
                <style>
                    #best-sellers {
                        height : 200px;
                        width : 100%;
                    }
    
                    #best-sellers h1 {
                        text-align : center;
                        font-size : 26px;
    
                        font-weight : bolder;
                    }
                </style>
                <ul>
                    <li id = "best-sellers">
                        <h1>MUGUPP BESTSELLERS</h1>
                        <ul>
                            <li>
                                <div class="best-cards">
                                    <div>
                                        <img src="{{ asset('images/landing2.jpg')}}" alt="">
                                        
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <h3 style = "min-width : 100%; height : 50px; text-align : center; font-size : 22px; font-weight : bolder;">Categories</h3>
                    <li>
                        <div class = "book">
                           
                            <img src="{{ asset('images/landing.jpg') }}" alt="">
                        </div>
                        <h2>Walks of Life</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores unde tempore odit rerum provident, reprehenderit doloribus architecto maxime culpa nisi.
                        </p>
                    </li>
                    <li>
                        <div class = "book">
                            <img src="{{ asset('images/landing.jpg') }}" alt="">
                        </div>
                        <h2>Walks of Life</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa fugiat distinctio natus, sunt consequuntur perferendis cupiditate dolore totam sed cum!</p>
                    </li>
                    <li>
                        <div class = "book">
                            <img src="{{ asset('images/landing.jpg') }}" alt="">
                        </div>
                        <h2>Walks of Life</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, porro!</p>
                    </li>
                    <li>
                        <div class = "book">
                            <img src="{{ asset('images/landing.jpg') }}" alt="">
                        </div>
                        <h2>Walks of Life</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, consequatur.</p>
                    </li>
                    <li>
                        <div class = "book">
                            <img src="{{ asset('images/landing.jpg') }}" alt="">
                        </div>
                        <h2>Walks of Life</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, voluptas?</p>
                    </li>
                </ul>
            </div>
        </div>
</x-app-layout>