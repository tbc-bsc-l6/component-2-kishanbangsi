<x-layout>
    <section class="py-32 px-10">
        <div class="w-1/2 text-center py-6 px-5 mx-auto bg-white rounded-lg shadow-lg border border-gray-200 overflow-y-auto md:col-span-1">
            <img 
                src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/default1.jpg') }}" 
                alt="product" class="my-5 mx-auto w-auto h-56"
            >
            <div class="font-semibold space-y-3 mt-8 my-10">
                <h1 class="font-semibold text-xl">Title: <span class="font-light">{{ $product->title }}</span></h1>

                @if ($product->category == 'book')
                    <p>Author: <span class="font-light">{{ $product->author}}</span></p>
                @elseif($product->category == 'game')
                    <p>Studio: <span class="font-light">{{ $product->studio}}</span></p>
                @else
                    <p>Band: <span class="font-light">{{ $product->band}}</span></p>
                @endif

                <p>Price: <span class="font-light">${{ $product->price }}</span></p>

                @if ($product->category == 'book')
                    <p>Pages: <span class="font-light">{{ $product->pages }}</span></p>
                @else
                    <p>Playlength: <span class="font-light">{{ $product->playlength }} min</span></p>
                @endif

                <p>Description: <span class="font-light">{{ $product->description }}</span></p>
            </div>
            @can('modify-product', $product)
                <div class="flex justify-between">
                    <a href="{{ route('product.edit', ['product' => $product->id]) }}" class="btn mytransition">Update</a>
                    <form action="{{ route('product.delete', ['product' => $product->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn mytransition">Delete</button>
                    </form>
                </div>
            @endcan
        </div>
    </section>
</x-layout>
