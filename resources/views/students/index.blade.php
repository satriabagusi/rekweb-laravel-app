@extends('layout.main')
@section('title', 'Laravel App - Daftar Mahasiswa')
@section('container')
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                    <h1 class="mt-3">Daftar Mahasiswa</h1>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                            {{session('status')}}
                    </div>
                    @endif

                    <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

                    <ul class="list-group">
                        @foreach ($students as $student)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          {{$student->nama}}
                          <a href="/students/{{$student->id}}" class="badge badge-info">Detail</a>
                        </li>
                        @endforeach
                      </ul>

            </div>
        </div>
    </div>
    
@endsection