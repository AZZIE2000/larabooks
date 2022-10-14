@if (session()-> has('message'))
    <div class="fixed top-0">
        <p class="bg-danger p-5 text-white">{{session('message')}}</p>
    </div>
@endif