@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('/storage/bg/f8818c17-826c-447d-8362-a2508ba311e4.png');
        background-size: cover;
        background-position: center;
    }
    .glass {
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.85);
    }
</style>

<div class="flex items-center justify-center min-h-screen px-4">
    <div class="w-full max-w-3xl p-8 rounded-2xl shadow-2xl glass mt-4">
        <h1 class="text-3xl font-bold text-green-700 text-center mb-6">
            Promo Spesial di <span class="text-blue-700">Royal Horse Mini Soccer</span>!
        </h1>

        <ul class="list-disc pl-6 text-gray-800 space-y-3 text-lg">
            <li><strong>Diskon 20%</strong> setelah melakukan 5 kali booking</li>
            <li><strong>Happy Hour:</strong> Booking antara jam 13.00 - 16.00 dapat potongan 15%</li>
            <li><strong>Promo Pelajar:</strong> Tunjukkan kartu pelajar dan dapatkan diskon khusus</li>
        </ul>

        <div class="mt-8 text-center">
            <a href="{{ route('user.dashboard') }}"
               class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                Kembali ke Dashboard
            </a>
        </div>
    </div>
</div>
@endsection
