@extends('layouts.main')

@section('content')
  <section class="container">
    <div>
      <h1>
        {{$comic->title}}
      </h1>
    </div>
    <div>
      <span class="badge bg-primary">{{ $comic->type }}</span>
      <span>{{ $comic->sale_date }}</span>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="{{ $comic->thumbnail }}" alt="{{ $comic->title }}">
      </div>
      <div class="col-md-6">
        <p>
          {!! $comic->description !!}
        </p>
      </div>
    </div>
  </section>
@endsection