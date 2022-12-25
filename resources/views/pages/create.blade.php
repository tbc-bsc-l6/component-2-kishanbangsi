<x-layout>
    <section class="py-32 px-10">
        <form action="#" method="POST" class="w-4/6 mx-auto py-10 px-6 bg-white rounded-lg shadow-md border border-gray-200">
            @csrf
            <h1 class="font-semibold text-xl text-center mb-4">Create a Product</h1>
            <div class="mb-8">
                <label for="product" class="font-semibold mr-2">Product Type: </label>
                <select name="product" id="product" class="border border-gray-300 rounded-md outline-none">
                    <option value="book">Book</option>
                    <option value="cd">CD</option>
                </select>
            </div>
            <input type="text" name="title" id="title" placeholder="Title" class="input mytransition" required>
            <input type="text" name="fname" id="fname" placeholder="Firstname (optional)" class="input mytransition">
            <input type="text" name="sname" id="sname" placeholder="Surname/band" class="input mytransition" required>
            <input type="number" name="price" id="price" placeholder="Price (in dollars)" class="input mytransition" required>
            <input type="number" name="pages" id="pages" placeholder="Pages/playlength (in sec)" class="input mytransition">
            <button type="submit" class="btn mytransition">Create</button>
        </form>
    </section>
</x-layout>
