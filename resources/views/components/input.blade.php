<div class="mt-3">
    <label for="email" class="block">Email</label>
    <input type="email" name="email" id="email" placeholder="Email" class="w-full input-class" required>
    @error('email')
    <x-error :message={{ $message }}/>
    @enderror
</div>
<div class="mt-3">
    <label for="password" class="block">Password</label>
    <input type="password" name="password" id="password" placeholder="Password" class="w-full input-class" required>
    @error('password')
    <x-error :message={{ $message }}/>
    @enderror
</div>