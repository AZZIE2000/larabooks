@extends('welcome')

@section('cards')

<div class="container">
  <div class="row">
  
    <div class="card mb-3 col-12" >
    <div class="row g-0">
      <div class="col-3">
        
        <img
        src="{{asset('storage/'.$book['imageLink'])}}"
        alt="Trendy Pants and Shoes"
        class="img-fluid rounded-start"
        />

      </div>
      <div class="col-md-9">
        <div class="">
          <div >
           
            {{-- <h1 data-mdb-toggle="dropdown" aria-expanded="false">...</h1> --}}
            <i data-mdb-toggle="dropdown" aria-expanded="false" class="fa-solid fa-ellipsis fa-4x float-end"></i>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item fs-5" href="/edit/{{$book['id']}}">edit</a></li>
              
              <li><a class="dropdown-item bg-danger text-dark fs-5" href="/del/{{$book['id']}}">Delete</a></li>
              </ul>
          </div>
        </div>
        <div class="card-body text-bold fa-2x">
          <h1 class="card-title ps-3 mb-4">{{$book['title']}}</h1>
          <ul class="list-group list-group-light list-group-small">
            <li class="list-group-item px-4">Author: {{$book['author']}}</li>
            <li class="list-group-item px-4">Country: {{$book['country']}}</li>
            <li class="list-group-item px-4">Language: {{$book['language']}}</li>
            <li class="list-group-item px-4">pages: {{$book['pages']}}</li>
            <li class="list-group-item px-4">Year: {{$book['year']}}</li>
        </ul>
    </div>
</div>
</div>

</div>

<a href="/"> <button class="btn p-4 bg-black text-white float-end">back to home page</button></a>
</div>

</div>

@endsection