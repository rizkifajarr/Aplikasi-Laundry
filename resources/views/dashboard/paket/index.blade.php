@extends('layouts.dashboard')
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Paket Layanan</span> Laundry Kite</h4>
    
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header"><a href="{{ route('paket.tambah')}}"><button type="button" class="btn btn-sm btn-primary">Tambah paket</button></a></h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr> 
                            <th>No</th>
                            <th>Paket</th>
                            <th>Biaya</th>
                            <th>Waktu</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($dataPaket as $index => $paket)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $paket->nama }}</strong></td>
                            <td>Rp.{{ $paket->harga }},-</td>
                            <td>{{ $paket->waktu }} hari</td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a >
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>                        
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Hoverable Table rows -->
        
        <hr class="my-5" />
    </div>
    <!-- / Content -->
    @endsection