@extends('layouts.main')

@section('content')
  <div class="container">
    <h1>New Comic</h1>
    <div class="row col-8 offset-2">
      <form action="{{ route('comics.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="mb-3">
          <label for="title" class="form-label">Name Comic</label>
          <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" id="series" name="series" class="form-control">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" id="description" cols="30" rows="10" class="form-control" rows="7"></textarea>
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <select name="type" id="type">
            <option value="comic-book">comic book</option>
            <option value="graphic-novel">graphic novel</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label">Release date</label>
          <input type="date" id="sale_date" name="sale_date">
        </div>

        <div class="mb-3">
          <label for="thumbnail" class="form-label">Thumbnail</label>
          <input type="text" id="thumbnail" name="thumbnail" class="form-control">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" id="price" name="price" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
    </div>
  </div>  

@endsection