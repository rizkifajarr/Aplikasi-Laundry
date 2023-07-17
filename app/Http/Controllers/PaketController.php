<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Paket;
use App\Models\Sosmed;
use App\Http\Requests\StorePaketRequest;
use App\Http\Requests\UpdatePaketRequest;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Paket $paket)
    {
        $dataPaket = $paket->get();
        return view('dashboard.paket.index', compact('dataPaket'));
    }
    
    public function landingpage(Paket $paket, Faq $faq, Sosmed $sosmed){
        $dataPaket = $paket->get();
        $dataFaq = $faq->get();
        $dataSosmed = $sosmed->get();
        return view('index', compact('dataPaket','dataFaq','dataSosmed'));
    }
    
    public function about(Sosmed $sosmed){
        $dataSosmed = $sosmed->get();
        return view('about', compact('dataSosmed'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Paket $paket, StorePaketRequest $paketRequest)
    {
        $data = $paketRequest->all();
        $paket->create($data);
        return redirect(route('paket.index'))->with('success', 'Data user berhasil ditambahkan');
    }

    public function delete(Paket $paket)
    {
        $paket->delete();
        return back()->with(['success' => 'Data berhasil dihapus']);
    }
    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function ubah(Paket $paket)
    {
        return view('dashboard.paket.ubah', compact('paket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Paket $paket, UpdatePaketRequest $request)
    {
        $data = $request->all();
        // dd($data);
        $paket->update($data);
        return redirect(route('paket.index'))->with('success', 'Data user berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paket $paket)
    {
        //
    }
}
