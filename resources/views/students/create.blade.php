@extends('layout.main')

@section('title', 'Buat Data Mahasiswa')

@section('judul', 'Buat Data Mahasiswa')

    
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Detail Mahasiswa</h1>

                <form action="/students" method="post">

                  @csrf

                    <div class="mb-3">
                      <label for="nama" class="form-label" >Nama</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value=" {{ old('nama') }}">
                    @error('nama')<div class="invalid-feedback"> {{ $message }}</div>@enderror
                  </div>
                    <div class="mb-3">
                      <label for="nim" class="form-label @error('nim') is-invalid @enderror">NIM</label>
                      <input type="text" class="form-control" id="nim" name="nim" value=" {{ old('nim') }}">
                      @error('nim')<div class="invalid-feedback"> {{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="text" class="form-control" id="email" name="email" value=" {{ old('email') }}">
                    </div>
                    <div class="mb-3">
                      <label for="jurusan" class="form-label">Jurusan</label>
                      <input type="text" class="form-control" id="jurusan" name="jurusan" value=" {{ old('jurusan') }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                  </form>
               
            </div>
        </div>
    </div>
@endsection