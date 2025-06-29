<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mini Soccer Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('/images/2.jpg');
            background-size: cover;
            background-position: center;
        }
        .backdrop {
            backdrop-filter: blur(8px);
            background-color: rgba(255, 255, 255, 0.85);
        }
    </style>
</head>
<body class="flex flex-col min-h-screen justify-between">

    <!-- Hero section -->
<div class="relative px-4 py-12">
    <!-- Tombol login di kanan atas -->
    <div class="absolute top-6 right-6">
        <a href="{{ route('login') }}"
           class="inline-block bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
            Login
        </a>
    </div>

    <!-- Info Lapangan -->
    <div class="backdrop mx-auto my-12 max-w-5xl px-6 py-8 rounded-2xl shadow-lg">
        <!-- Teks tambahan -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">
                Welcome to Website <span class="text-green-700">ROYAL HORSE MINISOCCER</span>
            </h2>
            <p class="text-gray-700 text-lg">
                Pesan lapangan mini soccer dengan mudah dan cepat!
            </p>
        </div>

        <h3 class="text-2xl font-bold text-gray-800 mb-8 text-center">Info Lapangan</h3>

        <div class="space-y-8">
            <!-- Contoh 1 -->
            <div class="flex flex-col md:flex-row items-center gap-6">
                <img src="/images/lapang.jpg" alt="Lapangan 1"
                     class="w-full md:w-1/2 h-64 object-cover rounded-xl shadow-md">
                <div class="flex-1 text-center md:text-left">
                    <h4 class="text-2xl font-semibold text-green-700 mb-2">Lapangan 1</h4>
                    <p class="text-gray-700">Lapangan rumput sintetis standar mini soccer dengan penerangan optimal untuk malam hari.</p>
                </div>
            </div>

            <!-- Contoh 2 -->
            <div class="flex flex-col md:flex-row items-center gap-6">
                <img src="/images/1.jpg" alt="Lapangan 2"
                     class="w-full md:w-1/2 h-64 object-cover rounded-xl shadow-md">
                <div class="flex-1 text-center md:text-left">
                    <h4 class="text-2xl font-semibold text-green-700 mb-2">Lapangan 2</h4>
                    <p class="text-gray-700">Lapangan rumput alami dengan suasana sejuk dan dilengkapi lampu sorot untuk permainan malam.</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
