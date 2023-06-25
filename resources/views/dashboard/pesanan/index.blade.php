@extends('layouts.admin')
@section('judul')
    Pesanan
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Hoverable Table rows -->
        <div class="card">
            <h5 class="card-header"><a href="{{ route('pesanan.tambah') }}"><button type="button"
                        class="btn btn-sm btn-primary">Tambah pesanan</button></a></h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover table-bordered">
                        <thead class="text-center table-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Paket</th>
                                <th>Status</th>
                                <th>Jumlah</th>
                                <th>Waktu Pemesanan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0 text-center">
                            @foreach ($dataPesanan as $index => $pesanan)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $pesanan->user->nama }}</strong>
                                    </td>
                                    <td>{{ $pesanan->paket->nama }}</td>
                                    <td>{{ $pesanan->status }}</td>
                                    <td>{{ $pesanan->jumlah }} kg</td>
                                    <td>{{ $pesanan->created_at }}</td>
                                    <td>
                                        {{-- <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button> --}}
                                        <div class="input-group d-flex justify-content-center align-items-center">
                                            <a class="btn btn-sm" href="{{ route('pesanan.ubah', [$pesanan->id]) }}">
                                                <button type="submit"
                                                    class="btn btn-outline-primary d-flex align-items-center">
                                                    <i class="bx bxs-pencil me-1"></i> Edit
                                                </button>
                                                {{-- <i class="bx bx-edit-alt"></i> Edit --}}
                                            </a>
                                            <form onsubmit="return confirm('Data pengguna akan dihapus?')"
                                                action=" {{ route('pesanan.delete', $pesanan->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type=" submit"
                                                    class="btn btn-outline-danger d-flex align-items-center">
                                                    <i class="bx bxs-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                        {{-- </div> --}}
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
