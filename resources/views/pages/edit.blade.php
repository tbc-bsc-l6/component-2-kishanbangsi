<x-layout>
    <section class="py-32 px-10">
        <form action="{{ route('update', ['product' => $product->id]) }}" method="POST" class="w-4/6 mx-auto py-10 px-6 bg-white rounded-lg shadow-md border border-gray-200">
            @csrf
            @method('put')
            <h1 class="font-semibold text-xl text-center mb-4">Update Product</h1>
            <div class="mb-8">
                <label for="product" class="font-semibold mr-2">Product Type: </label>
                <select name="product" id="product" class="border border-gray-300 rounded-md outline-none">
                    <option value="book">Book</option>
                    <option value="cd">CD</option>
                </select>
                @error('product')<x-error :message="$message"/>@enderror
            </div>
            <input type="text" name="title" id="title" placeholder="Title" value="{{ $product->title }}" class="input mytransition" required>
            @error('title')<x-error :message="$message"/>@enderror
            <input type="text" name="fname" id="fname" placeholder="Firstname (optional)" value="{{ $product->fname }}" class="input mytransition">
            @error('fname')<x-error :message="$message"/>@enderror
            <input type="text" name="sname" id="sname" placeholder="Surname/band" value="{{ $product->sname }}" class="input mytransition" required>
            @error('sname')<x-error :message="$message"/>@enderror
            <input type="number" name="price" id="price" placeholder="Price (in dollars)" value="{{ $product->price }}" class="input mytransition" required>
            @error('price')<x-error :message="$message"/>@enderror
            <input type="number" name="pages" id="pages" placeholder="Pages/playlength (in min)" value="{{ $product->pages }}" class="input mytransition" required>
            @error('pages')<x-error :message="$message"/>@enderror
            <button type="submit" class="btn mytransition">Update</button>
        </form>
    </section>
</x-layout>
