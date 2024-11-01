@extends('layouts.app')

<h1>Peminjaman Buku</h1>
    <a href="{{ route('buku.create') }}">Pinjam Buku</a>
    <table border="2">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Peminjam</th>
                <th>Nama Buku</th>
                <th>Jumlah Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Denda</th>
                <th>Action</th>
            </tr>     
        </thead>
        <tbody>
            @foreach ($buku as $book)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$book->nama_peminjam}}</td>
                <td>{{$book->nama_buku}}</td>
                <td>{{$book->jumlah_buku}}</td>
                <td>{{$book->tanggal_pinjam}}</td>
                <td>{{$book->tanggal_kembali}}</td>
                <td>{{$book->denda}}</td>
                <td>
                    <a href="{{route('buku.edit', $book->id)}}">Edit</a>
                        <form action="{{route('buku.destroy', $book->id)}}" method="post" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                </form>
            </td>
            </tr>     
            @endforeach
        </tbody>
    </table>


