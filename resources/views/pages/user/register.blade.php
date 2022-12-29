<x-layout>
    <section class="py-24 px-20">
        <div class="flex justify-center">
            <div class="hidden md:block">
                <img src="images/register.jpg" alt="register" class="w-80 h-80">
            </div>
            <div class="w-full py-4 px-6 md:w-1/2">
                <h1 class="title-dark text-center">Register</h1>
                <form action="#" method="POST" class="mt-4">
                    <div class="w-full mt-3">
                        <label for="name" class="block">Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" class="w-full input-class" required>
                        @error('name')
                        <x-error :message={{ $message }}/>
                        @enderror
                    </div>
                    <x-input />
                    <div class="mt-3">
                        <label for="password_confirmation" class="block">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="w-full input-class" required>
                        @error('password_confirmation')
                        <x-error :message={{ $message }}/>
                        @enderror
                    </div>
                    <p>Already have an account?<a href="#" class="link ml-2 underline">Login</a></p>
                    <button type="submit" class="btn mt-3">Register</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>
