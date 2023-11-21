<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }

    public function searchTopic(Request $request)
    {
        $keyword = $request->keyword;

        $topic = Book::where('title', '%'.$keyword.'%')
            ->orWhereHas('title', function($q) use($keyword) {
                $q->where('author', 'like', '%'.$keyword.'%');
            })
            ->orderBy('id', 'DESC')
            ->paginate(5);

        return view('pages.book.index', compact('topic'));
    }
}
