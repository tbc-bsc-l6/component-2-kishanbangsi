<x-layout>
    <section class="h-full py-20">
        <h1 class="title-dark text-center">Categories</h1>
        <p class="text-center mt-2">Categories of our products</p>
        <div class="grid grid-cols-3 gap-10 mt-20 px-20">
            <div class="col-span-3 py-3 border border-gray-200 rounded-lg shadow-md md:col-span-1">
                <img src="{{ asset('icons/game.svg') }}" alt="game" class="mx-auto w-20 h-20" />
                <h2 class="text-center font-light mt-3">Games</h2>
            </div>
            <div class="col-span-3 py-3 border border-gray-200 rounded-lg shadow-md md:col-span-1">
                <img src="{{ asset('icons/cd.svg') }}" alt="cd" class="mx-auto w-20 h-20" />
                <h2 class="text-center font-light mt-3">CDs</h2>
            </div>
            <div class="col-span-3 py-3 border border-gray-200 rounded-lg shadow-md md:col-span-1">
                <img src="{{ asset('icons/book.svg') }}" alt="book" class="mx-auto w-20 h-20" />
                <h2 class="text-center font-light mt-3">Books</h2>
            </div>
        </div>
    </section>
</x-layout>
