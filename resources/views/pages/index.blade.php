<x-layout>
    <section class="grid grid-cols-2 gap-8 py-32 px-10 h-screen border border-blue-500">
        <div class="col-span-2 text-center py-4 px-5 bg-white rounded-lg shadow-lg border border-gray-200 overflow-y-auto md:col-span-1">
            <h1 class="font-bold text-xl">Books</h1>
            <ul class="font-semibold space-y-6 mt-8">
                <li class="list mytransition"><a href="{{ route('show', ['id' => 1]) }}">Crime and Punishment</a></li>
                <li class="list mytransition"><a href="#">The Brothers Karamazov</a></li>
                <li class="list mytransition"><a href="#">Demons</a></li>
                <li class="list mytransition"><a href="#">IT</a></li>
            </ul>
        </div>
        <div class="col-span-2 text-center py-4 px-5 bg-white rounded-lg shadow-lg border border-gray-200 overflow-y-auto md:col-span-1">
            <h1 class="font-bold text-xl">CDs</h1>
            <ul class="font-semibold space-y-6 mt-8">
                <li class="list mytransition"><a href="#">Seeking Thrills</a></li>
                <li class="list mytransition"><a href="#">One Punch Man</a></li>
                <li class="list mytransition"><a href="#">Chainsaw Man</a></li>
                <li class="list mytransition"><a href="#">Interstellar</a></li>
            </ul>
        </div>
    </section>
</x-layout>
