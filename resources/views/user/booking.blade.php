@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('/storage/bg/be657ff9-ea66-451c-9082-2566cb042bdc.png');
        background-size: cover;
        background-position: center;
    }
    .glass {
        backdrop-filter: blur(8px);
        background-color: rgba(255, 255, 255, 0.85);
    }
</style>

<div class="flex items-center justify-center min-h-screen px-4">
    <div class="w-full max-w-2xl p-8 rounded-2xl shadow-2xl glass mt-4">
        <h2 class="text-3xl font-bold text-center text-green-700 mb-6">BOOKING SEKARANG</h2>

        {{-- Notifikasi --}}
        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        {{-- Form Booking --}}
        <form action="{{ route('user.book') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="field_id" class="block text-sm font-semibold text-gray-700">Pilih Lapangan</label>
                <select name="field_id" id="field_id" required class="w-full p-2 border rounded-lg shadow-sm focus:ring focus:ring-green-300">
                    @foreach($fields as $field)
                        <option value="{{ $field->id }}">{{ $field->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="booking_date" class="block text-sm font-semibold text-gray-700">Tanggal Booking</label>
                <input type="date" name="booking_date" id="booking_date"
                       class="w-full p-2 border rounded-lg shadow-sm focus:ring focus:ring-green-300" required>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="start_time" class="block text-sm font-semibold text-gray-700">Jam Mulai</label>
                    <input type="time" name="start_time" id="start_time"
                           class="w-full p-2 border rounded-lg shadow-sm focus:ring focus:ring-green-300" required>
                </div>

                <div>
                    <label for="end_time" class="block text-sm font-semibold text-gray-700">Jam Selesai</label>
                    <input type="time" name="end_time" id="end_time"
                           class="w-full p-2 border rounded-lg shadow-sm focus:ring focus:ring-green-300" required>
                </div>
            </div>

            <button type="submit"
                    class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition">
                Booking Sekarang
            </button>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('user.dashboard') }}"
               class="inline-block bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600 transition">
                Kembali ke Dashboard
            </a>
        </div>
    </div>
</div>
@endsection
