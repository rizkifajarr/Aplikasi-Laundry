@extends('layouts.admin')
@section('judul')
    Sosial Media
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Hoverable Table rows -->
        <div class="card">
            <h5 class="card-header"><a href="{{ route('sosmed.create') }}"><button type="button"
                        class="btn btn-sm btn-primary">Tambah Sosmed</button></a></h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover table-bordered">
                        <thead class="text-center table-primary">
                            <tr>
                                <th>No</th>
                                <th>Jenis</th>
                                <th>ID Sosmed</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0 text-center">
                            @foreach ($dataSosmeds as $index => $sosmed)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $sosmed->jenis }}</strong>
                                    </td>
                                    <td>{{ $sosmed->sosmed_id }}</td>
                                    <td>
                                        {{-- <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('sosmed.edit', $sosmed->id) }}">
                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                </a>
                                                <form onsubmit="return confirm('Data sosmed akan dihapus?')"
                                                    action="{{ route('sosmed.destroy', $sosmed->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type=" submit" class="dropdown-item">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div> --}}
                                        <div class="input-group d-flex justify-content-center align-items-center">
                                            <a class="btn btn-sm" href="{{ route('sosmed.edit', $sosmed->id) }}">
                                                <button type="submit"
                                                    class="btn btn-outline-primary d-flex align-items-center btn-sm">
                                                    <i class="bx bxs-pencil me-1"></i> Edit
                                                </button>
                                                {{-- <i class="bx bx-edit-alt me-1"></i> Edit --}}
                                            </a>
                                            <form onsubmit="return confirm('Data pengguna akan dihapus?')"
                                                action=" {{ route('sosmed.destroy', $sosmed->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-outline-danger d-flex align-items-center btn-sm">
                                                    <i class="bx bxs-trash me-1"></i> Delete
                                                </button>
                                            </form>
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
