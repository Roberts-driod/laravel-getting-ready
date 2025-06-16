<x-app-layout>

<h1>New book</h1>

<form action="{{route('books.store')}}" method="post"  enctype="multipart/form-data">
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

        <h3>new image</h3>
        <input type="file" name="image">
        <input type="text" name="label" placeholder="label">

        <button type="submit"> Create </button>

</form>

        
       


 

</x-app-layout>