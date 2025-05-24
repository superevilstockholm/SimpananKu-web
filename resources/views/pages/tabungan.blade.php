@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Data Tabungan</h1>

    @if(auth()->user()->role === 'siswa')
        <h5>Nama: {{ auth()->user()->name }}</h5>
        <h6>NISN: {{ auth()->user()->nisn }}</h6>
        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Masuk</th>
                    <th>Keluar</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                @php $saldo = 0; @endphp
                @foreach($transaksis as $index => $t)
                    @php
                        $saldo += $t->masuk - $t->keluar;
                    @endphp
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $t->tanggal }}</td>
                        <td>{{ $t->keterangan }}</td>
                        <td class="text-success">{{ number_format($t->masuk) }}</td>
                        <td class="text-danger">{{ number_format($t->keluar) }}</td>
                        <td>{{ number_format($saldo) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-3"><strong>Total Saldo: Rp {{ number_format($saldo) }}</strong></div>

    @elseif(auth()->user()->role === 'guru')
        <a href="{{ route('tabungan.create') }}" class="btn btn-primary mb-3">+ Tambah Transaksi</a>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Masuk</th>
                    <th>Keluar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaksis as $index => $t)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $t->user->name }}</td>
                    <td>{{ $t->user->nisn }}</td>
                    <td>{{ $t->tanggal }}</td>
                    <td>{{ $t->keterangan }}</td>
                    <td class="text-success">{{ number_format($t->masuk) }}</td>
                    <td class="text-danger">{{ number_format($t->keluar) }}</td>
                    <td>
                        <a href="{{ route('tabungan.edit', $t->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('tabungan.destroy', $t->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
