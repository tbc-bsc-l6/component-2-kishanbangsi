<x-layout>
    <section class="flex flex-col justify-center h-screen px-14 lg:flex-row lg:justify-center lg:items-center">
        <div class="hidden lg:block">
            <img class="max-w-md my-auto" src="{{ asset('/img/login.jpg') }}" alt="login">
        </div>
        <div class="px-3 bg-indigo-700 rounded-md lg:w-3/6">
            <h1 class="font-bold text-xl text-white text-center mt-5 mb-2">Welcome Back!</h1>
            <p class="text-white text-center">Log in to continue to JobsFinder</p>
            <form action="/" method="POST" class="my-8 px-4">
                @csrf
                <x-authform />
                <button type="submit" class="font-semibold w-full py-2 px-4 mt-3 bg-white rounded-md hover:bg-gray-200 transition ease-in-out duration-500">Login</button>
            </form>
            <p class="text-center text-white mb-5">Don't have an account? <a href="{{ route('register') }}" class="underline">Register</a></p>
        </div>
    </section>
</x-layout>