<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mathematics - SS2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
        <script src = "{{ asset('js/app.js') }}" defer></script>
        <style>
            * {
                padding : 0px;
                margin : 0px;
                box-sizing : border-box;
            }

            body {
                overflow-x : hidden;
            }

            nav {
                height : 8vh;
                width : 100vw;
                display : flex;
                justify-content: space-between;
                align-items : center;
            }

            nav > * {
                margin : 20px;
            }

            nav img {
                height : 50px;
                width : 120px;
            }

            nav p {
                font-size : 22px;
            }

            #quest-container {
                margin-bottom : 200px;
            }

            #m-quests {
                height : 400px;
                width : 96%;
                margin : 12px auto;
                background : #07649f;
                padding : 12px;
                box-shadow : 0px 0px 4px hsl(170, 100%, 60%);
                color : white;
                font-size : 18px;
            }

            form {
                display : flex;
                flex-direction : column;
                height : 180px;
                padding : 30px;
                width : 100%;
            }

            form > * {
                margin : 20px 0px;
            }

            #navigators {
                position : fixed;
                bottom : 0px;
                width : 100vw;
                display : flex;
                justify-content: space-between;
                align-items : center;
            }

            #navigators button {
                height : 50px;
                width : 100px;
                color : white;
                border-radius : 12px;
                border : none;
                outline : none;
                background : #07649f;
                margin : 16px;
            }

            #navigators button:hover {
                color : greenyellow
            }
            #container {
                background : var(--color-white);
                margin : 2rem;
                height : calc(100vh - 4rem);
                width : calc(100vw - 4rem);
                padding : 1rem;
            }
    
            #container > #head--div {
                display : flex; 
                width : 100%;
                justify-content: space-between;
                align-items : center;
            }
    
            #head--div h1, #head--div p {
                color : var(--color-dark);
                padding : 6px 24px;
                font-size : 1.4rem;
            }
    
            #head--div p {
                background : var(--color-primary);
                color : var(--color-white);
                border-radius : 12px;
            }
    
            #content {
                display : grid;
                grid-template-columns : 60vw auto;
                grid-auto-columns: 60vh;
                grid-gap : 2rem;
                margin-left : 24px;
            }
    
            #question-container {
                background : var(--color-light-blue);
                border-radius : 6px;
                padding : 1.4rem;
                overflow : scroll;
                height : 700px;
                overscroll-behavior: contain; 
                box-shadow : inset 0px 0px 6px var(--color-dark);
            }
    
            #question-container::-webkit-scrollbar {
                display : none;
            }
    
            .question {
                font-size : 1.5rem;
                display : none;
            }
    
            .question p {
                margin-bottom : 24px;
                line-height : 38px;
            }
    
            .question p span {
                margin-right : 12px;
                font-weight : 500;
            }
    
            .question input {
                margin : 16px;
            }
    
            .question:target {
                display : block;
            }
    
            #nav--ul {
                margin : 24px 16px;
                padding : 16px;
                padding-bottom : 0px;
                background : var(--color-light);
                border-radius : 6px;
                display : flex;
                gap : 1rem;
                overflow : scroll;
                overscroll-behavior: contain;
                max-height : 70vh;
                align-items : flex-start;
                justify-content: flex-start;
                flex-wrap : wrap;
            }
    
            #nav--ul li button {
                height : 38px;
                width : 38px;
                border-radius : 50%;
                color : var(--color-white);
                background : var(--color-gray);
            }
    
            #question-nav--footer {
                height : 50px;
                width : 100%;
                display : flex;
                justify-content : space-around;
                align-items : center;
            }
    
            #question-nav--footer button {
                background : var(--btn-color);
                cursor : pointer;
                height : 38px;
                width : 100px;
                border-radius : 8px;
                color : var(--color-white);
            }        
        </style>
    <body>
        <div id="container">
            <div id="head--div">
                <h1>MATHEMATICS</h1>

                <p>01:04:40</p>
            </div>

            <div id="content">
                <div id = "question-container">
                        <form id = "form" method = "POST" action = "">
                            @csrf
                            <div id = "question-1" class="question">
                                <p>
                                    <span>1. </span> <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam adipisci facere quidem qui laudantium laboriosam. Quis molestias expedita aut hic quaerat quos cupiditate, assumenda velit odit eveniet voluptate dignissimos error laborum ipsam autem ullam ab iste exercitationem quisquam perferendis? Asperiores?</span>
                                </p>
            
                                <div>
                                    <input type="radio" value = "a" name="answer_1" id="a-1"> <label for="a-1"><span>A. </span> <span>Lorem ipsum dolor sit.</span></label>
                                </div>

                                <div>
                                    <input type="radio" value = "b" name="answer_1" id="b-1"> <label for="b-1"><span>B. </span> <span>Lorem ipsum dolor sit.</span></label>
                                </div>

                                <div>
                                    <input type="radio" value = "c" name="answer_1" id="c-1"> <label for="c-1"><span>C. </span> <span>Lorem ipsum dolor sit.</span></label>
                                </div>

                                <div>
                                    <input type="radio" value = "d" name="answer_1" id="d-1"> <label for="d-1"><span>D. </span> <span>Lorem ipsum dolor sit.</span></label>       
                                </div>

                            </div>
                            
                            <div id = "question-2" class="question">
                                <p>
                                    <span>2. </span> <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam adipisci facere quidem qui laudantium laboriosam. Quis molestias expedita aut hic quaerat quos cupiditate, assumenda velit odit eveniet voluptate dignissimos error laborum ipsam autem ullam ab iste exercitationem quisquam perferendis? Asperiores?</span>
                                </p>
            
                                <div>
                                    <input type="radio" value = "a" name="answer_2" id="a-2"> <label for="a-2"><span>A. </span> <span>Lorem ipsum dolor sit.</span></label>
                                </div>

                                <div>
                                    <input type="radio" value = "b" name="answer_2" id="b-2"> <label for="b-2"><span>B. </span> <span>Lorem ipsum dolor sit.</span></label>
                                </div>

                                <div>
                                    <input type="radio" value = "c" name="answer_2" id="c-2"> <label for="c-2"><span>C. </span> <span>Lorem ipsum dolor sit.</span></label>
                                </div>

                                <div>
                                    <input type="radio" value = "d" name="answer_2" id="d-2"> <label for="d-2"><span>D. </span> <span>Lorem ipsum dolor sit.</span></label>       
                                </div>
                            </div>
                            
                            <div id = "question-3" class="question">
                                <p>
                                    <span>3. </span> <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam adipisci facere quidem qui laudantium laboriosam. Quis molestias expedita aut hic quaerat quos cupiditate, assumenda velit odit eveniet voluptate dignissimos error laborum ipsam autem ullam ab iste exercitationem quisquam perferendis? Asperiores?</span>
                                </p>
            
                                <div>
                                    <input type="radio" value = "a" name="answer_3" id="a-3"> <label for="a-3"><span>A. </span> <span>Lorem ipsum dolor sit.</span></label>
                                </div>
            
                                <div>
                                    <input type="radio" value = "b" name="answer_3" id="b-3"> <label for="b-3"><span>B. </span> <span>Lorem ipsum dolor sit.</span></label>
                                </div>
            
                                <div>
                                    <input type="radio" value = "c" name="answer_3" id="c-3"> <label for="c-3"><span>C. </span> <span>Lorem ipsum dolor sit.</span></label>
                                </div>

                                <div>
                                    <input type="radio" value = "d" name="answer_3" id="d-3"> <label for="d-3"><span>D. </span> <span>Lorem ipsum dolor sit.</span></label>       
                                </div>
                            </div>
                            
                            <div id = "question-4" class="question">
                                <p>
                                    <span>4. </span> <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam adipisci facere quidem qui laudantium laboriosam. Quis molestias expedita aut hic quaerat quos cupiditate, assumenda velit odit eveniet voluptate dignissimos error laborum ipsam autem ullam ab iste exercitationem quisquam perferendis? Asperiores?</span>
                                </p>
            
                                <div>
                                    <input type="radio" value = "a" name="answer_4" id="a-4"> <label for="a-4"><span>A. </span> <span>Lorem ipsum dolor sit.</span></label>
                                </div>

                                <div>
                                    <input type="radio" value = "b" name="answer_4" id="b-4"> <label for="b-4"><span>B. </span> <span>Lorem ipsum dolor sit.</span></label>
                                </div>

                                <div>
                                    <input type="radio" value = "c" name="answer_4" id="c-4"> <label for="c-4"><span>C. </span> <span>Lorem ipsum dolor sit.</span></label>
                                </div>

                                <div>
                                    <input type="radio" value = "d" name="answer_4" id="d-4"> <label for="d-4"><span>D. </span> <span>Lorem ipsum dolor sit.</span></label>       
                                </div>
                            </div>

                        </form>
                    </div>

                    <div id="question-nav">
                        <h1>Status</h1>

                        <ul id="nav--ul">
                    
                            <li>
                                <a href="#question-1"><button>1</button></a>
                            </li>
                        
                            <li>
                                <a href="#question-2"><button>2</button></a>
                            </li>
                        
                            <li>
                                <a href="#question-3"><button>3</button></a>
                            </li>
                        
                            <li>
                                <a href="#question-4"><button>4</button></a>
                            </li>
                    
                        </ul>

                        <div id="question-nav--footer">
                            <button style = "--btn-color : var(--color-green);">Skip</button>
                            <button style = "--btn-color : var(--color-primary);">Previous</button>
                            <button style = "--btn-color : var(--color-green);">Next</button>
                            <button onclick = "document.getElementById('form').submit();" style = "--btn-color : red;">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div>
            <div id="navigators">
                <button>back</button>
                <button>forward</button>
            </div>
        </div> --}}

        <script>

            var hidden, visibilityChange;

            if (typeof document.hidden !== 'undefined'){
                hidden = "hidden";
                visibilityChange = "visibilitychange";
            } else if (typeof document.msHidden !== 'undefined') {
                hidden = "msHidden";
                visibilityChange = "msvisibilitychage";
            } else if ( typeof document.webkitHidden !== 'undefined') {
                hidden = "webkitHidden";
                visibilityChange = "webkitvisibilitychange";
            }

            document.addEventListener('visibilitychange', () => {
                if (document.visibilityState !== 'visible'){
                    document.history.back();
                }
                alert('bye');
            });
        
            window.addEventListener('onblur', () => {

                window.location.href = "localhost:8000";
                
                alert('bye');
            });

            if(document[hidden]) {
                alert("Don't try to cheat")
            }
        </script>
    </body>
</html>