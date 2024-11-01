<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peminjaman</title>
</head>
<body>
    <h1>Edit Peminjaman</h1>
    <form action="{{ route('buku.update',$buku->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="nama_peminjam">Nama Peminjam:</label>
        <input type="text" name="nama_peminjam" id="nama_peminjam" value="{{$buku->nama_peminjam}}" required>
        <br> 

        <label for="nama_buku">Nama Buku:</label>
        <input type="text" name="nama_buku" id="nama_buku" value="{{$buku->nama_buku}}" required>
        <br> 

        <label for="jumlah_buku">Jumlah Buku:</label>
        <input type="text" name="jumlah_buku" id="jumlah_buku" value="{{$buku->jumlah_buku}}" required>
        <br>

        <label for="tanggal_pinjam">Tanggal Pinjam:</label>
        <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" value="{{$buku->tanggal_pinjam}}" required>
        <br> 

        <label for="tanggal_kembali">Tanggal Kembali:</label>
        <input type="date" name="tanggal_kembali" id="tanggal_kembali" value="{{$buku->tanggal_kembali}}" >
        <br> 

        <label for="denda">Jumlah Denda:</label>
        <input type="text" name="denda" id="denda" value="{{$buku->denda}}">
        <br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
