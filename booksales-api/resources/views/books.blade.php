<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP Booksales</title>
</head>
<body>
    <h1>Data Author Buku</h1>
    <ul>
        @foreach($books as $book)
            <li>{{ $book['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>