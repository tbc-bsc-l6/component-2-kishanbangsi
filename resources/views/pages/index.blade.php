<x-layout>
    <section class="flex justify-center items-center h-screen">
        <div>
            <h1 class="heading-dark">Your one stop for everything</h1>
            <p class="text-gray-600 mt-3">Search and shop products in one place.</p>
            <form action="#" class="flex flex-col mt-10">
                <label for="search" class="font-bold text-gray-600 mt-3">Search for products</label>
                <input type="text" name="search" placeholder="Name, category, tags..." class="input-class" required>
                <button class="btn">Search</button>
            </form>
        </div>
    </section>

    <section class="flex flex-col justify-content h-full py-24 px-10 ">
        <div class="text-center">
            <h1 class="title-dark">Featured Products</h1>
            <p class="text-gray-600 mt-3">Our featured products</p>
        </div>
        <div class="grid grid-cols-1 gap-10 mt-14 md:grid-cols-2 lg:grid-cols-3">
            <x-card/>
            <x-card/>
            <x-card/>
        </div>
    </section>
</x-layout>
