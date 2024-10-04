<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <x-header />
    <div id="app">
        @yield('content') <!-- Page-specific content goes here -->
    </div>
    <x-footer/>
    @vite('resources/js/app.js') <!-- Include Alpine.js and other JavaScript -->
</body>

</html>