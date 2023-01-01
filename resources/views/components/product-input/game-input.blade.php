<div class="my-3">
    <label for="studio" class="block font-semibold text-gray-600">Studio</label>
    <input type="text" name="studio" id="studio" placeholder="Studio" value="{{ old('studio') }}" class="w-full input-class">
    @error('studio')<x-error :message="$message"/>@enderror
</div>
