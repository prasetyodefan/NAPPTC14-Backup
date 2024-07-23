<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Talenthub</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.js" defer></script>
    <style>
      
        .flex {
            display: flex;
            gap: 0.5rem; 
        }
    </style>
</head>
<body class="flex h-screen bg-gray-100" x-data="{ sidebarOpen: false }">
    <!-- Sidebar overlay for mobile view -->
    <div :class="{'hidden': !sidebarOpen, 'block': sidebarOpen}" class="fixed inset-0 z-20 bg-black opacity-50 transition-opacity lg:hidden"></div>

    @include('partials.admin.sidebar')

    <div class="flex-1 flex flex-col">
        @include('partials.admin.header')
        <main class="flex-1 p-6">
            @yield('content')
        </main>
        @include('partials.admin.footer')
    </div>

</body>
</html>
