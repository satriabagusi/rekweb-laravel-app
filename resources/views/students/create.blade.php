@extends('layout.main')
@section('title', 'Laravel App - Daftar Mahasiswa')
@section('container')
    
    <div class="container">
        <div class="row">
            <div class="col-7">
                    <h1 class="mt-3 mb-3">Form Tambah Mahasiswa</h1>

                    <form method="post" action="/students">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa">
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" class="form-control" id="nrp" name="nrp" placeholder="NRP Mahasiswa">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email Mahasiswa">
                        </div>
                        <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" id="jurusan" name="jurusan">
                                  <option>Teknik Industri</option>
                                  <option>Teknologi Pangan</option>
                                  <option>Teknik Mesin</option>
                                  <option>Teknik Informatika</option>
                                  <option>Teknik Lingkungan</option>
                                  <option>Teknik Perencanaan & Wilayah Tata Kota</option>
                                </select>
                              </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>

            </div>
        </div>
    </div>
    
@endsection