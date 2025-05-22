@extends('App')
@section('title', 'Fitur - SimpananKu')
@section('content')
<div class="container py-5 my-3">
    <h1 class="mb-5 text-center">Fitur Unggulan SimpananKu</h1>
    <div class="row g-4 justify-content-center" id="fitur-container">
        {{-- Card content --}}
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
            icon: "bi-bell-fill"
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
        col.className = 'col-md-4';
        col.innerHTML = `
            <div class="card h-100 shadow-sm border-0">
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
