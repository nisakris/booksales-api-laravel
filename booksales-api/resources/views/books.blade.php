<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP Booksales</title>
</head>
<body>
    <h1>Data Buku</h1>
    <ul>
        @foreach($books as $book)
            <li>{{ $book['title'] }}</li>
            <li>{{ $book['description'] }}</li>
            <li>{{ $book['price'] }}</li>
            <li>{{ $book['stock'] }}</li>
            <li>{{ $book['cover_photo'] }}</li>
            <li>{{ $book['genre_id'] }}</li>
            <li>{{ $book['author_id'] }}</li>
        @endforeach
    </ul>
</body>
</html>
