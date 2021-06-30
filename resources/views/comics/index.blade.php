@extends('layouts.main')

@section('content')

<h1>Comics</h1>
<section>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
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
          <td>EDIT</td>
          <td>DELETE</td>
        </tr>  

      @endforeach
    </tbody>
  </table>
</section>

<section class="container">
  {{ $comics->links() }}
</section>
@endsection