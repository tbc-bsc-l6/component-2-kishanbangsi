<x-layout>
    <section class="h-screen py-16 px-10">
        <h1 class="title-dark text-center mb-10">Products</h1>
        <table class="w-full mx-auto">
            <thead class="border-b-2 border-gray-100">
                <tr>
                    <th class="py-4 text-xl text-gray-700">Title</th>
                    <th class="py-4 text-xl text-gray-700">Category</th>
                    <th class="py-4  text-xl text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="text-center py-2 font-semibold text-gray-600">{{ $product->title }}</td>
                    <td class="text-center py-2 font-semibold text-gray-600 capitalize">{{ $product->category }}</td>
                    <td class="text-center py-2">
                        <a 
                            href="{{ route('show', ['product' => $product->id]) }}" 
                            class="block my-1 py-2 px-4 bg-blue-500 rounded-md text-white lg:inline-block"
                        >Show</a>
                        <a 
                            href="{{ route('edit', ['product' => $product->id]) }}" 
                            class="block my-1 py-2 px-4 bg-green-500 rounded-md text-white lg:inline-block"
                        >Edit</a>
                        <form action="{{ route('delete', ['product' => $product->id]) }}" method="POST"  class="block my-1 py-2 px-4 bg-red-500 rounded-md text-white lg:inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-layout>