<x-layout>
    <x-slot name="title">
        Bookers | {{ $book }}
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('books.index') }}">Back</a>
    </div>
    <h1>{{ $book }}</h1>
</x-layout>
