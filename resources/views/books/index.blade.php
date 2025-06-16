<x-app-layout>



        <h1>Books</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary">Create a book</a>

        <ul class="book-list">
            @foreach($allBooks as $book)
                <li>
                    <article class="book-item">
                        <h2>{{ $book->title }}</h2>

                          <h2>{{$book->label}}</h2>
                        <img src="{{ \Storage::url($book->path) }}">

                        <div class="actions">
                            <a href="{{ route('books.show', $book) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Edit</a>
                        </div>


                        <form action="{{ route('books.destroy', $book) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </article>
                </li>
            @endforeach
        </ul>
  

    <style>
        .alert {
            padding: 10px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin: 4px 2px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            font-size: 0.9rem;
        }
        .btn-primary { background-color: #007bff; color: white; }
        .btn-info { background-color: #17a2b8; color: white; }
        .btn-warning { background-color: #ffc107; color: black; }
        .btn-danger { background-color: #dc3545; color: white; border: none; }
        .book-list {
            list-style-type: none;
            padding-left: 0;
        }
        .book-item {
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
            border-radius: 6px;
        }
        .actions {
            margin-bottom: 8px;
        }
        form {
            display: inline;
        }
    </style>
</x-app-layout>
