<x-app-layout>
@section('imports')
<link rel="stylesheet" href="{{ asset('css/notifications.css') }}">
@endsection

    <div id="container">
        <div id="notice-nav">
            <form action="">
                <select name="notice-filter" id="form-select">
                    <option value="all">All Notifications</option>
                    <option value="ans">Answers</option>
                    <option value="pip">People</option>
                    <option value="comment">Comments</option>
                    <option value="edit">Edits</option>
                    <option value="req">Requests</option>
                    <option value="other">Others</option>
                </select>
            </form>
            <div>
                <h2>Filter by Type</h2>
                <ul>
                
                    <li>
                        <h4>Answers</h4><input type="checkbox" name="ans" id="ans">
                    </li>
                    
                    <li>
                        <h4>People</h4><input type="checkbox" name="pip" id="pip">
                    </li>
                    
                    <li>
                        <h4>Comments</h4><input type="checkbox" name="comment" id="comment">
                    </li>
                    
                    <li>
                        <h4>Edits</h4><input type="checkbox" name="edit" id="edit">
                    </li>
                    
                    <li>
                        <h4>Requests</h4><input type="checkbox" name="req" id="req">
                    </li>
                    
                    <li>
                        <h4>Others</h4><input type="checkbox" name="other" id="other">
                    </li>
    
                </ul>
            </div>
           
        </div>

        <div id="notifications">
            <input type="text" placeholder = "Search for notification">
            <h2 id = "notifications-category">All Notifications</h2>

            <div>
                <ul id = "notes">
             
                </ul>
            </div>
        </div>
        
        <div id = "notice-board">
            <div id = "notice">
                <div>
                    <h1>The Notice Board.</h1>
                    <p>General Announcements Go Here.</p>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
    <script>
        notes = document.getElementById('notes');
        $.ajax({
            url : "/unread-notifications",
            method : "GET",
            success : (data) => {
                console.log(data);
                data.forEach(e => {
                    notes.innerHTML += `
                        <li>
                            <span>${e.text[0].toUpperCase()}</span>
                            <div>
                                <p>${e.text}</p>
                                <small>${e.updated_at}</small>
                            </div>
                        </li>
                    `;
                });
            }
        })
    </script>
    @endsection
    
</x-app-layout>