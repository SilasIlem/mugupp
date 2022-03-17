<style>
    *::-webkit-scrollbar-thumb {
        background : #07649f;
    }

    *::-webkit-scrollbar {
        width : 4px;
    }

    @media screen and (max-width : 764px) {
        .card {
            max-width : 80vw;
            margin : auto;
        }  
    }

    @media screen and (min-width : 764px) {
        .card {
            max-width : 600px;
        }
    }
    
</style>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full card mt-6 px-4 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
