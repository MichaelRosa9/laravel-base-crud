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
        <a href="{{ route('comics.index') }}"><< back</a>
        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary">EDIT</a>
      </div>
      
    </div>
  </section>

@endsection