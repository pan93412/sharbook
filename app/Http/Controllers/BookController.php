<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function details(Request $request, string $id)
    {
        $book = Book::whereId($id)->first();
        $uploader = $book?->user()->get(['name'])->first();
        $picture = $book->bookPictures()->get(['src', 'alt'])->first();

        // The information that should display on page.
        $info = [
            "販售者" => $uploader->name,
            "作者" => $book->author,
            "出版商" => $book->publisher,
            "出版日期" => $book->published_at->format("Y 年 m 月 d 日"),
            "ISBN" => $book->isbn,
            "書況" => $book->status->toLocalizedString(),
        ];

        return view("book.details", [
            "book" => $book,
            "uploader" => $uploader,
            "picture" => $picture,
            "bookInfo" => $info,
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->query("q");
        $lastId = $request->query("last") || '0';

        if (!is_string($query)) {
            return response(status: 400);
        }

        $found_books = Book::where("name", "LIKE", "%{$query}%")->forPageAfterId(lastId: $lastId)->get();

        return view("book.search", [
            'query' => $query,
            'books' => $found_books,
        ]);
    }
}
