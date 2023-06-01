<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Paket;
use App\Models\Pesanan;
use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Pesanan $pesanan)
    {
        $dataPesanan = $pesanan->get();
        return view('admin.pesanan.index', compact('dataPesanan'));
    }
    
    public function tambah(User $user,Paket $paket)
    {
        $dataUser = $user->get();
        $dataPaket = $paket->get();
        return view('admin.pesanan.tambah', compact('dataPaket','dataUser'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Pesanan $pesanan, StorePesananRequest $pesananRequest)
    {
        $data = $pesananRequest->all();
        $pesanan->create($data);
        return redirect(route('pesanan.index'))->with('success', 'Data pesanan berhasil ditambahkan');
    }

    public function ubah(Pesanan $pesanan,User $user,Paket $paket)
    {
        $dataUser = $user->get();
        $dataPaket = $paket->get();
        return view('admin.pesanan.ubah', compact('pesanan','dataPaket','dataUser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Pesanan $pesanan, UpdatePesananRequest $request)
    {
        $data = $request->all();
        // dd($data);
        $pesanan->update($data);
        return redirect(route('pesanan.index'))->with('success', 'Data pesanan berhasil diubah');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function delete(Pesanan $pesanan)
    {
        $pesanan->delete();
        return back()->with(['success' => 'Data berhasil dihapus']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }

}
