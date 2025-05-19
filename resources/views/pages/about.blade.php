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
                    Aplikasi ini dirancang dengan antarmuka yang sederhana namun powerful untuk mendukung kebutuhan pencatatan simpanan harian siswa SMKN4, pelaporan transaksi, serta pengelolaan data anggota secara terpusat.
                </p>

                <h5 class="mt-4 fw-semibold">Fitur Unggulan:</h5>
                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item">✅ Pencatatan simpanan harian, mingguan, dan bulanan</li>
                    <li class="list-group-item">✅ Riwayat transaksi lengkap dan transparan</li>
                    <li class="list-group-item">✅ Dashboard laporan keuangan real-time</li>
                    <li class="list-group-item">✅ Pengelolaan data anggota yang efisien</li>
                    <li class="list-group-item">✅ Keamanan data dengan sistem login dan otorisasi</li>
                </ul>

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


