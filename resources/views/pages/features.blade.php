@extends('App')

@section('title', 'Fitur - SimpananKu')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-center">Fitur Unggulan SimpananKu</h1>

    <div class="row g-4">
        <!-- Fitur 1 -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Pencatatan Transaksi Manual</h5>
                    <p class="card-text">Simpan semua transaksi siswa dan guru secara Manual, lengkap dengan tanggal dan keterangan transaksi. Memudahkan pelacakan riwayat tabungan kapan saja.</p>
                </div>
            </div>
        </div>

        <!-- Fitur 2 -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Laporan Tabungan Real-Time</h5>
                    <p class="card-text">Pantau saldo dan aktivitas tabungan melalui laporan real-time yang bisa diakses baik oleh siswa maupun guru secara transparan dan akurat.</p>
                </div>
            </div>
        </div>

        <!-- Fitur 3 -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Akses Khusus untuk Guru & Siswa</h5>
                    <p class="card-text">Guru dapat mengelola dan memverifikasi transaksi, sementara siswa dapat melihat saldo dan riwayat tabungan mereka dengan akun masing-masing.</p>
                </div>
            </div>
        </div>

        <!-- Fitur 4 -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Notifikasi & Pengingat</h5>
                    <p class="card-text">Dapatkan notifikasi untuk setoran, penarikan, dan saldo minimum agar semua pengguna tetap terinformasi dan disiplin dalam menabung.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
