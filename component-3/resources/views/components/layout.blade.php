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
    <nav class="flex flex-col py-4 px-32 md:flex-row">
        <div class="font-bold text-2xl">
            JobsFinder
        </div>
        <div class="my-auto ml-auto">
            <ul class="flex space-x-10 md:flex-row text-lg font-semibold">
                <li><a href="#" class="hover:text-blue-700">Home</a></li>
                <li><a href="#" class="hover:text-blue-700">About Us</a></li>
                <li><a href="#" class="hover:text-blue-700">Contact Us</a></li>
                <li><a href="#" class="hover:text-blue-700">Login</a></li>
                <li><a href="#" class="hover:text-blue-700">Signup</a></li>
            </ul>
        </div>
    </nav>

    {{-- OUTPUT GOES HERE --}}
    {{ $slot }}
</body>
</html>
