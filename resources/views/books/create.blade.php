<x-layout>
    <x-slot name="title">
        Add New Book | My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('books.index') }}">Back</a>
    </div>
    <h1>新規投稿ページ</h1>

    <form action="" method="post">
        @csrf {{-- トークン作成--}}
        <label>
            Title
            <input type="text" name="title">
        </label>
        <label>
            Body
            <textarea name="body"></textarea>
        </label>
        <button>投稿する</button>
    </form>
</x-layout>
