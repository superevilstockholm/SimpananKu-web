@extends('App')
@section('title', 'About - SimpananKu')

@section('content')
<div class="position-relative px-0 py-5 m-0">
    <div class="position-absolute w-100 h-100 p-0 m-0 z-n1 d-md-block d-none">
        <div class="container w-100 h-100 py-0 my-0">
            <div class="w-100 h-100 p-0 m-0 ratio ratio-1x1" style="animation: fade-in 1s ease;">
                <div class="rounded-circle bg-primary w-100 w-md-75 w-lg-80 top-100 start-0" style="filter: blur(100px); transform: translate(-50%, -50%); opacity: 0.7;"></div>
                <div class="rounded-circle bg-primary w-100 w-md-75 w-lg-80 top-0 start-100" style="filter: blur(100px); transform: translate(-50%, -50%); opacity: 0.7;"></div>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto mt-10 px-4">
        <div class="container py-5 my-3 text-center">
            <h1 class="mb-5 fw-bold">Tentang SimpananKu</h1>
            <p class="text-gray-500 mb-5">
                Ketahui lebih banyak tentang tim yang memelihara SimpananKu, bagaimana dan mengapa proyek ini dimulai, dan bagaimana cara terlibat.
            </p>
        </div>
        <section class="text-center mb-5">
            <h2 class="text-2xl font-bold mb-2">Team</h2>
            <p class="text-gray-500 mb-5">
                Simpananku dikelola oleh tim kecil pengembang di SMKN 4. Kami sedang aktif bekerja untuk mengembangkan tim ini dan akan senang melihat serta mendengar dari Anda jika Anda tertarik dalam menabung secara online, keamanan yang terjaga.
            </p>
        </section>
        <section class="text-center mb-5">
            <h2 class="text-2xl font-bold mb-2">History</h2>
            <p class="text-gray-500">
                SimpananKu dibuat oleh seorang desainer dan pengembang dari Departemen RPL SMKN 4, SimpananKu menjadi salah satu sumber untuk menabung online yang dikembangkan oleh siswa/i XI RPL 3.
                <br><br>
                SimpananKu was created in 2025 by @fakhri1104, @bjorki199, @a1fkhriii_, @nskylzhra, @jeksnopcat41_.
            </p>
        </section>
        <div class="text-center mt-8">
            <a href="{{ url('/') }}" class="btn btn-primary px-4">Kembali ke Beranda</a>
        </div>
    </div>
</div>
@endsection
