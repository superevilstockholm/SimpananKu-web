@extends('App')
@section('title', 'Dashboard - SimpananKu')

@section('content')
<div class="container-fluid">
    <div class="row min-vh-100">
        <!-- Sidebar -->
        <aside class="col-12 col-md-3 col-lg-2 bg-dark text-white p-3 sidebar shadow-sm">
            <h4 class="mb-4 fw-bold text-primary">SimpananKu</h4>
            <ul class="nav flex-column gap-2">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link text-white @if(request()->is('dashboard')) active fw-bold @endif">
                        <i class="bi bi-house-door-fill me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/tabungan" class="nav-link text-white">
                        <i class="bi bi-wallet-fill me-2"></i> Data Tabungan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/transaksi" class="nav-link text-white">
                        <i class="bi bi-receipt-cutoff me-2"></i> Transaksi
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link text-white">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="col-12 col-md-9 col-lg-10 p-4 bg-light">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold">Dashboard</h3>
                <span class="text-muted">Halo, {{ Auth::user()->name ?? 'Pengguna' }}</span>
            </div>

            <div class="row g-4">
                <!-- Total Tabungan -->
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h6 class="text-muted">Total Tabungan</h6>
                            <h3 class="fw-bold text-primary">Rp {{ number_format($totalTabungan ?? 0, 0, ',', '.') }}</h3>
                        </div>
                    </div>
                </div>

                <!-- Jumlah Transaksi -->
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h6 class="text-muted">Jumlah Transaksi</h6>
                            <h3 class="fw-bold text-primary">{{ $totalTransaksi ?? 0 }}</h3>
                        </div>
                    </div>
                </div>

                <!-- Saldo Terakhir -->
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h6 class="text-muted">Saldo Terakhir</h6>
                            <h3 class="fw-bold text-primary">Rp {{ number_format($saldoTerakhir ?? 0, 0, ',', '.') }}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Riwayat Transaksi -->
            <div class="mt-5">
                <h4 class="mb-3 fw-semibold">Riwayat Transaksi Terbaru</h4>
                @if(isset($riwayatTransaksi) && count($riwayatTransaksi) > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Jenis</th>
                                    <th>Nominal</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($riwayatTransaksi as $trx)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($trx->tanggal)->format('d M Y') }}</td>
                                        <td>{{ ucfirst($trx->jenis) }}</td>
                                        <td>Rp {{ number_format($trx->nominal, 0, ',', '.') }}</td>
                                        <td>{{ $trx->keterangan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-muted">Belum ada transaksi tercatat.</p>
                @endif
            </div>
        </main>
    </div>
</div>
@endsection

