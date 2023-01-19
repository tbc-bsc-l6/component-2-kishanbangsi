<x-layout>
    <section class="py-32 px-10">
        <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST" class="w-4/6 mx-auto py-10 px-6 bg-white rounded-lg shadow-md border border-gray-200">
            @csrf
            @method('put')
            <h1 class="font-semibold text-xl text-center mb-4">Update User</h1>
            
            <div class="my-3">
                <label for="name" class="block font-semibold text-gray-600">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    placeholder="Name" 
                    value="{{ $user->name }}" 
                    class="w-full input-class" 
                    required
                >
                @error('name')<x-error :message="$message"/>@enderror
            </div>
            
            <div class="my-3">
                <label for="email" class="block font-semibold text-gray-600">Email</label>
                <input type="email" 
                    name="email" 
                    id="email" 
                    placeholder="Email" 
                    value="{{ $user->email }}" 
                    class="w-full input-class"
                >
                @error('email')<x-error :message="$message"/>@enderror
            </div>

            <div class="my-3">
                <label for="password" class="block font-semibold text-gray-600">Password</label>
                <input type="password" 
                    name="password" 
                    id="password" 
                    placeholder="Password" 
                    value="{{ old('password') }}" 
                    class="w-full input-class"
                >
                @error('password')<x-error :message="$message"/>@enderror
            </div>
            
            <div class="my-3">
                <label for="password_confirmation" class="block font-semibold text-gray-600">Confirm Password</label>
                <input type="password" 
                    name="password_confirmation" 
                    id="password_confirmation" 
                    placeholder="Confirm Password" 
                    value="{{ old('password_confirmation') }}" 
                    class="w-full input-class"
                >
                @error('password_confirmation')<x-error :message="$message"/>@enderror
            </div>
            
            <div class="mt-8">
                <button type="submit" class="btn mb-4 md:mb-0">Update</button>
                <a href="{{ route('product.index') }}" class="btn">Cancel</a>
            </div>
        </form>
    </section>
</x-layout>
