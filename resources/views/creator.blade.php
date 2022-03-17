<x-app-layout>
    <style>
        #container {
            padding : 20px;
            width : 600px;
            margin : 16px auto;
            background : white;
        }

        #new-creation {
            width : 300px;
            height : 80px;
            display : flex;
            justify-content : space-between;
            margin : 16px;
            box-shadow : 0px 0px 2px grey;
        }

        #new-creation:hover button {
            background : #07649f;
        }

        #new-creation > div {
            display : flex;
            width : 90%;
            align-items : center;
            justify-content: center;
        }

        #new-creation > div p {
            font-size : 24px;
        }

        #new-creation button {
            height : 100%;
            width : 50px;
            transform : scaleY(1.05);
            background : grey;
            color : white;
            padding-top : 4px;
        }

        #books {
            padding : 12px;
            min-height : 200px;
            width : 400px;
        }

        #books ul {
            display : flex;
            flex-direction : column;
        }

        #books li {
            width : 100%;
            height : 70px;
            margin : 4px;
            border-radius : 4px;
            border : 1px solid #07649f;
            padding : 8px;
        }
    </style>
    <div id="container">
        <div class="books">
            <div id="new-creation">
                <button><i class = "bi bi-plus"></i></button>
                <div>
                    <p>Create a new book</p>
                </div>
            </div>

            <div id="books">
                <h1>Your Books here.</h1>
                All books written by {{ Auth::user()->name }} appear here.

                <ul>
                    <li>
                        <h2>Book One { Title }</h2>
                        <p>description goes here.</p>

                    </li>
                    <li>Book Two</li>
                </ul>
            </div>
           
        </div>
    </div>
</x-app-layout>