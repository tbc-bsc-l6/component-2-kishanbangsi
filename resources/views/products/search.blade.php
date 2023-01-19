<x-layout>
    <section class="h-full py-24 bg-gray-50">
        <h1 class="title-dark text-center">All Products</h1>
        <p class="text-center mt-2">Based on your search</p>
        <div class="grid grid-cols-1 gap-10 mt-20 px-20 md:grid-cols-2 lg:grid-cols-3">
            @unless ($products == null)
                @foreach ($products as $product)
                    <x-product-card :products='$product' />
                @endforeach
            @else
                <p>No products found...</p>
            @endunless
        </div>
        <div class="flex justify-center mt-16">
            {{ $products->links() }}
        </div>
    </section>
</x-layout>
