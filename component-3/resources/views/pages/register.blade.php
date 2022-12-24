<x-layout>
    <section class="flex flex-col justify-center h-screen px-14 lg:flex-row lg:justify-center lg:items-center">
        <div class="hidden lg:block">
            <img class="max-w-md my-auto" src="{{ asset('/img/register.jpg') }}" alt="register">
        </div>
        <div class="px-3 bg-indigo-700 rounded-md lg:w-3/6">
            <h1 class="font-bold text-xl text-white text-center mt-5 mb-2">Let's Get Started</h1>
            <p class="text-white text-center">Register and post your job to the world</p>
            <form action="/" method="POST" class="my-8 px-4">
                @csrf
                <div class="my-5">
                    <label for="name" class="block text-white my-1">Name</label>
                    <input type="text" name="name" id="name" placeholder="Name" class="text-white py-2 px-4 w-full bg-indigo-500 outline-none rounded-md required">
                </div>

                <x-authform />
                
                <div class="my-5">
                    <label for="confirm_password" class="block text-white my-1">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="text-white py-2 px-4 w-full bg-indigo-500 outline-none rounded-md required">
                </div>
                <button type="submit" class="font-semibold w-full py-2 px-4 mt-3 bg-white rounded-md hover:bg-gray-200 transition ease-in-out duration-500">Register</button>
            </form>
            <p class="text-center text-white mb-5">Already a member? <a href="{{ route('login') }}" class="underline">Login</a></p>
        </div>
    </section>
</x-layout>
