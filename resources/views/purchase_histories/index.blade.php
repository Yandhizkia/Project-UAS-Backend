@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Riwayat Pembelian</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Tanggal Pembelian</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($histories as $history)
                <tr>
                    <td>{{ $history->product_name }}</td>
                    <td>{{ $history->quantity }}</td>
                    <td>Rp {{ number_format($history->price, 0, ',', '.') }}</td>
                    <td>{{ $history->purchased_at ? $history->purchased_at->format('d-m-Y H:i') : '-' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Tidak ada data pembelian.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
