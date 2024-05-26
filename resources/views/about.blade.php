{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>About Page</title>
</head>
<body>

    <x-navbar></x-navbar>
    <x-header>About Page</x-header>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <h1>My about Page</h1>
            <h3>Owner: {{ $nama }}</h3>
            <img src="img/hoodie.png" alt="" width="200">
        </div>
    </main>

</body>
</html> --}}

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1>My about Page</h1>
    <h3>Owner: {{ $name }}</h3>
    <img src="img/hoodie.png" alt="" width="200">
</x-layout>
