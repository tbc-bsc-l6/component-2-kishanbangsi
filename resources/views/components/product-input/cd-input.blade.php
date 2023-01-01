<div class="my-3">
    <label for="band" class="block font-semibold text-gray-600">Band</label>
    <input type="text" name="band" id="band" placeholder="Band" value="{{ old('band') }}" class="w-full input-class">
    @error('band')<x-error :message="$message"/>@enderror
</div>
