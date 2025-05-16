<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2 Laravel Bookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9fb;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background-color: #0a192f;
        }

        .navbar-brand,
        .nav-link {
            color: #f1f1f1 !important;
        }

        .navbar .nav-link:hover {
            color: #87ceeb !important;
        }

        table {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }

        th {
            text-align: center;
            background-color:#cceeff!important;
            color: #3a3a3a;
        }

        td, th {
            vertical-align: middle;
        }

        h1 {
            margin-bottom: 20px;
            color: #2d2d44;
        }

        .table {
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Bookstore</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('books.index') }}" class="nav-link">Books</a></li>
                <li class="nav-item"><a href="{{ route('authors.index') }}" class="nav-link">Authors</a></li>
                <li class="nav-item"><a href="{{ route('genres.index') }}" class="nav-link">Genres</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>
