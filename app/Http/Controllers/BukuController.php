<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::all();
        return view('index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'nama_peminjam' => 'required|string|max:100',
                'nama_buku' => 'required|string|max:100',
                'jumlah_buku' => 'required|integer|max:2',
                'tanggal_pinjam' => 'required|date',
            ]);
        
            Buku::create([
                'nama_peminjam' => $request->nama_peminjam,
                'nama_buku' => $request->nama_buku,
                'jumlah_buku' => $request->jumlah_buku,
                'tanggal_pinjam' => $request->tanggal_pinjam, 
            ]);
        
            return redirect()->route('buku.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku $buku)
    {
        return view('edit',compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buku $buku)
    {
        $request->validate([
            'nama_peminjam' => 'required|string|max:100',
            'nama_buku' => 'required|string|max:100',
            'jumlah_buku' => 'required|integer|max:2',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'denda' => 'nullable|integer',
        ]);
    
        $buku->update([
            'nama_peminjam' => $request->nama_peminjam,
            'nama_buku' => $request->nama_buku,
            'jumlah_buku' => $request->jumlah_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam, 
            'tanggal_kembali' => $request->tanggal_kembali,
            'denda' => $request->denda,
        ]);
    
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index');
    }
}
