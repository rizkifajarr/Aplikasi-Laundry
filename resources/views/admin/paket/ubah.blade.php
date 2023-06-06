@extends('layouts.admin')
@section('judul')
Edit Paket
@endsection
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Paket</h4>    
    <!-- Hoverable Table rows -->
              <div class="row">
                <div class="col-8">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form action="{{route('paket.update',$paket->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Nama Paket</label>
                          <input name="nama" type="text" class="form-control" id="namaPaket" placeholder="Reguler" value="{{ old('nama') ?? $paket->nama}}"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Biaya</label>
                          <input name="harga" type="text" class="form-control" id="basic-default-company" placeholder="15000" value="{{ old('harga') ?? $paket->harga}}"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Waktu (hari)</label>
                          <input name="waktu" type="text" class="form-control" id="basic-default-company" placeholder="3"  value="{{ old('waktu') ?? $paket->waktu}}"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
    <!-- / Content -->
    @endsection