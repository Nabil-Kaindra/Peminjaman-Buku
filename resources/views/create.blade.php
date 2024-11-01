<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjam Buku</title>
</head>
<body>
    <h1>Pinjam Buku</h1>
    <form action="{{ route('buku.store') }}" method="post">
        @csrf

        <label for="nama_peminjam">Nama Peminjam:</label>
        <input type="text" name="nama_peminjam" id="nama_peminjam" required>
        <br> 

        <label for="nama_buku">Nama Buku:</label>
        <input type="text" name="nama_buku" id="nama_buku" required>
        <br> 

        <label for="jumlah_buku">Jumlah Buku:</label>
        <input type="text" name="jumlah_buku" id="jumlah_buku" required>
        <br>

        <label for="tanggal_pinjam">Tanggal Pinjam:</label>
        <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" required>
        <br> 

        <button type="submit">Create</button>
    </form>
</body>
</html>
