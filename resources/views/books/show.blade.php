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
        <form method="post" action="{{ route('books.destroy', $book) }}" id="delete_post">
            @method('DELETE')
            @csrf
            <button class="btn">削除する</button>
        </form>
    </h1>
    <p>{!! nl2br(e($book->body)) !!}</p> <!--e()でHTML文字をエスケープ-->

    <script>
        'use strict';
        {
            document.getElementById('delete_post').addEventListener('submit', e=>{
                e.preventDefault();
                if (!confirm('本当に削除しますか？')){
                    return;
                }

                e.target.submit();
            });
        }
    </script>
</x-layout>
