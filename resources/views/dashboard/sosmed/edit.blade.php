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
                      <form action="{{ route('sosmed.update',$sosmed->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="exampleFormControlSelect1" class="form-label">Jenis Sosial Media</label>
                          <select class="form-select" id="jenis"  name="jenis" aria-label="Default select example">
                            <option selected="" value="{{ $sosmed->jenis }}">{{ $sosmed->jenis }}</option>
                            <option value="Twitter">Twitter</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Instagram">Instagram</option>
                            <option value="LinkedIn">LinkedIn</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">ID Sosial Media</label>
                          <input name="sosmed_id" type="text" class="form-control" id="sosmed_id"  value="{{ $sosmed->sosmed_id }}"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
    <!-- / Content -->
    @endsection