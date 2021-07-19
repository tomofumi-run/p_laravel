<x-layout>
    <x-slot name="title">
        Bookers | {{ $book }}
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('books.index') }}">Back</a>
    </div>
    <h1>
        <span>{{ $book->title }}</span>
        <a href="{{ route('books.edit', $book) }}">編集する</a>
    </h1>
    <p>{!! nl2br(e($book->body)) !!}</p> <!--e()でHTML文字をエスケープ-->
</x-layout>
