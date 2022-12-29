<?php

namespace App\View\Components;

use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class BooksLibrary extends Component
{
    /**
     * @var Collection|Book[]
     */
    public mixed $books;

    /**
     * Create a new component instance.
     *
     * @param Collection|Book[] $books
     * @return void
     */
    public function __construct(mixed $books)
    {
        $this->books = $books;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.books-library');
    }
}
