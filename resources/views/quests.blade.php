<x-app-layout>
   <link rel="stylesheet" href="">
    <div id = app>
        <div id = "container">
            <div id = "status">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

    </div>

    <script>

        var hidden, visibilityChange;

        if (typeof document.hidden !== 'undefined'){
            hidden = "hidden";
            visibilityChange = "visibilitychange";
        } else if (typeof document.msHidden !== 'undefined') {
            hidden = "msHidden";
            visibilityChange = "msvisibilitychage";
        } else if ( typeof document.webkitHidden !== 'undefined') {
            hidden = "webkitHidden";
            visibilityChange = "webkitvisibilitychange";
        }

        document.addEventListener('visibilitychange', () => {
            if (document.visibilityState !== 'visible'){
                document.history.back();
            }
            alert('bye');
        });
    
        window.addEventListener('onblur', () => {

            window.location.href = "localhost:8000";
            
            alert('bye');
        });

        if(document[hidden]) {
            alert("Don't try to cheat")
        }
    </script>
</x-app-layout>