<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Soccer Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex flex-col">

    {{-- Navbar --}}
    <nav class="bg-green-600 text-white py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center p`x-6">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 rounded-full object-cover">
                <span class="text-xl font-bold">ROYAL HORSE MINISOCCER</span>
            </div>

            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="flex items-center px-4 py-2 rounded hover:bg-green-700 transition">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(session('nama')) }}&background=0D8ABC&color=fff&size=32"
                        alt="avatar" class="rounded-full w-8 h-8 mr-2">
                    <span class="font-medium">{{ session('nama') }}</span>
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div x-show="open" @click.away="open = false" x-transition
                    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50 overflow-hidden">
                    <a href="/logout"
                        class="block px-4 py-3 text-sm text-red-500 hover:bg-gray-100 transition">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-green-600 text-center text-white py-4 mt-auto shadow-inner">
        &copy; {{ date('Y') }} Royal Horse Mini Soccer Booking App. All rights reserved.
    </footer>

</body>
</html>
