@extends('layouts.admin')
@section('judul')
Edit FAQ
@endsection
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">   
    <!-- Hoverable Table rows -->
              <div class="row">
                <div class="col-lg-8 col-sm-12 col-md-12">                     
                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <strong>Error!</strong> <br>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
                  <div class="card mb-4">
                    <div class="card-body">
                      <form action="{{ route('faq.update',$faq->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Pertanyaan</label>
                          <input value="{{ $faq->pertanyaan }}" name="pertanyaan" type="text" class="form-control" id="pertanyaan" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Jawaban</label>
                          <textarea name="jawaban" type="text" class="form-control" id="jawaban">{{ $faq->jawaban }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
    <!-- / Content -->
    @endsection