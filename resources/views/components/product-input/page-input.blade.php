<div class="my-3">
    <label for="page" class="block font-semibold text-gray-600">Page</label>
    <input type="number" name="page" id="page" placeholder="No of pages" value="{{ old('page') }}" class="w-full input-class" required>
    @error('page')<x-error :message="$message"/>@enderror
</div>
