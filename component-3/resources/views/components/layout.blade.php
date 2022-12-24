<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    {{-- @vite('resources/css/app.css') --}}
    <title>JobFinder</title>
</head>
<body>
    <nav class="border-b border-gray-200">
        <div class="flex justify-between items-center py-4 px-16">
            {{-- Logo --}}
            <div>
                <h1 class="text-2xl font-bold text-gray-600">JobsFinder</h1>
            </div>
            {{-- Menu --}}
            <div>
                <img src="./img/icons/menu.svg" alt="menu" class="open w-8 h-8 cursor-pointer md:hidden" id="menu">
            </div>
            {{-- Links --}}
            <div class="hidden md:block">
                <ul class="flex flex-col items-center space-x-9 md:flex-row">
                    <li>
                        <a href="{{ route('index') }}" class="navlinks">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('jobs') }}" class="navlinks">Jobs</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="navlinks">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="navlinks">Register</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="py-4 hidden transition ease-in-out duration-500" id="navlinks">
            <ul class="flex flex-col justify-content items-center space-y-5 md:space-x-10 md:flex-row">
                <li>
                    <a href="#" class="navlinks">Home</a>
                </li>
                <li>
                    <a href="#" class="navlinks">Jobs</a>
                </li>
                <li>
                    <a href="#" class="navlinks">Login</a>
                </li>
                <li>
                    <a href="#" class="navlinks">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- OUTPUT GOES HERE --}}
    {{ $slot }}

    {{-- Footer --}}
    <footer class="flex flex-col justify-evenly py-20 px-14 bg-gray-700 md:flex-row">
        <div class="mb-10 md:m-0">
            <h1 class="text-white text-2xl font-bold self-center">JobsFinder</h1>
            <p class="text-light text-gray-400 mt-1">Find or post a job for yourself and your company.</p>
            <div class="mt-4">
                <p class="text-white">Follow Us on:</p>

            </div>
        </div>
        <div class="mb-10 md:m-0">
            <h1 class="text-white font-semibold mb-3">Company</h1>
            <ul class="ml-3 space-y-3">
                <li>
                    <a href="#" class="links">About Us</a>
                <li>
                <li>
                    <a href="#" class="links">Team</a>
                </li>
                <li>
                    <a href="#" class="links">Pricing</a>
                </li>
            </ul>
        </div>
        <div>
            <h1 class="text-white font-semibold mb-3">Support</h1>
            <ul class="ml-3 space-y-3">
                <li>
                    <a href="#" class="links">FAQs</a>
                <li>
                <li>
                    <a href="#" class="links">Help Center</a>
                </li>
                <li>
                    <a href="#" class="links">Privacy Policy</a>
                </li>
            </ul>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
