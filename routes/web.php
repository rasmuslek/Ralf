<?php
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tere', function () {


    $book = book::find(1);

    $authorBooks = Author::withCount('books'->get());

    $author = Author::find(1);

    $authorBooks = $author-> books;

    $bookAuthor = $book ->author;


    return $bookAuthor;

});
