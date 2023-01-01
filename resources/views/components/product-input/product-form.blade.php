<div class="mb-8">
    <label for="category_id" class="font-semibold mr-2">Product Type: </label>
    <select name="category_id" id="product" class="border border-gray-300 rounded-md outline-none">
        <option value="1">Book</option>
        <option value="2">Game</option>
        <option value="3">CD</option>
    </select>
</div>

<div class="my-3">
    <label for="title" class="block font-semibold text-gray-600">Title</label>
    <input type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}" class="w-full input-class" required>
    @error('title')<x-error :message="$message"/>@enderror
</div>

<x-product-input.book-input />
<x-product-input.cd-input />
<x-product-input.game-input />

<x-product-input.page-input />
<x-product-input.playlength-input />

<div class="my-3">
    <label for="price" class="block font-semibold text-gray-600">Price</label>
    <input type="number" name="price" id="price" placeholder="Price (in dollars)" value="{{ old('price') }}" class="w-full input-class" required>
    @error('price')<x-error :message="$message"/>@enderror
</div>

<div class="my-3">
    <label for="description" class="block font-semibold text-gray-600">Description</label>
    <textarea type="text" name="description" id="description" placeholder="Description" class="w-full input-class">{{ old('description') }}</textarea>
    @error('description')<x-error :message="$message"/>@enderror
</div>

<div class="my-3">
    <label for="image" class="block font-semibold text-gray-600">Image</label>
    <input type="file" name="image" id="image" class="mt-2">
    @error('image')<x-error :message="$message"/>@enderror
</div>

<div class="mt-8">
    <button type="submit" class="btn mb-4 md:mb-0">Create</button>
    <a href="{{ route('index') }}" class="btn">Cancel</a>
</div>
