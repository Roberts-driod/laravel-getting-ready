<h1>Edit book</h1>

<form action="{{route('books.update', $editBook)}}" method="post">
    @csrf
    @method('put')

    <input type="text" name="title" placeholder="title goes here" value="{{ old('title', $editBook->title) }}">
    @error("title")
    {{$message}}
    @enderror
    <input type="text" name="author" placeholder="author goes here" value="{{ old('author', $editBook->author) }}">
    @error('author')
    {{$message}}
    @enderror
    <input type="date" name="released_at" placeholder="date goes here" value="{{ old('released_at', $editBook->released_at) }}">
        @error('released_at')
    {{$message}}
    @enderror
    <input type="submit" value="Update">
</form>