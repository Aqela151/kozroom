<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin KozRoom</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-color: #f7f7ff; margin: 0; padding: 0; position: relative; min-height: 100vh;">
    {{-- Sidebar --}}
    @include('admin.layouts.sidebar')
    {{-- Content --}}
    <main class="ml-64" style="background-color: #f7f7ff; min-height: 100vh;">
        @yield('content')
    </main>
</body>
</html>