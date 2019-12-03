@extends('layout.main')
@section('title', 'Laravel App - Daftar Mahasiswa')
@section('container')
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                    <h1 class="mt-3 mb-3">Daftar Mahasiswa</h1>

                    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$student->nama}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                        <p class="card-text">{{$student->email}}</p>
                        
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                        <a href="/students" class="card-link">Kembali</a>
                    </div>
                    </div>

            </div>
        </div>
    </div>
    
@endsection