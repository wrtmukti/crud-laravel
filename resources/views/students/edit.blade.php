@extends('layout.main')

@section('title', 'edit data Mahasiswa')

@section('judul', 'Edit Data Mahasiswa')

    
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">

                <form action="/students/{{ $student->id }}" method="post">
                    @method('patch')

                  @csrf

                    <div class="mb-3">
                      <label for="nama" class="form-label" >Nama</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value=" {{ $student->nama }}">
                    @error('nama')<div class="invalid-feedback"> {{ $message }}</div>@enderror
                  </div>
                    <div class="mb-3">
                      <label for="nim" class="form-label @error('nim') is-invalid @enderror">NIM</label>
                      <input type="text" class="form-control" id="nim" name="nim" value="{{ $student->nim }}">
                      @error('nim')<div class="invalid-feedback"> {{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="text" class="form-control" id="email" name="email" value=" {{ $student->email }}">
                    </div>
                    <div class="mb-3">
                      <label for="jurusan" class="form-label">Jurusan</label>
                      <input type="text" class="form-control" id="jurusan" name="jurusan" value=" {{ $student->jurusan }} ">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">ubah Data</button>
                  </form>
               
            </div>
        </div>
    </div>
@endsection