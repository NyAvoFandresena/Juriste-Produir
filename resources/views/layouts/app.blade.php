<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juriste Produir</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {}

        body {
            box-sizing: border-box;
            margin: 0;
        }
    </style>
</head>

<body>
    @include('inc.header')
    @include('inc.navbar')
    @yield('content')
    @include('inc.footer')
</body>

</html>
