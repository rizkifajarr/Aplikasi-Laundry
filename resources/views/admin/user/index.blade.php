@extends('layouts.admin')
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Paket Layanan</span> Laundry Kite</h4>
    
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header"><a href="{{ route('user.tambah')}}"><button type="button" class="btn btn-sm btn-primary">Tambah user</button></a></h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr> 
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Handphone</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($dataUser as $index => $user)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->nama }}</strong></td>
                            <td>{{ $user->alamat }}</td>
                            <td>{{ $user->hp }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('user.ubah',[$user->id])}}">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a >
                                        <form onsubmit="return confirm('Data pengguna akan dihapus?')" action=" {{route('user.delete',$user->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type=" submit" class="dropdown-item">
                                                <i class="bx bx-trash me-1"></i> Delete
                                            </button>
                                        </form>
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