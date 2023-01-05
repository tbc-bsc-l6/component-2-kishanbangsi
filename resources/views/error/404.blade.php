<x-layout>
    <section class="h-screen">
        <div class="w-1/2 mx-auto my-10">
            <img src="{{ asset('images/404.png') }}" alt="404" class="mx-auto">
            <p class="text-center mt-10 font-semibold text-2xl">
                Looks like you are lost... 
                <a href="{{ route('product.index') }}" class="link underline">Go Home</a>
            </p>
        </div>
    </section>
</x-layout>