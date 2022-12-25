<x-layout>
    <section class="py-32 px-10 border border-blue-500">
        <div class="w-1/2 text-center py-6 px-5 mx-auto bg-white rounded-lg shadow-lg border border-gray-200 overflow-y-auto md:col-span-1">
            <h1 class="font-bold text-xl">Book</h1>
            <div class="font-semibold space-y-3 mt-8 my-10">
                <h1 class="font-semibold text-xl">Title: {{ $product->title }}</h1>
                <p>Author: {{ $product->fname }} {{ $product->sname }}</p>
                <p>Price: ${{ $product->price }}</p>
                @if ($product->product == 'book')
                <p>Pages: {{ $product->pages }}</p>
                @else
                <p>Playlength: {{ $product->pages }}</p>
                @endif
            </div>
            <div class="flex justify-between">
                <a href="{{ route('edit', ['product' => $product->id]) }}" class="btn mytransition">Update</a>
                <form action="{{ route('delete', ['product' => $product->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn mytransition">Delete</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>
