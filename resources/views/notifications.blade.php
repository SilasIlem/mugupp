<x-app-layout>

    <style>
        .container {
            padding : 20px;
        }

        .notice-nav {
            width : 100%;
            margin-top : 40px;
        }

        .notice-nav ul {
            width : 80%;
            margin : auto;
            display : flex;
            justify-content : space-around;
            align-items : center;
            padding : 12px;
            border : 1px solid #07659f;
            border-radius : 4px;
            box-shadow : 0px 0px 4px #07659f;
            color : #07659f;
            font-size : 20px;
        }

        .notice-nav > ul li {
            cursor : pointer;
        }
        .notice-slides {
            width : 96%;
            margin : 16px 2%;
            height : 600px;
            box-shadow : inset 0px 0px 4px #07659f;
            padding : 20px;
        }

        .verbose li {
            height : 50px;
            font-size : 18px;
            width : 90%;
            margin : 12px auto;
            background : var(--notice-bg);
            color : var(--notice-color);
            padding : 8px;
            justify-content: space-between;
            display : flex;
            margin-bottom : 24px;
        }

        .verbose li div {
            display : flex;
        }

        .verbose li div * {
            margin : 0px 16px;
        }

        .verbose li div i {
            padding : 8px;
            padding-right : 30px;
            border-right : 1px solid var(--notice-color);
        }

        .verbose li > i {
            padding : 8px;
            padding-left : 30px;
            border-left : 1px solid var(--notice-color);
        }
    </style>

    <div class="container">
        <div class="notice-nav">
            <ul>
                
                    <li>Verbose</li>
                    <li>Classes</li>
                    <li>Friends</li>
                    <li>Strangers</li>
                    <li>Me</li>

            </ul>
        </div>

        <div class="notice-slides">
            <div class="verbose">
                <ul>
                    <li style = "--notice-bg : orange; --notice-color : white;">
                        <div>
                            <i class = "bi bi-bell"></i>
                            <p>Yay! Your message was sent.</p>
                        </div>
                        <i class = "bi bi-x"></i>
                    </li>
                    <li style = "--notice-bg : red; --notice-color : white;">
                        <div>
                            <i class = "bi bi-people"></i>
                            <p>Welcome to the Academia</p>
                        </div>
                        <i class = "bi bi-x"></i>
                    </li>
                    <li style = "--notice-bg : green; --notice-color : white;">
                        <div>
                            <i class = "bi bi-question"></i>
                            <p>Hi! How are you?</p>
                        </div>
                        <i class = "bi bi-x"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
</x-app-layout>