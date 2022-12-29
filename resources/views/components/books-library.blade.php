<section
    class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
    @foreach($books as $book)
        <a href="/book/{{ $book->id }}">
            <div class="p-4 bg-gray-100 transition hover:bg-gray-300 rounded">
                <p>{{$book->author}}<span class="text-gray-500">｜出版社：{{$book->publisher}}</span></p>
                <h2 class="text-2xl">{{$book->name}}</h2>
            </div>
        </a>
    @endforeach
</section>
