<x-layout>
    <x-slot name="title">
        Bookers | Laravel
    </x-slot>
    <h1>Laravel Bookers</h1>
        <p>Laravelを使ったBookersです</p>
        <ul>
            @forelse ($books as $book)
                <li>
                    <a href="{{ route('books.show', $book->id) }}">
                        {{ $book->title }}
                    </a>
                </li>
            @empty
                <li>本がありません。</li>
            @endforelse
        </ul>
</x-layout>
