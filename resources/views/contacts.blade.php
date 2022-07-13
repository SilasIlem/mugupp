<x-app-layout>
@section('imports')
<link rel="stylesheet" href="{{ asset('css/contacts.css') }}">
@endsection
    <div id = "container">
        <h1>My Contacts</h1>

        <div id = "contacts">
            <div id="fav-contacts">
                <img src="{{ asset('storage/prof-pics/' . Auth::user()->user_pic)}}" alt="">
            </div>
            <input type="search" name="" placeholder = "Search for Contact" id="">

            <div id="recently">
                <h1>Recently Contacted</h1>
                
                    <!--<li> Auth::user()->recent_contacts</li>-->
                <p>Danielle Naruto</p>
                
            </div>

            <div>
                <h1>All Contacts</h1>
                @php
                $n = 0;
                $letter = 'a';
                @endphp
                @foreach(Auth::user()->contacts->sortBy('name') as $contact)
                @if(strtolower(substr($contact->name, 0, 1)) == $letter)
                @if($n == 0)
                <h2>{{ $letter }}</h2>
                <p> {{ $contact->name }} </p>
                @php
                    $n = 1
                @endphp
                @else
                <p> {{ $contact->name }} </p>
                @endif
                @else
                @php
                    $letter = strtolower(substr($contact->name, 0, 1));
                    $n = 0;
                @endphp    
                <h2>{{ $letter }}</h2>
                <p> {{ $contact->name }} </p>
                @php
                    $n = 1
                @endphp
                @endif
                @endforeach
            </div>

        </div>

        <div id = "message-box">
            <div id = "message-container">
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                <div class="left">
                    <p>Hi!</p>
                </div>
                
                <div class="right">
                    <p>Hello!</p>
                </div>
                
            </div>
            <form action="">
                <input type="text" name="" id="" />
            </form>
        </div>

        <div id = "contact-view">
            <div id = "contact-img">
                <img src="{{ asset('storage/prof-pics/' . Auth::user()->user_pic)}}" alt="">

                <h2>{{ Auth::user()->name }}</h2>
            </div>

            <div id = "contact-recents">
                <p>Last Seen: 7th June, 2022</p>
            </div>

            <div id="contact-bottom">
                height
            </div>
        </div>

    </div>
   
</x-app-layout>