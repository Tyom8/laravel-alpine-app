<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- @vite('../../css/app.css') Include Tailwind CSS -->
    <link rel="stylesheet" href="../../css/app.css'">
</head>
<body class="bg-gray-100">
    <div id="app">
        @include('components.navbar')
        @yield('content') <!-- Page-specific content goes here -->
    </div>

    @vite('resources/js/app.js') <!-- Include Alpine.js and other JavaScript -->
</body>
</html>
