<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h1, #container {
            max-width: 600px;
            min-width: 400px;
            margin: 0 auto 0 auto;
            text-align: center
        }
    </style>
    <title>Post</title>
</head>
<body>
    <div id="container">
        <h1>Title: {{ $post['title'] }}</h1>
        <br>
        <h4>Body: {{ $post['body'] }}</h4>
    </div>
</body>
</html>