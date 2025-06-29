@extends('layouts.app')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Laporan Sistem Booking</h2>


    <!-- Data Pengguna -->
    <div class="mb-8">
        <h3 class="text-xl font-semibold text-gray-700 mb-3">Data Pengguna</h3>
        <table class="min-w-full border border-gray-300 text-sm">
            <thead class="bg-blue-100">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">No HP</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $i => $user)
                <tr class="text-center">
                    <td class="border px-4 py-2">{{ $i + 1 }}</td>
                    <td class="border px-4 py-2">{{ $user->name }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                    <td class="border px-4 py-2">{{ $user->no_hp }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Data Booking -->
    <div>
        <h3 class="text-xl font-semibold text-gray-700 mb-3">Data Booking</h3>
        <table class="min-w-full border border-gray-300 text-sm">
            <thead class="bg-green-100">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama User</th>
                    <th class="border px-4 py-2">Tanggal Booking</th>
                    <th class="border px-4 py-2">Jam Mulai</th>
                    <th class="border px-4 py-2">Jam Selesai</th>
                    <th class="border px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $i => $booking)
                <tr class="text-center">
                    <td class="border px-4 py-2">{{ $i + 1 }}</td>
                    <td class="border px-4 py-2">{{ $booking->user->name ?? '-' }}</td>
                    <td class="border px-4 py-2">{{ $booking->booking_date }}</td>
                    <td class="border px-4 py-2">{{ $booking->start_time }}</td>
                    <td class="border px-4 py-2">{{ $booking->end_time }}</td>
                    <td class="border px-4 py-2">{{ ucfirst($booking->status) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tombol Kembali -->
    <div class="mt-6">
        <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Kembali ke Dashboard
        </a>
    </div>
</div>
@endsection
