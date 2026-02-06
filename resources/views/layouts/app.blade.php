<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KozRoom - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hero-section {
            width: 100%;
            max-width: 100%;
        }
        .content-section {
            max-width: 1400px;
            margin: 0 auto;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-gray-50">
    @include('layouts.header')
    <main class="flex-grow">
        @yield('content')
    </main>
    @include('layouts.footer')
</body>
</html>
