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
        @foreach($authors as $author)
            <li>{{ $author['name'] }}</li>
            <li>{{ $author['photo'] }}</li>
            <li>{{ $author['bio'] }}</li>
        @endforeach
    </ul>
</body>
</html>
