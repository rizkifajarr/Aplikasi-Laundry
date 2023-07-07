<?php

namespace App\Http\Controllers;

use App\Models\Sosmed;
use App\Http\Requests\StoreSosmedRequest;
use App\Http\Requests\UpdateSosmedRequest;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataSosmeds = sosmed::all();
        return view('dashboard.sosmed.index', compact('dataSosmeds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.sosmed.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSosmedRequest $request)
    {
        $request->validate([
            'jenis' => 'required',
            'sosmed_id' => 'required',
        ]);
  
        Sosmed::create($request->all());
        return redirect()->route('sosmed.index')->with('success','Sosmed berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sosmed $sosmed)
    {
        return view('dashboard.sosmed.edit',compact('sosmed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSosmedRequest $request, Sosmed $sosmed)
    {
        $request->validate([
            'jenis' => 'required',
            'sosmed_id' => 'required',
        ]);
  
        $sosmed->update($request->all());
  
        return redirect()->route('sosmed.index')->with('success','Sosmed berhasil di edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sosmed $sosmed)
    {
        $sosmed->delete();
        return redirect()->route('sosmed.index')->with('success','Sosmed berhasil dihapus.');
    }
}
