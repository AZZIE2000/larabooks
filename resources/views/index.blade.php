
@extends('welcome')

@section('cards')

<div class="container">
  <div class="row">
  
    @foreach ($books as $book)
    <div class="card mb-3 col-lg-4 col-md-6 col-sm-12" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <a href="show/{{$book['id']}}">
        <img
        src="{{asset('storage/'.$book['imageLink'])}}"
        alt="image"
        class="img-fluid rounded-start lazy my-1 "
        data-mdb-lazy-src
        />
      </a>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$book['title']}}</h5>
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
  
  
  @endforeach
</div>

</div>

@endsection