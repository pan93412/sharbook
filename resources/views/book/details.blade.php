<x-general-layout>
    <main class="space-y-12">
        <header class="flex flex-col md:flex-row gap-12 items-center justify-center">
            <div class="pictures">
                <img class="pictures block rounded-2xl" src="{{ $picture->src }}" alt="{{ $picture->alt }}">
            </div>
            <article class="info space-y-2">
                <header>
                    @if ($book->brief)
                        <div class="brief font-light">{{ $book->brief }}</div>
                    @endif
                    <h1 class="text-3xl font-bold">{{ $book->name }}</h1>
                </header>
                <hr>
                <table class="border-separate border-spacing-2 text-left">
                    @foreach($bookInfo as $key => $value)
                        @if ($value)
                            <tr>
                                <th>{{ $key }}</th>
                                <td>{{ $value }}</td>
                            </tr>
                        @endif
                    @endforeach
                </table>
                <x-primary-button>聯絡販賣者</x-primary-button>
            </article>
        </header>
        <article class="grid grid-cols-1 md:grid-cols-5 mt-4 gap-8">
            <section class="col-span-3">
                {{ $book->description ?? "" }}
            </section>
            <section class="col-span-2">
                <h2 class="text-2xl font-bold mb-4">販售形式</h2>
                <ul class="list-decoration-none">
                    @foreach($book->pricings()->get(['type', 'price']) as $price)
                        <li class="bg-gray-100 flex mb-2 py-2 px-6 justify-between rounded-lg">
                            <div>{{$price->type}}</div>
                            <div>NTD$<strong>{{number_format($price->price)}}</strong></div>
                        </li>
                    @endforeach
                </ul>
            </section>
        </article>
    </main>
</x-general-layout>
