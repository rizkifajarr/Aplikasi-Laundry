@extends('layouts.admin')
@section('judul')
Tambah Paket
@endsection
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">   
    <!-- Hoverable Table rows -->
              <div class="row">
                <div class="col-lg-8 col-sm-12 col-md-12">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form action="{{route('paket.simpan')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Nama Paket</label>
                          <input name="nama" type="text" class="form-control" id="namaPaket" placeholder="Reguler" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Biaya</label>
                          <input name="harga" type="text" class="form-control" id="basic-default-company" placeholder="15000" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Waktu (hari)</label>
                          <input name="waktu" type="text" class="form-control" id="basic-default-company" placeholder="3" />
                        </div>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
    <!-- / Content -->
    @endsection