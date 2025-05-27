@extends('App') @section('title', 'About - SimpananKu')
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
    
    <div class="container py-5 my-3">
        <h1 class="mb-5 fw-bold text-center">Tentang SimpananKu</h1>
        <div class="row g-4 justify-content-center" id="fitur-container">
            <p class="lead">
                <strong>SimpananKu</strong> Website SimpananKu memudahkan siswa, orang tua, dan guru dalam mengelola dan memantau tabungan siswa. 
            </p>
            <p>
                            Aplikasi ini dirancang dengan antarmuka yang sederhana namun powerful untuk mendukung kebutuhan pencatatan simpanan harian siswa SMKN4 , pelaporan transaksi, serta pengelolaan data anggota secara terpusat.
                        </p>
            
                        <p>
                            SimpananKu hadir untuk mendukung digitalisasi koperasi agar lebih modern dan terpercaya dalam pelayanan kepada anggotanya.
                        </p>
                        <div class="text-center mt-4">
                            <a href="{{ url('/') }}" class="btn btn-primary px-4">Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
@endsection


