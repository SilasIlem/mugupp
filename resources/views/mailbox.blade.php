<x-app-layout>
@section('imports')
<link rel="stylesheet" href="{{ asset('css/mailbox.css') }}">
@endsection
    <div id="container">
        <section id = "mail-nav">
            <div id = "mail-nav--top">
                <i class = "bi bi-caret-left-fill"></i>
                <p>Mail Box</p>
            </div>

            <button>
                <i class = "bi bi-envelope"></i>
                <span>Compose</span>
            </button>
           
            <ul>
                <li>
                    <i></i>
                    <p>Inbox</p>
                    <span>2</span>
                </li>
            </ul>

            <ul>
                <li>
                    <i class = "bi bi-circle"></i>
                    <p>Mugupp</p>
                </li>

                <li>
                    <i class = "bi bi-circle"></i>
                    <p>Tutor</p>
                </li>

                <li>
                    <i class = "bi bi-circle"></i>
                    <p>Academe</p>
                </li>

             
                <li>
                    <i class = "bi bi-circle"></i>
                    <p>Misc</p>
                </li>
            </ul>
            
            <div>
                <i class = "bi bi-circle"></i>
                <p>Settings</p>
            </div>
         
        </section>

        <section>
            <input type="search" placeholder = "Search">
        </section>

        <section>

        </section>
    </div>
</x-app-layout>
