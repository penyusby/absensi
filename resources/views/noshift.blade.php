@extends('tampilan')

@section('konten')
<div class="content">
    <div class="container mt-5">
        <h3>JAM KERJA</h3>
        <div class="d-flex justify-content-end mb-3">
          <a href="noshift">
            <button class="btn btn-secondary " type="button">Tanpa Shift</button>
          </a>
          <a href="/">
            <button class="btn btn-outline-secondary" type="button">Shift</button>
        </a>
        </div>
        <div class="card">
            <div class="card-header">
                <!-- Header konten -->
            </div>
            <div class="card-body bg-secondary text-white"> <!-- Menambahkan kelas bg-secondary dan text-white -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</button>
                        <div class="dropdown-menu">
                            <!-- Dropdown menu links -->
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jumat</th>
                            <th>Sabtu</th>
                            <th>Minggu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>JAM MASUK</td>
                            @for ($i = 0; $i < 7; $i++)
                            <td><input type="time" class="form-control" value="08:00"></td>
                            @endfor
                            <td rowspan="2" class="text-center"><button class="btn btn-outline-secondary">...</button></td>
                        </tr>
                        <tr>
                            <td>JAM KELUAR</td>
                            @for ($i = 0; $i < 7; $i++)
                            <td><input type="time" class="form-control" value="21:00"></td>
                            @endfor
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
            </div>  
</div>
@endsection
