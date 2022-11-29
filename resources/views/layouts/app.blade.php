<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title> Devstagram - @yield('titulo') </title>
   @vite('resources/css/app.css')
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="bg-gray-100">
   <header class="p-5 border-b bg-white shadow">
    <div class="container mx-auto flex justify-between items-center">
<h1 class="text-4xl font-black">Devstagram</h1>
<nav class="flex gap-2 items-center">
    <a class=" font-bold text-gray-500 text-sm uppercase" href="#">Login</a>
    <a class=" font-bold text-gray-500 text-sm uppercase" href="#">Crear cuenta</a>
</nav>
    </div>
    

   </header>
</body>

</html>