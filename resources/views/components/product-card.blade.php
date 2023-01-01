@props(['products'])

<div class="col-span-3 flex flex-col py-4 px-6 items-center border border-gray-200 bg-white rounded-lg shadow-lg md:col-span-1">
    <img src="{{ asset('images/bookcover1.jpg') }}" alt="bookcover" class="my-5 w-36 h-56">
    <div class="text-center mx-2 px-1 border-t border-gray-300 lg:text-start">
        <h3 class="font-semibold text-xl text-center mt-5">{{ $products->title }}</h3>
        <p class="mt-3 mb-3">{{ Str::limit(strip_tags($products->description), 20) }}</p>
        <p class="font-semibold">Author: <span class="font-normal ml-2">{{ $products->fname }} {{ $products->sname }}</span></p>
        <p class="font-semibold my-1">Price: <span class="font-normal ml-2">${{ $products->price }}</span></p>
        <a href="{{ route('show', ['product' => $products->id]) }}" class="font-semibold hover:text-violet-500">View More ></a>
    </div>
</div>
