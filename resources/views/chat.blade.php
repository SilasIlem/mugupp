<x-app-layout>
    <style>
        #container {
            height : 92vh;
            margin : 16px auto;
            width : 94vw;
            display : flex;
            padding : 8px;
            background : white;
        }

        #chatbox {
            min-width : 700px;
            height : 100%;
            box-shadow : inset 0px 0px 4px grey;
            position : relative;
            background-image : url("{{ asset('images/bg-gifts.png') }}"), linear-gradient(to bottom, #07659f57, #07659faf);
        }

        #chatbox .messagebox {
            position : absolute;
            bottom : 6px;
            min-width : 90%;
            left : 5%;
            height : 60px;
        }

        .messagebox input {
            width : 100%;
            border : none;
            height : 50px;
            border-radius : 4px;
            outline : none;
            box-shadow : 0px 0px 4px #07649f;
        }

        #friends {
            width : 30%;
            height : 100%;
            padding : 16px;
        }

        #friends ul {
            display : flex;
            flex-direction : column;

        }

        #friends li {
            height : 46px;
            display : flex;
            width : 100%;
            margin : 12px 0px;
            padding : 12px;
            color : white;
            border-radius : 8px;
            background : #07649f;
            border : 1px solid #07649f;
        }
        #suggestions {
            width : 500px;
            height : 100%;
        }

        #friends h2 {
            font-weight : 1000;
            margin : 12px 16px;
            font-size : 18px;
        }

        #friends form input {
            width : 96%;
            border-radius : 4px;
            height : 30px;
            margin : 2%;
        }

        li p {
            margin-left : 8px;
        }

        li img {
            height : 24px;
            width : 24px;
            border-radius : 50%;
            background : white;
            margin : auto 0px;
        }

        .chats {
            padding : 12px;
        }

        .chats p {
            color : white;
            font-size : 24px;
        }
        .left {
            text-align : left;
            width : 100%;
        }

        .right {
            text-align : right;
            width : 100%;
        }
    </style>
    <div id = "container">
        <div id="friends">

            <h2>Chats</h2>

            <form action="">
                <input type="text" name = 'search' placeholder = 'Search'>
            </form>
            <ul>
                <li>
                    <img src = "{{ asset('images/friend.png') }}">
                    <p>Jack Reacher05</p>
                </li>
                <li>Kinship</li>
                <li>sop0188</li>
                <li>KidOnTheBlock</li>
                <li>HoneyBadger</li>
                <li>John Haggyp</li>
            </ul>
        </div>
        <div id="chatbox">
            <div class="chats">
                <div class="left">
                    <p>Hello!</p>
                </div>
                <div class="right">
                    <p>Hi!</p>
                </div>
            </div>
            <div class="messagebox">
                <form action="">
                    <input type="text" name = "message" placeholder = "Write a message...">
                </form>
            </div>
        </div>
        <div id="suggestions"></div>
    </div>
    
</x-app-layout>