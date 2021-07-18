<x-layout>
    <x-slot name="title">
        Bookers | Laravel
    </x-slot>
    <h1>
        <span>Laravel Bookers</span>
        <a href="{{ route('books.create') }}">[新規投稿]</a>
    </h1>
        <p>Laravelを使ったBookersです</p>
        <ul>
            @forelse ($books as $book)
                <li>
                    <a href="{{ route('books.show', $book) }}">
                        {{ $book->title }}
                    </a>
                </li>
            @empty
                <li>本がありません。</li>
            @endforelse
        </ul>
</x-layout>
