<x-app-layout>

    <style>
        .container {
            width : 90%;
            min-height : 96vh;
            margin : 16px auto 8px;
            background : white;
            padding : 16px;
        }

        #topshelf {
            width : 90%;
            position : relative;
            margin : 0px auto 40px;
            height : 400px;
            overflow : hidden;
        }

        #topshelf div {
            height : 400px;
            width : 100%;
            background : grey;
        }

        #topshelf div p {
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
            min-width : 100%;
        }
        
        #bookshelf {
            min-width : 98%;
            display : flex;
            justify-content: space-between;
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
            width : 240px;
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
            height : 50px;
            display : flex;
            justify-content : space-between;
            min-width : 100%;
        }

        #tray button {
            float : right;
            height : 40px;
            width : 60px;
            border-radius : 4px;
            margin : 0px 12px;
            box-shadow : 0px 0px 4px #07649f;
        }

        #tray input {
            border-radius : 8px;
            width : 300px;
            height : 30px;
            padding-top : 2px;
        }
    </style>
    <div class="container">
        <div id="tray">
            <ul>
                <form action="">
                    <input type="text" name="search" id="search" placeholder = "search...">
                </form>
            </ul>
            <div>
                <a href="{{ route('library') }}"><button>Library</button></a>
                <a href="{{ route('make_books') }}"><button>Create</button></a>    
            </div>
      </div>
        <div id="topshelf">
            <div>
                <img src="{{ asset('images/landing1.jpg') }}" alt="">
                <p>Days of our Lives</p>
            </div>
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

            <ul>
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