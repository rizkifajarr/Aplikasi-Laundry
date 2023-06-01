@extends('layouts.admin')
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Tambah Pesanan</h4>    
    <!-- Hoverable Table rows -->
              <div class="row">
                <div class="col-8">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form action="{{route('user.simpan')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Nama</label>
                          <input name="nama" type="text" class="form-control" id="nama" placeholder="Reguler" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Alamat</label>
                          <input name="harga" type="text" class="form-control" id="basic-default-company" placeholder="15000" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Handphone</label>
                          <input name="waktu" type="text" class="form-control" id="basic-default-company" placeholder="3" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Email</label>
                          <input name="waktu" type="text" class="form-control" id="basic-default-company" placeholder="3" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Password</label>
                          <input name="password" type="password" class="form-control" id="password" placeholder="3" />
                        </div>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
    <!-- / Content -->
    @endsection