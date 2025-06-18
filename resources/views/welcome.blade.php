<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.bunny.net/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
            padding: 50px 20px;
        }

        h1 {
            font-size: 2.5rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to Laravel!</h1>
        <p>This is the default welcome page.</p>
    </div>
</body>

</html>