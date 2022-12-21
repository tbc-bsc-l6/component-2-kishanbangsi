<x-layout>
    <div class="flex flex-col justify-center items-center h-screen">
        <div class="w-1/2 mx-auto">
            <h1 class="font-bold text-5xl my-auto text-center md:text-left">Search between more than 1000+ open jobs.</h1>
            <p class="text-lg text-center mt-4">Find jobs, create trackable resumes and enrich your applications.</p>
        </div>
        <div class="w-1/2 mt-4">
            <form action="#" method="GET" class="flex flex-col">
                <label for="search" class="text-lg text-gray-500 font-semibold my-2">Search something</label>
                <input
                    type="text"
                    name="search"
                    placeholder="Title, category, tags..."
                    class="py-3 px-6 border border-gray-300 rounded-md focus:outline-stone-300"
                    required
                >
                <button type="submit" class="text-lg bg-violet-700 w-28 p-2 my-2 rounded-md text-white font-medium self-center md:self-end">Search</button>
            </form>
        </div>
    </div>

    <div class="flex flex-col h-screen border border-red-400">
        <div class="w-1/2 mx-auto text-stone-700 my-14">
            <h1 class="font-bold text-2xl my-auto text-center">Browse Job Categories</h1>
            <p class="text-lg text-center mt-3">Find a job according to your interests.</p>
        </div>
        <div class="w-full border border-blue-500">
            <div>
                
            </div>
        </div>
    </div>
</x-layout>
