<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Universitas Bumigora</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: #1f2937;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex-grow: 1;
        }
        .header-link:hover {
            color: #10b981;
        }
        .footer-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
    <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-10">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-start space-x-6 text-sm font-medium">
                <a href="{{ route('home') }}" class="header-link text-gray-700 transition">Home</a>
                <a href="{{ route('about') }}" class="header-link text-gray-700 transition">About</a>
                <a href="{{ route('post') }}" class="header-link text-gray-900 font-semibold transition">2201040005 Sukardi Alamsyah</a>
            </div>
        </nav>
    </header>

    <!-- Konten halaman -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-auto py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
            <p class="order-2 md:order-1 mt-4 md:mt-0">
                © 2025 Company, Inc
            </p>
            <div class="order-1 md:order-2 flex flex-wrap justify-center md:justify-end space-x-4">
                <a href="{{ route('home') }}" class="footer-link">Home</a>
                <a href="{{ route('about') }}" class="footer-link">About</a>
                <a href="{{ route('post') }}" class="footer-link">2201040005 Sukardi Alamsyah</a>
                <span class="text-gray-400">feat</span>
                
            </div>
        </div>
    </footer>

</body>
</html>
