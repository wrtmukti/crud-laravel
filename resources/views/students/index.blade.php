@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('judul', 'Daftar Mahasiswa')
    
@section('container')
    <div class="container">
        
            <div class="col-5">
                

                <a href="/students/create" class="btn btn-primary my-2" method='post'> tambah data</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group " >

                    @foreach ($students as $student)

                    <li class="list-group-item d-flex justify-content-between align-items-center my-2 " style="border:solid black 1px" >
                        {{ $student -> nama }}
                      <a href="/students/{{ $student -> id }}" class="badge bg-info">detail</a>
                    </li>
                                            
                    @endforeach
                    
                </ul>
               
            </div>
        
    </div>
@endsection