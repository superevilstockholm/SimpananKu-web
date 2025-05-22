@extends('App')
@section('title', 'Fitur - SimpananKu')
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
        <h1 class="mb-5 fw-bold text-center">Fitur Unggulan SimpananKu</h1>
        <div class="row g-4 justify-content-center" id="fitur-container">
            {{-- Card content --}}
        </div>
    </div>
</div>
<div class="position-relative py-5 px-0 m-0">
    <div class="container">
        <h1 class="text-center">Lorem ipsum</h1>
    </div>
</div>
<script>
    const content = [
        {
            title: "Pencatatan Transaksi",
            description: "Catat semua pemasukan dan pengeluaran tabungan siswa dengan akurat untuk gambaran keuangan yang jelas.",
            icon: "bi-journal-richtext"
        },
        {
            title: "Saldo & Riwayat",
            description: "Pantau saldo dan riwayat tabungan secara mandiri melalui akun siswa.",
            icon: "bi-wallet2"
        },
        {
            title: "Grafik Tabungan",
            description: "Analisis perkembangan tabungan dengan grafik dan visualisasi yang informatif.",
            icon: "bi-bar-chart"
        },
        {
            title: "Notifikasi & Pengingat",
            description: "Dapatkan notifikasi untuk setiap transaksi dan pengingat saat saldo minim untuk mendukung kebiasaan menabung.",
            icon: "bi-bell"
        },
        {
            title: "Export Data",
            description: "Siswa dapat mengekspor data tabungan mereka dalam format CSV untuk digunakan di luar aplikasi.",
            icon: "bi-filetype-csv"
        }
    ];
    const container = document.getElementById('fitur-container');
    content.forEach(item => {
        const col = document.createElement('div');
        col.className = 'col-lg-4 col-md-6 col-12';
        col.innerHTML = `
            <div class="card h-100 shadow-sm border-0 bg-transparent" style="backdrop-filter: blur(20px); background-color: rgb(255, 255, 255, 0.07) !important;">
                <div class="card-body d-flex flex-column gap-2">
                    <i class="bi ${item.icon} fs-5 text-primary"></i>
                    <h5 class="card-title fw-semibold p-0 m-0">${item.title}</h5>
                    <p class="card-text p-0 m-0" style="font-size: 0.9rem;">${item.description}</p>
                </div>
            </div>
        `;
        container.appendChild(col);
    });
</script>
@endsection
