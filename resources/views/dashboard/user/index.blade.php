@extends('layouts.admin')
@section('judul')
    User
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Hoverable Table rows -->
        <div class="card">
            <h5 class="card-header"><a href="{{ route('user.tambah') }}"><button type="button"
                        class="btn btn-sm btn-primary">Tambah user</button></a></h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover table-bordered">
                        <thead class="text-center table-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Handphone</th>
                                <th>Email</th>
                                <th>Admin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0 text-center">
                            @foreach ($dataUser as $index => $user)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $user->nama }}</strong>
                                    </td>
                                    <td>{{ $user->alamat }}</td>
                                    <td>{{ $user->hp }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->admin == 1)
                                            Ya
                                        @else
                                            Bukan
                                        @endif
                                    </td>
                                    <td>
                                        <div class="input-group d-flex justify-content-center align-items-center">
                                            {{-- <span class="input-group-text border-0"> --}}
                                            <a class="btn btn-sm" href="{{ route('user.ubah', [$user->id]) }}">
                                                <button type="submit"
                                                    class="btn btn-outline-primary d-flex align-items-center">
                                                    <i class="bx bxs-pencil me-1"></i> Edit
                                                </button>
                                            </a>
                                            {{-- </span> --}}
                                            {{-- <span class="input-group-text border-0"> --}}
                                            <form onsubmit="return confirm('Data pengguna akan dihapus?')"
                                                action=" {{ route('user.delete', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-outline-danger d-flex align-items-center">
                                                    <i class="bx bxs-trash me-1"></i> Delete
                                                </button>
                                            </form>
                                            {{-- </span> --}}
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
