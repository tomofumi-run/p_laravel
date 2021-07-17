<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Bookers | Laravel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Laravel Bookers</h1>
        <p>Laravelを使ったBookersです</p>
        <ul>
            @forelse ($books as $book)
                <li>{{ $book }}</li>
            @empty
                <li>No posts yet!</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
