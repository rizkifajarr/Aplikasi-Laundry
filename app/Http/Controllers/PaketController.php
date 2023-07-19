<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Paket;
use App\Models\Sosmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
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
    
    public function landingpage(Paket $paket, Faq $faq, Sosmed $sosmed,Request $request){
        $baseURL = URL::to('/');
        $dataPaket = $paket->get();
        $dataSosmed = $sosmed->get();
        
        if (str_contains($baseURL, '127.0.0.1')) {
            $dataFaq = $faq->get();
        } else {
            $konten = file_get_contents("https://pbkk.kanadakurniawan.com/api/faqs");
            $data = json_decode($konten, true);       
            $dataFaq = $data['data'];
        }      
        return view('index', compact('dataPaket','dataFaq','dataSosmed'));
    }
    
    public function about(Sosmed $sosmed){
        $dataSosmed = $sosmed->get();
        return view('about', compact('dataSosmed'));
    }

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

    public function apiIndex()
    {
        $dataPaket = Paket::all();
        return response()->json(['data' => $dataPaket]);
    }
}
