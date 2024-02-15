<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $books = Book::query()
            ->with(['authors', 'genres', 'reviews'])
            ->withAvg('reviews', 'stars')
            ->withCount('reviews')
            ->paginate(1);

        return view('books', compact('books'));
    }
}
