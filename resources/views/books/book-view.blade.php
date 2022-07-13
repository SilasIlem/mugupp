<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mugupp-preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/book-view.css') }}">
</head>
<body>
    <div id="preloader">
        <div id="progress"></div>
        <img src="{{ asset('images/booksimages/loader-img.gif') }}" alt="">
    </div>
    
    <div id = "container">
        <div id = "description">
            <div id = "img-container">
                <img src="{{ asset('images/booksimages/book-3.png') }}" alt="">
            </div>
            <div id = "desc">
                <h1>{{ $book->title }}</h1>
                <p>{{ $book->excerpt }}</p>
            </div>
        </div>

        <div id="chapters">
            Parts of this book:
            <ol>
                @foreach($book->parts as $part)
                <a href="{{ route('read-book', ['book_slug' => $book->slug, 'slug' => $part->slug]) }}">
                    <li>{{$part->title}}</li>
                </a>
                @endforeach
            </ol>
        </div>
    </div>
        
    <script>
        content = document.getElementById('content');
        preloader = document.getElementById('preloader');

        

        document.onload = () => {
            content.classList.add('loaded');
            preloader.classList.add('loaded');
        }
    </script>
</body>
</html>