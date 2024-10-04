<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Laravel</title>
</head>

<body class="bg-gray-100">
    <x-header />

    <!-- <div class="container mx-auto p-4" x-data="{ open: false }">
        <button @click="open = !open" class="bg-blue-500 text-white px-4 py-2 rounded">
            Toggle Message
        </button>
        <div x-show="open" class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700">
            Hello, this is a message powered by Alpine.js and styled with Tailwind CSS!
        </div>
    </div> -->
    @vite('resources/js/app.js')
</body>

</html>