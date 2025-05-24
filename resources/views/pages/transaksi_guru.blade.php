@extends('App') {{-- Atau @extends('layouts.app') kalau layout-mu ada di folder layouts --}}

@section('title', 'Data Transaksi')

@section('content')
<div class="d-flex min-vh-100">
    {{-- Sidebar --}}
    <aside class="bg-dark text-white p-3" style="width: 250px;">
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

    {{-- Konten utama --}}
    <main class="flex-grow-1 bg-light p-4">
        <h3 class="fw-bold mb-4">Data Transaksi Tabungan</h3>

        {{-- Tombol aksi tambah dan pencarian --}}
        <div class="mb-3 d-flex justify-content-between">
            <a href="/transaksi/tambah" class="btn btn-primary">
                <i class="bi bi-plus-circle me-1"></i> Tambah Transaksi
            </a>

            <form action="/transaksi/search" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari transaksi...">
                <button type="submit" class="btn btn-outline-secondary">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>

        {{-- Tabel data transaksi --}}
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light text-center">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Siswa</th>
                        <th>Jenis</th>
                        <th>Nominal</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transaksi ?? [] as $no => $trx)
                        <tr>
                            <td class="text-center">{{ $no + 1 }}</td>
                            <td>{{ \Carbon\Carbon::parse($trx->tanggal)->format('d M Y') }}</td>
                            <td>{{ $trx->siswa->nama ?? '-' }}</td>
                            <td class="text-capitalize">{{ $trx->jenis }}</td>
                            <td>Rp {{ number_format($trx->nominal, 0, ',', '.') }}</td>
                            <td>{{ $trx->keterangan }}</td>
                            <td class="text-center">
                                <a href="/transaksi/edit/{{ $trx->id }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="/transaksi/hapus/{{ $trx->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin hapus transaksi ini?')"
                                        type="submit"
                                    >
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">Belum ada transaksi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
</div>
@endsection
