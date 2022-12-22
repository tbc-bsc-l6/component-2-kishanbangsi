<x-layout>
    {{-- Home Section --}}
    <section class="flex justify-center items-center h-screen bg-gradient-to-r from-violet-600 to-indigo-800">
        <div class="flex flex-col items-center">
            <div class="w-4/6">
                <h1 class="font-bold text-3xl text-gray-50">Search between more than 1000+ jobs worldwide.</h1>
                <p class="text-gray-200 mt-3">Find jobs, create trackable resumes and enrich your applications.</p>
            
                <form action="#" class="flex flex-col mt-4">
                    <label for="search" class="font-bold text-gray-200 mt-3">Search for jobs</label>
                    <input type="text" name="search" placeholder="Title, category, company..." class="border border-gray-400 my-2 py-2 px-3 outline-none rounded-md" required>
                    <button class="btn">Find Job</button>
                </form>
            </div>
        </div>
    </section>

    {{-- Categories --}}
    <section class="flex flex-col items-center sm:h-full lg:h-screen">
        <div class="mt-20 mb-14">
            <h1 class="font-bold text-3xl text-gray-600 text-center">Browse Job Categories</h1>
            <p class="text-center font-light text-gray-500">Post a job to tell us about your project.</p>
        </div>
        <div class="grid grid-cols-4 gap-5 my-10 text-center md:gap-10">
            <div class="category">
                <img src="./img/icons/it.svg" alt="screen" class="w-12 h-12 mx-auto my-1"></img>
                <h3 class="font-semibold text-gray-700">IT & Software</h3>
                <p class="font-light text-gray-500">100 Jobs</p>
            </div>

            <div class="category">
                <img src="./img/icons/building.svg" alt="building" class="w-12 h-12 mx-auto my-1">
                <h3 class="font-semibold text-gray-700">Construction</h3>
                <p class="font-light text-gray-500">30 Jobs</p>
            </div>

            <div class="category">
                <img src="./img/icons/person.svg" alt="building" class="w-12 h-12 mx-auto my-1">
                <h3 class="font-semibold text-gray-700">Construction</h3>
                <p class="font-light text-gray-500">30 Jobs</p>
            </div>

            <div class="category">
                <img src="./img/icons/image.svg" alt="image" class="w-12 h-12 mx-auto my-1">
                <h3 class="font-semibold text-gray-700">Design & Multimedia</h3>
                <p class="font-light text-gray-500">34 Jobs</p>
            </div>

            <div class="category">
                <img src="./img/icons/it.svg" alt="screen" class="w-12 h-12 mx-auto my-1">
                <h3 class="font-semibold text-gray-700">IT & Software</h3>
                <p class="font-light text-gray-500">100 Jobs</p>
            </div>

            <div class="category">
                <img src="./img/icons/building.svg" alt="building" class="w-12 h-12 mx-auto my-1">
                <h3 class="font-semibold text-gray-700">Construction</h3>
                <p class="font-light text-gray-500">30 Jobs</p>
            </div>

            <div class="category">
                <img src="./img/icons/image.svg" alt="person" class="w-12 h-12 mx-auto my-1">
                <h3 class="font-semibold text-gray-700">Construction</h3>
                <p class="font-light text-gray-500">30 Jobs</p>
            </div>

            <div class="category">
                <img src="./img/icons/image.svg" alt="image" class="w-12 h-12 mx-auto my-1">
                <h3 class="font-semibold text-gray-700">Design & Multimedia</h3>
                <p class="font-light text-gray-500">34 Jobs</p>
            </div>
        </div>
        <button class="btn my-6">
            Browse All Categories
        </button>
    </section>

    {{-- Jobs --}}
    <section class="flex flex-col items-center h-full pb-14 bg-gray-50">
        <div class="mt-20 mb-14">
            <h1 class="font-bold text-3xl text-gray-600 text-center">
                Jobs for you
            </h1>
            <p class="text-center font-light text-gray-500">Find the perfect job for yourself.</p>
        </div>
        <div class="flex space-x-4 p-1 justify-evenly bg-white border border-gray-200 rounded-lg shadow-md">
            <a href="#" class="btn-white">Recent Jobs</a>
            <a href="#" class="btn-white">Part Time</a>
            <a href="#" class="btn-white">Full Time</a>
        </div>
        <div class="flex flex-col w-full items-center mt-24">
            {{-- Job Card --}}
            <div class="card">
                <div class="flex flex-col lg:flex-row justify-evenly items-center py-3 px-3 bg-white cursor-pointer">
                    {{-- Image --}}
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-16 h-16 mx-auto my-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <h1 class="font-semibold text-xl text-center mx-4 text-gray-700">Web Developer</h1>
                    <p class="font-light text-center text-gray-500 mb-4 lg:mb-0">Web Technology Pvt Ltd</p>
                    {{-- Location --}}
                    <p class="font-light text-center text-gray-500 mb-2 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        Dodge City, Louisiana
                    </p>
                    {{-- Salary --}}
                    <p class="font-light text-center text-gray-500 mb-3 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        1000-1200/m
                    </p>
                    {{-- Tags --}}
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
                    {{-- Image --}}
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-16 h-16 mx-auto my-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <h1 class="font-semibold text-xl text-center mx-4 text-gray-700">Web Developer</h1>
                    <p class="font-light text-center text-gray-500 mb-4 lg:mb-0">Web Technology Pvt Ltd</p>
                    {{-- Location --}}
                    <p class="font-light text-center text-gray-500 mb-2 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        Dodge City, Louisiana
                    </p>
                    {{-- Salary --}}
                    <p class="font-light text-center text-gray-500 mb-3 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        1000-1200/m
                    </p>
                    {{-- Tags --}}
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
                    {{-- Image --}}
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-16 h-16 mx-auto my-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <h1 class="font-semibold text-xl text-center mx-4 text-gray-700">Web Developer</h1>
                    <p class="font-light text-center text-gray-500 mb-4 lg:mb-0">Web Technology Pvt Ltd</p>
                    {{-- Location --}}
                    <p class="font-light text-center text-gray-500 mb-2 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        Dodge City, Louisiana
                    </p>
                    {{-- Salary --}}
                    <p class="font-light text-center text-gray-500 mb-3 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        1000-1200/m
                    </p>
                    {{-- Tags --}}
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

    {{-- Subscribe --}}
    <section class="flex flex-col justify-around items-center py-20 bg-gray-600 md:flex-row">
        <div class="mb-8 md:mb-0">
            <h1 class="text-2xl text-white font-bold">Get New Jobs Notification!</h1>
            <p class="text-light text-gray-400 mt-1">Subscribe & get all related jobs notification.</p>
        </div>
        <div>
            <form action="#" class="inline-flex mt-0 w-full">
                <input type="email" name="email" placeholder="Enter your email" class="text-white py-2 px-4 rounded-l bg-transparent border border-gray-500 focus:outline-none" required>
                <button type="submit" class="text-white bg-violet-600 py-3 px-4 rounded-r hover:bg-violet-800 transition ease-in-out duration-500">Subscribe</button>
            </form>
        </div>
    </section>
</x-layout>
