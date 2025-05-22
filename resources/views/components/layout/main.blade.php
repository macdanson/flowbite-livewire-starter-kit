<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body>
<div class="antialiased bg-gray-50">
    <!-- Navbar -->
    <x-navbar/>

    <!-- Sidebar -->
    <x-sidebar/>

    <main class="p-4 md:ml-64 h-auto pt-20">
        {{ $slot }}
    </main>

</div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
