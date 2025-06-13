<x-layout>

<h1>New book</h1>

<form action="{{route('books.store')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="title goes here" value="{{ old('title') }}" >
        @error('title')
           {{ $message }}
        @enderror
    <input type="text" name="author" placeholder="author goes here" value="{{ old('content') }}">
     @error('author')
           {{ $message }}
        @enderror
    <input type="date" name="released_at" placeholder="date goes here" value="{{ old('released_at') }}">
     @error('released_at')
           {{ $message }}
        @enderror
    <input type="submit" value="Create">
</form>
</x-layout>