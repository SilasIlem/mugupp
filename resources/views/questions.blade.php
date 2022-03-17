<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mugupp CBT</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src = "{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    
</body>
</html>
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
</style>
<div id = app>
    <div id = quest-container>
        @foreach ($quests as $quest)
            <question-component no = "{{ $quest->id }}" question = "{{ $quest->question }}" a = "{{ $quest->a }}" b = "{{ $quest->b }}" c = "{{ $quest->c }}" d = "{{ $quest->d }}" e = "{{ $quest->e }}"></question-component>
        @endforeach
    </div>

    {{ $quests->links() }}
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