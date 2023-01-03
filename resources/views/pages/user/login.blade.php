<x-layout>
    <section class="h-screen py-24 px-20">
        <div class="flex justify-center">
            <div class="hidden md:block">
                <img src="images/login.jpg" alt="register" class="w-80 h-80">
            </div>
            <div class="w-full py-4 px-6 md:w-1/2">
                <h1 class="title-dark text-center">Login</h1>
                <form action="{{ route('user.auth') }}" method="POST" class="mt-4">
                    @csrf
                    <x-input />
                    <p>Don't have an account?<a href="{{ route('register') }}" class="link ml-2 underline">Create one</a></p>
                    <button type="submit" class="btn mt-3">Login</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>
