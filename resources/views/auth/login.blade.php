<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Mini Soccer Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('/images/minisoccer.jpg');
            background-size: cover;
            background-position: center;
        }
        .backdrop {
            backdrop-filter: blur(6px);
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">
    <div class="backdrop p-8 rounded-2xl shadow-2xl w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-green-700 mb-6">Login</h2>

        @if (session('error'))
            <div class="bg-red-100 text-red-700 p-3 rounded-md text-sm text-center mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <button type="submit"
                    class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition duration-200">
                Masuk
            </button>
            <p class="text-center text-sm text-gray-600 mt-4">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-green-600 hover:underline">Daftar</a>
            </p>
        </form>
    </div>
</body>
</html>
