@extends('nav')

@section('content')
<h1>Genres</h1>
<table class="table table-bordered table-genres">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($genres as $genre)
        <tr>
            <td>{{ $genre->name }}</td>
            <td>{{ $genre->description }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
