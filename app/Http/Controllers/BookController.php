<?php

namespace App\Http\Controllers;

use App\Models\Book as Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function details(Request $request, string $id)
    {
        return view("book.details", [
            "book" => Book::whereId($id)->first(),
        ]);
    }
}
