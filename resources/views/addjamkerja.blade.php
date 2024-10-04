@extends('tampilan')

@section('konten')
<div class="content">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-dark-gray text-white"> <!-- Menambahkan kelas bg-dark-gray -->
                <h5>Nama Shift Kerja</h5>
                <input type="text" class="form-control" placeholder="Nama Shift Kerja">
            </div>
            <div class="card-body bg-secondary text-white">
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
                            <td><input type="time" class="form-control" value="08:00"></td>
                            <td><input type="time" class="form-control" value="08:00"></td>
                            <td><input type="time" class="form-control" value="08:00"></td>
                            <td><input type="time" class="form-control" value="08:00"></td>
                            <td><input type="time" class="form-control" value="08:00"></td>
                            <td><input type="time" class="form-control" value="08:00"></td>
                            <td><input type="time" class="form-control" value="08:00"></td>
                            <td rowspan="2">
                                <button class="btn btn-warning btn-sm">Update</button><br><br>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>JAM KELUAR</td>
                            <td><input type="time" class="form-control" value="21:00"></td>
                            <td><input type="time" class="form-control" value="21:00"></td>
                            <td><input type="time" class="form-control" value="21:00"></td>
                            <td><input type="time" class="form-control" value="21:00"></td>
                            <td><input type="time" class="form-control" value="21:00"></td>
                            <td><input type="time" class="form-control" value="21:00"></td>
                            <td><input type="time" class="form-control" value="21:00"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-secondary">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
    </div>

@endsection