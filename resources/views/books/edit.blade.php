<x-layout>
    <x-slot name="title">
        Edit New Book | My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('books.show', $book) }}">Back</a>
    </div>
    <h1>投稿編集ページ</h1>

    <form action="{{ route('books.update', $book) }}" method="post">
        @method('PATCH') {{-- formはPATCH形式に対応されていないので別に記述 --}}
        @csrf
        <div class="form-group">
            <label>
                Title
                <input type="text" name="title", value="{{ old('title', $book->title) }}">
                {{-- oldに第2引数を設定することでedit画面に情報を入力してある状態とする --}}
            </label>
            @error('title')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>
                Body
                <textarea name="body">{{  old('body', $book->body) }}</textarea>
            </label>
            @error('body')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-button">
            <button>更新する</button>
        </div>
    </form>
</x-layout>
