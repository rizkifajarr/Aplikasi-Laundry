@extends('layouts.admin')
@section('judul')
Tambah Pesanan
@endsection
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">    
    <!-- Hoverable Table rows -->
              <div class="row">
                <div class="col-lg-8 col-sm-12 col-md-12">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form action="{{route('pesanan.simpan')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                        <input type="hidden" id="status" name="status" value="sedang dikerjakan">
                        @can('admin-gate')
                        <div class="mb-3">
                          <label for="exampleFormControlSelect1" class="form-label">Pengguna</label>
                          <select class="form-select" id="user_id"  name="user_id" aria-label="Default select example">
                            <option selected="">Pilih salah satu</option>
                            @foreach($dataUser as $index => $user)
                            <option value="{{ $user->id }}">{{ $user->nama }}</option>
                            @endforeach
                          </select>
                        </div>
                        @endcan

                        <div class="mb-3">
                          <label for="exampleFormControlSelect1" class="form-label">Paket</label>
                          <select class="form-select" id="paket_id"  name="paket_id" aria-label="Default select example">
                            <option selected="">Pilih salah satu</option>
                            @foreach($dataPaket as $index => $paket)
                            <option value="{{ $paket->id }}">{{ $paket->nama }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Jumlah</label>
                          <input name="jumlah" type="text" class="form-control" id="basic-default-company" placeholder="3" />
                        </div>
                        {{-- <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Total biaya</label>
                          <div id="biaya">Rp. 0,-</div>
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
    <!-- / Content -->
    @endsection