@if(session('message'))
        {{ session('message') }}
@endif

<h1>Books</h1>
<a href="{{route('books.create')}}">Create a book</a>
<ul>
    @foreach($allBooks as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <div>
                <a href="{{route('books.show' , $book)}}">Show</a>
                <a href="{{route('books.edit' , $book)}}">Edit</a>
            </div>
            <form action="{{route('books.destroy' , $book)}}" method="POST">
               @csrf
               @method('delete')
               <button type='submit'>Delete</button>
            </form>
        </li>
    @endforeach
</ul>