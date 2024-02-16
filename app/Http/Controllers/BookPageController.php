<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Book $book)
    {
        $book->loadAvg('reviews', 'stars')
            ->loadCount('reviews');

//        dd($book);

        return view('books.show', compact('book'));
    }
}
