@extends('layout.main')
@section('title', 'Laravel App - Daftar Mahasiswa')
@section('container')
    
    <div class="container">
        <div class="row">
            <div class="col-10">
                    <h1 class="mt-3">Daftar Mahasiswa</h1>

                    <table class="table table-hover">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NRP</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa as $mhs)
                                    
                              <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$mhs->nama}}</td>
                                <td>{{$mhs->nrp}}</td>
                                <td>{{$mhs->email}}</td>
                                <td>{{$mhs->jurusan}}</td>
                                <td>
                                    <a href="" class="badge badge-success">Edit </a>
                                    <a href="" class="badge badge-danger">Delete </a>
                                    <a href="" class="badge badge-info">Detail </a>
                                </td>
                              </tr>                              @endforeach
                            </tbody>
                          </table>
            </div>
        </div>
    </div>
    
@endsection