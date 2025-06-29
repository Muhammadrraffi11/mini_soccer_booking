@extends('layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4 text-gray-800">Data Booking</h1>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full table-auto border border-gray-200">
            <thead class="bg-blue-100 text-gray-700">
                <tr>
                    <th class="px-4 py-3 border">No</th>
                    <th class="px-4 py-3 border">Nama User</th>
                    <th class="px-4 py-3 border">Tanggal</th>
                    <th class="px-4 py-3 border">Jam Mulai</th>
                    <th class="px-4 py-3 border">Jam Selesai</th>
                    <th class="px-4 py-3 border">Status</th>
                    <th class="px-4 py-3 border">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse($bookings as $index => $booking)
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 border text-center">{{ $index + 1 }}</td>
                        <td class="px-4 py-2 border">{{ $booking->user->name }}</td>
                        <td class="px-4 py-2 border">{{ $booking->booking_date }}</td>
                        <td class="px-4 py-2 border">{{ $booking->start_time }}</td>
                        <td class="px-4 py-2 border">{{ $booking->end_time }}</td>
                        <td class="px-4 py-2 border">
                            <span class="px-2 py-1 rounded text-sm
                                {{ $booking->status == 'pending' ? 'bg-yellow-100 text-yellow-700' :
                                   ($booking->status == 'approved' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700') }}">
                                {{ ucfirst($booking->status) }}
                            </span>
                        </td>
                        <td class="px-4 py-2 border">
                            @if($booking->status == 'pending')
                                <form method="POST" action="/admin/approve-booking/{{ $booking->id }}">
                                    @csrf
                                    <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded">
                                        Approve
                                    </button>
                                </form>
                            @else
                                <span class="text-gray-500 italic">-</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-gray-500 py-4">Tidak ada data booking.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div><br>
    <div class="mt-6">
        <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Kembali ke Dashboard
        </a>
    </div>
</div>
@endsection
