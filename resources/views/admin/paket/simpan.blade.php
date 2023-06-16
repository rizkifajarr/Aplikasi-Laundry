@extends('layouts.dashboard')
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">  
    <!-- Hoverable Table rows -->
              <div class="row">
                <div class="col-8">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Nama Paket</label>
                          <input type="text" class="form-control" id="namaPaket" placeholder="Reguler" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Biaya</label>
                          <input type="text" class="form-control" id="basic-default-company" placeholder="15000" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Waktu (hari)</label>
                          <input type="text" class="form-control" id="basic-default-company" placeholder="3" />
                        </div>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
    <!-- / Content -->
    @endsection