@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white flex flex-col">
        <div class="p-6 font-bold text-xl border-b border-gray-700">
            Manajemen Lapangan
        </div>
        <nav class="flex-1 mt-4 space-y-1">
            <a href="/admin/dashboard" class="block px-6 py-3 bg-gray-900 rounded hover:bg-gray-700 transition">Dashboard</a>
            <a href="/admin/data-booking" class="block px-6 py-3 hover:bg-gray-700 rounded transition">Data Booking</a>
            <a href="/admin/data-user" class="block px-6 py-3 hover:bg-gray-700 rounded transition">Data Pengguna</a>
            <a href="/admin/laporan" class="block px-6 py-3 hover:bg-gray-700 rounded transition">Laporan</a>
        </nav>
    </aside>

    <!-- Main content -->
    <main class="flex-1 p-10">
        <h1 class="text-3xl font-bold mb-2 text-gray-800">Selamat datang, Admin!</h1>
        <p class="mb-8 text-gray-600">Anda telah berhasil masuk ke sistem.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-blue-500 text-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold mb-2">Total Booking</h3>
                <p class="text-4xl font-bold">{{ $totalBooking }}</p>
            </div>
            <div class="bg-green-600 text-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold mb-2">Total User</h3>
                <p class="text-4xl font-bold">{{ $totalUser }}</p>
            </div>
            <div class="bg-yellow-400 text-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold mb-2">Pending</h3>
                <p class="text-4xl font-bold">{{ $bookingPending }}</p>
            </div>
        </div>
    </main>
</div>
@endsection
