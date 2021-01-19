@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('judul', 'Detail Mahasiswa')

@section('container')
    <div class="container">
        
            

                <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">Nama= {{ $student -> nama }}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">NIM ={{ $student -> nim }}</h6>
                      <p class="card-text">Email={{ $student -> email }}</p>
                      <p class="card-text">Jurusan={{ $student -> jurusan }}</p>

                      <a href="{{ $student->id }}/edit" class="btn btn-primary">edit</a>

                      <form action="{{ $student->id }}" method="POST" class="d-inline" >
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">hapus</button>
                      </form>
                      <a href="/students" class="card-link">kembali</a>
                    </div>
                </div>
               
            
        
    </div>
@endsection