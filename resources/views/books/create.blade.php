<x-layout>
    <x-slot name="title">
        Add New Book | My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('books.index') }}">Back</a>
    </div>
    <h1>新規投稿ページ</h1>

    <form action="{{ route('books.store') }}" method="post">
        @csrf {{-- トークン作成--}}
        <div class="form-group">
            <label>
                Title
                <input type="text" name="title">
            </label>
        </div>
        <div class="form-group">
            <label>
                Body
                <textarea name="body"></textarea>
            </label>
        </div>
        <div class="form-button">
            <button>投稿する</button>
        </div>
    </form>
</x-layout>
