<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD-LARAVEL-VUEJS</title>

    {{--
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <script type="module" src="{{asset('js/app.js')}}" defer></script> --}}

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- @vite('resources/css/app.css') --}}

</head>

<body>
    <div id="app">

    </div>

    {{-- @vite('resources/js/app.js') --}}
</body>

</html>