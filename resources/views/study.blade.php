<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Study</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/DocReset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/study.css')}}">
</head>
<body>
    <nav>
        <i class = "bi bi-columns-gap"></i>
        <ul>
            <li>
                <i class = "bi bi-file-fill" onclick = "document.getElementById('cabinet').classList.toggle('show');"></i>
            </li>
        </ul>
        <ul>
            <a href="{{ route('dashboard') }}">
                <i class = 'bi bi-command'></i>
            </a>
            <a href="{{ route('study') }}">
                <i class = "bi bi-book"></i>
            </a>
        </ul>

    </nav>

    <div id = "container">
        

        <div id = "cabinet">
            <h2>Books</h2>
            <ul id = "mug-books">
                <li>
                    <img src = "{{ asset('images/faces/1.jpg') }}" />
                    <span>Life of the hunter's hunted.</span>
                </li>
                <li>
                    <img src = "{{ asset('images/faces/2.jpg') }}" />
                    <span>Life of the hunter's hunted.</span>
                </li>
                <li>
                    <img src = "{{ asset('images/faces/3.jpg') }}" />
                    <span>Life of the hunter's hunted.</span>
                </li>
                <li>
                    <img src = "{{ asset('images/faces/4.jpg') }}" />
                    <span>Life of the hunter's hunted.</span>
                </li>
                <li>
                    <img src = "{{ asset('images/faces/5.jpg') }}" />
                    <span>Life of the hunter's hunted.</span>
                </li>
                <li>
                    <img src = "{{ asset('images/faces/6.jpg') }}" />
                    <span>Life of the hunter's hunted.</span>
                </li>
            </ul>

            <h2>Other Documents</h2>
            <ul>
                <li>
                    <i class = "bi bi-file-earmark-font-fill"></i>
                    <span>mts 101 Handouts</span>
                </li>
                <li>
                    <span>MTS 10 Handouts</span>
                </li>
                <li>
                    <span>MTS 01 Handouts</span>
                </li>
                <li>
                    <span>MTS 201 Handouts</span>
                </li>
                <li>
                    <span>MTS 301 Handouts</span>
                </li>
                <li>
                    <span>MTS 401 Handouts</span>
                </li>
            </ul>
        </div>
    </div>

    <script>
        document.body.onload = () => {
            setTimeout(() => {
                document.body.requestFullscreen();
            }, 4000);
        }
    </script>
    
</body>
</html>