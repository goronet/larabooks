<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;

class WelcomePageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $books = Book::query()
            ->with(['authors', 'genres', 'reviews'])
            ->withCount('reviews')
            ->withAvg('reviews', 'stars')
            ->orderByDesc('reviews_count')
            ->take(4)
            ->get();

        // DB::enableQueryLog();

        $reviews = Review::query()
            ->with(['book', 'user'])
            ->where('is_approved', '=', 1)
            ->where('stars', '=', 5)
            ->get()
            ->random(4);

        // dd(DB::getQueryLog());

        return view('welcome', compact('books', 'reviews'));
    }
}
