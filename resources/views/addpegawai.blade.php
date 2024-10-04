@extends('tampilan')

@section('konten')
    <div class="content">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h1>Tambah Pegawai</h1>
                </div>
                <div class="card-body">
                    <form>
                        <div class="input-group">
                            <span class="input-group-text">Nama</span>
                            <input type="text" class="form-control" placeholder="Nama Pegawai">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Tanggal Masuk</span>
                            <input type="date" class="form-control">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Jenis Kelamin</span>
                            <select class="form-select">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Alamat</span>
                            <input type="text" class="form-control" placeholder="Alamat">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Kota</span>
                            <input type="text" class="form-control" placeholder="Kota">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">No.Telp</span>
                            <input type="tel" class="form-control" placeholder="Nomor Telepon">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Jabatan</span>
                            <input type="text" class="form-control" placeholder="Jabatan">
                        </div>
                    </form>
                    <a href="#" class="toggle-details">Detail Identitas Pegawai <br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                      <path d="M3.204 5h9.592L8 10.481 3.204 5z"/>
                    </svg></a>
                </div>
            </div>
        </div>
    </div>
@endsection