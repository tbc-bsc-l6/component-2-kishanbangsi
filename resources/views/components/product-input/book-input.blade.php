<div class="my-3">
    <label for="author" class="block font-semibold text-gray-600">Author</label>
    <input type="text" name="author" id="author" placeholder="Author" value="{{ old('author') }}" class="w-full input-class" required>
    @error('author')<x-error :message="$message"/>@enderror
</div>
