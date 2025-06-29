    @extends('layouts.app')

@section('content')
<div class="flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-white min-h-screen">
        <div class="p-6 font-bold text-xl border-b border-gray-700">
            Menu Pengguna
        </div>
        <nav class="mt-4 space-y-1 text-sm font-medium">
            <a href="/user/dashboard" class="block px-6 py-3 bg-blue-700 text-white rounded">Dashboard</a>
            <a href="/booking" class="block px-6 py-3 hover:bg-gray-700 transition">Booking</a>
            <a href="/promo" class="block px-6 py-3 hover:bg-gray-700 transition">Promo</a>
            <a href="/kontak" class="block px-6 py-3 hover:bg-gray-700 transition">Kontak</a>
        </nav>
    </aside>

    <!-- Main content -->
    <main class="flex-1 p-8 bg-gray-50">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Selamat datang, {{ session('nama') }}</h1>
        <p class="text-gray-600 mb-8">Silakan lakukan booking lapangan.</p>

        <!-- Kartu Statistik -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
            <div class="bg-indigo-500 text-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold mb-1">Booking Anda</h3>
                <p class="text-4xl font-bold">{{ $jumlahBooking }}</p>
            </div>
            <div class="bg-red-500 text-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold mb-1">Booking Pending</h3>
                <p class="text-4xl font-bold">{{ $jumlahPending }}</p>
            </div>
        </div>

        <!-- Riwayat Booking -->
        <div>
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Riwayat Booking Anda</h3>
            <div class="overflow-x-auto bg-white shadow-md rounded-xl">
                <table class="min-w-full text-sm text-left text-gray-700 border border-gray-200">
                    <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                        <tr>
                            <th class="border px-6 py-3">Lapangan</th>
                            <th class="border px-6 py-3">Tanggal</th>
                            <th class="border px-6 py-3">Jam</th>
                            <th class="border px-6 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bookings as $booking)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="border px-6 py-4">{{ $booking->field->name }}</td>
                                <td class="border px-6 py-4">{{ $booking->booking_date }}</td>
                                <td class="border px-6 py-4">{{ $booking->start_time }} - {{ $booking->end_time }}</td>
                                <td class="border px-6 py-4 capitalize">{{ $booking->status }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center px-6 py-6 text-gray-500">Belum ada booking</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div><br>
          <div>
                <h4 class="text-lg font-semibold mb-3">Lokasi Kami</h4>
                <div class="w-full h-52 overflow-hidden rounded-lg shadow">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3885583435263!2d108.51491!3d-6.9634067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1700658f87db%3A0x7142c560724c3e3a!2sRoyal%20Horse%20Mini%20Soccer!5e0!3m2!1sid!2sid!4v1751174659743!5m2!1sid!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
