<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Bookers | Laravel</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Laravel Bookers</h1>
        <p>Laravelを使ったBookersです</p>
        <ul>
            @forelse ($books as $index => $book)
                <li>
                    <a href="{{ route('books.show', $index) }}">
                        {{ $book }}
                    </a>
                </li>
            @empty
                <li>本がありません。</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
