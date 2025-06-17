<div class="mb-3">
    <label for="nama" class="form-label">Nama Event</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', optional($event)->nama) }}" required>
</div>

<div class="mb-3">
    <label for="lokasi" class="form-label">Lokasi</label>
    <input type="text" name="lokasi" class="form-control" value="{{ old('lokasi', optional($event)->lokasi) }}" required>
</div>

<div class="mb-3">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', optional($event)->tanggal) }}" required>
</div>

<div class="mb-3">
    <label for="harga" class="form-label">Harga</label>
    <input type="number" name="harga" class="form-control" value="{{ old('harga', optional($event)->harga) }}" required>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>