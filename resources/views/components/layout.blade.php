<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Products</title>
</head>
<body class="bg-blue-500">
    <nav class="flex justify-end space-x-6 py-2 px-10 border-b border-blue-600">
        <a href="{{ route('index') }}" class="text-white bg-transparent border border-blue-800 outline-none py-2 px-5 rounded-md transition ease-in-out duration-500 hover:bg-blue-800">Home</a>    
        <a href="{{ route('create') }}" class="text-white bg-transparent border border-blue-800 outline-none py-2 px-5 rounded-md transition ease-in-out duration-500 hover:bg-blue-800">Create</a>
    </nav>
    {{ $slot }}
</body>
</html>
