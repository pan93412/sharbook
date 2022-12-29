<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchBar extends Component
{
    /**
     * 查詢字串
     *
     * @var string
     */
    public string $query;

    /**
     * Create a new component instance.
     *
     * @return void
     * @var
     */
    public function __construct()
    {
        $this->query = request()->query("q") ?? "";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search-bar');
    }
}
