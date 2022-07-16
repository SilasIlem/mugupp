<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AST Application</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
    <style>
        #register {
            padding : 50px;
            height : 100vh;
            background : rgba(240, 240, 240, 0.76);
        }

        select {
            margin : 12px 0px;
        }

        #m-name {
            position : fixed;
            opacity : .05;
            font-size : 20rem;
            margin : 0px;
            margin-top : 24.5vh;
            left : 0px;
            top : 0px;
            padding : 0px;
            height : 100vh;
            width : 100vw;
            background : rgba(255, 255, 255, 0.205);
            pointer-events : none
        }
                
        input[type="text"],
        select {
            width: 100%;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="password"],
        select {
            width: 100%;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            box-shadow: 0px 0px 4px #555;
            outline: none;
        }

        @media screen and (max-width : 600px) {
            
            #m-name {
                font-size : 4rem;
                letter-spacing : 3px;
                margin-top : 46vh;
            }
        }
    </style>
</head>
<body>

    <div id="register">
        <a href="{{ route('mast') }}"><button><i class = "bi bi-arrow-back"></i></button></a>
        <div class="font-sans text-gray-900 antialiased">

                
                <h1 id = 'm-name'>
                    mast
                </h1>
            
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
   {{-- <x-slot name="logo">
            <a href="/">
                <img src= "{{asset('images/mugupp.png')}}" width='100' height '30'>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <fieldset>
            <img src="{{asset('images/SOTAS new.png')}}" width='400' height '100'>

            <br />
            <br />
            <fieldset>

            <legend>Personal Details : </legend>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div class = mt-4>
                    <x-label for="firstname" :value="__('First Name')" />
    
                    <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
                </div>
                <div class = mt-4>
                    <x-label for="lastname" :value="__('Last Name')" />
    
                    <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus />
                </div>
                <div class = mt-4>
                    <x-label for="username" :value="__('UserName')" />
    
                    <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
                </div>
    
                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />
    
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
                <div class = mt-4>
                    <x-label for="gender" :value="__('Sex')" />
                    <select name="gender" id="gender">
                        <option value="c">custom</option>
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                        <option value="o">Other</option>
                    </select>
                </div>

                
                <div class="mt-4">
                    <x-label for="day" :value="__('Day')" />
                    <select id="day">
                        <option>1</option>    
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>	
                    </select>
                </div>
                <div class="mt-4">
                    <x-label for="month" :value="__('Month')" />
                    <select id="month">
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December<option>
                    </select>
                </div>

                <div class="mt-4">
                    <x-label for="year" :value="__('Year')" />
                    <select id="year">
                        <option>1970</option>
                        <option>1971</option>
                        <option>1972</option>
                        <option>1973</option>
                        <option>1974</option>
                        <option>1975</option>
                        <option>1976</option>
                        <option>1977</option>
                        <option>1978</option>
                        <option>1979</option>
                        <option>1980</option>
                        <option>1981</option>
                        <option>1982</option>
                        <option>1983</option>
                        <option>1984</option>
                        <option>1985</option>
                        <option>1986</option>
                        <option>1987</option>
                        <option>1988</option>
                        <option>1989</option>
                        <option>1990</option>
                        <option>1991</option>
                        <option>1992</option>
                        <option>1993</option>
                        <option>1994</option>
                        <option>1995</option>
                        <option>1996</option>
                        <option>1997</option>
                        <option>1998</option>
                        <option>1999</option>
                        <option>2000</option>
                        <option>2001</option>
                        <option>2002</option>
                        <option>2003</option>
                        <option>2004</option>
                        <option>2005</option>
                        <option>2006</option>
                        <option>2007</option>
                        <option>2008</option>
                        <option>2009</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                    </select>
                </div>
    
                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />
    
                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>
    
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
    
                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
                </div>
            </form>
            </fieldset> 

            <br />
            <br />

            <fieldset> 
            <legend> Your O'level & Passport: </legend> 
            <form action="http://www.example.com/upload.php" method="post"> 
       
                <div class="mt-4">
                    <x-label for="olevel" :value="__('Scan and upload your O\'level result:')" />
    
                    <x-input id="olevel" class="block mt-1 w-full"
                                    type="file"
                                    name="olevel" required />
                </div>
                <div class="mt-4">
                    <x-label for="passport" :value="__('Scan and upload your recent passport. Not more than 500kb:')" />
    
                    <x-input id="passport" class="block mt-1 w-full"
                                    type="file"
                                    name="passport" required />
                </div>

                </form>
            </fieldset>

            <br />
            <br />

            <fieldset> 
                <legend>Subject Area: </legend> 
                <div class="mt-4">
                    <x-label for="subject" :value="__('subject')"/>
                    <select name="dropdown"> 
                        <option value="Maths" selected>Maths</option> 
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
                </div>

                <div class="mt-4">
                    <x-label for="subject" :value="__('subject')"/>
                    <select name="dropdown"> 
                        <option value="Maths" selected>Maths</option> 
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
                </div>

                <div class="mt-4">
                    <x-label for="subject" :value="__('subject')"/>
                    <select name="dropdown"> 
                        <option value="Maths" selected>Maths</option> 
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

                </div>

                <div class="mt-4">
                    <x-label for="subject" :value="__('subject')"/>
                    <select name="dropdown"> 
                        <option value="Maths" selected>Maths</option> 
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
                </div>
            </fieldset>

            <br />
            <br />

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

            <br />
            <br />

            <fieldset> 
                <legend> Your Review: </legend>
                    <x-label for="hear-about" :value = "__('How did you hear about us?')" />   
                    <select name="referrer" id="hear-about">      
                        <option value="google">Google</option>      
                        <option value="friend">Friend</option>      
                        <option value="advert">Advert</option>      
                        <option value="others">Others</option>     
                    </select>

                    <br />
                    <br />

                    <p>You understand we will manage your admission service if successful at the end? </p>   

                    <div class = mt-4>
                        <label for="t&c">Do You?</label>       
                        <input id = t&c type="radio" name="rating" value="yes" /> 

                    </div>
            
                    <div class = mt-4>
                        <label for="comments">Got any comments on us?</label>
                        <br />
                        <textarea id="comments"></textarea> 
                    </div>
                       
                    
                    <div class = "mt-4">
                        <label for="subscribe">Sign me up for emails</label>     
                        <input id = subscribe type="checkbox" name="subscribe" checked="checked" /> 
                    </div>
               
            </fieldset>
            

        </fieldset>










            
           

            

           
            <a href='download.html' download />

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form> --}}
