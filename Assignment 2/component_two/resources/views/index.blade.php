<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h1, h2, #container {
            max-width: 600px;
            min-width: 400px;
            margin: 0 auto 0 auto;
            text-align: center
        }
    </style>
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>

    <h2>Hello World!</h2>
    
    <div id="container">
        @foreach ($posts as $post)
        <h3>Title: {{ $post['title'] }}</h3>
        <p>Body: {{ $post['body'] }}</p>
        @endforeach
    </div>
</body>
</html>