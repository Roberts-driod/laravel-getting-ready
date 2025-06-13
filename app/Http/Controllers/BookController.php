<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index',['allBooks' => $books] );
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        // $book = Book::create([
        //     'title' => $request['title'],
        //     'author' => $request['author'],
        //     'released_at' => $request['released_at'],
        // ])

         $validated = $request->validate([

        'title' => 'required|max:255',
        'author' => 'required|max:255',
        'released_at' => 'required',
    ]);

        Book::create($validated);
        return redirect(route('books.index'))->with('message','Book ir izveidots');
    }

    public function show(Book $book) {
        //$book = Book::find($id);
        return view('books.show', ['singleBook' => $book]);
    }

    public function destroy(Book $book) {
        //$book = Book::find($id);
        $book->delete();
          return redirect(route("books.index"))->with('message','Book ir dzēsts');
    }

    public function edit(Book $book) {
       // $book = Book::find($id);
        return view('books.edit', ['editBook' => $book] );
    }

    public function update(Request $request, Book $book) {
       // $book = Book::find($id);

      $validated = $request->validate([

        'title' => 'required|max:255',
        'author' => 'required|max:255',
        'released_at' => 'required',
    ]);

        $book->update($validated);

        return redirect(route('books.index'))->with('message','Book ir atjaunināts');
    }
}
