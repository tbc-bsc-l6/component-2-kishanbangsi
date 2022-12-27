<x-layout>
    <section class="grid grid-cols-2 gap-8 py-32 px-10 h-screen border border-blue-500">
        <div class="col-span-2 text-center py-4 px-5 bg-white rounded-lg shadow-lg border border-gray-200 overflow-y-auto md:col-span-1">
            <h1 class="font-bold text-xl">Books</h1>
            <ul class="font-semibold space-y-6 mt-8">
            @foreach ($products as $product)
                @if ($product->product == 'book')
                <li class="list mytransition"><a href="{{ route('show', ['product' => $product->id]) }}">{{ $product->title }}</a></li>        
                @endif
            @endforeach
            </ul>
        </div>
        <div class="col-span-2 text-center py-4 px-5 bg-white rounded-lg shadow-lg border border-gray-200 overflow-y-auto md:col-span-1">
            <h1 class="font-bold text-xl">CDs</h1>
            <ul class="font-semibold space-y-6 mt-8">
                @foreach ($products as $product)
                    @if ($product->product == 'cd')
                    <li class="list mytransition"><a href="{{ route('show', ['product' => $product->id]) }}">{{ $product->title }}</a></li>        
                    @endif
                @endforeach
            </ul>
        </div>
    </section>
</x-layout>
