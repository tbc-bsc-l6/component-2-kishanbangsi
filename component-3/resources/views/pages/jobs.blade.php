<x-layout>
    <!-- Jobs List -->
    <section class="flex flex-col items-center h-full pb-14 bg-gray-50">
        <div class="mt-20 mb-14">
            <h1 class="font-bold text-3xl text-gray-600 text-center">
                Jobs for you
            </h1>
            <p class="text-center font-light text-gray-500">Find the perfect job for yourself.</p>
        </div>
        <div class="w-full">
            <form action="#" class="flex justify-center py-3">
                <input type="text" name="search" placeholder="Job Title, category, company, tags..." class="w-1/2 border border-gray-400 py-2 px-3 outline-none rounded-l-md focus:border-violet-800 transition ease-in-out duration-500" required>
                <button class="px-6 py-0 text-white bg-violet-600 hover:bg-violet-800 transition ease-in-out duration-500 rounded-r-md">
                    Search
                </button>
            </form>
        </div>
        <div class="flex flex-col w-full items-center mt-24">
            <!-- Job Card -->
            <div class="card">
                <div class="flex flex-col lg:flex-row justify-evenly items-center py-3 px-3 bg-white cursor-pointer">
                    <!-- Image -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-16 h-16 mx-auto my-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <h1 class="font-semibold text-xl text-center mx-4 text-gray-700">Web Developer</h1>
                    <p class="font-light text-center text-gray-500 mb-4 lg:mb-0">Web Technology Pvt Ltd</p>
                    <!-- Location -->
                    <p class="font-light text-center text-gray-500 mb-2 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        Dodge City, Louisiana
                    </p>
                    <!-- Salary -->
                    <p class="font-light text-center text-gray-500 mb-3 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        1000-1200/m
                    </p>
                    <!-- Tags -->
                    <div class="text-center space-x-2">
                        <div class="inline-block px-2 py-1 rounded-md text-xs text-green-800 bg-green-300">
                            Full Time
                        </div>
                        <div class="inline-block px-2 py-1 rounded-md text-xs text-blue-800 bg-blue-300">
                            Private
                        </div>
                    </div>
                </div>
                <div class="text-center py-6 px-8 bg-gray-50 border-t border-gray-300 lg:flex lg:justify-between">
                    <p class="text-light mb-2">Experience: <span class="text-gray-500 ml-2">2+ year</span></p>
                    <a href="#" class="text-light">Apply Now ></a>
                </div>
            </div>

            <div class="card">
                <div class="flex flex-col lg:flex-row justify-evenly items-center py-3 px-3 bg-white cursor-pointer">
                    <!-- Image -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-16 h-16 mx-auto my-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <h1 class="font-semibold text-xl text-center mx-4 text-gray-700">Web Developer</h1>
                    <p class="font-light text-center text-gray-500 mb-4 lg:mb-0">Web Technology Pvt Ltd</p>
                    <!-- Location -->
                    <p class="font-light text-center text-gray-500 mb-2 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        Dodge City, Louisiana
                    </p>
                    <!-- Salary -->
                    <p class="font-light text-center text-gray-500 mb-3 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        1000-1200/m
                    </p>
                    <!-- Tags -->
                    <div class="text-center space-x-2">
                        <div class="inline-block px-2 py-1 rounded-md text-xs text-green-800 bg-green-300">
                            Full Time
                        </div>
                        <div class="inline-block px-2 py-1 rounded-md text-xs text-blue-800 bg-blue-300">
                            Private
                        </div>
                    </div>
                </div>
                <div class="text-center py-6 px-8 bg-gray-50 border-t border-gray-300 lg:flex lg:justify-between">
                    <p class="text-light mb-2">Experience: <span class="text-gray-500 ml-2">2+ year</span></p>
                    <a href="#" class="text-light">Apply Now ></a>
                </div>
            </div>

            <div class="card">
                <div class="flex flex-col lg:flex-row justify-evenly items-center py-3 px-3 bg-white cursor-pointer">
                    <!-- Image -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-16 h-16 mx-auto my-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <h1 class="font-semibold text-xl text-center mx-4 text-gray-700">Web Developer</h1>
                    <p class="font-light text-center text-gray-500 mb-4 lg:mb-0">Web Technology Pvt Ltd</p>
                    <!-- Location -->
                    <p class="font-light text-center text-gray-500 mb-2 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        Dodge City, Louisiana
                    </p>
                    <!-- Salary -->
                    <p class="font-light text-center text-gray-500 mb-3 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        1000-1200/m
                    </p>
                    <!-- Tags -->
                    <div class="text-center space-x-2">
                        <div class="inline-block px-2 py-1 rounded-md text-xs text-green-800 bg-green-300">
                            Full Time
                        </div>
                        <div class="inline-block px-2 py-1 rounded-md text-xs text-blue-800 bg-blue-300">
                            Private
                        </div>
                    </div>
                </div>
                <div class="text-center py-6 px-8 bg-gray-50 border-t border-gray-300 lg:flex lg:justify-between">
                    <p class="text-light mb-2">Experience: <span class="text-gray-500 ml-2">2+ year</span></p>
                    <a href="#" class="text-light">Apply Now ></a>
                </div>
            </div>
        </div>
    </section>
</x-layout>