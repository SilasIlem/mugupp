<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mugupp Settings</title>
    <link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/settings.css')}}">
</head>
<body>
    <div id = "return-btns">
        <i onclick = "window.history.back();" class = "bi bi-arrow-left-circle-fill"></i></button>
        <a href="{{ route('dashboard') }}"><button>Dashboard</button></a>
    </div>
    <nav>
        <ul>
            <li>General Settings</li>
            <li>Notifications Settings</li>
            <li>Videos Settings</li>
            <li>Theme Settings</li>
            <li>Messages Settings</li>
            <li>Privacy & Security</li>
        </ul>

        <p>Help Center</p>
        <p>About Mugupp</p>
    </nav>

    <main>
        
    </main>
</body>
</html>