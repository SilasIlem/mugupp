<x-app-layout>
@section('imports')
<style>
    #container {
        height : 96vh;
        width : 97%;
        margin : 2vh auto;
        border-radius : 8px;
        background : var(--color-white);
    }

    #video {
        display : none;
    }
</style>
@endsection
    <div id="container">
        <div id = "uploader">
            <form action="">
                <label for="video">
                    Upload
                </label>
                <input multiple type="file" name="" id="video">
            </form>
        </div>
    </div>
</x-app-layout>