<x-layout>
    <section class="py-32 px-10 border border-blue-500">
        <div class="w-1/2 text-center py-6 px-5 mx-auto bg-white rounded-lg shadow-lg border border-gray-200 overflow-y-auto md:col-span-1">
            <h1 class="font-bold text-xl">Book</h1>
            <div class="font-semibold space-y-3 mt-8 my-10">
                <h1 class="font-semibold text-xl">Crime and Punishment</h1>
                <p>Firstname - Surname</p>
                <p>Price</p>
                <p>IT</p>
            </div>
            <div class="flex justify-between">
                <a href="#" class="btn mytransition">Update</a>
                <form action="#" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn mytransition">Delete</button>
                </form>
            </div>
        </div>
    </section>    
</x-layout>
