<h2>Ringkasan Pembelian</h2>

<p>Tipe Tiket: {{ $ticket->tipe }}</p>
<p>Jumlah Tiket dibeli: {{ $jumlah }}</p>
<p>Total Harga: Rp. {{ number_format($total, 0, ',', '.') }}</p>

<a href="{{ url('/') }}">
    <button type="button">Exit</button>
</a>
