<x-layout>
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
</x-layout>
