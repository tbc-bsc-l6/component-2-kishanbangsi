<div class="my-3">
    <label for="pages" class="block font-semibold text-gray-600">Page</label>
    <input type="number" name="pages" id="pages" placeholder="No of pages" value="{{ old('pages') }}" class="w-full input-class">
    @error('pages')<x-error :message="$message"/>@enderror
</div>
