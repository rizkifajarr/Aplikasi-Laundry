@extends('layouts.admin')
@section('judul')
Tambah User
@endsection
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Tambah User</h4>    
    <!-- Hoverable Table rows -->
              <div class="row">
                <div class="col-8">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form action="{{route('user.simpan')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleFormControlSelect1" class="form-label">Apakah User Ini Admin?</label>
                          <select class="form-select" id="admin"  name="admin" aria-label="Default select example">
                            <option selected="0">Pilih salah satu</option>
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Nama Lengkap</label>
                          <input name="nama" type="text" class="form-control" id="nama" placeholder="nama lengkap" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Alamat</label>
                          <textarea name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat lengkap"> </textarea>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Handphone</label>
                          <input name="hp" type="tel" class="form-control" id="basic-default-company" placeholder="0812345678910" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Email</label>
                          <input name="email" type="email" class="form-control" id="email" placeholder="email@kamu.com" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Password</label>
                          <input name="password" type="password" class="form-control" id="password"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
    <!-- / Content -->
    @endsection