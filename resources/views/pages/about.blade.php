@extends('App') @section('title', 'About - SimpananKu')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="bg-dark p-5 shadow rounded-4">
                <h1 class="mb-4 text-center fw-bold text-primary">Tentang SimpananKu</h1>
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
    </div>
</div>
@endsection


