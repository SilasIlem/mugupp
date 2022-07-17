<x-ast-layout>
    <style>
        #container {
            height : 60vh;
            padding : 1rem;
            display : flex;
            flex-direction : column;
            gap : 2rem;
            justify-content : center;
            align-items : center;
        }

        #container h1 {
            font-size : 2rem;
        }

        .container {
            display : flex;
            gap : 1.2rem;
            width : max-content;
        }

        .container button {
            height : 48px;
            width : 100px;
            border-radius : 6px;
            background : var(--button-color);
            color : var(--color-white);
        }
    </style>
    <div id="container">
        <h1>You are about to begin the Mathematics exam, are you ready?</h1>
        <br>
        <br>
        <br>
        <div class="container">
            <a href="{{ route('begin') }}"><button style = "--button-color : var(--color-primary-main);">Yes</button></a>
            <a href="{{ route('mast') }}"><button style = "--button-color : var(--color-gray);">No</button></a>
        </div>
    </div>
</x-ast-layout>