@extends('nav')

@section('content')
<h1>Books</h1>
<table class="table table-bordered table-books">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Genre</th>
            <th>Author</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->description }}</td>
            <td>Rp{{ number_format($book->price, 0, ',', '.') }}</td>
            <td>{{ $book->stock }}</td>
            <td>{{ $book->genre->name ?? 'N/A' }}</td>
            <td>{{ $book->author->name ?? 'N/A' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
