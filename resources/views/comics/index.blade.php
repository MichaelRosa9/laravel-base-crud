@extends('layouts.main')

@section('content')

<h1>Comics</h1>
<section>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th colspan="4">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
        <tr>
          <td>{{ $comic->id }}</td>
          <td>{{ $comic->title }}</td>
          <td>{{ $comic->type }}</td>
          <td>
            <a href="{{ route('comics.show', $comic) }}" class="btn btn-success">SHOW</a>
          </td>
          <td><a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary">EDIT</a></td>
          <td><form action="{{ route('comics.destroy', $comic) }}" method="POST">@csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
              DELETE
            </button>
          </form></td>
        </tr>  

      @endforeach
    </tbody>
  </table>
</section>

<section class="container">
  {{ $comics->links() }}
</section>
@endsection