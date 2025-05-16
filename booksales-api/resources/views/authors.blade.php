@extends('nav')

@section('content')
<h1>Authors</h1>
<table class="table table-bordered table-authors">
    <thead>
        <tr>
            <th>Name</th>
            <th>Photo</th>
            <th>Bio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($authors as $author)
        <tr>
            <td>{{ $author->name }}</td>
            <td>{{ $author->photo }}</td>
            <td>{{ $author->bio }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
