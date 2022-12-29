<x-layout>
    <section class="py-28 px-10">
        <form action="{{ route('store') }}" method="POST" class="w-4/6 mx-auto py-10 px-6 bg-white rounded-lg shadow-md border border-gray-200">
            @csrf
            <h1 class="font-semibold text-xl text-center mb-4">Post a Product</h1>
            <x-product-input.product-form />
        </form>
    </section>
</x-layout>
