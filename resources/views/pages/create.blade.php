<x-layout>
    <section class="py-28 px-10">
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" class="w-4/6 mx-auto py-10 px-6 bg-white rounded-lg shadow-md border border-gray-200">
            @csrf
            <h1 class="font-semibold text-xl text-center mb-4">Post a Product</h1>
            <div class="mb-8">
                <label for="category" class="font-semibold mr-2">Product Type: </label>
                <select name="category" id="category" class="border border-gray-300 rounded-md outline-none">
                    <option value="book">Book</option>
                    <option value="game">Game</option>
                    <option value="cd">CD</option>
                </select>
            </div>
            
            <div class="my-3">
                <label for="title" class="block font-semibold text-gray-600">Title</label>
                <input type="text" 
                    name="title" 
                    id="title" 
                    placeholder="Title" 
                    value="{{ old('title') }}" 
                    class="w-full input-class" 
                    required
                >
                @error('title')<x-error :message="$message"/>@enderror
            </div>
            
            <div class="my-3">
                <label for="author" class="block font-semibold text-gray-600">Author</label>
                <input 
                    type="text" 
                    name="author" 
                    id="author" 
                    placeholder="Author" 
                    value="{{ old('author') }}" 
                    class="w-full input-class"
                >
                @error('author')<x-error :message="$message"/>@enderror
            </div>

            <div class="my-3">
                <label for="band" class="block font-semibold text-gray-600">Band</label>
                <input 
                    type="text" 
                    name="band" 
                    id="band" 
                    placeholder="Band" 
                    value="{{ old('band') }}" 
                    class="w-full input-class"
                >
                @error('band')<x-error :message="$message"/>@enderror
            </div>

            <div class="my-3">
                <label for="studio" class="block font-semibold text-gray-600">Studio</label>
                <input 
                    type="text" 
                    name="studio" 
                    id="studio" 
                    placeholder="Studio" 
                    value="{{ old('studio') }}" 
                    class="w-full input-class"
                >
                @error('studio')<x-error :message="$message"/>@enderror
            </div>            
            
            <div class="my-3">
                <label for="pages" class="block font-semibold text-gray-600">Page</label>
                <input 
                    type="number" 
                    name="pages" 
                    id="pages" 
                    placeholder="No of pages" 
                    value="{{ old('pages') }}" 
                    class="w-full input-class"
                >
                @error('pages')<x-error :message="$message"/>@enderror
            </div>
            
            <div class="my-3">
                <label for="playlength" class="block font-semibold text-gray-600">Play length</label>
                <input 
                    type="number" 
                    name="playlength" 
                    id="playlength" 
                    placeholder="Play length (in min)" 
                    value="{{ old('playlength') }}" 
                    class="w-full input-class"
                >
                @error('playlength')<x-error :message="$message"/>@enderror
            </div>            
            
            <div class="my-3">
                <label for="price" class="block font-semibold text-gray-600">Price</label>
                <input 
                    type="number" 
                    name="price" 
                    id="price" 
                    placeholder="Price (in dollars)" 
                    value="{{ old('price') }}" 
                    class="w-full input-class" 
                    required
                >
                @error('price')<x-error :message="$message"/>@enderror
            </div>
            
            <div class="my-3">
                <label for="description" class="block font-semibold text-gray-600">Description</label>
                <textarea 
                    type="text" 
                    name="description" 
                    id="description" 
                    placeholder="Description" 
                    class="w-full input-class"
                >
                {{ old('description') }}
                </textarea>
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
        </form>
    </section>
</x-layout>
