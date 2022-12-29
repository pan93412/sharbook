<form action="{{ @route('book.search') }}" method="GET">
    <x-text-input name="q" class="block py-1 px-4 rounded-xl bg-gray-100"
                  placeholder="搜尋書籍與內容……" value="{{ $query }}" {{ $attributes }}/>
</form>
