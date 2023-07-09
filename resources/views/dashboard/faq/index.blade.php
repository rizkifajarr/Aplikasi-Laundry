@extends('layouts.admin')
@section('judul')
    FAQ
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Hoverable Table rows -->
        <div class="card">
            <h5 class="card-header"><a href="{{ route('faq.create') }}"><button type="button"
                        class="btn btn-sm btn-primary">Tambah FAQ</button></a></h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover table-bordered">
                        <thead class="text-center table-primary">
                            <tr>
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Jawaban</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0 text-center">
                            @foreach ($dataFaqs as $index => $faq)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $faq->pertanyaan }}</strong>
                                    </td>
                                    <td>{{ $faq->jawaban }}</td>
                                    <td>
                                        {{-- <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('faq.edit', $faq->id) }}">
                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                </a>
                                                <form onsubmit="return confirm('Data pengguna akan dihapus?')"
                                                    action="{{ route('faq.destroy', $faq->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type=" submit" class="dropdown-item">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div> --}}
                                        <div class="input-group d-flex justify-content-center align-items-center">
                                            <a class="btn btn-sm" href="{{ route('faq.edit', $faq->id) }}">
                                                <button type="submit"
                                                    class="btn btn-outline-primary d-flex align-items-center btn-sm">
                                                    <i class="bx bxs-pencil me-1"></i> Edit
                                                </button>
                                                {{-- <i class="bx bx-edit-alt me-1"></i> Edit --}}
                                            </a>
                                            <form onsubmit="return confirm('Data pengguna akan dihapus?')"
                                                action=" {{ route('faq.destroy', $faq->id) }}" method="POST">
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
