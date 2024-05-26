{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Contact</title>
</head>
<body>
  <x-navbar></x-navbar>
  <x-header>Contact Page</x-header>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1>Contact Page</h1>
        <ul>
            <li>
                My Email : FrancescoLutfi10@gmail.com
            </li>
        </ul>
        <ul>
            <li>
                My Instagram : sebuah_kapas
            </li>
        </ul>
    </div>
  </main>


</body>
</html> --}}

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">Welcome to Contact Page</h3>

    <h1>Contact Page</h1>
        <ul>
            <li>
                My Email : FrancescoLutfi10@gmail.com
            </li>
        </ul>
        <ul>
            <li>
                My Instagram : sebuah_kapas
            </li>
        </ul>
</x-layout>

