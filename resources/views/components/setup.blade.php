<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Keywords" content="AScholar, Online Test/Exam, Profile, Class Room, Exam Room, Scholar Progression, Active Score, Scholarships, Admission, Tutorial Papers, Exam Papers, Test">
        <meta name="Description" content="Join AScholar Learn Apply for STAS admissions exams secure funding support Join reality TV show, The Student, become AScholar education ambassador.">
        <title>AScholar</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}" defer></script>

        </head>
        <body>
   
        <div style = "min-height : 70vh; padding : 5px 0px;" class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    
    </body>
</html>
