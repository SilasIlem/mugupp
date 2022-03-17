<x-app-layout>
    <style>

        #application {
            padding : 40px;
        }

        #application h1 {
            font-size : 24px;
            font-weight : bolder;
        }

        #application h4 {
            font-size : 20px;
            font-weight : bold;
            margin : 12px 0px;
        }

        #application button#apply-btn {
            height : 40px;
            width : 100px;
            margin : 80px auto;
            padding : 4px;
            color : white;
            box-shadow : 0px 0px 12px #07649f;
            font-size : 18px;
            background : #07649f;
        }
    </style>

    <div id = application>
        <h1>EDUCATION IS UP FOR GRABS!</h1>
        <h4>For Students & Everyone...</h4>
        <p>
            Applicants who turn out successful in this Admission and Scholarship Test programme with qualified documents gain admission into a local or 
            international university with tuition funds covered. 
            Our registration fee is affordable and open to students and aspiring students. 
        </p>
        <p>
            If you are applying as a foreign applicant, ensure that you follow the <a href="curriculum.html">Curriculum Guide</a> as our questions are based on each 
            country's curriculum.
        </p>
        
            <a href="{{ route('paypage') }}">
                <button id = 'apply-btn'>Apply</button>
            </a>    
        
        <p>Applying for this Admissions and Scholarship Test indicates you have  studied and agreed with our <a href="{{ Storage::url('docs/terms.txt')}}" download>Terms and Conditions.</a></p>
    </div>
    
   
</x-app-layout>