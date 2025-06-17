<h1> Tipe Ticket </h1>

@foreach ($tickets as $ticket)
    <h3>{{ $ticket->tipe }}</h3>
    <p>Rp. {{ number_format($ticket->harga, 0, ',', '.') }}</p>
    <p>{{ $ticket->deskripsi }}</p>
@endforeach

<form action="{{ route('tiket.output') }}" method="POST">
    @csrf
    <div style="margin-top:20px; border:1px solid #ccc; padding:10px;">
        <label for="tipe">Tipe Ticket:</label>
        <select name="tipe" id="tipe">
            @foreach ($tickets as $ticket)
                <option value="{{ $ticket->tipe }}">{{ $ticket->tipe }}</option>
            @endforeach
        </select>

        <label for="jumlah">Jumlah Ticket:</label>
        <input type="number" name="jumlah" id="jumlah" min="1" required>

        <button type="submit">Next</button>
    </div>
</form>
