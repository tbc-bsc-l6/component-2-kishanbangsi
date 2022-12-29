<div class="my-3">
    <label for="playlength" class="block font-semibold text-gray-600">Play length</label>
    <input type="number" name="playlength" id="playlength" placeholder="Play length (in min)" value="{{ old('playlength') }}" class="w-full input-class" required>
    @error('playlength')<x-error :message="$message"/>@enderror
</div>
