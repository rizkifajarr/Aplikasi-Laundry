<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataFaqs = faq::all();
        return view('dashboard.faq.index', compact('dataFaqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);
  
        Faq::create($request->all());
        return redirect()->route('faq.index')->with('success','FAQ berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('dashboard.faq.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);
  
        $faq->update($request->all());
        return redirect()->route('faq.index')->with('success','FAQ berhasil di edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq.index')->with('success','FAQ berhasil dihapus.');
    }

    public function apiIndex()
    {
        $dataFaqs = faq::all();
        return response()->json($dataFaqs);
    }
}
