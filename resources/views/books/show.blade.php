<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Bookers | Laravel</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="back-link">
            &laquo; <a href="{{ route('books.index') }}">Back</a>
        </div>
        <h1>{{ $book }}</h1>
    </div>
</body>
</html>
