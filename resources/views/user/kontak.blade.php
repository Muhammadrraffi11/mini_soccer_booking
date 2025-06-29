@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('/storage/bg/825aabd2-5130-4d90-a6da-9aac9126e806.png');
        background-size: cover;
        background-position: center;
    }
    .glass {
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.85);
    }
</style>

<div class="flex justify-center items-center min-h-screen px-4">
    <div class="max-w-2xl w-full p-8 rounded-2xl shadow-2xl glass">
        <h1 class="text-3xl font-bold text-green-700 mb-6 text-center">Hubungi Kami</h1>

        <div class="text-lg text-gray-800 space-y-3">
            <p>📍 <strong>Alamat:</strong> Jalan Baru Ancaran, Kuningan, Indonesia 45514</p>
            <p>📞 <strong>Telepon:</strong>+62 812-1000-4218</p>
            <p>📧 <strong>Email:</strong> royalhorse.minisoccer@gmail.com</p>
        </div>

        <hr class="my-6">

        <div class="text-center">
            <p class="text-gray-700 font-semibold mb-2">Temui Kami di Sosial Media:</p>
            <div class="flex justify-center space-x-6 text-2xl">
                <a href="https://www.instagram.com/royalhorse_minisoccer?igsh=MWoxdjdhYnd6bWdueA==" target="_blank" class="hover:text-pink-600">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.tiktok.com/@royalhorse_minisoccer?_t=ZS-8xZhWoinTTM&_r=1" target="_blank" class="hover:text-black">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="https://wa.me/6282112345678" target="_blank" class="hover:text-green-600">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="mailto:royalhorse.minisoccer@gmail.com" class="hover:text-red-600">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('user.dashboard') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                Kembali ke Dashboard
            </a>
        </div>
    </div>
</div>
@endsection
