@extends('layouts.admin')
@section('judul')
    Edit Pesanan
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Hoverable Table rows -->
        <div class="row">
            <div class="col-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('pesanan.update', $pesanan->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Nama</label>
                                <select class="form-select" id="user_id" name="user_id"
                                    aria-label="Default select example">
                                    <option selected="" value="{{ old('user_id') ?? $pesanan->user->id }}">
                                        {{ $pesanan->user->nama }}</option>
                                    @foreach ($dataUser as $index => $user)
                                        <option value="{{ $user->id }}">{{ $user->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Paket</label>
                                <select class="form-select" id="paket_id" name="paket_id"
                                    aria-label="Default select example">
                                    <option value="{{ old('paket_id') ?? $pesanan->paket->id }}">{{ $pesanan->paket->nama }}
                                    </option>
                                    @foreach ($dataPaket as $index => $paket)
                                        <option value="{{ $paket->id }}">{{ $paket->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Jumlah (kg)</label>
                                <input name="jumlah" type="text" class="form-control" id="jumlah"
                                    value="{{ old('jumlah') ?? $pesanan->jumlah }}" />
                            </div>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    @endsection
