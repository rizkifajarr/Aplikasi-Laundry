@extends('layouts.admin')
@section('judul')
Edit User
@endsection
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Hoverable Table rows -->
              <div class="row">
                <div class="col-8">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form action="{{route('user.update',$user->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        @can('admin-gate')
                        <div class="mb-3">
                          <label for="exampleFormControlSelect1" class="form-label">Apakah User Ini Admin?</label>
                          <select class="form-select" id="admin"  name="admin" aria-label="Default select example">
                            <option selected="{{ old('admin') ?? $user->admin}}" value="{{ old('admin') ?? $user->admin}}">
                              @if($user->admin == 1)
                              Ya
                              @else
                              Tidak
                              @endif                            
                            </option>
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                          </select>
                        </div>
                        @endcan
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Nama Lengkap</label>
                          <input name="nama" type="text" class="form-control" id="nama" value="{{ old('nama') ?? $user->nama}}"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Alamat</label>
                          <textarea name="alamat" type="text" class="form-control" id="alamat">{{ old('alamat') ?? $user->alamat}}</textarea>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Handphone</label>
                          <input name="hp" type="tel" class="form-control" id="hp" placeholder="3"  value="{{ old('waktu') ?? $user->hp}}"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Email</label>
                          <input name="email" type="email" class="form-control" id="email" value="{{ old('email') ?? $user->email}}" />
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
    <!-- / Content -->
    @endsection