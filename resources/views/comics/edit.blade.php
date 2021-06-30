@extends('layouts.main')

@section('content')
  <div class="container">
    <h1>Edit: <a href="{{ route('comics.show', $comic) }}">{{ $comic->title }}</a></h1>
    <div class="row col-8 offset-2">
      <form action="{{ route('comics.update', $comic) }}" method="post">
        @csrf
        @method('PATCH')

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" id="title" name="title" class="form-control" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" id="series" name="series" class="form-control" value="{{ $comic->series }}">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" id="description" cols="30" rows="10" class="form-control" rows="7">{{ $comic->description }}</textarea>
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <select name="type" id="type">
            <option value="comic book" @if($comic->type === 'comic book') selected @endif>comic book</option>
            <option value="graphic novel"@if($comic->type === 'graphic novel') selected @endif>graphic novel</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label">Release Date</label>
          <input type="date" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <div class="mb-3">
          <label for="thumbnail" class="form-label">Thumbnail</label>
          <input type="text" id="thumbnail" name="thumbnail" class="form-control" value="{{ $comic->thumbnail }}">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" id="price" name="price" class="form-control" value="{{ $comic->price }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
    </div>
  </div>  

@endsection