<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AST Application</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        #register {
            padding : 50px;
            height : 100vh;
            background : rgba(240, 240, 240, 0.76);
        }

        select {
            margin : 12px 0px;
        }

        #watermark {
            position : fixed;
            opacity : .4;
            height : 200vh;
            width : 200vw;
            background : rgba(255, 255, 255, 0.205);
            pointer-events : none
        }
    </style>
</head>
<body>

    <div id="register">
        <a href="{{ route('ast') }}"><button><i class = "bi bi-arrow-back"></i></button></a>
        <div class="font-sans text-gray-900 antialiased">

                <link rel="stylesheet" href="{{asset('css/register.css')}}">
                
                <img id = watermark src="{{asset('images/AST P.svg')}}" style = "width : 100vw; height : 500px;">
            
        
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
                <form method="POST" action="{{ route('paypage') }}">
                    @csrf

                    
                    <fieldset>
            
                        <legend>Course:</legend>  
                        <select name="dropdown">  
                            <option value="Mathematics"selected> Mathematics</option> 
                            <option value="Physics">Physics</option> 
                            <option value="Linguistics">Linguistics</option>
                            <option value="Mass Communication">Mass Communication</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Computer Engineering">Computer Engineering</option>
                            <option value="Marine Engineering">Marine Engineering</option>
                            <option value="Petrochemical Engineering">Petrochemical Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Aeronautics">Aeronautics</option>
                            <option value="Aeronautic Engineering">Aeroautic Engineering</option>
                            <option value="Medicine & Surgery">Medicine & Surgery</option>
                            <option value="Phaarmacy">Pharmacy</option>
                            <option value="Veterinary Medicine">Veterinary Medicine</option>
                            <option value="Biochemistry">Biochemistry</option>
                            <option value="Microbiology">Microbiology</option>
                            <option value="Biology">Biology</option>
                            <option value="Geography">Geography</option>
                            <option value="Zoology">Zoology</option>
                            <option value="Soil Sceince">Soil Science</option>
                            <option value="Agricultural Science">Agricultural Science</option>
                            <option value="Economics">Economics</option>
                            <option value="Literature in English">Literature in English</option>
                            <option value="English Language">English Language</option>
                            <option value="Fine & Applied Art">Fine & Applied Art</option>
                            <option value="Political Science">Political Science</option>
                            <option value="Communication & Language Art">Communication & Language Art</option>
                            <option value="Theartre Art">Theatre Art</option>
                            <option value="Yoruba">Yoruba</option>
                            <option value="German">German</option>
                            <option value="French">French</option>
                            <option value="Portuguese">Portuguese</option>
                            <option value="Guidance & Counseling">Guidance & Counseling </option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Nursing">Nursing</option>
                            <option value="Dentistry">Dentistry</option>
                            <option value="Optometry">Optometry</option>
                            <option value="Medical Laboratory">Medical Laboratory</option>
                            <option value="Medical Rehabilitation">Medical Rehabilitation</option>
                            <option value="Medical Engineering">Medical Engineering</option>
                            <option value="Medical Illustration">Medical Illustration</option>
                            <option value="Law">Law</option>
                            <option value="Hospitality Management">Hospitality Management</option>
                            <option value="History">History</option>
                            <option value="Religious Studies">Religious Studies</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Petroleum Engineering">Petroleum Engineering</option>
                            <option value="Philosophy">Philosophy</option>
                            <option value="Psychology">Psychology</option>
                            <option value="Forensic Studies">Forensic Studies</option>
                            <option value="Accounting/Accountancy">Accounting/Accountancy</option>
                            <option value="Public Administration">Public Administration</option>
                            <option value="Business Administration">Business Administration</option>
                            <option value="International Relations">International Relations</option>
                            <option value="Financial Management">Financial Management</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Library Science">Library Science</option>
                            <option value="Criminology">Criminology</option>
                        </select>
                                
                    </fieldset>
                    
                    <fieldset>
                        <legend>Subject Area: </legend>
            
            
                        <select name="dropdown"> 
                            <option value="" selected>--Select first subject--</option> 
                            <option value="Maths">Maths</option> 
                            <option value="Physics">Physics</option> 
                            <option value="Chemistry">Chemistry</option> 
                            <option value="Agricultural Sceince">Agricultural Science</option>
                            <option value="	Economics">Economics</option>
                            <option value="IRS">IRS</option>
                            <option value="Geography">Geography</option>
                            <option value="Government">Government</option>
                            <option value="CRS">CRS</option>
                            <option value="Igbo">Igbo</option>
                            <option value="History">History</option>
                            <option value="Fine Art">Fine Art</option>
                            <option value="Yoruba">Yoruba</option>
                            <option value="Hausa">Hausa</option>
                            <option value="Further Maths">Further Maths</option>
                            <option value="Introductory Technology">Introductory Technology</option>
                            <option value="Social Studies">Social Studies</option>
                            <option value="Literature">Literature</option>
                            <option value="English">English</option>
                            <option value="Biology">Biology</option>
                        </select> 
                        
                        <select name="dropdown"> 
                            <option value="" selected>--Select second subject--</option> 
                            <option value="Maths">Maths</option> 
                            <option value="Physics">Physics</option> 
                            <option value="Chemistry">Chemistry</option> 
                            <option value="Agricultural Sceince">Agricultural Science</option>
                            <option value="	Economics">Economics</option>
                            <option value="IRS">IRS</option>
                            <option value="Geography">Geography</option>
                            <option value="Government">Government</option>
                            <option value="CRS">CRS</option>
                            <option value="Igbo">Igbo</option>
                            <option value="History">History</option>
                            <option value="Fine Art">Fine Art</option>
                            <option value="Yoruba">Yoruba</option>
                            <option value="Hausa">Hausa</option>
                            <option value="Further Maths">Further Maths</option>
                            <option value="Introductory Technology">Introductory Technology</option>
                            <option value="Social Studies">Social Studies</option>
                            <option value="Literature">Literature</option>
                            <option value="English">English</option>
                            <option value="Biology">Biology</option>
                        </select>
                        
                        <br> 

                        <select name="dropdown"> 
                            <option value="" selected>--Select third subject--</option> 
                            <option value="Maths">Maths</option> 
                            <option value="Physics">Physics</option> 
                            <option value="Chemistry">Chemistry</option> 
                            <option value="Agricultural Sceince">Agricultural Science</option>
                            <option value="	Economics">Economics</option>
                            <option value="IRS">IRS</option>
                            <option value="Geography">Geography</option>
                            <option value="Government">Government</option>
                            <option value="CRS">CRS</option>
                            <option value="Igbo">Igbo</option>
                            <option value="History">History</option>
                            <option value="Fine Art">Fine Art</option>
                            <option value="Yoruba">Yoruba</option>
                            <option value="Hausa">Hausa</option>
                            <option value="Further Maths">Further Maths</option><option value="Introductory Technology">Introductory Technology</option>
                            <option value="Social Studies">Social Studies</option>
                            <option value="Literature">Literature</option>
                            <option value="English">English</option>
                            <option value="Biology">Biology</option>
                        </select> 
                        <select name="dropdown"> 
                            <option value="" selected>--Select fourth subject--</option> 
                            <option value="Maths">Maths</option> 
                            <option value="Physics">Physics</option> 
                            <option value="Chemistry">Chemistry</option> 
                            <option value="Agricultural Sceince">Agricultural Science</option>
                            <option value="	Economics">Economics</option>
                            <option value="IRS">IRS</option>
                            <option value="Geography">Geography</option>
                            <option value="Government">Government</option>
                            <option value="CRS">CRS</option>
                            <option value="Igbo">Igbo</option>
                            <option value="History">History</option>
                            <option value="Fine Art">Fine Art</option>
                            <option value="Yoruba">Yoruba</option>
                            <option value="Hausa">Hausa</option>
                            <option value="Further Maths">Further Maths</option>
                            <option value="Introductory Technology">Introductory Technology</option>
                            <option value="Social Studies">Social Studies</option>
                            <option value="Literature">Literature</option>
                            <option value="English">English</option>
                            <option value="Biology">Biology</option>
                        </select> 
                    </fieldset>
        
                    <a href="{{ Storage::url('docs/instructions.txt') }}" download>Days of Obsession</a>
    
                    <div class="flex items-center justify-end ">

                        <x-button class="ml-4">
                            {{ __('Apply') }}
                        </x-button>
                    </div>
                </form>
    </div>

</body>
</html>
   